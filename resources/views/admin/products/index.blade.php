@extends('admin.layouts.master')

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h1 class="card-title">Zent Closet/Danh sách sản phẩm</h1>
			</div>
			<!-- /.card-header --> 
			<div class="card-body">
				<button  type="button" class="btn btn-danger" id="btn-add" style="margin-left: 500px; margin-top: 20px;">Thêm</button>
				<table id="product-table" class="table table-bordered table-striped data-list">
					<thead>
						<tr>
							<th>Mã sản phẩm</th>
							<th>Tên sản phẩm</th>
							<th>Số lượng</th>
							<th>Gía nhập</th>
							<th>Gía bán</th>
							<th>Gía khuyến mãi</th>
							<th style="width: 150px;">Mô tả</th>
							<th style="width: 200px;">Action</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>

		
		<!-- /.card -->
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->
{{-- modal thêm mới --}}
<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content"  style="padding: 20px 20px 20px;">
			<h1>ZENT - LARAVEL - Thêm sản phẩm</h1>
			<form id="form-add" data-url="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Mã sản phẩm <span>*</span></label>
					<input name="" type="text" class="form-control" id="add-code" required>
				</div>
				<div class="form-group">
					<label for="">Tên sản phẩm <span>*</span></label>
					<input name="" type="text" class="form-control" id="add-name" required>
				</div>
				<div class="form-group">
					<label for="">Số lượng <span>*</span></label>
					<input name="" type="text" class="form-control" id="add-quantity" required>
				</div>
				<div class="form-group">
					<label for="">Giá nhập (VNĐ)<span>*</span></label>
					<input name="" type="text" class="form-control" id="add-cost" required>
				</div>
				<div class="form-group">
					<label for="">Giá bán (VNĐ)<span>*</span></label>
					<input name="" type="text" class="form-control" id="add-price" required>
				</div>
				<div class="form-group">
					<label for="">Giá khuyến mãi (VNĐ)<span>*</span></label>
					<input name="" type="text" class="form-control" id="add-price-sale" required>
				</div>
				<div class="form-group">
					<label for="">Mô tả <span>*</span></label>
					<textarea name="" type="text" class="form-control" id="add-description"></textarea>
				</div>
				<div class="form-group">
					<label for="">Loại sản phẩm <span>*</span></label>
					<div class="add-category row"></div>
				</div>
				<div class="form-group">
					<label for="">Thuộc tính <span>*</span></label>
					<div class="add-attribute row"></div>
				</div>
				<button type="submit" class="btn btn-danger">Lưu thông tin</button>
			</form>
		</div>
	</div>
</div>
{{-- modal xem chi tiết --}}
<div class="modal fade" id="modal-show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" style="max-width: 1000px!important;">
		<div class="modal-content"  style="padding: 20px 20px 20px;">
			<div class="row">
				<div class="col-8 row">
					<div class="col-6 product-image1" >
					</div>
					<div class="col-6 product-image2">
					</div>
				</div>
				<div class="col-4" >
					<h1 class="product-name"></h1>
					<h4 class="product-cost"></h4>
					<h4 class="product-price"></h4>
					<h4 class="product-price-sale"></h4>
					<h4 class="product-quantity"></h4>
					<p class="product-description"></p>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- modal sửa --}}
<div class="modal fade" id="modal-edit">
	<div class="modal-dialog modal-lg" style="max-width: 1000px!important;">
		<div class="modal-content"  style="padding: 20px 20px 20px;">
			<div class="row">
				<form action="" id="form-edit" method="post" role="form" class="row">
					<legend>Sửa</legend>
					<div class="col-6">
						<div class="form-group">
							<label for="">Mã sản phẩm</label>
							<input type="text" class="form-control" id="edit-id" disabled>
						</div>
						<div class="form-group">
							<label for="">Tên</label>
							<input type="text" class="form-control" id="edit-name">
						</div>
						<div class="form-group">
							<label for="">Gía nhập</label>
							<input type="text" class="form-control" id="edit-cost">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="">Gía bán</label>
							<input type="text" class="form-control" id="edit-price">
						</div>
						<div class="form-group">
							<label for="">Gía khuyến mãi</label>
							<input type="text" class="form-control" id="edit-price-sale">
						</div>
						<div class="form-group">
							<label for="">Số lượng</label>
							<input type="text" class="form-control" id="edit-quantity">
						</div>
					</div>
					<div class="form-group col-12">
						<label for="">Mô tả</label>
						<div>
							<textarea name="editor-edit" class="form-control" id="editor-edit" rows="10" cols="80"></textarea>
						</div>
					</div>
					<div class="form-group col-12">
						<label for="">Ảnh</label>
						<div class="col-md-12 col-sm-12 row edit-image">
						</div>
					</div>
					<div class="form-group col-12">
						<label for="">Loại</label>
						<div class="edit-category row" style="font-size: 20px;"></div>
					</div>
					<div class="form-group col-12">
						<label for="">Thuộc tính</label>
						<div class="edit-attribute row"></div>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@section('footer')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
