<?php
/*
 * Plugin Name: Brands for Libre
 * Plugin URI: http://wordpress.lowtone.nl/plugins/woocommerce-brands-libre/
 * Description: Add WooCommerce Brand support to Libre.
 * Version: 1.0
 * Author: Lowtone <info@lowtone.nl>
 * Author URI: http://lowtone.nl
 * License: http://wordpress.lowtone.nl/license
 */
/**
 * @author Paul van der Meijs <code@lowtone.nl>
 * @copyright Copyright (c) 2011-2012, Paul van der Meijs
 * @license http://wordpress.lowtone.nl/license/
 * @version 1.0
 * @package wordpress\plugins\lowtone\woocommerce\brands\libre
 */

namespace lowtone\woocommerce\brands\libre {

	add_filter("lowtone_woocommerce_libre_sidebar_meta", function($meta) {
		$meta["woocommerce_brand"] = array(
				"woocommerce_brand_sidebars", 
				"WooCommerce Brand Sidebars", 
				__("WooCommerce Brand", "lowtone_woocommerce_brands_libre"), 
				__("This sidebar is displayed on a WooCommerce brand page.", "lowtone_woocommerce_brands_libre")
			);

		return $meta;
	});

	add_filter("lowtone_woocommerce_libre_sidebars", function($sidebars) {
		global $wp_query;

		if ("product_brand" != $wp_query->get("taxonomy"))
			return $sidebars;

		$sidebars[] = "woocommerce_brand";
		
		return $sidebars;
	});

}