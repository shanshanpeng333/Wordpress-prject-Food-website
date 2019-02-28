<?php
/**
 * Premium Theme Options displayed in admin
 *
 * @package    Hoot
 * @subpackage Creattica
 * @return array Return Hoot Options array to be merged to the original Options array
 */

$hoot_options_premium = array();
$imagepath =  HYBRIDEXTEND_INCURI . 'admin/images/';
$hoot_cta_top = '<a class="button button-primary button-buy-premium" href="https://wphoot.com/themes/creattica/" target="_blank">' . __( 'Click here to know more', 'creattica' ) . '</a>';
$hoot_cta_top = $hoot_cta = '<a class="button button-primary button-buy-premium" href="https://wphoot.com/themes/creattica/" target="_blank">' . __( 'Buy Creattica Premium', 'creattica' ) . '</a>';
$hoot_cta_demo = '<a class="button button-secondary button-view-demo" href="https://demo.wphoot.com/creattica/" target="_blank">' . __( 'View Demo Site', 'creattica' ) . '</a>';
$hoot_cta_url = 'https://wphoot.com/themes/creattica/';
$hoot_cta_demo_url = 'https://demo.wphoot.com/creattica/';

$hoot_intro = array(
	'name' => __('Upgrade to <span>Creattica <strong>Premium</strong></span>', 'creattica'),
	'desc' => __("If you've enjoyed using Creattica, you're going to love <strong>Creattica Premium</strong>.<br>It's a robust upgrade to Creattica that gives you many useful features.", 'creattica'),
	);

$hoot_options_premium[] = array(
	'name' => __('Complete <br />Style <strong>Customization</strong>', 'creattica'),
	'desc' => __('Different looks and styles. Choose from an extensive range of customization features in Creattica Premium to setup your own unique front page. Give youe site the personality it deserves.', 'creattica'),
	// // 'img' => $imagepath . 'premium-style.jpg',
	'style' => 'hero-top',
	);

$hoot_options_premium[] = array(
	'name' => __('Unlimited Colors', 'creattica'),
	'desc' => __('Creattica Premium lets you select unlimited colors for different sections of your site. Select pre-existing backgrounds for site sections like header, footer etc. or upload your own background images/patterns.', 'creattica'),
	'img' => $imagepath . 'premium-colors.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Fonts and Typography Control', 'creattica'),
	'desc' => __('Assign different typography (fonts, text size, font color) to menu, topbar, logo, content headings, sidebar, footer etc.', 'creattica'),
	'img' => $imagepath . 'premium-typography.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Unlimites Sliders, Unlimites Slides', 'creattica'),
	'desc' => __('Creattica Premium allows you to create unlimited sliders with as many slides as you need.<hr>You can use these sliders on your Frontpage, or add them anywhere using shortcodes - like in your Posts, Sidebars or Footer.', 'creattica'),
	'img' => $imagepath . 'premium-sliders.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('600+ Google Fonts', 'creattica'),
	'desc' => __("With the integrated Google Fonts library, you can find the fonts that match your site's personality, and there's over 600 options to choose from.", 'creattica'),
	'img' => $imagepath . 'premium-googlefonts.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Shortcodes with <span>Easy Generator</span>', 'creattica'),
	'desc' => __('Enjoy the flexibility of using shortcodes throughout your site with Creattica premium. These shortcodes were specially designed for this theme and are very well integrated into the code to reduce loading times, thereby maximizing performance!<hr>Use shortcodes to insert buttons, sliders, tabs, toggles, columns, breaks, icons, lists, and a lot more design and layout modules.<hr>The intuitive Shortcode Generator has been built right into the Edit screen, so you dont have to hunt for shortcode syntax.', 'creattica'),
	'img' => $imagepath . 'premium-shortcodes.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Image Carousels', 'creattica'),
	'desc' => __('Add carousels to your post, in your sidebar, on your frontpage or in your footer. A simple drag and drop interface allows you to easily create and manage carousels.', 'creattica'),
	'img' => $imagepath . 'premium-carousels.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __("'Sticky' Logo &amp; 'Goto Top' button (optional)", 'creattica'),
	'desc' => __("The logo sticks to the top of the leftbar (along with the menu) as the user scrolls down your page, making your branding always visible to your user.<hr>You can also activate the 'Goto Top' button which appears on the screen when users scroll down your page, giving them a quick way to go back to the top of the page.", 'creattica'),
	// 'img' => $imagepath . 'premium-header-left.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('One Page <span>Scrolling Website /</span> <span>Landing Page</span>', 'creattica'),
	'desc' => __("Make One Page websites with menu items linking to different sections on the page. Watch the scroll animation kick in when a user clicks a menu item to jump to a page section.<hr>Create different landing pages on your site. Change the menu for each page so that the menu items point to sections of the page being displayed.", 'creattica'),
	'img' => $imagepath . 'premium-scroller.jpg',
	'style' => 'side',
	);

