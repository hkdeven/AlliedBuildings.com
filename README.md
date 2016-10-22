[<img src="https://github.com/hkdeven/AlliedBuildings.com/blob/master/ASB_Logo_Black_Horizontal%202.png?raw=true" align="right"/>](http://alliedbuildings.com)

# ALLIED BUILDINGS WEBSITE

This repository contains all the front end code for the current [alliedbuildings.com][1] website and the toolset required to build and deploy it.

----------------

# Overview

1.  [Tech Stack](#tech-stack)
1.  [Initial Setup](#initial-setup)
    -  [Child Themes](#always-use-a-child-theme)
    -  [Version Control](#version-control)
1.  [Animations](#animations)
1.  [API Integrations](#api-integrations)
1.  [Style Guidelines](#style-guidelines)
1.  [Contributions](#contributions)
1.  [About Allied](#about-us)

----------------

# TECH STACK

At the moment we are using a WordPress platform and the standard combination of PHP, HTML, CSS, and JavaScript.  Since we are moving from a site built on REACT, REDUX, and WEBPACK, we are eagerly looking at ways to integrate and make use of previous ES6 code blocks. **[Suggestions are welcomed!][2]** :heart_eyes:    

Obviously, switching from a one-page application to WordPress we were concerned about performance.

[<img src="https://raw.githubusercontent.com/hkdeven/Be-Constructive/master/top-btn.jpg" align="right"/>][10]

----------------

# INITIAL SETUP

We won't bore you with exact step-by-step details for setting up a site on WordPress, but if you need to reference something this is a good example.    

:construction: **INSERT LINK TO FULL WALKTHROUGH HERE** :construction:    

### ALWAYS USE A CHILD THEME

Before you start editing your pre-built theme, which is almost always the case with WordPress, [create a child theme][4]. Child themes are important, because they protect your original theme files. Also, when you edit a child theme, you can undo your changes quickly and efficiently. It’s the modular and bulletproof way to edit a WordPress theme.

You can run a copy of alliedbuildings.com's custom theme by simply uploading this repo into your own theme directory on WordPress and enabling it through your WordPress dashboard:    

*Appearance → Editor*    
<img src="https://thethemefoundry.com/wp-content/uploads/2014/02/select-edit-2.gif" align="center"/>

### VERSION CONTROL

:construction: **INSERT LINK TO FULL WALKTHROUGH HERE** :construction:

[<img src="https://raw.githubusercontent.com/hkdeven/Be-Constructive/master/top-btn.jpg" align="right"/>][10]

----------------

# ANIMATIONS

Outside of the standard JQuery library, we're using [GSAP][3] to create bespoke animations for the site. For animation sequences (like the down chevron or the close `x`) we're using SVG sequences. Unfortunately right now it's not possible to manipulate external SVGs, so these need to be inlined.

Future development will include some spiffy-looking callout animations.

[<img src="https://raw.githubusercontent.com/hkdeven/Be-Constructive/master/top-btn.jpg" align="right"/>][10]

----------------

# API INTEGRATIONS

At Allied, we love **APIs**.  Here is a sampling of some of our favorites.

|[Zoho CRM](#zoho-crm)|[Google Maps & Fusion Tables](#google-maps-and-fusion-tables)|[Calendly](#calendly-api)|
|---------------|------------|------------------------------|---------------|-----------|

### ZOHO CRM

Zoho CRM Docs:  [here][5]

:construction: **MORE COMING SOON** :construction:

###GOOGLE MAPS AND FUSION Tables

Google Maps Docs:  [here][6]    
Fusion Table Docs:  [here][7]

:construction: **MORE COMING SOON** :construction:

### CALENDLY API

Calendly Docs:  [here][8]

:construction: **MORE COMING SOON** :construction:

[<img src="https://raw.githubusercontent.com/hkdeven/Be-Constructive/master/top-btn.jpg" align="right"/>][10]

----------------

# STYLE GUIDELINES

:construction: **MORE COMING SOON** :construction:

[<img src="https://raw.githubusercontent.com/hkdeven/Be-Constructive/master/top-btn.jpg" align="right"/>][10]

----------------

# CONTRIBUTIONS

To read up on our coding style and general contribution guide, have a look at [CONTRIBUTING.md][2].

## LICENSE    

[Alliedbuildings.com][1] website front end and tools Copyright :copyright: 2016 Allied Steel Buildings.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the [GNU General Public License][9] for more details.

[<img src="https://raw.githubusercontent.com/hkdeven/Be-Constructive/master/top-btn.jpg" align="right"/>][10]

----------------

# ABOUT US

[<img src="https://github.com/hkdeven/AlliedBuildings.com/blob/master/ASB_Logo_Black_Horizontal%202.png?raw=true" align="right"/>][1]

[Allied][1] is a global leader in steel construction, developing solutions for every industry. From aviation to warehouses and everything in between, trust [Allied][1] to be with you all the way. The names and logos for Allied are trademarks of [Allied Steel Buildings, Inc.][1]     

We love open source. :octocat: :heart:

[1]: http://alliedbuildings.com/
[2]: ./CONTRIBUTING.md
[3]: https://github.com/greensock/GreenSock-JS
[4]: https://thethemefoundry.com/blog/wordpress-child-theme/
[5]: https://www.zoho.com/crm/help/api/
[6]: https://developers.google.com/maps/
[7]: https://developers.google.com/fusiontables/
[8]: http://developer.calendly.com/
[9]: ./LICENSE.md
[10]: https://github.com/hkdeven/AlliedBuildings.com/blob/master/README.md