<script type="text/javascript">
	$(document).on('click', '.btn-show', function(){
		$('#modal-show').show();
		var url = $(this).attr('data-url');
		$('.product-image1').html('');
		$('.product-image2').html('');
		$.ajax({
			type: 'get',
			url: url,
			success: function (response) {
				$('.product-name').html(response.product.name);
				$.each(response.product.images, function( key, value ) {
					if(key < 3){
						$('.product-image1').append('<img src="{{asset('assets/img/products')}}/' + value.link + '" style="width:100%; height: 400px; background:#f4f4f4;margin-bottom: 20px">');
					}if(key>= 3){
						$('.product-image2').append('<img src="{{asset('assets/img/products')}}/' + value.link + '" style="width:100%; height: 400px; background:#f4f4f4;margin-bottom: 20px">');
					}
				});
				$('.product-cost').html("Gía nhập: " + response.product.cost + " VNĐ");
				$('.product-price').html("Gía bán: " +response.product.price + " VNĐ");
				$('.product-price-sale').html("Gía khuyến mãi: " +response.product.price_sale + " VNĐ");
				$('.product-description').html("Mô tả: " +response.product.description);
				$('.product-quantity').html("Số lượng: " +response.product.quantity + " cái");
			}
		})
	})
</script>
<script type="text/javascript">
	$(document).on('click', '.btn-edit', function(){
		$('#modal-edit').modal('show');
		var url = $(this).attr('data-url');
		$('.edit-image').html('');
		$('.edit-category').html('');
		$('.edit-attribute').html('');
		$.ajax({
			type: 'get',
			url: url,
			success: function (response) {
				$('#form-edit').attr('data-url','{{asset('')}}admin/products/'+response.product.id+'');
				$('#edit-id').val(response.product.id);
				$('#edit-name').val(response.product.name);
				$('#edit-cost').val(response.product.cost);
				$('#edit-price').val(response.product.price);
				$('#edit-price-sale').val(response.product.price_sale);
				$('#edit-quantity').val(response.product.quantity);
				$('#editor-edit').val(response.product.description);
				//hiển thị ảnh trong modal edit
				$.each(response.product.images, function( key, value ) {
					$('.edit-image').append('<div class="col-6"><button class="btn btn-dark btn-del-img" style="position:absolute;z-index:3;right:10px" id="btn-'+value.id+'" data-image-id="'+ value.id +'" style="margin-left:93%"><i class="fa fa-times" style="font-size:30px"></i></button><img id="img-'+ value.id +'" src="{{asset('assets/img/products')}}/' + value.link + '" style="width:100%; height: 350px; background:#f4f4f4; margin-bottom: 20px;position:relative"></div>');
				}); 
				//hiển thị category trong modal edit
				$.each(response.categories, function( key, value1 ) {
					if(value1.parent_id == null){
						$('.edit-category').append('<div class="col-md-3 edit-sm-category edit-category1"><input type="checkbox" value="'+value1.parent_id+'">&nbsp&nbsp'+value1.name+'<br></div>')
						$.each(response.categories, function( key, value2 ) {
							if (value2.parent_id != null) {
								if (value2.parent_id == value1.id) {
									$.each(response.product.categories, function( key, value3 ) {
										$('.edit-sm-category').append('<input class="edit-category1" style="margin-left:20px" id="'+value2.id+'" type="checkbox" value="'+value2.id+'">&nbsp&nbsp'+value2.name+'<br>')
										if (value2.id == value3.id) {
											$('#'+value2.id+'').attr('checked',true)
										}
									});
								}
							}
						});
					}
				});
				//hiển thị thuộc tính trong modal edit
				$.each(response.product_attributes,function (key, value1) {
					$.each(response.attributes,function (key, value2) {
						if (value1.attribute_id == value2.id) {
							$('.edit-attribute').append('<label style="margin-top:10px" class="col-1" for="">'+value2.display_name+'</label><input class="form-control col-4 edit-attribute '+value2.name+' " style="margin-top:10px" type="text" id="'+value2.id+'" name="'+value2.id+'" value="'+value1.value+'"><div class="col-7"></div><br>')
						}
					})
				})
			}
		})
	})
</script>
<!-- bắt sự kiện cho form edit  -->
<script type="text/javascript">
	$(document).on('submit', '#form-edit', function(e){
		e.preventDefault();
		var category;
		var url = $(this).attr('data-url');
		$('.edit-category1').each(function () {
			if($(this).is(":checked")) {
				category = $(this).val();
			}
		})
		$.ajax({
			type: 'put',
			url: url,
			data:{
				name: $('#edit-name').val(),
				cost: $('#edit-cost').val(),
				price: $('#edit-price').val(),
				pricesale: $('#edit-price-sale').val(),
				quantity: $('#edit-quantity').val(),
				description: $('#editor-edit').val(),
				weight: {
					id:  $('.weight').attr('id'),//gửi thuộc tính weight gồm có id và value
					value: $('.weight').val(),
				},
				color: {
					id:  $('.color').attr('id'),
					value: $('.color').val(),
				},
				material: {
					id: $('.material').attr('id'),
					value: $('.material').val(),
				},
				origin: {
					id: $('.origin').attr('id'),
					value: $('.origin').val(),
				},
				category: category,
			},
			success: function (response) {
				$('#modal-edit').modal('hide');
			}
		})
	})
