# ALLIED BUILDINGS WEBSITE

[<img src="https://github.com/maddevelopmentco/website.alliedbuildings.com/blob/master/public/img/ASB_Logo_Black_Horizontal.png?raw=true" align="right"/>](http://alliedbuildings.com)

# Overview

    1.  [Tech Stack](##tech-stack)
    1.  [Initial Setup](##initial-setup)
        1.  [Child Themes](###always-use-a-child-theme)
        1.  [Version Control](###version-control)
    1.  [Animations](##animations)
    1.  API Integrations :construction:
        1.  Zoho CRM - *coming soon*
        1.  Google Maps & Fusion Tables - *coming soon*
        1.  Calendly - *coming soon*
    1.  Style Guidelines :construction:
        1.  *coming soon*
    1.  [Contributions](##contributions)
    1.  [About Allied](##about-allied)

---


This repository contains all the front end code for the current [alliedbuildings.com][allied] website and the toolset required to build and deploy it.

##TECH STACK

At the moment we are using a WordPress platform and the standard combination of PHP, HTML, CSS, and JavaScript.  Since we are moving from a site built on REACT, REDUX, and WEBPACK, we are eagerly looking at ways to integrate and make use of previous ES6 code blocks. **[Suggestions are welcomed!][2]** :heart_eyes:    

##INITIAL SETUP

We won't bore you with exact step-by-step details for setting up a site on WordPress, but if you need to reference something this is a good example.
:construction: **INSERT LINK TO FULL WALKTHROUGH HERE** :construction:

###ALWAYS USE A CHILD THEME

Before you start editing your pre-built theme, which is almost always the case with WordPress, [create a child theme][4]. Child themes are important, because they protect your original theme files. Also, when you edit a child theme, you can undo your changes quickly and efficiently. It’s the modular and bulletproof way to edit a WordPress theme.

You can run a copy of alliedbuildings.com's custom theme by simply uploading this repo into your own theme directory on WordPress and enabling it through your WordPress dashboard:    
*Appearance → Editor*    
[<img src="https://thethemefoundry.com/wp-content/uploads/2014/02/select-edit-2.gif" align="center"/>]

### VERSION CONTROL

:construction: **INSERT LINK TO FULL WALKTHROUGH HERE** :construction:

## ANIMATIONS

Outside of the standard JQuery library, we're using [GSAP][3] to create bespoke animations for the site. For animation sequences (like the down chevron or the close `x`) we're using SVG sequences. Unfortunately right now it's not possible to manipulate external SVGs, so these need to be inlined.

Future development will include some spiffy-looking callout animations.

##CONTRIBUTIONS

To read up on our coding style and general contribution guide, have a look at [CONTRIBUTING.md][2].

##LICENSE    

[Alliedbuildings.com][allied] website front end and tools Copyright (C) 2016 Allied Steel Buildings.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.


##About Allied
----------------

[<img src="https://github.com/maddevelopmentco/website.alliedbuildings.com/blob/master/public/img/ASB_Logo_Black_Horizontal.png?raw=true" align="left"/>](http://alliedbuildings.com)

[Allied][1] is a global leader in steel construction, developing solutions for every industry. From aviation to warehouses and everything in between, trust [Allied][1] to be with you all the way.    

The names and logos for Allied are trademarks of [Allied Steel Buildings, Inc.][1]  We love open source software. :octocat:

[1]: http://alliedbuildings.com/
[2]: ./CONTRIBUTING.md
[3]: https://github.com/greensock/GreenSock-JS
[4]: https://thethemefoundry.com/blog/wordpress-child-theme/
[5]:
[6]:
