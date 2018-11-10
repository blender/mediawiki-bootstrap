<?php
/*
 * Copyright (c) 2015 Marcin Cieślak (saper.info)
 * Copyright (c) 2018 Inês Almeida, Francesco Siddi
 *
 * DeToc is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * DeToc is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with DeToc.  If not, see <http://www.gnu.org/licenses/>.
 */

class DeToc {
	public static function ExtractToc($body, &$extracted_toc) {

		$extracted_toc = '';
		$new_body = '';
		$toc_end_ptr = 0;

		while ( preg_match( '/<div id="toc".*?>(.*)/s',
				$body, $toc_matches,
				PREG_OFFSET_CAPTURE, $toc_end_ptr ) === 1 ) {

			$toc_start_prt = $toc_matches[0][1];

			$rest = $toc_matches[1][0];
			$rest_ptr = $toc_matches[1][1];

			$divlevel = 1;
			$toc_end_ptr = $rest_ptr;
			while ( $divlevel > 0 && strlen($rest) > 0) {
				/* Try to match both opening and closing divs
				to keep track of the div level. */
				if ( preg_match(',<(/?)div.*?>(.*),s',
					 $rest, $div_matches,
					 PREG_OFFSET_CAPTURE ) === 1 ) {

					/* div_matches
					[0] the full match, from the first found <div> to the end of $body
					[1] the '/' from </div, if there is one
					[2] the text after </div>, corresponding to (.*)
					 */

					$rest = $div_matches[2][0];
					$rest_ptr = $div_matches[2][1];

					if ( $div_matches[1][0] === '/' ) {
						$divlevel -= 1;
					} else {
						$divlevel += 1;
					}
					$toc_end_ptr += $rest_ptr;
				}
			}

			$extracted_toc .= substr( $body, $toc_start_prt, ($toc_end_ptr - $toc_start_prt));
			$new_body .= substr( $body, 0, $toc_start_prt );
		}

		/* In a case where there is no TOC, this will be the full body,
		otherwise, it appends what was right after the TOC. */
		$new_body .= substr( $body, $toc_end_ptr );

		return $new_body;
	}
}