</script>
<!-- bắt sự kiện cho nút xóa ảnh trong form edit  -->
<script type="text/javascript">
	$(document).on('click', '.btn-del-img', function(e){
		e.preventDefault();
		var imageID = $(this).attr('data-image-id');
		var productID = $(this).attr('data-product-id');
		var url = $(this).attr('data-url');
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this imaginary file!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					type: 'delete',
					url: '/admin/products/' + productID +'/edit/deleteimage?imageID=' + imageID,
					success: function (response) {
						$('#modal-edit').show();
						swal("Poof! Your imaginary file has been deleted!", {
							icon: "success",
						});
						$('.edit-image #img-'+response.imageID+'').remove();
						$('.edit-image #btn-'+response.imageID+'').remove();
						console.log(response);
					}
				})
			} else {
				swal("Your imaginary file is safe!");
			}
		});
	})
</script>
{{-- bắt sự kiện cho nút thêm mới --}}
<script type="text/javascript">
	$(document).on('click','#btn-add', function () {
		$('#modal-add').modal('show');
		$('.add-category').html();
		$('.add-attribute').html();
		$('.add-sm-category').html();
		$.ajax({
			type: 'get',
			url: '/admin/products/create',
			success: function (response) {
				$.each(response.categories, function( key, value1 ) {
					if(value1.parent_id == null){
						$('.add-category').append('<div class="col-md-3 add-category1"><input id="'+value1.id+'" type="checkbox" value="'+value1.parent_id+'">&nbsp&nbsp'+value1.name+'<br><div class="add-sm-category"></div></div>')
						$.each(response.categories, function( key, value2 ) {
							if (value2.parent_id != null && value2.parent_id == value1.id) {
								$('.add-sm-category').append('<input class="add-category1" style="margin-left:20px" parent_id="'+value2.parent_id+'" id="'+value1.id+'" type="checkbox" value="'+value2.id+'">&nbsp&nbsp'+value2.name+'<br>')
							}
						});
					}
				});
				$.each(response.attributes, function (key,value) {
					$('.add-attribute').append('<div class="col-1"><label for="" style="margin-bottom: 30px">'+value.name+' </label></div><div class="col-4"><input id="'+value.id+'" style="margin-bottom: 10px" type="text" class="form-control add-'+value.name+'" required ></div><div class="col-7"></div>')
				})
			}
		})
	})
</script>
{{-- bắt sự kiện cho nút submit form thêm mới --}}
<script type="text/javascript">
	$(document).on('submit','#form-add',function (e) {
		e.preventDefault();
		var url = $(this).attr('data-url');
		$('.add-category1').each(function () {
			if($(this).is(":checked")) {
				category = $(this).val();
			}
		})
		$.ajax({
			type: 'post',
			url: url,
			data: {
				code: $('#add-code').val(),
				name: $('#add-name').val(),
				cost: $('#add-cost').val(),
				price: $('#add-price').val(),
				pricesale: $('#add-price-sale').val(),
				quantity: $('#add-quantity').val(),
				description: $('#add-description').val(),
				weight: {
					id:  $('.add-weight').attr('id'),//gửi thuộc tính weight gồm có id và value
					value: $('.add-weight').val(),
				},
				color: {
					id:  $('.add-color').attr('id'),
					value: $('.add-color').val(),
				},
				material: {
					id: $('.add-material').attr('id'),
					value: $('.add-material').val(),
				},
				origin: {
					id: $('.add-origin').attr('id'),
					value: $('.add-origin').val(),
				},
				category: category,
			},
			success:function (response) {
				$('#modal-add').modal('hide');
				swal({
					title: "Thành công!",
					text: "Thêm mới sản phẩm thành công",
					icon: "success",
					button: "OK",
				});

			}
		})
	})
</script>
<script type="text/javascript">
	$(document).on('click','.btn-delete',function () {
		var url = $(this).attr('data-url');
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this imaginary file!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					type: 'delete',
					url: url,
					success: function (response) {
						swal("Poof! Your imaginary file has been deleted!", {
							icon: "success",
						});
						$('.edit-image #img-'+response.imageID+'').remove();
						$('.edit-image #btn-'+response.imageID+'').remove();
						console.log(response);
					}
				})
			} else {
				swal("Your imaginary file is safe!");
			}
		});
	})
</script>
@endsection










