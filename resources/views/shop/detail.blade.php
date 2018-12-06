@extends('layouts.master')


@section('content')

{{-- css --}}
<style type="text/css">
.size {
	display: inline-block;
	position: relative;
	margin-right: 100px;
	margin-top: 10px;
	margin-bottom: 70px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

/* Hide the browser's default radio button */
.size input {
	position: absolute;
	opacity: 0;
	cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
	position: absolute;
	top: 0;
	left: 0;
	padding: 10px; 
	border-radius: 5px; 
	border: solid 1px #cecece; 
	width: 90px;
	height: 60px;
	size: 15px; 
	background-color: white; 
	color: black;
}

/* On mouse-over, add a grey background color */
.size:hover input ~ .checkmark {
	border: 1px solid black;
}

/* When the radio button is checked, add a blue background */
.size input:checked ~ .checkmark {
	background-color: black;
	color: white;
}
/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
	content: "";
	position: absolute;
	display: none;
}

/* Show the indicator (dot/circle) when checked */
.size input:checked ~ .checkmark:after {
	display: block;
}

</style>
<section id="wrapper">
	<div class="bread">
		<nav data-depth="3" class="breadcrumb" style="background: linear-gradient(45deg,rgba(71,201,229,0.9) 0,rgba(102,252,233,0.9) 100%)!important;height: 80px; padding-top: 25px; font-size: 20px">
			<ol itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="">
						<span itemprop="name">Home</span>
					</a>
					<meta itemprop="position" content="1">
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="">
						<span itemprop="name">Top Brands</span>
					</a>
					<meta itemprop="position" content="2">
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="">
						<span itemprop="name">{{$product->name}}</span>
					</a>
					<meta itemprop="position" content="3">
				</li>
			</ol>
		</nav>
	</div>
	<div class="container">	
		<div class="row" style="padding-left: 40px; padding-right: 40px; padding-top: 50px; padding-bottom: 50px">	
			<div id="columns_inner">
				<div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12">
					<section id="main" itemscope itemtype="https://schema.org/Product">
						<meta itemprop="url" content="">
						<div class="row">
							<div class="col-md-6 image-part">
								<section class="page-content" id="content">
									<div class="product-leftside">
										<ul class="product-flags">
											<li class="product-flag discount">Reduced price</li>
											<li class="product-flag new">New</li>
										</ul>
										<div class="images-container">
											<div class="product-cover">
												@foreach($product->images as $key => $image)
												<?php if ($key == 0) { ?>
												<img id="zoom" class="js-qv-product-cover" src="{{asset('assets/img/products')}}/{{$image->link}}" alt="" title="" style="width:100%;" itemprop="image">
												<?php } ?>
												@endforeach
												<div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
													<i class="material-icons zoom-in">&#xE8FF;</i>
												</div>
											</div>
											<!-- Define Number of product for SLIDER -->
											<div class="js-qv-mask js-qv-product-images mask additional_slider">
												<ul id="additional-carousel" class="tmg-carousel product_list">
													@foreach($product->images as $image)
													<li class="thumb-container item">
														<div class="thumb-container-inner">
															<img
															class="thumb js-thumb  selected "
															data-image-medium-src="{{asset('assets/img/products')}}/{{$image->link}}"
															data-image-large-src="{{asset('assets/img/products')}}/{{$image->link}}"
															src="{{asset('assets/img/products')}}/{{$image->link}}"
															alt="" title="" width="100" itemprop="image">
														</div>
													</li>
													@endforeach
												</ul>
												<div class="customNavigation">
													<a class="btn prev additional_prev">&nbsp;</a>
													<a class="btn next additional_next">&nbsp;</a>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
							<div class="col-md-6 details-part">
								<h1 class="h1 productpage_title" itemprop="name" style="font-size: 50px; line-height: 1">{{$product->name}}</h1>
								<div class="product-prices">
									<div class="product-discount">
										<span class="regular-price" style="text-decoration: line-through red; font-size: 20px">{{number_format($product->price)}}</span>
										<!--  -->
									</div>
									<div class="product-price h5 has-discount" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
										<link itemprop="availability" href="https://schema.org/InStock"/>
										<meta itemprop="priceCurrency" content="USD">

										<div class="current-price">
											<span itemprop="price" content="23.2" style="font-size: 30px">{{number_format($product->price_sale)}}</span>
											<span class="discount discount-percentage">Save 20%</span>
										</div>
									</div>
									<div class="tax-shipping-delivery-label">
									</div>
								</div>
								<div class="product-information">
									<div class="product-actions">
										<form action="" method="post" id="add2cart-form" data-url="{{asset('product/add2cart')}}">
											<div class="product-variants">
												<div class="clearfix product-variants-item row">
													<span class="control-label col-md-12" style="font-size: 20px">Select Size: </span><br>
													<div class="col-md-12">
														@foreach($product->sizes as $size)
														<label class="size">
															<input type="radio" class="size1" name="size" value="{{$size->size}}">
															<span class="checkmark">{{$size->size}}</span>
														</label>
														@endforeach	
													</div>
												</div>
											</div>
											<section class="product-discounts">
											</section>
											<div class="product-add-to-cart">
												<div class="add" style="margin-top: 50px">
													<button data-slug="{{$product->slug}}" class="btn btn-primary add-to-cart add2cart-btn" type="submit">Add to cart</button>
												</div>
												<div class="clearfix"></div>
												<p class="product-minimal-quantity">
												</p>
											</div>
											<div class="product-additional-info">
												<div class="social-sharing">
													<span>Share</span>
													<ul>
														<li class="facebook icon-gray">
															<a href="#" class="text-hide" title="Share" target="_blank">Share</a>
														</li>
														<li class="twitter icon-gray">
															<a href="#" class="text-hide" title="Tweet" target="_blank">Tweet</a>
														</li>
														<li class="googleplus icon-gray">
															<a href="#" class="text-hide" title="Google+" target="_blank">Google+</a>
														</li>
														<li class="pinterest icon-gray">
															<a href="#" class="text-hide" title="Pinterest" target="_blank">Pinterest</a>
														</li>
													</ul>
												</div>
											</div>
										</form>
									</div>   
								</div>
							</div>
						</div>
						<section class="product-tabcontent">	
							<div class="tabs">
								<ul class="nav nav-tabs">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#description">Description</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#product-details">Product Details</a>
									</li>
								</ul>
								<div class="tab-content" id="tab-content">
									<div class="tab-pane fade in active" id="description">
										<div class="product-description">{{$product->description}}</div>
									</div>
									<div class="tab-pane fade" id="product-details" data-product="">
										{{-- @foreach($product_attributes as $row)
										<p>{{\Attribute::where('id',$row->attribute_id)->display_name}}{{$row->$value}}</p>
										@endforeach --}}
									</div>
								</div>
							</div>
						</section>
						<!-- Define Number of product for SLIDER -->
					</section>
					<div class="modal fade js-product-images-modal" id="product-modal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<figure>
										<img class="js-modal-product-cover product-cover-modal" width="1000" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/8/9/189-large_default.jpg" alt="" title="" itemprop="image">
										<figcaption class="image-caption">
											<div id="product-description-short" itemprop="description"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem.</p></div>
										</figcaption>
									</figure>
									<aside id="thumbnails" class="thumbnails js-thumbnails text-xs-center">
										<div class="js-modal-mask mask ">
											<ul class="product-images js-modal-product-images">
												<li class="thumb-container">
													<img data-image-large-src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/8/9/189-large_default.jpg" class="thumb js-modal-thumb" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/8/9/189-home_default.jpg" alt="" title="" width="375" itemprop="image">
												</li>
												<li class="thumb-container">
													<img data-image-large-src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/0/190-large_default.jpg" class="thumb js-modal-thumb" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/0/190-home_default.jpg" alt="" title="" width="375" itemprop="image">
												</li>
												<li class="thumb-container">
													<img data-image-large-src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/1/191-large_default.jpg" class="thumb js-modal-thumb" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/1/191-home_default.jpg" alt="" title="" width="375" itemprop="image">
												</li>
												<li class="thumb-container">
													<img data-image-large-src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/2/192-large_default.jpg" class="thumb js-modal-thumb" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/2/192-home_default.jpg" alt="" title="" width="375" itemprop="image">
												</li>
												<li class="thumb-container">
													<img data-image-large-src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/3/193-large_default.jpg" class="thumb js-modal-thumb" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/3/193-home_default.jpg" alt="" title="" width="375" itemprop="image">
												</li>
												<li class="thumb-container">
													<img data-image-large-src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/4/194-large_default.jpg" class="thumb js-modal-thumb" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/9/4/194-home_default.jpg" alt="" title="" width="375" itemprop="image">
												</li>
												<li class="thumb-container">
													<img data-image-large-src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/3/1/0/310-large_default.jpg" class="thumb js-modal-thumb" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/3/1/0/310-home_default.jpg" alt="" title="" width="375" itemprop="image">
												</li>
											</ul>
										</div>
										<div class="arrows js-modal-arrows">
											<i class="material-icons arrow-up js-modal-arrow-up">&#xE5C7;</i>
											<i class="material-icons arrow-down js-modal-arrow-down">&#xE5C5;</i>
										</div>
									</aside>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
				</main>

				@endsection

				@section('footer')

				<script type="text/javascript">
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});


					$(document).ready(function () {
						$('#add2cart-form').submit(function (e) {
							e.preventDefault();
							var url = $(this).attr('data-url');
							var slug = $('.add2cart-btn').attr('data-slug');
							if ($('.size1').prop('checked')) {
								var size = $('.size1').val();
							}

							$.ajax({
								type: 'post',
								url: url,
								data:{
									slug: slug,
									size: size
								},
								success: function (response) {
									$('#quantity').html(response.total);

									swal({
										title: "Thành công!",
										text: "Sản phẩm đã được thêm vào giỏ hàng",
										icon: "success",
										button: "OK",
									});

								}
							})
						})
					})
				</script>
				@endsection

