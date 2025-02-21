# v2.0.0
## 02/21/2025

1. [](#new)
   * New blueprints for all theme templates
   * New `logo.html.twig` partial template
   * English and Spanish translation added
   * Customization of styles and templates in the theme admin panel
   * Automatic loading of `custom.css` and `custom.js` files if they exist
   * Added new button types and colors
   * Added colored alert boxes
   * Added option to choose the type of title on the page
   * Added options to select the main image of the page and its display.
   * Added option to choose favicon
   * Added Back to top button
   * New options to improve the SEO
   * Support for displaying the date of the posts with the `translate-date` and `twig-extensions` plugins
2. [](#improved)
   * Uploading minified assets to SlideMe library
   * Updated line-height for arrows in slideme library
   * Updated code for load default `favicon`
   * Set to false the default option to display the featured image
   * Restructured the theme styles folders.
   * Updated Fontawesome to version 4.7
   * Option to add custom social media icons in the Team template
   * Removed asset support for Internet Explorer
   * `singlePageNav.js` library replaced by `simple-scrollspy.js`
   * Updated `parials/taxonomylist.html.twig` to support latest updates in that plugin
   * Removed code for Feedburner-based Newsletter

# v1.7.2
## 12/20/2021

1. [](#bugfix)
    * Fixed missing `|raw` filters in `simplesearch_base.html.twig` [#39](https://github.com/getgrav/grav-theme-deliver/issues/39)

# v1.7.1
## 01/15/2021

1. [](#improved)
    * Fixed autoescaping in preparation for Grav 1.7

# v1.7.0
## 03/21/2019

1. [](#new)
    * Set Dependency of Grav 1.5.10+ which has support for new **Deferred Block** Twig extension
    * Implement assets rendering using **Deferred Block** Twig extension 
    
# v1.6.2
## 12/20/2016

1. [](#improved)
    * Add bottom js call in bottom block

# v1.6.1
## 12/10/2016

1. [](#improved)
    * Added background animation when scrolling the menu in sticky mode
1. [](#bugfix)
    * Fixed some mobile alignments for hamburger and search icons in sticky mode

# v1.6.0
## 12/09/2016

1. [](#new)
    * Add an option to have a sticky menu. Also added blueprint configuration to turn in on from the admin. Disabled by default. Uses https://github.com/bigspotteddog/ScrollToFixed
1. [](#improved)
    * Invert order of previous and next button in the blog posts navigation
1. [](#bugfix)
    * Fix forms not working as expected. Drop the form twig overrides as they break the forms, and don't really customise the output

# v1.5.0
## 07/14/2016

1. [](#improved)
    * Remove unneeded streams from Theme YAML
    * Delete unused composer.json
    * Add the `theme_config` twig var
1. [](#bugfix)
    * Fix missing fontawesome-webfont.woff2 file
    * Fix slider buttons on tablet
    * Fix setting the page language in the html tag

# v1.4.0
## 01/06/2016

1. [](#improved)
    * Fontawesome updated to 4.5.0
1. [](#bugfix)
    * Searchbox in search results fix

# v1.3.1
## 12/18/2015

2. [](#bugfix)
    * Added nonce support to form template

# v1.3.0
## 11/18/2015

1. [](#new)
    * SimpleForm replaced with Forms plugin
2. [](#bugfix)
    * Admin plugin bugfixes

# v1.2.0
## 09/18/2015

1. [](#bugfix)
    * Updated outdated blueprints
    * Bugfix for pagination plugin

# v1.1.1
## 09/18/2015

1. [](#improved)
    * compatibility with newest Grav version.
1. [](#bugfix)
    * SimpleForm compatibility bugfixes.

# v1.1.0
## 08/25/2015

1. [](#improved)
    * Added blueprints for Grav Admin plugin
1. [](#bugfix)
    * Taxonomy count fix

# v1.0.4
## 05/09/2015

1. [](#improved)
    * Fix for bottom menu links

# v1.0.3
## 03/01/2015

1. [](#improved)
    * Switched to Grav's built-in `jQuery` assets

# v1.0.2
## 02/19/2015

2. [](#improved)
    * Added SimpleSearch capability
    * Implemented new `param_sep` variable from Grav 0.9.18

# v1.0.1
## 02/10/2015

1. [](#new)
    * ChangeLog started...
