[![Atom v1.0](http://img.shields.io/badge/Atom-v1.0-blue.svg)](https://cdn.mindfreakers.net/?atom=1.0)
[![FreakCDN v2.0](http://img.shields.io/badge/FreakCDN-v2.0-blue.svg)](https://cdn.mindfreakers.net/?v=2.0)   
[![Build Status](https://travis-ci.org/MindFreakers/cdn.svg?branch=master)](https://travis-ci.org/MindFreakers/cdn)
[![Local Build](https://developers.mindfreakers.net/tools/build/?test=dependencies&branch=cdn)](https://developers.mindfreakers.net/tools/build/?test=dependencies&branch=cdn)   
[![license](http://img.shields.io/badge/license-MIT-brightgreen.svg)](https://github.com/MindFreakers/cdn/blob/master/MIT-LICENSE)   
[![Dependency Status](https://david-dm.org/MindFreakers/cdn.svg?theme=shields.io)](https://david-dm.org/MindFreakers/cdn) 
[![devDependency Status](https://david-dm.org/MindFreakers/cdn/dev-status.svg?theme=shields.io)](https://david-dm.org/MindFreakers/cdn#info=devDependencies)   
[![Gitter chat](https://badges.gitter.im/MindFreakers/cdn.svg)](https://gitter.im/MindFreakers/cdn)

# FreakCDN Library Repository

[FreakCDN](http://github.com/MindFreakers/cdn) is the repository mirroring all library assets on [cdn.mindfreakers.net](http://cdn.mindfreakers.net), a powerful content delivery network powered by FreakServ Cloud Technlogy & maintained by [MindFreakers Networking](https://symlink.in/mfn). [Sagar Gulati](https://symlink.in/sagar) and [Venkateswaran Selvan](https://twitter.com/MailMeVenkat25) are the developers of FreakCDN.

# Libraries

We will host any production version of any library, subject to licence permissions.
 
 * Beta, release candidate and alpha releases are not usually considered ready for full production status. Requests for pre-release versions of libraries _may_ be declined after peer review.

## Adding a new or updating an existing library

FreakCDN relies on user-submitted requests at `sagar (at) mindfreakers (dot) net ` and automatic updating via `npm` to populate and update libraries.

To add a new library, or update an existing library outside of `npm`, start by [forking the FreakCDN repo](https://github.com/MindFreakers/cdn/fork) to your own GitHub account and perform a submit request at [cdn.mindfreakers.net](https://cdn.mindfreakers.net/request/new)

To add/modify our libraries, we use nodejs. Please install `node` locally to use our cdn. For more information on installing `node`, please refer to [nodejs.org](http://nodejs.org).

Libraries are stored in the `ajax/libs` directory. Each library has its own subdirectory of `ajax/libs` and each version of the library has its own subdirectory of the library directory name, for example:

```
/ajax/libs/jquery/1.11.3/
```

## Google fonts and custom font libraries

FreakCDN delivers Google Fonts library at a uplink of  `10 GBPS (Gigabytes per second)` of speed. The fonts are hosted on google dedicated servers & are minified for public use at a much higher network speed. 

FreakCDN also allows users to host there own library of fonts which will be delivered from [GitHub](https://github.com) network and [MindFreakers](https://symlink.in/mfn) network acting as a backbone server for each other with a speed of `10 Gbps (Gigabytes per second)`.

Fonts are stored in the `fonts/libraries` directory. Each font has its own subdirectory of `fonts/libraries`, for example:

```
/media/fonts/libraries/Becker Medium/
```

_Note_: Note that you need to provide us with all the below font types:
* `.ttf ('truetype')`,
* `.eot ('embedded-opentype')`,
* `.woff ('woff')`,
* `.svg ('svg')`.

## Conventions

You should consider the following when adding to or updating the library:

* Filenames should _not_ include a version number and be _lowercase_.
  * This is OK: `library.min.js`, but this is not: `library-2.0.1.min.js`.

* JavaScript & CSS files should be minified to reduce network and browser overhead.
  * If the library doesn't already provide a minified version, FreakCDN's preferred JavaScript minifier is [UglifyJS](http://marijnhaverbeke.nl/uglifyjs "UglifyJS")

* If you are updating a library, please try to maintain consistency with the existing file and directory structure.
  * There will be occasions, particularly with major version increments, where this is not practical.

## Requesting a new library

You should consider the following when _requesting a new library_:

* Official name of the _library_.
  * Library name: `My Library`.
* Official website of the _library_.
  * Library website: `www.library.com`.
* Current stable (or beta/release) version of the _library_.
  * Library version: `1.0.0` (stable library)
  * Library version: `1.0.b` (beta library).
  * Library version: `1.0.r` (release library).
  * Library version: `1.0.a` (alpha library).
* Type of the _library_.
  * Library type: `text/javascript`.
  * Library type: `text/css`.
  * Library type: `media/fonts`.
  * Library type: `media/images`.
  * Library type: `media/documents`.

## Synchronize your content

FreakCDN allows users to synchronize their website content with FreakCDN. This means, users can host their data on FreakCDN which herein, can be available for public use also.

The content(s) of the website(s) are hosted on [GitHub](https://github.com) network as well as [MindFreakers](https://symlink.in/mfn) servers for the user(s) to deliver it to their website.

The content(s) of the website(s) are stored in the `sites` directory. Each site has its own subdirectory of `assets` and each content of the sites has its own subdirectory of the website directory name, for example:

```
/sites/www.mindfreakers.net/   
/sites/www.mindfreakers.net/assets/images/   
/sites/www.mindfreakers.net/assets/scripts/   
/sites/www.mindfreakers.net/assets/css/
```

## Quick Glance at Features 

* Blazing Speed upto 10GBPS dedicated network.
* Powered by FreakServ Cloud Technology
* Supports http:// & https:// with Secure Cast Technology.
* Google Fonts and Custom Fonts Library.
* Support for Images, CSS, Media and much more.
* Predefined libraries including jQuery, modernizr, swfobject and more.
* aSync data system protocol based on nodejs.


### To know more, visit: [cdn.mindfreakers.net](https://cdn.mindfreakers.net/?utm_source=githome&ref=git&utm_camp=click)
