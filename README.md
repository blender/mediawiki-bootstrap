# MediaWiki Bootstrap 4 Skin

This theme was originally developed for [wiki.blender.org](https://wiki.blender.org). 

## Development setup

* Get MediaWiki up and running with `docker-compose up`
* Visit http://localhost:8080/ and configure mediawiki using sqlite as database
* Download `LocalSettings.php` and place it next to `stack.yml`
* Add `wfLoadSkin( 'Bootstrap' );` to `LocalSettigs.php`

## Get involved!

We are looking for volunteers to:

* Improve the development setup steps
* Add anchors to tiles in the skin
* Add [clipboard.js](https://clipboardjs.com/) to the skin
* Improve the overall structure of the skin and optimize the assets

Feel free to share a patch or create a Pull Request!
