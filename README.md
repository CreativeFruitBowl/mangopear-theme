# Hildon: Core WordPress theme (2015 onwards)

Version: 1.0.0

## Author:

Andi North ([@mangopearuk](https://twitter.com/MangopearUK) / [mangopear.co.uk](https://mangopear.co.uk)) on hehalf of Hildon Limited.

## Summary

This is the Hildon website (http://hildon.com) source code. It's an exact copy of the Hildon website (excluding the MySQL database) and this repo is intended as a backup of the core website and to track updates and upgrades as necessary.

This repo should always be using the latest (stable) version of WordPress. It also uses MangUI - the design-less framework from mangopear creative.

## Usage

The interesting parts of this website are the theme and the bespoke plugin for additional functionality.

### Theme

The theme uses Gulp to compile SCSS (with source maps), run it through [AutoPrefixr](https://github.com/ai/autoprefixer), lint, concatenate and minify JavaScript (with source maps), optimise images and [LiveReload](http://livereload.com/) the browser (with an extension), with flexibility to add any additional tasks via the Gulpfile.

Alternatively, you could use Codekit or PrePros to compile the SCSS and JavaScript (without source maps).

## Credits

Without these projects, this WordPress Starter Theme wouldn't be where it is today.

* [Normalize.css](http://necolas.github.com/normalize.css)
* [SASS / SCSS](http://sass-lang.com/)
* [AutoPrefixr](https://github.com/ai/autoprefixer)