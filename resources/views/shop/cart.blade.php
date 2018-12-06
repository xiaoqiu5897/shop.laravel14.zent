@extends('layouts.master')

@section('content')
<section id="wrapper">
  <div class="bread">
    <nav data-depth="1" class="breadcrumb">
      <ol itemscope itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="https://thememagics.com/prestashop/PRS05/PRS050097/fashion/index.php">
            <span itemprop="name">Home</span>
          </a>
          <meta itemprop="position" content="1">
        </li>
      </ol>
    </nav>
  </div>
  <div class="container"> 
    <div class="row">   
      <div id="columns_inner">
        <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12">
          <section id="main">
            <div class="cart-grid row">
              <!-- Left Block: cart product informations & shpping -->
              <div class="cart-grid-body col-xs-12 col-lg-8">
                <!-- cart products detailed -->
                <div class="card cart-container">
                  <div class="card-block">
                    <h1 class="h1">Shopping Cart</h1>
                  </div>
                  <div class="cart-overview js-cart" data-refresh-url="">
                    <ul class="cart-items">
                      @foreach(Cart::content() as $row)
                      <li class="cart-item">
                        <div class="product-line-grid row">
                          <!--  product left content: image-->
                          @if($row->options->has('thumbnail'))
                          <div class="product-line-grid-left col-md-3 col-xs-4">
                            <span class="product-image media-middle">
                              <img src="{{asset('assets/img/products')}}/{{$row->options->thumbnail}}" alt="Nullam Mollis Dolor Ac">
                            </span>
                          </div>
                          @endif
                          <!--  product left body: description -->
                          <div class="product-line-grid-body col-md-4 col-xs-8">
                            <div class="product-line-info">
                              <a href="">{{$row->name}}</a>
                            </div>
                            <div class="product-line-info">
                              <span class="value" style="text-decoration: line-through;">{{number_format($row->price)}}</span>
                              <span class="value" >{{number_format($row->options->price_sale)}}</span>
                            </div>
                            <br/>
                            @if($row->options->has('size'))
                            <div class="product-line-info">
                              <span>Size:</span>
                              <span class="value">{{$row->options->size}}</span>
                            </div>
                            @endif
                          </div>
                          <!--  product left body: description -->
                          <div class="product-line-grid-right product-line-actions col-md-5 col-xs-12">
                            <div class="row">
                              <div class="col-xs-4 hidden-md-up"></div>
                              <div class="col-md-10 col-xs-6">
                                <div class="row">
                                  <div class="col-md-6 col-xs-6 qty" style="padding: 0px;">
                                    <input id="qty-{{$row->rowId}}" class="col-md-8" type="text" name="" style="width: 50px; height: 50px; padding: 10px; font-size: 20px;font-weight: bolder;" value="{{$row->qty}}">
                                    <button class="add-cart btn-toggle" rowId="{{$row->rowId}}" status="-1" style="display: inline-block;width: 30px;background-color: white;border: 1px solid #b7b7b7">-</button>
                                    <button class="minus-cart btn-toggle" rowId="{{$row->rowId}}" status="1" style="display: inline-block;width: 30px;background-color: white;border: 1px solid #b7b7b7">+</button>
                                    <style type="text/css">
                                    .add-cart:hover, .minus-cart:hover{
                                      border: 1px solid black;
                                    }
                                  </style>
                                </div>
                                <div class="col-md-6 col-xs-6 price">
                                  <span class="product-price">
                                    <strong id="subtotal-{{$row->rowId}}">{{number_format($row->subtotal)}}</strong>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2 col-xs-2 text-xs-right">
                              <div class="cart-line-product-actions ">
                                <a class="remove-from-cart" rel="nofollow" href= "" data-link-action= delete-from-cart" data-id-product= "3" data-id-product-attribute= "13" data-id-customization= "" >
                                  <i class="fa fa-times"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>



            </div>
            <!-- Right Block: cart subtotal & cart total -->
            <div class="cart-grid-right col-xs-12 col-lg-4">
              <div class="card cart-summary">
                <div class="cart-detailed-totals" style="font-size: 20px">
                  <div class="card-block">
                    <div class="cart-summary-line" id="cart-subtotal-products">
                      <span class=" js-subtotal cart-count">{{\Cart::count()}} item</span>
                      <span class="value cart-subtotal">{{\Cart::subtotal()}}</span>
                    </div>
                    <div class="cart-summary-line" id="cart-subtotal-shipping">
                      <span class="">Taxes</span>
                      <span class="value cart-tax">{{\Cart::tax()}}</span>
                      <div><small class="value"></small></div>
                    </div>
                  </div>
                  <hr>
                  <div class="card-block">
                    <div class="cart-summary-line cart-total" style="font-weight: bolder;">
                      <span class="">Total </span>
                      <span class="value cart-total" style="color: red">{{\Cart::total()}}</span>
                    </div>
                  </div>
                  <hr>
                </div>

                <style type="text/css">
                .checkout-btn:hover{
                  background-color: rgba(102,252,233,0.9)!important;
                  color: black;
                }
              </style>
              <div class="checkout cart-detailed-actions card-block more">
                <div class="text-xs-center">
                  <a href="{{asset('cart/checkout')}}" class="btn btn-primary add-to-cart checkout-btn">Checkout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>  
</div>
</section>

@endsection

@section('footer')
<script type="text/javascript">
 $(function () {
  $('.btn-toggle').click(function (e) {
    e.preventDefault();
    var rowId = $(this).attr('rowId')
    var status = $(this).attr('status')

    $.ajax({
      type: 'get',
      url: '/cart/add?rowId=' + rowId + '&status=' + status,
      success: function (response) {
        $('#qty-' + rowId).val(response.detail.qty);
        $('#subtotal-' + rowId).html(response.detail.price_sale * response.detail.qty);
        $('.cart-tax').html(response.tax);
        $('.cart-count').html(response.count + ' item');
        $('.cart-subtotal').html(response.subtotal);
        $('.cart-total').html(response.total);
      }
    })
  })
})
</script>
@endsection