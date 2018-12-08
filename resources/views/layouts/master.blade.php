<!doctype html>
<html lang="en" {{ app()->getLocale() }}>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Demo Store</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="Shop powered by PrestaShop">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/thu.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/theme.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('assets/css/psblog.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('assets/css/productcomments.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('assets/css/jquery.ui.theme.min.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('assets/css/tmg_verticalmenu.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('assets/css/slider.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" type="text/css" media="all">
	<script>
		var prestashop = {"cart":{"products":[{"id_product_attribute":"13","id_product":"3","cart_quantity":"1","id_customization":null,"name":"Nullam Mollis Dolor Ac","description_short":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.<\/p>","available_now":"","available_later":"","id_manufacturer":"2","manufacturer_name":"Brand 1","on_sale":"0","ecotax":{"value":"$0.00","amount":"0.000000","rate":""},"show_price":true,"price":"$23.20","quantity":1,"link_rewrite":"the-best-is-yet-to-come-framed-poster","category":"top-brands","price_attribute":"0.000000","ecotax_attr":"0.000000","reference":"demo_6","ean13":"","isbn":"","upc":"","minimal_quantity":"1","id_image":"3-189","legend":"","reduction":5.8,"price_without_reduction":29,"specific_prices":{"id_specific_price":"5","id_specific_price_rule":"0","id_cart":"0","id_product":"3","id_shop":"1","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"48"},"stock_quantity":899,"price_with_reduction":23.2,"price_with_reduction_without_tax":23.2,"total":"$23.20","total_wt":23.2,"price_wt":23.2,"allow_oosp":0,"attributes":{"Dimension":"40x60cm"},"attributes_small":"40x60cm","rate":0,"tax_name":"","remove_from_cart_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=cart&delete=1&id_product=3&id_product_attribute=13&token=0a3246eb643072361cce794754902474","up_quantity_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=cart&update=1&id_product=3&id_product_attribute=13&token=0a3246eb643072361cce794754902474&op=up","down_quantity_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=cart&update=1&id_product=3&id_product_attribute=13&token=0a3246eb643072361cce794754902474&op=down","update_quantity_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=cart&update=1&id_product=3&id_product_attribute=13&token=0a3246eb643072361cce794754902474","ecotax_rate":"","customizable":"","online_only":"","new":"","condition":false,"pack":"","price_amount":"$23.20","quantity_wanted":"1","id":"3","weight_unit":"kg","images":[{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-large_default.jpg","width":1000,"height":1000},"legend":"","cover":"1","id_image":"189","position":"1","associatedVariants":[]},{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/0\/190-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/0\/190-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/0\/190-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/0\/190-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/0\/190-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/0\/190-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/0\/190-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/0\/190-large_default.jpg","width":1000,"height":1000},"legend":"","cover":null,"id_image":"190","position":"2","associatedVariants":[]},{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/1\/191-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/1\/191-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/1\/191-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/1\/191-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/1\/191-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/1\/191-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/1\/191-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/1\/191-large_default.jpg","width":1000,"height":1000},"legend":"","cover":null,"id_image":"191","position":"3","associatedVariants":[]},{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/2\/192-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/2\/192-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/2\/192-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/2\/192-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/2\/192-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/2\/192-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/2\/192-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/2\/192-large_default.jpg","width":1000,"height":1000},"legend":"","cover":null,"id_image":"192","position":"4","associatedVariants":[]},{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/3\/193-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/3\/193-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/3\/193-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/3\/193-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/3\/193-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/3\/193-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/3\/193-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/3\/193-large_default.jpg","width":1000,"height":1000},"legend":"","cover":null,"id_image":"193","position":"5","associatedVariants":[]},{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/4\/194-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/4\/194-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/4\/194-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/4\/194-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/4\/194-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/4\/194-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/4\/194-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/9\/4\/194-large_default.jpg","width":1000,"height":1000},"legend":"","cover":null,"id_image":"194","position":"6","associatedVariants":[]},{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/3\/1\/0\/310-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/3\/1\/0\/310-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/3\/1\/0\/310-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/3\/1\/0\/310-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/3\/1\/0\/310-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/3\/1\/0\/310-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/3\/1\/0\/310-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/3\/1\/0\/310-large_default.jpg","width":1000,"height":1000},"legend":"","cover":null,"id_image":"310","position":"7","associatedVariants":[]}],"cover":{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/1\/8\/9\/189-large_default.jpg","width":1000,"height":1000},"legend":"","cover":"1","id_image":"189","position":"1","associatedVariants":[]},"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?id_product=3&id_product_attribute=13&rewrite=the-best-is-yet-to-come-framed-poster&controller=product&id_lang=1#\/19-dimension-40x60cm","canonical_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?id_product=3&rewrite=the-best-is-yet-to-come-framed-poster&controller=product&id_lang=1","has_discount":true,"discount_type":"percentage","discount_percentage":"-20%","discount_percentage_absolute":"20%","discount_amount":"$5.80","regular_price_amount":29,"regular_price":"$29.00","discount_to_display":"$5.80","unit_price_full":"","unit_price":"","add_to_cart_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=cart&add=1&id_product=3&id_product_attribute=13&token=0a3246eb643072361cce794754902474","main_variants":[],"flags":{"discount":{"type":"discount","label":"Reduced price"}},"labels":{"tax_short":"(tax excl.)","tax_long":"Tax excluded"},"show_availability":true,"availability_date":null,"availability_message":"","availability":"available","quantity_discounts":[],"reference_to_display":"demo_6","embedded_attributes":{"id_product_attribute":"13","id_product":"3","id_customization":null,"name":"Nullam Mollis Dolor Ac","description_short":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.<\/p>","available_now":"","available_later":"","id_manufacturer":"2","on_sale":"0","ecotax":"0.000000","price":"$23.20","quantity":1,"link_rewrite":"the-best-is-yet-to-come-framed-poster","category":"top-brands","reference":"demo_6","minimal_quantity":"1","id_image":"3-189","reduction":5.8,"price_without_reduction":29,"specific_prices":{"id_specific_price":"5","id_specific_price_rule":"0","id_cart":"0","id_product":"3","id_shop":"1","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"48"},"features":[],"attributes":{"Dimension":"40x60cm"},"rate":0,"tax_name":"","ecotax_rate":"","customizable":"","online_only":"","new":"","condition":"","pack":"","price_amount":23.2,"quantity_wanted":"1"},"seo_availability":"https:\/\/schema.org\/InStock"},{"id_product_attribute":"19","id_product":"5","cart_quantity":"1","id_customization":null,"name":"Aliquam Suscipit","description_short":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.<\/p>","available_now":"","available_later":"","id_manufacturer":"2","manufacturer_name":"Brand 1","on_sale":"0","ecotax":{"value":"$0.00","amount":"0.000000","rate":""},"show_price":true,"price":"$29.00","quantity":1,"link_rewrite":"today-is-a-good-day-framed-poster","category":"top-brands","price_attribute":"0.000000","ecotax_attr":"0.000000","reference":"demo_7","ean13":"","isbn":"","upc":"","minimal_quantity":"1","id_image":"5-203","legend":"","reduction":0,"price_without_reduction":29,"specific_prices":[],"stock_quantity":297,"price_with_reduction":29,"price_with_reduction_without_tax":29,"total":"$29.00","total_wt":29,"price_wt":29,"allow_oosp":0,"attributes":{"Dimension":"40x60cm"},"attributes_small":"40x60cm","rate":0,"tax_name":"","remove_from_cart_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=cart&delete=1&id_product=5&id_product_attribute=19&token=0a3246eb643072361cce794754902474","up_quantity_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=cart&update=1&id_product=5&id_product_attribute=19&token=0a3246eb643072361cce794754902474&op=up","down_quantity_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=cart&update=1&id_product=5&id_product_attribute=19&token=0a3246eb643072361cce794754902474&op=down","update_quantity_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=cart&update=1&id_product=5&id_product_attribute=19&token=0a3246eb643072361cce794754902474","ecotax_rate":"","customizable":"","online_only":"","new":"","condition":false,"pack":"","price_amount":"$29.00","quantity_wanted":"1","id":"5","weight_unit":"kg","images":[{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/2\/202-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/2\/202-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/2\/202-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/2\/202-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/2\/202-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/2\/202-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/2\/202-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/2\/202-large_default.jpg","width":1000,"height":1000},"legend":"","cover":null,"id_image":"202","position":"1","associatedVariants":[]},{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-large_default.jpg","width":1000,"height":1000},"legend":"","cover":"1","id_image":"203","position":"2","associatedVariants":[]},{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/4\/204-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/4\/204-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/4\/204-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/4\/204-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/4\/204-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/4\/204-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/4\/204-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/4\/204-large_default.jpg","width":1000,"height":1000},"legend":"","cover":null,"id_image":"204","position":"3","associatedVariants":[]},{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/5\/205-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/5\/205-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/5\/205-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/5\/205-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/5\/205-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/5\/205-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/5\/205-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/5\/205-large_default.jpg","width":1000,"height":1000},"legend":"","cover":null,"id_image":"205","position":"4","associatedVariants":[]},{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/6\/206-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/6\/206-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/6\/206-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/6\/206-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/6\/206-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/6\/206-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/6\/206-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/6\/206-large_default.jpg","width":1000,"height":1000},"legend":"","cover":null,"id_image":"206","position":"5","associatedVariants":[]},{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/7\/207-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/7\/207-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/7\/207-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/7\/207-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/7\/207-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/7\/207-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/7\/207-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/7\/207-large_default.jpg","width":1000,"height":1000},"legend":"","cover":null,"id_image":"207","position":"6","associatedVariants":[]},{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/8\/208-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/8\/208-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/8\/208-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/8\/208-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/8\/208-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/8\/208-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/8\/208-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/8\/208-large_default.jpg","width":1000,"height":1000},"legend":"","cover":null,"id_image":"208","position":"7","associatedVariants":[]}],"cover":{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/2\/0\/3\/203-large_default.jpg","width":1000,"height":1000},"legend":"","cover":"1","id_image":"203","position":"2","associatedVariants":[]},"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?id_product=5&id_product_attribute=19&rewrite=today-is-a-good-day-framed-poster&controller=product&id_lang=1#\/19-dimension-40x60cm","canonical_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?id_product=5&rewrite=today-is-a-good-day-framed-poster&controller=product&id_lang=1","has_discount":false,"discount_type":null,"discount_percentage":null,"discount_percentage_absolute":null,"discount_amount":null,"regular_price_amount":"$29.00","regular_price":"$29.00","discount_to_display":null,"unit_price_full":"","unit_price":"","add_to_cart_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=cart&add=1&id_product=5&id_product_attribute=19&token=0a3246eb643072361cce794754902474","main_variants":[],"flags":[],"labels":{"tax_short":"(tax excl.)","tax_long":"Tax excluded"},"show_availability":true,"availability_date":null,"availability_message":"","availability":"available","quantity_discounts":[],"reference_to_display":"demo_7","embedded_attributes":{"id_product_attribute":"19","id_product":"5","id_customization":null,"name":"Aliquam Suscipit","description_short":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.<\/p>","available_now":"","available_later":"","id_manufacturer":"2","on_sale":"0","ecotax":"0.000000","price":"$29.00","quantity":1,"link_rewrite":"today-is-a-good-day-framed-poster","category":"top-brands","reference":"demo_7","minimal_quantity":"1","id_image":"5-203","reduction":0,"price_without_reduction":29,"specific_prices":[],"features":[],"attributes":{"Dimension":"40x60cm"},"rate":0,"tax_name":"","ecotax_rate":"","customizable":"","online_only":"","new":"","condition":"","pack":"","price_amount":29,"quantity_wanted":"1"},"seo_availability":"https:\/\/schema.org\/InStock"}],"totals":{"total":{"type":"total","label":"Total","amount":59.2,"value":"$59.20"},"total_including_tax":{"type":"total","label":"Total (tax incl.)","amount":59.2,"value":"$59.20"},"total_excluding_tax":{"type":"total","label":"Total (tax excl.)","amount":59.2,"value":"$59.20"}},"subtotals":{"products":{"type":"products","label":"Subtotal","amount":52.2,"value":"$52.20"},"discounts":null,"shipping":{"type":"shipping","label":"Shipping","amount":7,"value":"$7.00"},"tax":{"type":"tax","label":"Taxes","amount":0,"value":"$0.00"}},"products_count":2,"summary_string":"2 items","vouchers":{"allowed":0,"added":[]},"discounts":[],"minimalPurchase":0,"minimalPurchaseRequired":""},"currency":{"name":"US Dollar","iso_code":"USD","iso_code_num":"840","sign":"$"},"customer":{"lastname":null,"firstname":null,"email":null,"birthday":null,"newsletter":null,"newsletter_date_add":null,"optin":null,"website":null,"company":null,"siret":null,"ape":null,"is_logged":false,"gender":{"type":null,"name":null},"addresses":[]},"language":{"name":"English (English)","iso_code":"en","locale":"en-US","language_code":"en-us","is_rtl":"0","date_format_lite":"m\/d\/Y","date_format_full":"m\/d\/Y H:i:s","id":1},"page":{"title":"","canonical":null,"meta":{"title":"Demo Store","description":"Shop powered by PrestaShop","keywords":"","robots":"index"},"page_name":"index","body_classes":{"lang-en":true,"lang-rtl":false,"country-US":true,"currency-USD":true,"layout-full-width":true,"page-index":true,"tax-display-disabled":true},"admin_notifications":[]},"shop":{"name":"Demo Store","logo":"\/prestashop\/PRS05\/PRS050097\/fashion\/img\/demo-store-logo-1534413534.jpg","stores_icon":"\/prestashop\/PRS05\/PRS050097\/fashion\/img\/logo_stores.png","favicon":"\/prestashop\/PRS05\/PRS050097\/fashion\/img\/favicon.ico"},"urls":{"base_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/","current_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php","shop_domain_url":"https:\/\/thememagics.com","img_ps_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/","img_cat_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/c\/","img_lang_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/l\/","img_prod_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/","img_manu_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/m\/","img_sup_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/su\/","img_ship_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/s\/","img_store_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/st\/","img_col_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/co\/","img_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/themes\/shopclick\/assets\/img\/","css_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/themes\/shopclick\/assets\/css\/","js_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/themes\/shopclick\/assets\/js\/","pic_url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/upload\/","pages":{"address":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=address","addresses":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=addresses","authentication":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=authentication","cart":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=cart","category":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=category","cms":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=cms","contact":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=contact","discount":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=discount","guest_tracking":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=guest-tracking","history":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=history","identity":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=identity","index":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php","my_account":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=my-account","order_confirmation":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=order-confirmation","order_detail":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=order-detail","order_follow":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=order-follow","order":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=order","order_return":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=order-return","order_slip":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=order-slip","pagenotfound":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=pagenotfound","password":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=password","pdf_invoice":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=pdf-invoice","pdf_order_return":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=pdf-order-return","pdf_order_slip":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=pdf-order-slip","prices_drop":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=prices-drop","product":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=product","search":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=search","sitemap":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=sitemap","stores":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=stores","supplier":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=supplier","register":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=authentication&create_account=1","order_login":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?controller=order&login=1"},"alternative_langs":{"en-us":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?id_lang=1","es-es":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?id_lang=2","fr-fr":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?id_lang=3","he-il":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?id_lang=4"},"theme_assets":"\/prestashop\/PRS05\/PRS050097\/fashion\/themes\/shopclick\/assets\/","actions":{"logout":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php?mylogout="},"no_picture_image":{"bySize":{"cart_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/en-default-cart_default.jpg","width":60,"height":60},"small_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/en-default-small_default.jpg","width":100,"height":100},"home_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/en-default-home_default.jpg","width":375,"height":375},"medium_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/en-default-medium_default.jpg","width":452,"height":435},"large_default":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/en-default-large_default.jpg","width":1000,"height":1000}},"small":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/en-default-cart_default.jpg","width":60,"height":60},"medium":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/en-default-home_default.jpg","width":375,"height":375},"large":{"url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/img\/p\/en-default-large_default.jpg","width":1000,"height":1000},"legend":""}},"configuration":{"display_taxes_label":false,"is_catalog":false,"show_prices":true,"opt_in":{"partner":true},"quantity_discount":{"type":"discount","label":"Discount"},"voucher_enabled":0,"return_enabled":0},"field_required":[],"breadcrumb":{"links":[{"title":"Home","url":"https:\/\/thememagics.com\/prestashop\/PRS05\/PRS050097\/fashion\/index.php"}],"count":1},"link":{"protocol_link":"https:\/\/","protocol_content":"https:\/\/"},"time":1542434682,"static_token":"0a3246eb643072361cce794754902474","token":"cad60d736db3550dc3506919ff47af84"};
		</script>
		{{-- tự thêm ở đây nhé --}}
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700i" rel="stylesheet">
		<!-- Latest compiled and minified CSS & JS -->
		<link href="//maxcdn.bootstrapcdn.com/f
		ont-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- ThemeMagics added -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
		<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<style type="text/css">
		.row{
			margin-left: 0px!important;
			margin-right: 0px!important;
		}
		a{
			text-decoration-line: none!important;
		}
	</style>
	@yield('header')
</head>
<body id="index" class="lang-en country-us currency-usd layout-full-width page-index tax-display-disabled">
	<main>
		<header id="header">
			<nav class="header-nav">
				<div class="container">   
					<div class="row">   
						<div class="hidden-sm-down">
							<div class="left-nav">
							</div>
							<div class="right-nav">
							</div>  
						</div>
						<div class="hidden-md-up text-xs-center mobile">
							<div class="pull-xs-left" id="menu-icon">
								<i class="material-icons menu-open">&#xE5D2;</i>
								<i class="material-icons menu-close">&#xE5CD;</i>			  
							</div>
							<div class="pull-xs-right" id="_mobile_cart"></div>
							<div class="pull-xs-right" id="_mobile_user_info"></div>
							<div class="top-logo" id="_mobile_logo"></div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</nav>

			<div class="header-top row">	
				<!-- Block search module TOP -->
				<div id="search_widget" class="col-md-1 search-widget dropdown js-dropdown" data-search-controller-url="//thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=search" style="margin-right: 0px">
					<div class="search-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
						<i class="material-icons search">&#xE8B6;</i> 
						<i class="material-icons clear">&#xE14C;</i>
					</div>
					<form class="search-box dropdown-menu" method="get" action="">
						<input type="hidden" name="controller" value="search">
						<input type="text" name="s" value="" placeholder="Search our catalog">
						<button type="submit">
							<span>Search</span>
							<!--<i class="material-icons search">&#xE8B6;</i>-->
						</button>
					</form>
				</div>
				<!-- /Block search module TOP -->

				<div class="vertical-menu js-top-menu position-static hidden-sm-down col-md-3"  id="_desktop_vertical_menu">
					<div class="block-title block">		
						<h4 class="block_title hidden-lg-up" data-target="#top-vertical-menu" data-toggle="collapse">
							<span class="pull-xs-right">
								<span class="navbar-toggler collapse-icons">
									<i class="material-icons add">&#xE315;</i>
									<i class="material-icons remove">&#xE315;</i>
								</span>
							</span>
						</h4>

						<div class="cat-title" style="padding-left: 0px;font-size: 15px;"><i class="fa fa-bars" style="font-size: 20px!important;"></i>&nbsp &nbspCategories</div>
						<div class="title-arrow"></div>
						<style type="text/css">
						.cat-title:hover{
							color: rgba(71,201,229,0.9)!important;
						}
					</style>
				</div>

				<ul class="top-vertical-menu block_content" id="top-vertical-menu" data-depth="0">
					@foreach($categories as $row)
					<li class="category" id="tmgcategory-4">
						@if($row->parent_id == Null)
						<a href="{{$row->slug}}" class="dropdown-item" data-depth="0" >			  
							<span class="pull-xs-right hidden-md-up">
								<span data-target="#top_sub_menu_48067" data-toggle="collapse" class="navbar-toggler collapse-icons">
									<i class="material-icons add">&#xE313;</i>
									<i class="material-icons remove">&#xE316;</i>
								</span>
							</span>
							<span class="pull-xs-right sub-menu-arrow">
								<i class="fa fa-angle-down"></i>
							</span>{{$row->name}}
						</a>		
						@endif
						<div  class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_48067">
							@foreach($categories as $row1)
							<ul class="top-vertical-menu block_content"  data-depth="1">
								@if($row1->parent_id != Null && $row1->parent_id == $row->id)
								<li class="category" id="tmgcategory-11">
									<a href="" data-depth="1" >{{$row1->name}}</a>
								</li>
								@endif
							</ul>
							@endforeach
							<div class="menu-images-container"></div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>

			<div class="hidden-sm-down col-md-5" id="_desktop_logo" style="padding-left: 100px;">
				<a href="{{asset('/')}}">
					<h1 style="font-family: 'Playfair Display', serif!important; font-size: 50px; color: rgba(71,201,229,0.9)!important;">August</h1>
				</a>
			</div>
			<div id="_desktop_cart">
				<div class="blockcart cart-preview active" data-refresh-url="/">
					<div class="header blockcart-header dropdown js-dropdown">
						<a class="link" rel="nofollow" href=""  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
							<i class="material-icons">&#xE8CC;</i>
							<span class="cart-products-count" id="quantity" style="background-color: rgba(71,201,229,0.9)">{{\Cart::count()}}</span>
							<div class="cart-data">
								<span class="cart-title">shopping cart</span>
								<span class="cart-products-count">2&nbsp;Items</span>
								<!-- <span class="cart-value">$59.20</span> -->
							</div>
						</a>

						{{-- quick view giỏ hàng --}}
						<div class="cart_block block exclusive dropdown-menu cart-quick-view">
							<div class="block_content">
								<div class="cart_block_list" id="cart-item">
								</div>
								<div class="card cart-summary">
									<div class="card-block">
										<div class="cart-summary-line" id="cart-subtotal-products">
											<span class=" js-subtotal"><span class="view-cart-quantity"></span> items</span>
											<span class="value view-cart-subtotal"></span>
										</div>
										<div class="cart-summary-line" id="cart-subtotal-shipping">
											<span class="">Taxes</span>
											<span class="value view-cart-taxes"></span>
											<div><small class="value"></small></div>
										</div>
									</div>
									<div class="card-block">
										<div class="cart-summary-line cart-total">
											<span class="">Total</span>
											<span class="value view-cart-total"></span>
										</div>
									</div>
								</div>
								<div class="checkout card-block">
									<a rel="nofollow" href="{{asset('cart')}}" class="viewcart more">
										<button type="button" class="btn btn-primary add-to-cart">View Cart</button>
									</a>
									<a href="{{asset('cart/checkout')}}" class="more">
										<button type="button" class="btn btn-primary add-to-cart">Checkout</button>
									</a>
								</div>
								<style type="text/css">
									.add-to-cart:hover{
										background-color: rgba(71,201,229,0.9)!important;
									}
								</style>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="_desktop_user_info" class="js-dropdown hidden-sm-down">
				<div class="account-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">My Account<i class="material-icons expand-more">&#xE5C5;</i></div>
				<div class="user-info">
					<a  class="creat-account"  href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=authentication&amp;create_account=1" data-link-action="display-register-form">
						Create account
					</a>	

					<a class="login" href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=my-account" title="Log in to your customer account" rel="nofollow">
						<span class="signin">Sign in</span>
					</a>
				</div>
			</div>
			<div class="infoblock">
				<div class="infobtn"></div>
				<div class="infocontent"><div id="_desktop_language_selector">
					<div class="language-selector-wrapper">
						<!--<span class="hidden-md-up">Language:</span>-->
						<div class="language-selector dropdown js-dropdown">
							<span class="expand-more hidden-sm-down" data-toggle="dropdown">English</span>
							<a data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="hidden-sm-down">
								<i class="material-icons expand-more">&#xE5C5;</i>
							</a>
							<ul class="dropdown-menu hidden-sm-down">
								<li  class="current" >
									<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_lang=1" class="dropdown-item">en</a>
								</li>
								<li >
									<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_lang=2" class="dropdown-item">es</a>
								</li>
								<li >
									<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_lang=3" class="dropdown-item">fr</a>
								</li>
								<li >
									<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_lang=4" class="dropdown-item">he</a>
								</li>
							</ul>
							<select class="link hidden-md-up">
								<option value="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_lang=1" selected="selected">English</option>
								<option value="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_lang=2">Español</option>
								<option value="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_lang=3">Français</option>
								<option value="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_lang=4">עברית</option>
							</select>
						</div>
					</div>
				</div>
				<div id="_desktop_currency_selector">
					<div class="currency-selector dropdown js-dropdown">
						<!--<span>Currency:</span>-->
						<span class="expand-more _gray-darker hidden-sm-down" data-toggle="dropdown">USD</span>
						<a data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="hidden-sm-down">
							<i class="material-icons expand-more">&#xE5C5;</i>
						</a>
						<ul class="dropdown-menu hidden-sm-down">
							<li >
								<a title="Euro" rel="nofollow" href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_lang=1&amp;SubmitCurrency=1&amp;id_currency=2" class="dropdown-item">€</a>
							</li>
							<li  class="current" >
								<a title="US Dollar" rel="nofollow" href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_lang=1&amp;SubmitCurrency=1&amp;id_currency=1" class="dropdown-item">$</a>
							</li>
						</ul>
						<select class="link hidden-md-up">
							<option value="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_lang=1&amp;SubmitCurrency=1&amp;id_currency=2">EUR</option>
							<option value="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_lang=1&amp;SubmitCurrency=1&amp;id_currency=1" selected="selected">USD</option>
						</select>
					</div>
				</div>
			</div>	
		</div>
		<div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
			<div class="js-top-menu mobile" id="_mobile_top_menu"></div>
			<div class="js-top-menu-bottom">
				<div id="_mobile_currency_selector"></div>
				<div id="_mobile_language_selector"></div>
				<div id="_mobile_contact_link"></div>
			</div>
		</div>
	</div>
</header>

<aside id="notifications"></aside>


@yield('content')


<footer class="page-footer">

	<!-- Footer content -->

</footer>


</section>


</div>



</div>
</section>

<footer id="footer">


	<div class="footer-before">

		<div class="block_newsletter col-md-12 col-sm-12">
			<div class="container">
				<div class="row">
					<div class="blog-title col-xs-12"><span class="envelope"></span><span class="title">
					subscribe to our newsletter</span> 
					<p>There are many variations of Loream Ipsum available but the majority have suffered alteration in some form by injected humour, or randomised words.</p>
				</div>
				<div class="block-details col-md-12 col-xs-12">


					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php#footer" method="post">
						<div class="input-wrapper">
							<input
							name="email"
							type="text"
							value=""
							placeholder="Your email address"
							>
						</div>
						<span class="more">		
							<input
							class="btn btn-primary float-xs-right add-to-cart hidden-xs-down"
							name="submitNewsletter"
							type="submit"
							value="Subscribe"
							>
							<input
							class="btn btn-primary float-xs-right add-to-cart hidden-sm-up"
							name="submitNewsletter"
							type="submit"
							value="OK"
							>

						</span>

						<input type="hidden" name="action" value="0">
						<div class="clearfix"></div>

						<div class="col-xs-12">
						</div> 
					</form>
					<div class="news-description">Lorem Ipsum is simply dummy text of the printing 
					and typesetting industry.</div>
				</div>
			</div>
		</div>
	</div>


</div>
<div class="footer-container">
	<div class="container">
		<div class="row footer">

			<div id="tmgaboutuscms">
				<div class="tmgaboutuscms col-md-3">
					<div class="footer-logo"><img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/modules/tmg_aboutuscms/views/img/footer-logo.png" alt="footer-logo.png" /></div>
					<div class="footer-description">
						<p>Lorem ipsum dolor amet consectetur adipiscing fact that a reader will be distracte elit sed do eiusmod incididunt.</p>
					</div>
				</div>
			</div>
			<div class="footer-links links">
				<div class="block footer-link col-md-3 links wrapper">
					<h3 class="h3 hidden-md-down">Products</h3> 
					<div class="title h3 block_title hidden-lg-up" data-target="#footer_sub_menu_43524" data-toggle="collapse">
						<span class="">Products</span>
						<span class="pull-xs-right">
							<span class="navbar-toggler collapse-icons">
								<i class="material-icons add">&#xE313;</i>
								<i class="material-icons remove">&#xE316;</i>
							</span>
						</span>
					</div>
					<ul id="footer_sub_menu_43524" class="collapse block_content">
						<li>
							<a
							id="link-cms-page-1-1"
							class="cms-page-link"
							href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_cms=1&amp;controller=cms&amp;id_lang=1"
							title="Our terms and conditions of delivery">
							Delivery
						</a>
					</li>
					<li>
						<a
						id="link-cms-page-4-1"
						class="cms-page-link"
						href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_cms=4&amp;controller=cms&amp;id_lang=1"
						title="Learn more about us">
						About us
					</a>
				</li>
				<li>
					<a
					id="link-product-page-prices-drop-1"
					class="cms-page-link"
					href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=prices-drop"
					title="Our special products">
					Prices drop
				</a>
			</li>
			<li>
				<a
				id="link-product-page-new-products-1"
				class="cms-page-link"
				href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=new-products"
				title="Our new products">
				New products
			</a>
		</li>
		<li>
			<a
			id="link-product-page-best-sales-1"
			class="cms-page-link"
			href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=best-sales"
			title="Our best sales">
			Best sales
		</a>
	</li>
</ul>
</div>
<div class="block footer-link col-md-3 links wrapper">
	<h3 class="h3 hidden-md-down">Our company</h3> 
	<div class="title h3 block_title hidden-lg-up" data-target="#footer_sub_menu_35090" data-toggle="collapse">
		<span class="">Our company</span>
		<span class="pull-xs-right">
			<span class="navbar-toggler collapse-icons">
				<i class="material-icons add">&#xE313;</i>
				<i class="material-icons remove">&#xE316;</i>
			</span>
		</span>
	</div>
	<ul id="footer_sub_menu_35090" class="collapse block_content">
		<li>
			<a
			id="link-cms-page-2-2"
			class="cms-page-link"
			href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_cms=2&amp;controller=cms&amp;id_lang=1"
			title="Legal notice">
			Legal Notice
		</a>
	</li>
	<li>
		<a
		id="link-cms-page-3-2"
		class="cms-page-link"
		href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_cms=3&amp;controller=cms&amp;id_lang=1"
		title="Our terms and conditions of use">
		Terms and conditions of use
	</a>
</li>
<li>
	<a
	id="link-cms-page-5-2"
	class="cms-page-link"
	href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_cms=5&amp;controller=cms&amp;id_lang=1"
	title="Our secure payment method">
	Secure payment
</a>
</li>
<li>
	<a id="link-static-page-sitemap-2" class="cms-page-link" href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=sitemap" title="Lost ? Find what your are looking for">Sitemap</a>
</li>
<li>
	<a id="link-static-page-stores-2" class="cms-page-link" href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=stores" title="">Stores</a>
</li>
</ul>
</div>
</div>
<div class="block-contact col-md-3 links wrapper">

	<h3 class="text-uppercase block-contact-title hidden-sm-down"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=stores">Contact us</a></h3>

	<div class="title clearfix hidden-md-up" data-target="#block-contact_list" data-toggle="collapse">
		<span class="h3">Store information</span>
		<span class="pull-xs-right">
			<span class="navbar-toggler collapse-icons">
				<i class="material-icons add">&#xE313;</i>
				<i class="material-icons remove">&#xE316;</i>
			</span>
		</span>
	</div>

	<ul id="block-contact_list" class="collapse">
		<li class="address">
			<i class="material-icons">&#xE0C8;</i>
			<div class="contact-details"> Demo Store<br />42, Your company opp. city  hospital<br />United States</div>
		</li>
		<li class="phone">
			<i class="material-icons">&#xE0B0;</i>
			<div class="contact-details">
				<span>1011001011</span><br/>

				<span>1800180018</span>
			</div>
		</li>
		<li class="email">
			<i class="material-icons">&#xE0BE;</i>
			<div class="contact-details">

				<span>admin@demo.com</span>
			</div>
		</li>
	</ul>
</div>
<div class="block-social">
	<div class="block-social-inner">
		<h3 class="h3 hidden-md-down">connect us</h3>
		<ul>
			<li class="facebook icon-gray"><a href="#" target="_blank">Facebook</a></li>
			<li class="twitter icon-gray"><a href="#" target="_blank">Twitter</a></li>
			<li class="rss icon-gray"><a href="#" target="_blank">Rss</a></li>
			<li class="youtube icon-gray"><a href="#" target="_blank">YouTube</a></li>
			<li class="googleplus icon-gray"><a href="#" target="_blank">Google +</a></li>
		</ul>
	</div>
</div>
</div>
</div>
<div class="copy">
	<div class="container">
		<div class="row">
			<div id="tmgfootercms">
				<div class="block-payment">
					<div class="block-payment-inner">
						<ul><li class="amex pay-icon"><a href="#" target="_blank">amex</a></li>
							<li class="visa pay-icon"><a href="#" target="_blank">visa</a></li>
							<li class="master pay-icon"><a href="#" target="_blank">master</a></li>
							<li class="paypal pay-icon"><a href="#" target="_blank">paypal</a></li>
							<li class="mastro pay-icon"><a href="#" target="_blank">mastro</a></li>
						</ul></div>
					</div>
				</div>
				<p class="copyright" class="hb-animate-element bottom-to-top">
					<a class="_blank" href="http://www.prestashop.com" target="_blank">
						© 2018 - Ecommerce software by PrestaShop™
					</a>
				</p>
			</div>
		</div>
	</div>
</div>
<a class="top_button" href="#" style=""><i class="material-icons">&#xE5D8;</i></a>

</footer>

</main>


<script src="{{asset('assets/js/core.js')}}" ></script>
{{-- <script src="{{asset('assets/js/theme.js')}}" ></script> --}}
<script src="{{asset('assets/js/jquery.rating.pack.js')}}" ></script>
<script src="{{asset('assets/js/jquery.textareaCounter.plugin.js')}}" ></script>
<script src="{{asset('assets/js/productcomments.js')}}" ></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}" ></script>
<script src="{{asset('assets/js/jquery.fancybox.js')}}" ></script>
<script src="{{asset('assets/js/ps_searchbar.js')}}" ></script>
<script src="{{asset('assets/js/ps_shoppingcart.js')}}" ></script>
<script src="{{asset('assets/js/nivoslider.js')}}" ></script>
<script src="{{asset('assets/js/parallax.js')}}" ></script>
<script src="{{asset('assets/js/owl.carousel.js')}}" ></script>
<script src="{{asset('assets/js/totalstorage.js')}}" ></script>
<script src="{{asset('assets/js/inview.js')}}" ></script>
<script src="{{asset('assets/js/slick.js')}}" ></script>
<script src="{{asset('assets/js/jquery.elevatezoom.js')}}" ></script>
<script src="{{asset('assets/js/custom.js')}}" ></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
</script>
@yield('footer')


</body>
</html>