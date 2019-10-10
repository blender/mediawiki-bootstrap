# MediaWiki Bootstrap 4 Skin

This theme was originally developed for [wiki.blender.org](https://wiki.blender.org). 

## Development setup

* Get MediaWiki up and running (for example using [Docker](https://hub.docker.com/_/mediawiki))
* Mount the following files/dirs
	* `<your_host_path>/LocalSettings.php:/var/www/html/LocalSettings.php` 
	* `<your_host_path>/Bootstrap:/var/www/html/skins/Bootstrap`
* Checkout the repo in `<your_host_path>/Bootstrap`
* Add `wfLoadSkin( 'Bootstrap' );` to `LocalSettigs.php`

## Get involved!

We are looking for volunteers to:

* Improve the development setup steps
* Add anchors to tiles in the skin
* Add [clipboard.js](https://clipboardjs.com/) to the skin
* Improve the overall structure of the skin and optimize the assets

Feel free to share a patch or create a Pull Request!
