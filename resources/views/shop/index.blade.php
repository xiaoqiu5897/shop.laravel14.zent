@extends('layouts.master');

@section('content')
<section id="wrapper">
	<div id="columns_inner">
		<div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12">
			<section id="main">
				<div class="topcolumn">
					<div id="flexslider">
						<div class="loadingdiv spinner"></div>
						<div class="flexslider" data-interval="5000" data-pause="true">
							<a href="#">
								<img src="https://content.nike.com/content/dam/one-nike/en_lu/HO18/Homepage/APLA/1113/11.13_HP_RN_Utility_Pack_Night_DT.png.transform/full-screen/11.13_HP_RN_Utility_Pack_Night_DT.png" data-thumb="https://content.nike.com/content/dam/one-nike/en_lu/HO18/Homepage/APLA/1113/11.13_HP_RN_Utility_Pack_Night_DT.png.transform/full-screen/11.13_HP_RN_Utility_Pack_Night_DT.png" alt="" />
							</a>
						</div>	
					</div>
				</div>
				<section id="content" class="page-home">
					<div class="container">
						<div class="row">
							<!-- ThemeMagics start -->
							<section class="tmg-hometabcontent">
								<h2 class="h1 products-section-title text-uppercase">Trending Items</h2>
								<div class="tabs">
									<ul id="home-page-tabs" class="nav nav-tabs clearfix">
										<li class="nav-item">
											<a data-toggle="tab" href="#featureProduct" class="nav-link active" data-text="Featured products"><span>Featured products</span></a>
										</li>
										<li class="nav-item">
											<a data-toggle="tab" href="#newProduct" class="nav-link" data-text="New products"><span>New products</span></a>
										</li>
										<li class="nav-item">
											<a data-toggle="tab" href="#bestseller" class="nav-link" data-text="Best Sellers"><span>Best Sellers</span></a>
										</li>
									</ul>
									<div class="tab-content">
										<div id="featureProduct" class="tmg_productinner tab-pane active">	
											<section class="featured-products clearfix">
												<h2 class="h1 products-section-title text-uppercase">
													Featured products
												</h2>
												<div class="products tab-container">
													<div class="homeproducts-row">
														<!-- Define Number of product for SLIDER -->
														<div class="feature-carousel">
															<ul id="feature-carousel" class="feature-carousel tmg-carousel product_list">
																@foreach($products as $product_key => $product)
																<li class="featureproductlistitem col-12">
																	<ul>
																		<li class="item col-xs-12">
																			<div class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope itemtype="http://schema.org/Product">
																				<div class="thumbnail-container">
																					<a href="{{asset('')}}product/{{$product->slug}}" class="thumbnail product-thumbnail">
																						@foreach($product->images as $key => $image)
																						<?php if($key == 0){ ?>
																						<img
																						src = "{{asset('assets/img/products')}}/{{$image->link}}"
																						alt = ""
																						data-full-size-image-url = "{{asset('assets/img/products')}}/{{$image->link}}">
																						<?php } if ($key == 4) {?>
																						<img class="replace-2x img_1 img-responsive" src="{{asset('assets/img/products')}}/{{$image->link}}" data-full-size-image-url="{{asset('assets/img/products')}}/{{$image->link}}" alt="" />
																						<?php } ?>
																						@endforeach
																					</a>
																					<span class="discount-percentage">-20%</span>
																					<div class="product-actions">
																						<form action="" method="post" class="add-to-cart-or-refresh">
																							<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																							<input type="hidden" name="id_product" value="1" class="product_page_product_id">
																							<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																							<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >Add to cart</a>
																							<em>Add to cart</em>
																						</form>
																						<div  class="actions">
																							<button class="quick-view" data-id="{{$product->id}}"style="border: none;" data-toggle="modal" data-target="#modal-quick-view"> Quick view</button>
																							<em> Quick view </em>
																						</div>
																						<style type="text/css">
																						.quick-view:hover, .add-to-cart:hover, .product-actions em{
																							background-color: rgba(71,201,229,0.9)!important;
																						}
																						.products .product_list li:hover .product-title a {
																							color: rgba(71,201,229,0.9)!important;
																						}
																						.products .regular-price{
																							text-decoration: line-through red;
																						}
																						.feature_prev:hover, .feature_next:hover{
																							background-color: rgba(71,201,229,0.9)!important;
																						}
																					</style>
																				</div>
																				<ul class="product-flags">
																					<li class="on-sale">On sale!</li>
																					<li class="new">New</li>
																				</ul>
																			</div>
																			<div class="product-description">
																				<span class="h3 product-title" itemprop="name"><a href="">{{$product->name}}</a></span>
																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>
																				<div class="product-price-and-shipping">
																					<span itemprop="price" class="price">{{number_format($product->price_sale)}}</span>
																					<span class="regular-price">{{number_format($product->price)}}</span>
																				</div>
																				<div class="product_reviews">
																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																						</div>
																						<!--<span>5 Review(s)&nbsp</span>-->
																					</div>
																				</div>  
																				<div class="highlighted-informations hidden-sm-down">
																					<div class="variant-links">
																						<a href="" class="color" title="White" style="background-color: #ffffff">
																							<span class="sr-only">White</span>
																						</a>
																						<a href="" class="color" title="Black" style="background-color: #434A54">
																							<span class="sr-only">Black</span>
																						</a>
																						<span class="js-count count"></span>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																</ul>
															</li>
															@endforeach
														</ul>
													</div>

												</div>
												<div class="customNavigation">
													<a class="btn prev feature_prev">&nbsp;</a>
													<a class="btn next feature_next">&nbsp;</a>
												</div>

											</div>
										</section>
									</div>
									<div id="newProduct" class="tmg_productinner tab-pane">
										<section class="newproducts">
											<h2 class="h1 products-section-title text-uppercase">
												New Products
											</h2>
											<div class="products tab-container">
												<div class="homeproducts-row">
													<!-- Define Number of product for SLIDER -->
													<div class="newproduct-carousel">
														<ul id="newproduct-carousel" class="newproduct-carousel tmg-carousel product_list">
															<li class="newproductlistitem">
																<ul>
																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="19" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=19&amp;id_product_attribute=0&amp;rewrite=customizable-mug&amp;controller=product&amp;id_lang=1" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/3/0/6/306-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/3/0/6/306-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/3/0/1/301-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/3/0/1/301-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="19" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=19&amp;id_product_attribute=0&amp;rewrite=customizable-mug&amp;controller=product&amp;id_lang=1">Suspendisse Massa Nulla</a></span>


																				<div class="product-detail" itemprop="description"><p><span style="font-size:10pt;font-family:Arial;font-style:normal;">White Ceramic Mug. 325ml</span></p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$13.90</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="18" data-id-product-attribute="36" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=18&amp;id_product_attribute=36&amp;rewrite=mountain-fox-notebook&amp;controller=product&amp;id_lang=1#/22-paper_type-ruled" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/9/8/298-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/9/8/298-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/9/4/294-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/9/4/294-large_default.jpg" alt="" />

																				</a>

																				<span class="discount-percentage">-20%</span>

																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="18" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="on-sale">On sale!</li>
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=18&amp;id_product_attribute=36&amp;rewrite=mountain-fox-notebook&amp;controller=product&amp;id_lang=1#/22-paper_type-ruled">Mus lorem sitdus</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$10.32</span>






																					<span class="regular-price">$12.90 </span>



																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																</ul>
															</li>

															<li class="newproductlistitem">
																<ul>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="17" data-id-product-attribute="32" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=17&amp;id_product_attribute=32&amp;rewrite=mountain-fox-notebook&amp;controller=product&amp;id_lang=1#/22-paper_type-ruled" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/9/0/290-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/9/0/290-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/8/7/287-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/8/7/287-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="17" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=17&amp;id_product_attribute=32&amp;rewrite=mountain-fox-notebook&amp;controller=product&amp;id_lang=1#/22-paper_type-ruled">amet euismod bibendum</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$12.90</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="16" data-id-product-attribute="28" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=16&amp;id_product_attribute=28&amp;rewrite=mountain-fox-notebook&amp;controller=product&amp;id_lang=1#/22-paper_type-ruled" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/8/1/281-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/8/1/281-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/8/0/280-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/8/0/280-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="16" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=16&amp;id_product_attribute=28&amp;rewrite=mountain-fox-notebook&amp;controller=product&amp;id_lang=1#/22-paper_type-ruled">purus eu hendrerit viverra</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$12.90</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																</ul>
															</li>

															<li class="newproductlistitem">
																<ul>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="15" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=15&amp;id_product_attribute=0&amp;rewrite=pack-mug-framed-poster&amp;controller=product&amp;id_lang=1" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/7/3/273-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/7/3/273-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/7/4/274-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/7/4/274-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="15" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																					<li class="pack">Pack</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=15&amp;id_product_attribute=0&amp;rewrite=pack-mug-framed-poster&amp;controller=product&amp;id_lang=1">Vivamus semper augue</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$35.00</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="14" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=14&amp;id_product_attribute=0&amp;rewrite=hummingbird-vector-graphics&amp;controller=product&amp;id_lang=1" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/6/6/266-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/6/6/266-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/6/7/267-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/6/7/267-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="14" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=14&amp;id_product_attribute=0&amp;rewrite=hummingbird-vector-graphics&amp;controller=product&amp;id_lang=1">Sem Tristique Tempus...</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$9.00</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																</ul>
															</li>

															<li class="newproductlistitem">
																<ul>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="13" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=13&amp;id_product_attribute=0&amp;rewrite=brown-bear-vector-graphics&amp;controller=product&amp;id_lang=1" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/5/9/259-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/5/9/259-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/6/0/260-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/6/0/260-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="13" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=13&amp;id_product_attribute=0&amp;rewrite=brown-bear-vector-graphics&amp;controller=product&amp;id_lang=1">Present Fringilla Augue</a></span>


																				<div class="product-detail" itemprop="description"><p><span style="font-size:10pt;font-family:Arial;font-style:normal;">Vector graphic, format: svg. Download for personal, private and non-commercial use.</span></p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$9.00</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="12" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=12&amp;id_product_attribute=0&amp;rewrite=mountain-fox-vector-graphics&amp;controller=product&amp;id_lang=1" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/5/2/252-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/5/2/252-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/5/3/253-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/5/3/253-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="12" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=12&amp;id_product_attribute=0&amp;rewrite=mountain-fox-vector-graphics&amp;controller=product&amp;id_lang=1">Integer Tempor Lacus Eget</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$9.00</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																</ul>
															</li>

															<li class="newproductlistitem">
																<ul>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="11" data-id-product-attribute="26" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=11&amp;id_product_attribute=26&amp;rewrite=hummingbird-cushion&amp;controller=product&amp;id_lang=1#/8-color-white" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/4/4/244-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/4/4/244-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/4/5/245-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/4/5/245-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="11" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=11&amp;id_product_attribute=26&amp;rewrite=hummingbird-cushion&amp;controller=product&amp;id_lang=1#/8-color-white">Tellus Eu Volutpat Varius</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$18.90</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations hidden-sm-down">


																					<div class="variant-links">
																						<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=11&amp;id_product_attribute=26&amp;rewrite=hummingbird-cushion&amp;controller=product&amp;id_lang=1#/8-color-white"
																						class="color"
																						title="White"
																						style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
																						<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=11&amp;id_product_attribute=27&amp;rewrite=hummingbird-cushion&amp;controller=product&amp;id_lang=1#/11-color-black"
																						class="color"
																						title="Black"
																						style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
																						<span class="js-count count"></span>
																					</div>

																				</div>

																			</div>
																		</div>

																	</li>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="10" data-id-product-attribute="24" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=10&amp;id_product_attribute=24&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/8-color-white" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/4/3/243-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/4/3/243-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="noimage" data-full-size-image-url="noimage" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="10" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=10&amp;id_product_attribute=24&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/8-color-white">Justo Neque Commodo Nisl</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$18.90</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations hidden-sm-down">


																					<div class="variant-links">
																						<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=10&amp;id_product_attribute=24&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/8-color-white"
																						class="color"
																						title="White"
																						style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
																						<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=10&amp;id_product_attribute=25&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/11-color-black"
																						class="color"
																						title="Black"
																						style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
																						<span class="js-count count"></span>
																					</div>

																				</div>

																			</div>
																		</div>

																	</li>

																</ul>
															</li>

															<li class="newproductlistitem">
																<ul>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="9" data-id-product-attribute="22" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=9&amp;id_product_attribute=22&amp;rewrite=mountain-fox-cushion&amp;controller=product&amp;id_lang=1#/8-color-white" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/3/2/232-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/3/2/232-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/3/0/230-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/3/0/230-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="9" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=9&amp;id_product_attribute=22&amp;rewrite=mountain-fox-cushion&amp;controller=product&amp;id_lang=1#/8-color-white">Suspendisse Massa Nulla</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$18.90</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations hidden-sm-down">


																					<div class="variant-links">
																						<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=9&amp;id_product_attribute=22&amp;rewrite=mountain-fox-cushion&amp;controller=product&amp;id_lang=1#/8-color-white"
																						class="color"
																						title="White"
																						style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
																						<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=9&amp;id_product_attribute=23&amp;rewrite=mountain-fox-cushion&amp;controller=product&amp;id_lang=1#/11-color-black"
																						class="color"
																						title="Black"
																						style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
																						<span class="js-count count"></span>
																					</div>

																				</div>

																			</div>
																		</div>

																	</li>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="8" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=8&amp;id_product_attribute=0&amp;rewrite=mug-today-is-a-good-day&amp;controller=product&amp;id_lang=1" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/2/4/224-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/2/4/224-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/2/3/223-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/2/3/223-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="8" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="on-sale">On sale!</li>
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=8&amp;id_product_attribute=0&amp;rewrite=mug-today-is-a-good-day&amp;controller=product&amp;id_lang=1">Donec Semper Tristique</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$11.90</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>3 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																</ul>
															</li>
														</ul>
													</div>

												</div>
												<div class="customNavigation">
													<a class="btn prev newproduct_prev">prev</a>
													<a class="btn next newproduct_next">next</a>
												</div>

											</div>
										</section>
									</div>
									<div id="bestseller" class="tmg_productinner tab-pane">


										<section class="bestseller-products">
											<h2 class="h1 products-section-title text-uppercase">
												Bestseller Products
											</h2>
											<div class="products tab-container">
												<div class="homeproducts-row">
													<!-- Define Number of product for SLIDER -->
													<div class="bestseller-carousel">
														<ul id="bestseller-carousel" class="bestseller-carousel tmg-carousel product_list">

															<li class="bestsellerproductlistitem">
																<ul>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="4" data-id-product-attribute="16" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=4&amp;id_product_attribute=16&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/5/195-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/5/195-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/6/196-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/6/196-large_default.jpg" alt="" />

																				</a>

																				<span class="discount-percentage">-20%</span>

																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="4" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="on-sale">On sale!</li>
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=4&amp;id_product_attribute=16&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/19-dimension-40x60cm">Nascetur Ridiculus</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$23.20</span>






																					<span class="regular-price">$29.00 </span>



																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>3 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="16" data-id-product-attribute="28" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=16&amp;id_product_attribute=28&amp;rewrite=mountain-fox-notebook&amp;controller=product&amp;id_lang=1#/22-paper_type-ruled" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/8/1/281-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/8/1/281-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/8/0/280-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/8/0/280-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="16" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=16&amp;id_product_attribute=28&amp;rewrite=mountain-fox-notebook&amp;controller=product&amp;id_lang=1#/22-paper_type-ruled">purus eu hendrerit viverra</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$12.90</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																</ul>
															</li>

															<li class="bestsellerproductlistitem">
																<ul>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/6/6/166-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/6/6/166-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/6/7/167-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/6/7/167-large_default.jpg" alt="" />

																				</a>

																				<span class="discount-percentage">-20%</span>

																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="1" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="on-sale">On sale!</li>
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white">Aliquam Erat Volutpat</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$19.12</span>






																					<span class="regular-price">$23.90 </span>



																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																						</div>
																						<!--<span>5 Review(s)&nbsp</span>-->
																					</div>
																				</div>  
																				<div class="highlighted-informations hidden-sm-down">
																					<div class="variant-links">
																						<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=1&amp;id_product_attribute=3&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/8-color-white"
																						class="color"
																						title="White"
																						style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
																						<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=1&amp;id_product_attribute=2&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
																						class="color"
																						title="Black"
																						style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
																						<span class="js-count count"></span>
																					</div>

																				</div>

																			</div>
																		</div>

																	</li>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="9" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=2&amp;id_product_attribute=9&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/1-size-s" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/8/7/187-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/8/7/187-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/8/1/181-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/8/1/181-large_default.jpg" alt="" />

																				</a>

																				<span class="discount-percentage">-20%</span>

																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="2" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="discount">Reduced price</li>
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=2&amp;id_product_attribute=9&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/1-size-s">Habitase Platea Dictum</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$28.72</span>






																					<span class="regular-price">$35.90 </span>



																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>4 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																</ul>
															</li>

															<li class="bestsellerproductlistitem">
																<ul>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="6" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=6&amp;id_product_attribute=0&amp;rewrite=mug-the-best-is-yet-to-come&amp;controller=product&amp;id_lang=1" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/0/9/209-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/0/9/209-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/1/0/210-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/1/0/210-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="6" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=6&amp;id_product_attribute=0&amp;rewrite=mug-the-best-is-yet-to-come&amp;controller=product&amp;id_lang=1">Mauris Blandit Vehicula</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$11.90</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>4 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="8" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=8&amp;id_product_attribute=0&amp;rewrite=mug-today-is-a-good-day&amp;controller=product&amp;id_lang=1" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/2/4/224-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/2/4/224-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/2/3/223-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/2/3/223-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="8" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="on-sale">On sale!</li>
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=8&amp;id_product_attribute=0&amp;rewrite=mug-today-is-a-good-day&amp;controller=product&amp;id_lang=1">Donec Semper Tristique</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$11.90</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>3 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																</ul>
															</li>

															<li class="bestsellerproductlistitem">
																<ul>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="10" data-id-product-attribute="24" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=10&amp;id_product_attribute=24&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/8-color-white" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/4/3/243-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/4/3/243-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="noimage" data-full-size-image-url="noimage" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="10" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=10&amp;id_product_attribute=24&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/8-color-white">Justo Neque Commodo Nisl</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$18.90</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations hidden-sm-down">


																					<div class="variant-links">
																						<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=10&amp;id_product_attribute=24&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/8-color-white"
																						class="color"
																						title="White"
																						style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
																						<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=10&amp;id_product_attribute=25&amp;rewrite=brown-bear-cushion&amp;controller=product&amp;id_lang=1#/11-color-black"
																						class="color"
																						title="Black"
																						style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
																						<span class="js-count count"></span>
																					</div>

																				</div>

																			</div>
																		</div>

																	</li>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="5" data-id-product-attribute="19" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=5&amp;id_product_attribute=19&amp;rewrite=today-is-a-good-day-framed-poster&amp;controller=product&amp;id_lang=1#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/0/3/203-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/0/3/203-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/0/2/202-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/0/2/202-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="5" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=5&amp;id_product_attribute=19&amp;rewrite=today-is-a-good-day-framed-poster&amp;controller=product&amp;id_lang=1#/19-dimension-40x60cm">Aliquam Suscipit</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$29.00</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																						</div>
																						<!--<span>5 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																</ul>
															</li>

															<li class="bestsellerproductlistitem">
																<ul>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="7" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=7&amp;id_product_attribute=0&amp;rewrite=mug-the-adventure-begins&amp;controller=product&amp;id_lang=1" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/1/6/216-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/1/6/216-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/1/7/217-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/1/7/217-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="7" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=7&amp;id_product_attribute=0&amp;rewrite=mug-the-adventure-begins&amp;controller=product&amp;id_lang=1">Phasellus Sit Amet Urna</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$11.90</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star star_on"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>4 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="9" data-id-product-attribute="22" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=9&amp;id_product_attribute=22&amp;rewrite=mountain-fox-cushion&amp;controller=product&amp;id_lang=1#/8-color-white" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/3/2/232-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/3/2/232-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/3/0/230-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/3/0/230-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="9" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=9&amp;id_product_attribute=22&amp;rewrite=mountain-fox-cushion&amp;controller=product&amp;id_lang=1#/8-color-white">Suspendisse Massa Nulla</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$18.90</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations hidden-sm-down">


																					<div class="variant-links">
																						<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=9&amp;id_product_attribute=22&amp;rewrite=mountain-fox-cushion&amp;controller=product&amp;id_lang=1#/8-color-white"
																						class="color"
																						title="White"
																						style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
																						<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=9&amp;id_product_attribute=23&amp;rewrite=mountain-fox-cushion&amp;controller=product&amp;id_lang=1#/11-color-black"
																						class="color"
																						title="Black"
																						style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
																						<span class="js-count count"></span>
																					</div>

																				</div>

																			</div>
																		</div>

																	</li>

																</ul>
															</li>

															<li class="bestsellerproductlistitem">
																<ul>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="11" data-id-product-attribute="26" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=11&amp;id_product_attribute=26&amp;rewrite=hummingbird-cushion&amp;controller=product&amp;id_lang=1#/8-color-white" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/4/4/244-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/4/4/244-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/4/5/245-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/4/5/245-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="11" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=11&amp;id_product_attribute=26&amp;rewrite=hummingbird-cushion&amp;controller=product&amp;id_lang=1#/8-color-white">Tellus Eu Volutpat Varius</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$18.90</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations hidden-sm-down">


																					<div class="variant-links">
																						<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=11&amp;id_product_attribute=26&amp;rewrite=hummingbird-cushion&amp;controller=product&amp;id_lang=1#/8-color-white"
																						class="color"
																						title="White"
																						style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
																						<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=11&amp;id_product_attribute=27&amp;rewrite=hummingbird-cushion&amp;controller=product&amp;id_lang=1#/11-color-black"
																						class="color"
																						title="Black"
																						style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
																						<span class="js-count count"></span>
																					</div>

																				</div>

																			</div>
																		</div>

																	</li>

																	<li class="item col-xs-12">

																		<div class="product-miniature js-product-miniature" data-id-product="12" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
																			<div class="thumbnail-container">

																				<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=12&amp;id_product_attribute=0&amp;rewrite=mountain-fox-vector-graphics&amp;controller=product&amp;id_lang=1" class="thumbnail product-thumbnail">
																					<img
																					src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/5/2/252-home_default.jpg"
																					alt = ""
																					data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/5/2/252-large_default.jpg"
																					>
																					<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/5/3/253-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/5/3/253-large_default.jpg" alt="" />

																				</a>


																				<div class="product-actions">
																					<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
																						<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
																						<input type="hidden" name="id_product" value="12" class="product_page_product_id">
																						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
																						<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
																							Add to cart
																						</a>
																						<em>Add to cart</em>
																					</form>
																					<div  class="actions">

																						<a href="#" class="quick-view" data-link-action="quickview">
																							<i class="material-icons search">&#xE417;</i> Quick view
																						</a>
																						<em> Quick view </em>

																					</div>
																				</div>





																				<ul class="product-flags">
																					<li class="new">New</li>
																				</ul>




																			</div>

																			<div class="product-description">


																				<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=12&amp;id_product_attribute=0&amp;rewrite=mountain-fox-vector-graphics&amp;controller=product&amp;id_lang=1">Integer Tempor Lacus Eget</a></span>


																				<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




																				<div class="product-price-and-shipping">



																					<span itemprop="price" class="price">$9.00</span>





																				</div>


																				<div class="product_reviews">


																					<div class="comments_note">
																						<div class="star_content clearfix">
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																							<div class="star"></div>
																						</div>
																						<!--<span>0 Review(s)&nbsp</span>-->
																					</div>


																				</div>  
																				<div class="highlighted-informations no-variants hidden-sm-down">



																				</div>

																			</div>
																		</div>

																	</li>

																</ul>
															</li>
														</ul>
													</div>

												</div>
												<div class="customNavigation">
													<a class="btn prev bestseller_prev">&nbsp;</a>
													<a class="btn next bestseller_next">&nbsp;</a>
												</div>

											</div>
										</section>

									</div>
								</div>					
							</div>				
						</section>

						<!-- ThemeMagics end -->


						<div id="tmgcmsblock">
							<div class="subbannercms">
								<img src="{{asset('assets/img/bg/1.jpg')}}">
							</div>
						</div>
						<div id="tmghomepagecms">
							<div class="service-cms">
								<div class="service-block">
									<div class="services">
										<div class="service-column">
											<div class="service-1 service">
												<div class="services-inner"><span class="service1-icon icon"><span class="service1-icon icon-inner"></span></span>
													<div class="service-content">
														<div class="content-title"><a href="#">24 x 7 free Support</a></div>
														<div class="content-desc">Lorem Ipsum is simply dummy</div>
													</div>
												</div>
											</div>
											<div class="service-2 service">
												<div class="services-inner"><span class="service2-icon icon"><span class="service2-icon icon-inner"></span></span>
													<div class="service-content">
														<div class="content-title"><a href="#">return &amp; exchange</a></div>
														<div class="content-desc">Lorem Ipsum is simply dummy</div>
													</div>
												</div>
											</div>
											<div class="service-3 service">
												<div class="services-inner"><span class="service3-icon icon"><span class="service3-icon icon-inner"></span></span>
													<div class="service-content">
														<div class="content-title"><a href="#">win $100 to shop</a></div>
														<div class="content-desc">Lorem Ipsum is simply dummy</div>
													</div>
												</div>
											</div>
											<div class="service-4 service">
												<div class="services-inner"><span class="service4-icon icon"><span class="service4-icon icon-inner"></span></span>
													<div class="service-content">
														<div class="content-title"><a href="#">free world shipping</a></div>
														<div class="content-desc">Lorem Ipsum is simply dummy</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tmgprallaxcmsblock" class="block parallax" data-source-url="{{asset('assets/img/bg/2.jpg')}}" style="background-image: url('{{asset('assets/img/bg/2.jpg')}}')!important;">
							<div class="prallax-block">
								<div class="about-store">
									<div class="about-store-inner">
										<div class="parallax-icon"><a href="#"><img alt="parallax" src="" /></a></div>
										<div class="store-detail">
											<div class="store-heading1">deals of the week</div>
											<div class="store-description">
												<p>upto 60% off</p>
												<div class="more"><a class="btn btn-primary add-to-cart">shop all</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<section class="brands">
							<h2 class="h1 products-section-title text-uppercase">
								<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=manufacturer" title="Our partners">			Our Partners
								</a>	</h2>

								<div class="products">


									<!-- Define Number of product for SLIDER -->

									<ul id="brand-carousel" class="tmg-carousel product_list">

										<li class="item">
											<div class="brand-image">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1" title="Brand 1">
													<img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/m/2.jpg" alt="Brand 1" />
												</a>
											</div>
										</li>
										<li class="item">
											<div class="brand-image">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1" title="Brand 2">
													<img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/m/1.jpg" alt="Brand 2" />
												</a>
											</div>
										</li>
										<li class="item">
											<div class="brand-image">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_manufacturer=3&amp;controller=manufacturer&amp;id_lang=1" title="Brand 3">
													<img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/m/3.jpg" alt="Brand 3" />
												</a>
											</div>
										</li>
										<li class="item">
											<div class="brand-image">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_manufacturer=4&amp;controller=manufacturer&amp;id_lang=1" title="Brand 4">
													<img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/m/4.jpg" alt="Brand 4" />
												</a>
											</div>
										</li>
										<li class="item">
											<div class="brand-image">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_manufacturer=5&amp;controller=manufacturer&amp;id_lang=1" title="Brand 5">
													<img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/m/5.jpg" alt="Brand 5" />
												</a>
											</div>
										</li>
										<li class="item">
											<div class="brand-image">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_manufacturer=6&amp;controller=manufacturer&amp;id_lang=1" title="Brand 6">
													<img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/m/6.jpg" alt="Brand 6" />
												</a>
											</div>
										</li>
										<li class="item">
											<div class="brand-image">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_manufacturer=7&amp;controller=manufacturer&amp;id_lang=1" title="Brand 7">
													<img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/m/7.jpg" alt="Brand 7" />
												</a>
											</div>
										</li>
										<li class="item">
											<div class="brand-image">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_manufacturer=8&amp;controller=manufacturer&amp;id_lang=1" title="Brand 8">
													<img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/m/8.jpg" alt="Brand 8" />
												</a>
											</div>
										</li>
										<li class="item">
											<div class="brand-image">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_manufacturer=9&amp;controller=manufacturer&amp;id_lang=1" title="Brand 9">
													<img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/m/9.jpg" alt="Brand 9" />
												</a>
											</div>
										</li>

									</ul>
									<div class="customNavigation">
										<a class="btn prev brand_prev">&nbsp;</a>
										<a class="btn next brand_next">&nbsp;</a>
									</div>
								</div>
							</section>
							<!-- Block Last post-->

							<div class="lastest_block block tmgblog-latest">
								<h2 class="h1 products-section-title text-uppercase">
									Latest News
								</h2>
								<div class="products">		
									<div class="homeblog-inner">
										<!-- Define Number of product for SLIDER -->
										<ul id="blog-carousel" class="ps-carousel product_list">

											<li class="blog-post item ">
												<div class="blog-item">
													<div class="blog-image text-xs-center">

														<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=6&amp;controller=blog&amp;id_lang=1" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="link">
															<img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/psblog/b/6/_/b-5.jpg" alt="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="img-fluid"/>
														</a>
														<!--<span class="more"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=6&amp;controller=blog&amp;id_lang=1" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="link"><i class="material-icons">link</i></a></span>-->

													</div>
													<div class="blog-meta-block">	  

									<!--	<span class="blog-cat"> 
											<span class="fa fa-list"> In:</span> 
											<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=4&amp;controller=category&amp;id_lang=1" title="Sub Category 1">Sub Category 1</a>
										</span>-->
										<div class="blog-meta">							
											<span class="blog-created">
												<!--<span class="fa fa-calendar"> On: </span> -->
												<time class="date" datetime="2013">
													<!-- month-->
													<span class="day-of-date">18</span>
													<span class="month-of-date">Dec	</span>		<!-- day of month -->
													<span class="year-of-date">2013</span>		<!-- year -->
												</time>
											</span>
										</div>

										<div class="blog-content-wrap">	
											<h4 class="title">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=6&amp;controller=blog&amp;id_lang=1" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum">Urna pretium elit mauris cursus Curabitur at elit Vestibulum</a>
											</h4>			
											<div class="blog-shortinfo">
												Mi vitae magnis Fusce laoreet nibh felis...										
												<div class="readmore">
													<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=6&amp;controller=blog&amp;id_lang=1" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="btn">Read more</a>
												</div>
											</div>
											
											
											<span class="blog-author">
												<!--<span class="fa fa-user"> Posted By:</span> -->
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?author=1&amp;fc=module&amp;module=psblog&amp;controller=list&amp;id_lang=1" title="Admin Admin">Admin Admin</a> 
											</span>	
											<span class="blog-hit">
												<!--<i class="fa fa-heart"></i>-->Hit: 
												154
											</span>				
										</div>
									</div>
								</div>
							</li>
							<li class="blog-post item ">
								<div class="blog-item">
									<div class="blog-image text-xs-center">

										<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=7&amp;controller=blog&amp;id_lang=1" title="Morbi condimentum molestie Nam enim odio sodales" class="link">
											<img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/psblog/b/7/_/b-6.jpg" alt="Morbi condimentum molestie Nam enim odio sodales" class="img-fluid"/>
										</a>
										<!--<span class="more"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=7&amp;controller=blog&amp;id_lang=1" title="Morbi condimentum molestie Nam enim odio sodales" class="link"><i class="material-icons">link</i></a></span>-->

									</div>
									<div class="blog-meta-block">	  

									<!--	<span class="blog-cat"> 
											<span class="fa fa-list"> In:</span> 
											<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=4&amp;controller=category&amp;id_lang=1" title="Sub Category 1">Sub Category 1</a>
										</span>-->
										<div class="blog-meta">							
											<span class="blog-created">
												<!--<span class="fa fa-calendar"> On: </span> -->
												<time class="date" datetime="2013">
													<!-- month-->
													<span class="day-of-date">18</span>
													<span class="month-of-date">Dec	</span>		<!-- day of month -->
													<span class="year-of-date">2013</span>		<!-- year -->
												</time>
											</span>
										</div>

										<div class="blog-content-wrap">	
											<h4 class="title">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=7&amp;controller=blog&amp;id_lang=1" title="Morbi condimentum molestie Nam enim odio sodales">Morbi condimentum molestie Nam enim odio sodales</a>
											</h4>			
											<div class="blog-shortinfo">
												Sed mauris Pellentesque elit Aliquam at lacus...										
												<div class="readmore">
													<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=7&amp;controller=blog&amp;id_lang=1" title="Morbi condimentum molestie Nam enim odio sodales" class="btn">Read more</a>
												</div>
											</div>
											
											
											<span class="blog-author">
												<!--<span class="fa fa-user"> Posted By:</span> -->
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?author=1&amp;fc=module&amp;module=psblog&amp;controller=list&amp;id_lang=1" title="Admin Admin">Admin Admin</a> 
											</span>	
											<span class="blog-hit">
												<!--<i class="fa fa-heart"></i>-->Hit: 
												112
											</span>				
										</div>
									</div>
								</div>
							</li>
							<li class="blog-post item ">
								<div class="blog-item">
									<div class="blog-image text-xs-center">

										<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=8&amp;controller=blog&amp;id_lang=1" title="Turpis at eleifend ps mi elit Aenean porta ac sed faucibus" class="link">
											<img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/psblog/b/8/_/b-2.jpg" alt="Turpis at eleifend ps mi elit Aenean porta ac sed faucibus" class="img-fluid"/>
										</a>
										<!--<span class="more"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=8&amp;controller=blog&amp;id_lang=1" title="Turpis at eleifend ps mi elit Aenean porta ac sed faucibus" class="link"><i class="material-icons">link</i></a></span>-->

									</div>
									<div class="blog-meta-block">	  

									<!--	<span class="blog-cat"> 
											<span class="fa fa-list"> In:</span> 
											<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=4&amp;controller=category&amp;id_lang=1" title="Sub Category 1">Sub Category 1</a>
										</span>-->
										<div class="blog-meta">							
											<span class="blog-created">
												<!--<span class="fa fa-calendar"> On: </span> -->
												<time class="date" datetime="2013">
													<!-- month-->
													<span class="day-of-date">18</span>
													<span class="month-of-date">Dec	</span>		<!-- day of month -->
													<span class="year-of-date">2013</span>		<!-- year -->
												</time>
											</span>
										</div>

										<div class="blog-content-wrap">	
											<h4 class="title">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=8&amp;controller=blog&amp;id_lang=1" title="Turpis at eleifend ps mi elit Aenean porta ac sed faucibus">Turpis at eleifend ps mi elit Aenean porta ac sed faucibus</a>
											</h4>			
											<div class="blog-shortinfo">
												Turpis at eleifend ps mi elit Aenean porta ac...										
												<div class="readmore">
													<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=8&amp;controller=blog&amp;id_lang=1" title="Turpis at eleifend ps mi elit Aenean porta ac sed faucibus" class="btn">Read more</a>
												</div>
											</div>
											
											
											<span class="blog-author">
												<!--<span class="fa fa-user"> Posted By:</span> -->
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?author=1&amp;fc=module&amp;module=psblog&amp;controller=list&amp;id_lang=1" title="Admin Admin">Admin Admin</a> 
											</span>	
											<span class="blog-hit">
												<!--<i class="fa fa-heart"></i>-->Hit: 
												35
											</span>				
										</div>
									</div>
								</div>
							</li>
							<li class="blog-post item ">
								<div class="blog-item">
									<div class="blog-image text-xs-center">

										<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=9&amp;controller=blog&amp;id_lang=1" title="Nullam ullamcorper nisl quis ornare molestie" class="link">
											<img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/psblog/b/9/_/b-3.jpg" alt="Nullam ullamcorper nisl quis ornare molestie" class="img-fluid"/>
										</a>
										<!--<span class="more"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=9&amp;controller=blog&amp;id_lang=1" title="Nullam ullamcorper nisl quis ornare molestie" class="link"><i class="material-icons">link</i></a></span>-->

									</div>
									<div class="blog-meta-block">	  

									<!--	<span class="blog-cat"> 
											<span class="fa fa-list"> In:</span> 
											<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=4&amp;controller=category&amp;id_lang=1" title="Sub Category 1">Sub Category 1</a>
										</span>-->
										<div class="blog-meta">							
											<span class="blog-created">
												<!--<span class="fa fa-calendar"> On: </span> -->
												<time class="date" datetime="2013">
													<!-- month-->
													<span class="day-of-date">18</span>
													<span class="month-of-date">Dec	</span>		<!-- day of month -->
													<span class="year-of-date">2013</span>		<!-- year -->
												</time>
											</span>
										</div>

										<div class="blog-content-wrap">	
											<h4 class="title">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=9&amp;controller=blog&amp;id_lang=1" title="Nullam ullamcorper nisl quis ornare molestie">Nullam ullamcorper nisl quis ornare molestie</a>
											</h4>			
											<div class="blog-shortinfo">
												Suspendisse posuere, diam in bibendum lobortis,...										
												<div class="readmore">
													<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=9&amp;controller=blog&amp;id_lang=1" title="Nullam ullamcorper nisl quis ornare molestie" class="btn">Read more</a>
												</div>
											</div>
											
											
											<span class="blog-author">
												<!--<span class="fa fa-user"> Posted By:</span> -->
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?author=1&amp;fc=module&amp;module=psblog&amp;controller=list&amp;id_lang=1" title="Admin Admin">Admin Admin</a> 
											</span>	
											<span class="blog-hit">
												<!--<i class="fa fa-heart"></i>-->Hit: 
												24
											</span>				
										</div>
									</div>
								</div>
							</li>
							<li class="blog-post item ">
								<div class="blog-item">
									<div class="blog-image text-xs-center">

										<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=5&amp;controller=blog&amp;id_lang=1" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="link">
											<img src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/psblog/b/5/_/b-4.jpg" alt="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="img-fluid"/>
										</a>
										<!--<span class="more"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=5&amp;controller=blog&amp;id_lang=1" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="link"><i class="material-icons">link</i></a></span>-->

									</div>
									<div class="blog-meta-block">	  

									<!--	<span class="blog-cat"> 
											<span class="fa fa-list"> In:</span> 
											<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=4&amp;controller=category&amp;id_lang=1" title="Sub Category 1">Sub Category 1</a>
										</span>-->
										<div class="blog-meta">							
											<span class="blog-created">
												<!--<span class="fa fa-calendar"> On: </span> -->
												<time class="date" datetime="2013">
													<!-- month-->
													<span class="day-of-date">16</span>
													<span class="month-of-date">Dec	</span>		<!-- day of month -->
													<span class="year-of-date">2013</span>		<!-- year -->
												</time>
											</span>
										</div>

										<div class="blog-content-wrap">	
											<h4 class="title">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=5&amp;controller=blog&amp;id_lang=1" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum">Urna pretium elit mauris cursus Curabitur at elit Vestibulum</a>
											</h4>			
											<div class="blog-shortinfo">
												Mi vitae magnis Fusce laoreet nibh felis...										
												<div class="readmore">
													<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?fc=module&amp;module=psblog&amp;id=5&amp;controller=blog&amp;id_lang=1" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" class="btn">Read more</a>
												</div>
											</div>
											
											
											<span class="blog-author">
												<!--<span class="fa fa-user"> Posted By:</span> -->
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?author=1&amp;fc=module&amp;module=psblog&amp;controller=list&amp;id_lang=1" title="Admin Admin">Admin Admin</a> 
											</span>	
											<span class="blog-hit">
												<!--<i class="fa fa-heart"></i>-->Hit: 
												37
											</span>				
										</div>
									</div>
								</div>
							</li>
						</ul>

						<div class="customNavigation">
							<a class="btn prev blog_prev">&nbsp;</a>
							<a class="btn next blog_next">&nbsp;</a>
						</div>
					</div>
				</div>	
			</div>
			<!-- /Block Last Post -->
			<section class="special-products">
				<h2 class="h1 products-section-title text-uppercase">
					<a href="#">Special products</a>
				</h2>
				<div class="products tab-container">
					<div class="homeproducts-row">
						<!-- Define Number of product for SLIDER -->
						<ul id="special-grid" class="special-grid grid row gridcount product_list">
							<li class="product_item col-xs-12 col-sm-6 col-md-4 col-lg-3">

								<div class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="9" itemscope itemtype="http://schema.org/Product">
									<div class="thumbnail-container">

										<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=2&amp;id_product_attribute=9&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/1-size-s" class="thumbnail product-thumbnail">
											<img
											src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/8/7/187-home_default.jpg"
											alt = ""
											data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/8/7/187-large_default.jpg"
											>
											<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/8/1/181-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/8/1/181-large_default.jpg" alt="" />

										</a>

										<span class="discount-percentage">-20%</span>

										<div class="product-actions">
											<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
												<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
												<input type="hidden" name="id_product" value="2" class="product_page_product_id">
												<input type="hidden" name="id_customization" value="0" class="product_customization_id">
												<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
													Add to cart
												</a>
												<em>Add to cart</em>
											</form>
											<div  class="actions">

												<a href="#" class="quick-view" data-link-action="quickview">
													<i class="material-icons search">&#xE417;</i> Quick view
												</a>
												<em> Quick view </em>

											</div>
										</div>





										<ul class="product-flags">
											<li class="discount">Reduced price</li>
											<li class="new">New</li>
										</ul>




									</div>

									<div class="product-description">


										<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=2&amp;id_product_attribute=9&amp;rewrite=brown-bear-printed-sweater&amp;controller=product&amp;id_lang=1#/1-size-s">Habitase Platea Dictum</a></span>


										<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




										<div class="product-price-and-shipping">



											<span itemprop="price" class="price">$28.72</span>






											<span class="regular-price">$35.90 </span>



										</div>


										<div class="product_reviews">


											<div class="comments_note">
												<div class="star_content clearfix">
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star"></div>
												</div>
												<!--<span>4 Review(s)&nbsp</span>-->
											</div>


										</div>  
										<div class="highlighted-informations no-variants hidden-sm-down">



										</div>

									</div>
								</div>

							</li>
							<li class="product_item col-xs-12 col-sm-6 col-md-4 col-lg-3">

								<div class="product-miniature js-product-miniature" data-id-product="3" data-id-product-attribute="13" itemscope itemtype="http://schema.org/Product">
									<div class="thumbnail-container">

										<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=3&amp;id_product_attribute=13&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
											<img
											src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/8/9/189-home_default.jpg"
											alt = ""
											data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/8/9/189-large_default.jpg"
											>
											<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/0/190-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/0/190-large_default.jpg" alt="" />

										</a>

										<span class="discount-percentage">-20%</span>

										<div class="product-actions">
											<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
												<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
												<input type="hidden" name="id_product" value="3" class="product_page_product_id">
												<input type="hidden" name="id_customization" value="0" class="product_customization_id">
												<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
													Add to cart
												</a>
												<em>Add to cart</em>
											</form>
											<div  class="actions">

												<a href="#" class="quick-view" data-link-action="quickview">
													<i class="material-icons search">&#xE417;</i> Quick view
												</a>
												<em> Quick view </em>

											</div>
										</div>





										<ul class="product-flags">
											<li class="discount">Reduced price</li>
											<li class="new">New</li>
										</ul>




									</div>

									<div class="product-description">


										<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=3&amp;id_product_attribute=13&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/19-dimension-40x60cm">Nullam Mollis Dolor Ac</a></span>


										<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




										<div class="product-price-and-shipping">



											<span itemprop="price" class="price">$23.20</span>






											<span class="regular-price">$29.00 </span>



										</div>


										<div class="product_reviews">


											<div class="comments_note">
												<div class="star_content clearfix">
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star"></div>
												</div>
												<!--<span>4 Review(s)&nbsp</span>-->
											</div>


										</div>  
										<div class="highlighted-informations no-variants hidden-sm-down">



										</div>

									</div>
								</div>

							</li>
							<li class="product_item col-xs-12 col-sm-6 col-md-4 col-lg-3">

								<div class="product-miniature js-product-miniature" data-id-product="4" data-id-product-attribute="16" itemscope itemtype="http://schema.org/Product">
									<div class="thumbnail-container">

										<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=4&amp;id_product_attribute=16&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
											<img
											src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/5/195-home_default.jpg"
											alt = ""
											data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/5/195-large_default.jpg"
											>
											<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/6/196-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/6/196-large_default.jpg" alt="" />

										</a>

										<span class="discount-percentage">-20%</span>

										<div class="product-actions">
											<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
												<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
												<input type="hidden" name="id_product" value="4" class="product_page_product_id">
												<input type="hidden" name="id_customization" value="0" class="product_customization_id">
												<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
													Add to cart
												</a>
												<em>Add to cart</em>
											</form>
											<div  class="actions">

												<a href="#" class="quick-view" data-link-action="quickview">
													<i class="material-icons search">&#xE417;</i> Quick view
												</a>
												<em> Quick view </em>

											</div>
										</div>





										<ul class="product-flags">
											<li class="on-sale">On sale!</li>
											<li class="new">New</li>
										</ul>




									</div>

									<div class="product-description">


										<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=4&amp;id_product_attribute=16&amp;rewrite=the-adventure-begins-framed-poster&amp;controller=product&amp;id_lang=1#/19-dimension-40x60cm">Nascetur Ridiculus</a></span>


										<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




										<div class="product-price-and-shipping">



											<span itemprop="price" class="price">$23.20</span>






											<span class="regular-price">$29.00 </span>



										</div>


										<div class="product_reviews">


											<div class="comments_note">
												<div class="star_content clearfix">
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star"></div>
													<div class="star"></div>
												</div>
												<!--<span>3 Review(s)&nbsp</span>-->
											</div>


										</div>  
										<div class="highlighted-informations no-variants hidden-sm-down">



										</div>

									</div>
								</div>

							</li>
							<li class="product_item col-xs-12 col-sm-6 col-md-4 col-lg-3">

								<div class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope itemtype="http://schema.org/Product">
									<div class="thumbnail-container">

										<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
											<img
											src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/6/6/166-home_default.jpg"
											alt = ""
											data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/6/6/166-large_default.jpg"
											>
											<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/6/7/167-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/6/7/167-large_default.jpg" alt="" />

										</a>

										<span class="discount-percentage">-20%</span>

										<div class="product-actions">
											<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
												<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
												<input type="hidden" name="id_product" value="1" class="product_page_product_id">
												<input type="hidden" name="id_customization" value="0" class="product_customization_id">
												<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
													Add to cart
												</a>
												<em>Add to cart</em>
											</form>
											<div  class="actions">

												<a href="#" class="quick-view" data-link-action="quickview">
													<i class="material-icons search">&#xE417;</i> Quick view
												</a>
												<em> Quick view </em>

											</div>
										</div>





										<ul class="product-flags">
											<li class="on-sale">On sale!</li>
											<li class="new">New</li>
										</ul>




									</div>

									<div class="product-description">


										<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=1&amp;id_product_attribute=1&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/8-color-white">Aliquam Erat Volutpat</a></span>


										<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




										<div class="product-price-and-shipping">



											<span itemprop="price" class="price">$19.12</span>






											<span class="regular-price">$23.90 </span>



										</div>


										<div class="product_reviews">


											<div class="comments_note">
												<div class="star_content clearfix">
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
													<div class="star star_on"></div>
												</div>
												<!--<span>5 Review(s)&nbsp</span>-->
											</div>


										</div>  
										<div class="highlighted-informations hidden-sm-down">


											<div class="variant-links">
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=1&amp;id_product_attribute=3&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/2-size-m/8-color-white"
												class="color"
												title="White"
												style="background-color: #ffffff"           ><span class="sr-only">White</span></a>
												<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=1&amp;id_product_attribute=2&amp;rewrite=hummingbird-printed-t-shirt&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black"
												class="color"
												title="Black"
												style="background-color: #434A54"           ><span class="sr-only">Black</span></a>
												<span class="js-count count"></span>
											</div>

										</div>

									</div>
								</div>

							</li>
							<li class="product_item col-xs-12 col-sm-6 col-md-4 col-lg-3">

								<div class="product-miniature js-product-miniature" data-id-product="18" data-id-product-attribute="36" itemscope itemtype="http://schema.org/Product">
									<div class="thumbnail-container">

										<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=18&amp;id_product_attribute=36&amp;rewrite=mountain-fox-notebook&amp;controller=product&amp;id_lang=1#/22-paper_type-ruled" class="thumbnail product-thumbnail">
											<img
											src = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/9/8/298-home_default.jpg"
											alt = ""
											data-full-size-image-url = "https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/9/8/298-large_default.jpg"
											>
											<img class="replace-2x img_1 img-responsive" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/9/4/294-home_default.jpg" data-full-size-image-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/9/4/294-large_default.jpg" alt="" />

										</a>

										<span class="discount-percentage">-20%</span>

										<div class="product-actions">
											<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
												<input type="hidden" name="token" value="0a3246eb643072361cce794754902474">
												<input type="hidden" name="id_product" value="18" class="product_page_product_id">
												<input type="hidden" name="id_customization" value="0" class="product_customization_id">
												<a class="btn btn-primary add-to-cart" data-button-action="add-to-cart" >
													Add to cart
												</a>
												<em>Add to cart</em>
											</form>
											<div  class="actions">

												<a href="#" class="quick-view" data-link-action="quickview">
													<i class="material-icons search">&#xE417;</i> Quick view
												</a>
												<em> Quick view </em>

											</div>
										</div>





										<ul class="product-flags">
											<li class="on-sale">On sale!</li>
											<li class="new">New</li>
										</ul>




									</div>

									<div class="product-description">


										<span class="h3 product-title" itemprop="name"><a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=18&amp;id_product_attribute=36&amp;rewrite=mountain-fox-notebook&amp;controller=product&amp;id_lang=1#/22-paper_type-ruled">Mus lorem sitdus</a></span>


										<div class="product-detail" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>




										<div class="product-price-and-shipping">



											<span itemprop="price" class="price">$10.32</span>






											<span class="regular-price">$12.90 </span>



										</div>


										<div class="product_reviews">


											<div class="comments_note">
												<div class="star_content clearfix">
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
													<div class="star"></div>
												</div>
												<!--<span>0 Review(s)&nbsp</span>-->
											</div>


										</div>  
										<div class="highlighted-informations no-variants hidden-sm-down">



										</div>

									</div>
								</div>

							</li>

						</ul>
						<a class="all-product-link pull-xs-left pull-md-right h4" href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=prices-drop">
							View More
						</a>		

					</div>
					<div class="banner-block">

					</div>

				</div>
			</section>


		</div>
	</div>

	{{-- modal quick view --}}
	<div class="modal fade quickview in" id="modal-quick-view" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" style="max-width: 1000px;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="images-container col-md-6 col-sm-6 row">
							<div class="col-md-6 qv-image1" >
							</div>
							<div class="col-md-6 qv-image2">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<h1 class="h1 product-qv-name"></h1>
							<div class="product-prices">
								<div class="product-discount">
									<span class="regular-price product-qv-price"></span>
								</div>
								<div class="product-price h5 has-discount" itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
									<link itemprop="availability" href="https://schema.org/InStock">
									<meta itemprop="priceCurrency" content="USD">
									<div class="current-price">
										<span class="product-qv-price-sale" itemprop="price" content="19.12"></span>
										<span class="discount discount-percentage">Save 20%</span>
									</div>
								</div>
								<div class="tax-shipping-delivery-label">
								</div>
							</div>
							<div id="product-description-short" itemprop="description">
								<p class="product-qv-description"></p>
							</div>
							<div class="product-actions">
								<form action="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart" method="post" id="add-to-cart-or-refresh" class="AVAST_PAM_nonloginform">
									<input type="hidden" name="token" value="4c847da4ae5102301922a1c1f6a7fd6e">
									<input type="hidden" name="id_product" value="1" id="product_page_product_id">
									<input type="hidden" name="id_customization" value="0" id="product_customization_id">
									<div class="product-variants">
										<div class="clearfix product-variants-item">
											<span class="control-label">Size</span>
											<select id="group_1" data-product-attribute="1" name="group[1]">
												<option value="1" title="S" selected="selected">S</option>
												<option value="2" title="M">M</option>
												<option value="3" title="L">L</option>
												<option value="4" title="XL">XL</option>
											</select>
										</div>
									</div>
									<div class="product-add-to-cart">
										<span class="control-label product-qv-quantity"></span>
										<div class="product-quantity">
											<div class="qty">
												<div class="input-group bootstrap-touchspin">
													<span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
													<input type="text" name="qty" id="quantity_wanted" value="1" class="input-group form-control" min="1" style="display: block;">
													<span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
													<span class="input-group-btn-vertical">
														<button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
															<i class="material-icons touchspin-up"></i>
														</button>
														<button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">
															<i class="material-icons touchspin-down"></i>
														</button>
													</span>
												</div>
											</div>
											<div class="add">
												<button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit">
													<i class="material-icons shopping-cart"></i>
													Add to cart
												</button>
											</div>
											<span id="product-availability">
											</span>
										</div>
										<div class="clearfix"></div>
										<p class="product-minimal-quantity">
										</p>
									</div>
									<input class="product-refresh" data-url-update="false" name="refresh" type="submit" value="Refresh" hidden="">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

@section('footer')
<script type="text/javascript">
	$(document).on('click','.quick-view',function (e) {
		e.preventDefault();
		var id = $(this).attr('data-id');
		$('.qv-image1').html('');
		$('.qv-image2').html('');
		$.ajax({
			type: 'get',
			url: '/product/quickview?id=' + id,
			success: function (response) {
				console.log(response);
				$('.product-qv-name').html(response.product.name);
				$('.product-qv-price').html(response.product.price);
				$('.product-qv-price-sale').html(response.product.price_sale);
				$('.product-qv-description').html(response.product.description);
				$('.product-qv-quantity').html(response.product.quantity);
				$.each(response.product.images, function( key, value ) {
					if(key < 3){
						$('.qv-image1').append('<img src="{{asset('assets/img/products')}}/' + value.link + '" style=" height: 200px; background:#f4f4f4; margin-bottom: 20px">');
					}if(key>= 3){
						$('.qv-image2').append('<img src="{{asset('assets/img/products')}}/' + value.link + '" style=" height: 200px; background:#f4f4f4; margin-bottom: 20px">');
					}
				});
			}
		})
	})
</script>
@endsection