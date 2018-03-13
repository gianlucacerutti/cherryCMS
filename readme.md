# cherryCMS
cherryCMS is the **simplest CMS without database** in the world.<br>
Made for **freshly devs**.

![cherryCMS logo](http://www.laboratoriociliegia.it/github/cherryCMS-logo.png)<br>

## Get started
We'll add new features every month, this is only the **first release** (v0.1).<br>
Stay tuned!

**NPM**<br>
```
npm install cherryCMS
```

In the main directory you can find 2 PHP files and 6 folders:

- content.php
- index.php
- base (folder)
- fragments (folder)
- icons (folder)
- js (folder)
- pages (folder)
- translations (folder)

Let's start with **index.php** file

## Things to know
[ M ] == Files you have to modify<br>
[ C ] == Files you can improve, core of cherryCMS

## Index
The [ M ] index.php file is strongly commented.<br>
Before the < head > tag cherryCMS loads all the core compontents:

- general configurations files (config.php and functions.php)
- website content in array format
- URL manager
- translations
- social accounts

The content of the index.php file change dynamically based on the source URL.

## Content
[ M ] content.php is a PHP Multidimensional Array that allows you to set all the basic information of the pages:

- URL
- title (only for your reference)
- meta title
- meta description
- canonical URL
- content

## Base
Here we can find the core of cherryCMS:

- [ C ] alternate-languages.php <br>
Set **link rel="alternate"** if you'll build a multi language website.

- [ M ] config.php<br>
The first file you have to modify.<br>
Set the **locahost path** of your project and the **online URL**.

- [ C ] functions.php <br>
This file contain two essential functions that allows you to **find the right page and language to load** directly from URL.

- [ M ] social-accounts.php<br>
Here you can set your **Social Network** infos.<br>
The website name for Facebook Open Graph and your Twitter website account.

- [ C ] url-manager.php <br>
**URL manager** of cherryCMS.

## Fragments
In this folder you have your navbar and your footer, globally setted.

## Icons
All the favicons (and files for manage favicons) you need:

- standard favicons
- website.manifest for Android webapp
- Safari pinned tab icon
- shortcut icon
- Apple touch icon
- browserconfig.xml for Microsoft Windows tiles

## Js
[ C ] mobile-nav.js<br>
**the only Javascript file** you can find in cherryCMS.

## Pages
You have to put the code of your pages here.<br>
The **text content** of your page **is managed with PHP variable**.<br>
This is the simplest solution if you have to create a website with the **same content translated in different languages**.

## Translations
Thanks to PHP Associative Arrays you can **easely translate in an unlimited number of languages** your website, without any pain ;)<br>
The translation files needs to be named

```
translation-*lang code in ISO 639-1*.php
```

because cherryCMS load the right translation file in the page with $current_lang variable setted by url-manager.php.

## Do you need something more?
[Hidden App](https://github.com/ceruttigianluca/hidden-app) - Hidden App, show and hide macOS hidden files in just one click<br>
[Space App](https://github.com/ceruttigianluca/space-app) - Space App, add spaces to your Mac's Dock in just one click<br>
[Rocket App](https://github.com/ceruttigianluca/rocket-app) - Rocket App, reset your Mac's Launchpad in just one click<br>
[Spot App](https://github.com/ceruttigianluca/spot-app) - Spot App, reset, fix and re-index your Mac's Spotlight in just one click<br>

## Buy me a coffee
[Paypal.me](https://www.paypal.me/gianlucacherry/2gbp) - Thank you! :raised_hands:

