# Sheridan College Responsive Design Template

These files were designed to aid in the development of new pages for the Sheridan College website


## HTML/PHP

Files are designed to work off of a single index.php files where additional pages are created and then included with a PHP include automagically.


### Structure

#### index.php

This file contains the header, footer, content elements and all HTTP requests to main stylesheets currently live on [SheridanCollege.ca](http://sheridancollege.ca) as if in a real production environment.


#### site.php

This is your main site file. You can change this filename to reflect the project name but be sure to make the change in the `index.php` file as well.


## CSS

All new Sheridan websites are built using the LESS CSS preprocessor and the [Semantic.gs](http://semantic.gs) grid system for efficient site development.

Import `grid.less` in the new site's CSS to use:

`@import 'grid.less';`


### Responsive Design

New Sheridan webpages are built for the future. We anticipate a Responsive Design within the near future and are designing all new pages for Responsive Design.

	// RESPONSIVE DESIGN
	// If Responsive, use, if not responsive, comment out
	//*----------- START HERE -----------*//
	#content_bg {
		width: 100%;
		max-width: 960px;
	}
	#footer-sher {
		background: #0060ac repeat-x;
		color: #fff;
		width: 100%;
		min-width: 100px;
		text-align: center;
	}
	//*----------- END HERE -----------*//