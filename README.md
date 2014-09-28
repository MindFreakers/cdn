[![Atom v1.0](http://img.shields.io/badge/Atom-v1.0-brightgreen.svg)](https://cdn.mindfreakers.net/?atom=1.0)
[![FreakCDN v2.0](http://img.shields.io/badge/FreakCDN-v2.0-brightgreen.svg)](https://cdn.mindfreakers.net/?v=2.0)   
[![Build Status](https://travis-ci.org/freakserv/cdn.svg?branch=master)](https://travis-ci.org/freakserv/cdn)
[![Local Build](https://tools.mindfreakers.net/build/?test=build&branch=cdn)](https://tools.mindfreakers.net/build/?test=build&branch=cdn)   
[![license](http://img.shields.io/badge/license-MIT-brightgreen.svg)](https://github.com/freakserv/cdn/blob/master/MIT-LICENSE)   
[![Dependency Status](https://david-dm.org/freakserv/cdn.svg?theme=shields.io)](https://david-dm.org/freakserv/cdn) 
[![devDependency Status](https://david-dm.org/freakserv/cdn/dev-status.svg?theme=shields.io)](https://david-dm.org/freakserv/cdn#info=devDependencies)   
[![Gitter chat](https://badges.gitter.im/freakserv/cdn.svg)](https://gitter.im/freakserv/cdn)

# FreakCDN Library Repository

[FreakCDN](http://github.com/freakserv/cdn) is the repository mirroring all library assets on [cdn.mindfreakers.net](http://go.c4u.in/cdn), a powerful content delivery network powered by FreakServ Cloud Technlogy & maintained by [MindFreakers Networking](http://go.c4u.in/mfn). [Sagar Gulati](http://go.c4u.in/sagar) and [Venkateswaran Selvan](https://twitter.com/MailMeVenkat25) are the developers of FreakCDN.

# Libraries

We will host any production version of any library, subject to licence permissions.
 
 * Beta, release candidate and alpha releases are not usually considered ready for full production status. Requests for pre-release versions of libraries _may_ be declined after peer review.

## Adding a new or updating an existing library

FreakCDN relies on user-submitted requests and automatic updating via `npm` to populate and update libraries.

To add a new library, or update an existing library outside of `npm`, start by [forking the FreakCDN repo](https://github.com/freakserv/cdn/fork) to your own GitHub account and perform a submit request at [cdn.mindfreakers.net](https://cdn.mindfreakers.net/request/new)

To add/modify our libraries, we use nodejs. Please install `node` locally to use our cdn. For more information on installing `node`, please refer to [nodejs.org](http://nodejs.org).

Libraries are stored in the `ajax/libs` directory. Each library has its own subdirectory of `ajax/libs` and each version of the library has its own subdirectory of the library directory name, for example:

```
/ajax/libs/jquery/1.11.0/
```

## Google fonts and custom font libraries

FreakCDN delivers google fonts library at a network of more than `1 Gbps (Gigabytes per second)` of speed. The fonts are hosted on google dedicated servers & are minified for public use at a much higher network speed. 

FreakCDN also allows users to host there own library of fonts which will be delivered from [GitHub](https://github.com) network and [MindFreakers](http://go.c4u.in/mfn) network acting as a backbone server for each other with a speed of `10 Gbps (Gigabytes per second)`.

Fonts are stored in the `fonts/libraries` directory. Each font has its own subdirectory of `fonts/libraries`, for example:

```
/fonts/libraries/Becker Medium/
```

_Note_: Note that you need to provide us with:
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

The content(s) of the website(s) are hosted on [GitHub](https://github.com) network as well as [MindFreakers](http://go.c4u.in/mfn) servers for the user(s) to deliver it to their website.

The content(s) of the website(s) are stored in the `assets/sites` directory. Each site has its own subdirectory of `assets/sites` and each content of the sites has its own subdirectory of the website directory name, for example:

```
/assets/sites/www.mindfreakers.net/   
/assets/sites/www.mindfreakers.net/images/   
/assets/sites/www.mindfreakers.net/scripts/   
/assets/sites/www.mindfreakers.net/css/
```

## Random Features 

* Blazing Speed upto 1Gbps.
* Powered by FreakServ Cloud Technology
* Supports http:// & https:// with secure cast technology.
* Google fonts and custom fonts library.
* Support for images, css, media and much more.
* Predefined libraries including jQuery, modernizr, swfobject and more.
* aSync data system protocol based on nodejs.


### To know more, visit: [cdn.mindfreakers.net](https://cdn.mindfreakers.net/?utm_source=githome&ref=git&utm_camp=click)
