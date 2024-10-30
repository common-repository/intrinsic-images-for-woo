=== Intrinsic Images for Woo ===
Contributors: johnc1979
Donate link: 
Tags: images,woocommerce images,intrinsic images,image optimisation,image optimization,smaller shop images
Requires at least: 5.0
Tested up to: 5.7.1
Requires PHP: 7.0
Stable tag: 1.0.0
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Add intrinsic image values to the HTML source code to ensure the correct size image is served

== Description ==
A fast website has never been more important. One of the things which can slow a website down a lot is images. This can be a disaster for an ecommerce store which relies on a fast website to generate sales. You may think your website is fine, but you can improve it further. How? Add intrinsic image values to the html source code to ensure the correct size image is served
You have probably done a lot already to ensure that your shop serves fast images. You have set thumbnail sizes, regenerated the thumbnails, optimised the images and may even be using a CDN. But if you look at the source code, specifically on a mobile, you'll see a disturbing result. The shop page is serving full sized images!
What? It sure is. This will be hurting your results with places like Page Speed Insights and GT Metrix. Worse still, it will be negatively impacting your website visitors.
Thankfully Woo Intrinsic Images is here to save the day
Simply install, actrivate and set at the option to on and your website will begin serving the best fit images for your store. You will likely see immediate improvements from GT Metrix, Page Speed Insights and more

== Installation ==
1. Unzip the plugin archive on your computer
2. Upload `woo-intrinsic-images` directory to yours `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Go to settings, Intrinsic Images and click save.
5. Clear the cache and check the results

== Frequently Asked Questions ==
**What is Woo Intrinsic Images? **
WooCommerce Intrinsic Images add the intrinsic image sizes to the shop/archive product images ensuring the correct sized image is loaded

**I can't see any changes? **
Make sure that you clear your cache then check again. You can also check the source code and look for intrinsicsize= in the code

**What image sizes will it use? **
It will use the image sizes set for the WooCommerce shop page. These settings are usually found in the customizer under Customize >> WooCommerce >> Product images >> Thumbnail width

**What about different cropping ratios? **
The plugin will use the values that are set in the ooCommerce image settings to ensure that the images served are correct

**Some images make the layout look weird. Why **
This is caused by small images. When you have an image that is smaller that the cropped dimensions it will force the width. This will cause the image to be either shorter or taller than other shop images. We sell a plugin that solves this plugin and perfectly aligns all shop elements

**Does this work on the product gallery images? **
Product gallery images were exlcuded by design. The vast majority of stores allow for zooming of the gallery images, so to enforce the use of the cropped version would mean that shoppers would be unable to zoom in. On mobiles this may not be as big a problem, but as the majority of cache plugins don't cache seperately for mobile and desktop using the wp_is_mobile() function would not help in this instance. It may be something we release in the next version if enough request it, but very few cache plugins currently support seperate mobile and desktop versions

**Browser support **
The intrinsicimage size attribute supports about 95% of browsers currently in use. Essentially, only IE browser doesn't support the intrinsicimage size attribute

== Screenshots ==
1. Settings page
2. Shop page before activating showing the full size image loading in the source code
3. Shop page after activating showing the smaller thumbnail loading in the source code
4. GT Metrix results. Left is before activating. Right is after activating
5. Page Speed Insights mobile results before activating
6. Page Speed Insights desktop results before activating
7. Page Speed Insights mobile results after activating showing an improvement in loading times
8. Page Speed Insights desktop results after activating showing an improvement in loading times


== Changelog ==
= 1.0.0 =
* Initial release.


== Upgrade Notice ==