$hoot_options_premium[] = array(
	'name' => __('3 Blog Layouts (including pinterest <span>type mosaic)</span>', 'creattica'),
	'desc' => __('Creattica Premium gives you the option to display your post archives in 3 different layouts including a mosaic type layout similar to pinterest.', 'creattica'),
	'img' => $imagepath . 'premium-blogstyles.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Custom Widgets', 'creattica'),
	'desc' => __('Custom widgets crafted and designed specifically for Creattica Premium Theme to give you the flexibility of adding stylized content.', 'creattica'),
	'img' => $imagepath . 'premium-widgets.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Menu Icons', 'creattica'),
	'desc' => __('Select from over 500 icons for your main navigation menu links.', 'creattica'),
	'img' => $imagepath . 'premium-menuicons.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Premium Background Patterns (CC0)', 'creattica'),
	'desc' => __('Creattica Premium comes with many additional premium background patterns. You can always upload your own background image/pattern to match your site design.', 'creattica'),
	'img' => $imagepath . 'premium-backgrounds.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Automatic Image Lightbox and <span>WordPress Gallery</span>', 'creattica'),
	'desc' => __('Automatically open image links on your site with the integrates lightbox in Creattica Premium.<hr>Automatically convert standard WordPress galleries to beautiful lightbox gallery slider.', 'creattica'),
	'img' => $imagepath . 'premium-lightbox.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Developers <br />love {LESS}', 'creattica'),
	'desc' => __('CSS is passe. Developers love the modularity and ease of using LESS, which is why Creattica Premium comes with properly organized LESS files for the main stylesheet.', 'creattica'),
	'img' => $imagepath . 'premium-lesscss.jpg',
	);

$hoot_options_premium[] = array(
	'name' => __('Easy Import/Export', 'creattica'),
	'desc' => __('Moving to a new host? Or applying a new child theme? Easily import/export your customizer settings with just a few clicks - right from the backend.', 'creattica'),
	// 'img' => $imagepath . 'premium-import-export.jpg',
	);

$hoot_options_premium[] = array(
	'style' => 'aside',
	'blocks' => array(
		array(
			'name' => __('Custom Javascript &amp; <span>Google Analytics</span>', 'creattica'),
			'desc' => __("Easily insert any javascript snippet to your header without modifying the code files. This helps in adding scripts for Google Analytics, Adsense or any other custom code.", 'creattica'),
			// 'img' => $imagepath . 'premium-customjs.jpg',
			),
		array(
			'name' => __('Continued <br />Updates', 'creattica'),
			'desc' => __("You will help support the continued development of Creattica - ensuring it works with future versions of WordPress for years to come.", 'creattica'),
			// 'img' => $imagepath . 'premium-updates.jpg',
			),
		),
	);

$hoot_options_premium[] = array(
	'name' => __('Premium <br />Priority Support', 'creattica'),
	'desc' => __("Need help setting up Creattica? Upgrading to Creattica Premium gives you prioritized support. We have a growing support team ready to help you with your questions.<hr>Need small modifications? If you are not a developer yourself, you can count on our support staff to help you with CSS snippets to get the look you're after.", 'creattica'),
	'img' => $imagepath . 'premium-support.jpg',
	);