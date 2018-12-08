@extends('layouts.master')

@section('content')
<style type="text/css">
.step-title{
	border-bottom: 1px solid #e7e7e7;
	padding-bottom: 15px;
	font-size: 16px;
	font-weight: bolder;
}
</style>
<section id="wrapper">
	<div class="container" style="padding-top: 30px">
		<section id="content">
			<div class="row">
				<div class="col-md-8">
					<section id="checkout-personal-information-step" class="checkout-step -current -reachable js-current-step">
						<h1 class="step-title h3"><span class="step-number">1. </span>Personal Information</h1>
						<div class="content">
							<ul class="nav nav-inline m-y-2">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#checkout-guest-form" role="tab">Order as a guest</a>
								</li>
								<li class="nav-item">
									<span href="nav-separator"> | </span>
								</li>
								<li class="nav-item">
									<a class="nav-link " data-link-action="show-login-form" data-toggle="tab" href="#checkout-login-form" role="tab">Sign in</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="checkout-guest-form" role="tabpanel">
									<form  id="customer-form" class="js-customer-form AVAST_PAM_signupform checkout_form" method="post">

										<section>
											<div class="form-group row ">
												<label class="col-md-3 form-control-label required">Name</label>
												<div class="col-md-6">
													<input class="form-control name-cus" name="name" type="text" value="" required="">
												</div>
												<div class="col-md-3 form-control-comment"></div>
											</div>
											<div class="form-group row ">
												<label class="col-md-3 form-control-label required">Email</label>
												<div class="col-md-6">
													<input class="form-control email-cus" name="email" type="email" value="" required="">
												</div>
												<div class="col-md-3 form-control-comment"></div>
											</div>
											<div class="form-group row ">
												<label class="col-md-3 form-control-label required">Address</label>
												<div class="col-md-6">
													<input class="form-control address-cus" name="address" type="text" value="" required="">
												</div>
												<div class="col-md-3 form-control-comment"></div>
											</div>
											<div class="form-group row ">
												<label class="col-md-3 form-control-label required">Phone number</label>
												<div class="col-md-6">
													<input class="form-control phone-cus" name="phonenum" type="text" value="" required="">
												</div>
												<div class="col-md-3 form-control-comment"></div>
											</div>
										</section>
										<style type="text/css">
										.form-control-label{
											text-align: left;
										}
									</style>
									<footer class="form-footer clearfix more">
										<button class="continue btn btn-primary pull-xs-right" name="continue" data-link-action="register-new-customer" type="submit" value="1">Continue</button>
									</footer>
								</form>
							</div>
							<div class="tab-pane " id="checkout-login-form" role="tabpanel">
								<form id="login-form" action="" method="post">
									<section>
										<input type="hidden" name="back" value="">
										<div class="form-group row ">
											<label class="col-md-3 form-control-label required">Email</label>
											<div class="col-md-6">
												<input class="form-control" name="email" type="email" value="" required="">
											</div>
											<div class="col-md-3 form-control-comment">
											</div>
										</div>
										<div class="form-group row ">
											<label class="col-md-3 form-control-label required">Password</label>
											<div class="col-md-6">
												<div class="input-group js-parent-focus">
													<input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" pattern=".{5,}" required="">
													<span class="input-group-btn">
														<button class="btn" type="button" data-action="show-password" data-text-show="Show" data-text-hide="Hide">Show</button>
													</span>
												</div>
											</div>
											<div class="col-md-3 form-control-comment">
											</div>
										</div>
										<div class="forgot-password">
											<a href="" rel="nofollow">Forgot your password?</a>
										</div>
									</section>
									<footer class="form-footer text-xs-center clearfix">
										<button class="continue btn btn-primary pull-xs-right" name="continue" data-link-action="sign-in" type="submit" value="1" >Continue</button>
									</footer>
									<style type="text/css">
										.continue:hover{
											background-color: rgba(71,201,229,0.9)!important;
										}
									</style>
								</form>
							</div>
						</div>
					</div>
				</section>


			</div>
			<div class="col-md-4">
				<section id="js-checkout-summary" class="card js-cart" data-refresh-url="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?controller=cart?ajax=1&amp;action=refresh">
					<div class="card-block">
						<div class="cart-summary-products">
							<p>{{\Cart::count()}} items</p>
							<p><a href="#" data-toggle="collapse" data-target="#cart-summary-product-list">show details</a></p>
							<div class="collapse" id="cart-summary-product-list">
								<ul class="media-list">
									<li class="media">
										<div class="media-left">
											<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=3&amp;id_product_attribute=13&amp;rewrite=the-best-is-yet-to-come-framed-poster&amp;controller=product&amp;id_lang=1#/19-dimension-40x60cm" title="Nullam Mollis Dolor Ac">
												<img class="media-object" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/1/8/9/189-cart_default.jpg" alt="Nullam Mollis Dolor Ac">
											</a>
										</div>
										<div class="media-body">
											<span class="product-name">Nullam Mollis Dolor Ac</span>
											<span class="product-quantity">x4</span>
											<span class="product-price pull-xs-right">$23.20</span>
										</div>
									</li>
									<li class="media">
										<div class="media-left">
											<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=5&amp;id_product_attribute=19&amp;rewrite=today-is-a-good-day-framed-poster&amp;controller=product&amp;id_lang=1#/19-dimension-40x60cm" title="Aliquam Suscipit">
												<img class="media-object" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/0/3/203-cart_default.jpg" alt="Aliquam Suscipit">
											</a>
										</div>
										<div class="media-body">
											<span class="product-name">Aliquam Suscipit</span>
											<span class="product-quantity">x1</span>
											<span class="product-price pull-xs-right">$29.00</span>
										</div>
									</li>
									<li class="media">
										<div class="media-left">
											<a href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php?id_product=7&amp;id_product_attribute=0&amp;rewrite=mug-the-adventure-begins&amp;controller=product&amp;id_lang=1" title="Phasellus Sit Amet Urna">
												<img class="media-object" src="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/img/p/2/1/6/216-cart_default.jpg" alt="Phasellus Sit Amet Urna">
											</a>
										</div>
										<div class="media-body">
											<span class="product-name">Phasellus Sit Amet Urna</span>
											<span class="product-quantity">x1</span>
											<span class="product-price pull-xs-right">$11.90</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-products">
							<span >Subtotal</span>
							<span class="value">{{\Cart::subtotal()}}</span>
						</div>
						<div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-shipping">
							<span >Tax</span>
							<span class="value">{{\Cart::tax()}}</span>
						</div>
					</div>
					<div class="card-block cart-summary-totals">
						<div class="cart-summary-line cart-total">
							<span >Total </span>
							<span class="value">{{\Cart::total()}}</span>
						</div>
					</div>
				</section>
			</div>
		</div>
	</section>
</div>
</section>
@endsection

@section('footer')
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$(document).ready(function () {
		$('.checkout_form').submit(function (e) {
			e.preventDefault();
			var name = $('.name-cus').val();
			var email = $('email-cus').val();
			var address = $('address-cus').val();
			var phonenum = $('phone-cus').val();
			$.ajax({
				type: 'post',
				url: '/cart/checkout/billing',
				data: {
					name: $('.name-cus').val(),
					email: $('.email-cus').val(),
					address: $('.address-cus').val(),
					phonenum: $('.phone-cus').val()
				},
				success: function (response) {
					swal({
						title: "Thành công!",
						text: "Đặt hàng thành công",
						icon: "success",
						button: "OK",
					});
					console.log(response);
				}
			})
		})
	})
</script>
@endsection