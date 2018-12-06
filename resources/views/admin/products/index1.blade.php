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
				<button  type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg"  style="margin-left: 500px; margin-top: 20px;">Thêm</button>
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
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content"  style="padding: 20px 20px 20px;">
			<h1>ZENTGROUP - PHP - Thêm sản phẩm</h1>
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputEmail1">Mã sản phẩm <span>*</span></label>
					<input name="MA_SP" type="text" class="form-control" id="exampleInputEmail1" placeholder="Mã sản phẩm" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Tên sản phẩm <span>*</span></label>
					<input name="TEN_SP" type="text" class="form-control" id="exampleInputPassword1" placeholder="Tên sản phẩm" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Số lượng <span>*</span></label>
					<input name="SO_LUONG" type="text" class="form-control" id="exampleInputPassword1" placeholder="Số lượng" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Gía nhập <span>*</span></label>
					<input name="GIA_NHAP" type="text" class="form-control" id="exampleInputPassword1" placeholder="Gía nhập" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Gía bán <span>*</span></label>
					<input name="GIA_BAN" type="text" class="form-control" id="exampleInputPassword1" placeholder="Gía bán" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Ảnh <span>*</span></label>
					<input name="ANH_SP" type="file" class="form-control" id="exampleInputPassword1" placeholder="Gía bán" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Loại sản phẩm <span>*</span></label>
					<select name="MA_LOAI_SP">
					</select>
				</div>
				<button name="save"  type="submit" class="btn btn-danger">Lưu thông tin</button>
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
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
						<div class="row">
							<div class="col-md-6 col-sm-6 row">
								<div class="col-6 edit-image1" >
								</div>
								<div class="col-6 edit-image2">
								</div>
							</div>
							<div class="col-md-6 col-sm-6" id="edit-dropzone">
								
							</div>
						</div>
					</div>
					<div class="form-group col-12">
						<label for="">Loại</label>
						<div class="edit-category row" style="font-size: 20px;margin-left:50px"></div>
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
<style>
/* The container */
.container {
	display: block;
	position: relative;
	padding-left: 35px;
	margin-bottom: 12px;
	cursor: pointer;
	font-weight: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

/* Hide the browser's default radio button */
.container input {
	position: absolute;
	opacity: 0;
	cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
	position: absolute;
	top: 0;
	left: 0;
	height: 25px;
	width: 25px;
	border: 1px solid black;
	background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
	background-color: #ccc;
	border: 1px solid black;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
	background-color: black;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
	content: "";
	position: absolute;
	display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
	display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
	left: 9px;
	top: 3px;
	width: 7px;
	height: 15px;
	border: solid white;
	border-width: 0 3px 3px 0;
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
}
</style>
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
		$('#modal-edit').show();
		var url = $(this).attr('data-url');
		$('.edit-image1').html('');
		$('.edit-image2').html('');
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
				$('#edit-dropzone').html('<form action="{{asset('')}}admin/products/'+response.product.id+'/edit/image/upload" class="edit-form-upload dropzone dz-clickable dz-started" id="awesome-dropzone" enctype="multipart/form-data">@csrf<div class="fallback"><input class="edit-image-upload" name="file" type="file" multiple /></div></form><style>.dropzone {border: 2px dashed #0087F7;border-radius: 5px;background: white;height: 500px;}</style>')
				
				$.each(response.product.images, function( key, value ) {
					if(key < 3){
						$('.edit-image1').append('<div><button class="btn btn-dark btn-del-img" style="position:absolute;z-index:3;right:10px" data-image-id="'+ value.id +'" style="margin-left:93%"><i class="fa fa-times" style="font-size:30px"></i></button><img id="img-'+ value.id +'" src="{{asset('assets/img/products')}}/' + value.link + '" style="width:100%; height: 220px; background:#f4f4f4; margin-bottom: 20px;position:relative"></div>');
					}if(key>= 3){
						$('.edit-image2').append('<div><button class="btn btn-dark btn-del-img" style="position:absolute;z-index:3;right:10px"  data-image-id="'+ value.id +'" style="margin-left:93%"><i class="fa fa-times" style="font-size:30px"></i></button><img id="img-'+ value.id +'" src="{{asset('assets/img/products')}}/' + value.link + '" style="width:100%; height: 220px; background:#f4f4f4; margin-bottom: 20px;position:relative"></div>');
					}
				}); 

				$.each(response.categories, function( key, value1 ) {
					if(value1.parent_id == null){
						$('.edit-category').append('<div class="col-md-3 edit-sm-category edit-category1"><label style="font-weight: 500;font-size: 17px;" class="container"><input type="radio" name="radio" value="'+value1.parent_id+'">&nbsp&nbsp'+value1.name+'<span class="checkmark"></span></label><br></div>')
						$.each(response.categories, function( key, value2 ) {
							if (value2.parent_id != null) {
								if (value2.parent_id == value1.id) {
									$.each(response.product.categories, function( key, value3 ) {
										$('.edit-sm-category').append('<label style="margin-left:20px;font-weight: 500;font-size: 17px;"  class="container"><input class="edit-category1" name="radio" id="'+value2.id+'" type="radio" value="'+value2.id+'">&nbsp&nbsp'+value2.name+'<span class="checkmark" id="checkmark-'+value2.id+'"></span></label><br>')
										if (value2.id == value3.id) {
											$('#'+value2.id+'').attr('checked','true');
										}
										$('#'+value2.id+'').click(function () {
											$('#'+value2.id+'').attr('checked');
										})
									});
								}
							}
						});
					}
				});

				$.each(response.product_attributes,function (key, value1) {
					$.each(response.attributes,function (key, value2) {
						if (value1.attribute_id == value2.id) {
							$('.edit-attribute').append('<label style="margin-top:10px" class="col-1" for="">'+value2.display_name+'</label><input class="form-control col-4 edit-attribute" style="margin-top:10px" type="text" name="'+value2.id+'" value="'+value1.value+'"><div class="col-7"></div><br>')
						}
					})
				})
			}
		})
	})
</script>
<script type="text/javascript">
	$(document).on('submit', '#form-edit', function(e){
		e.preventDefault();
		var url = $(this).attr('data-url');
		if($('.edit-category1').prop("checked")) {
			var category = $('.edit-category1').val();
		}
		console.log(category);
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
				imageupload: $('.edit-image-upload').val(),
				attribute: $('.edit-attribute').val(),
				category: category
			},
			success: function (response) {
				console.log(response.data);
			}
		})
	})
</script>
<script type="text/javascript">
	$(document).on('click', '.btn-del-img', function(e){
		e.preventDefault();
		var imageID = $(this).attr('data-image-id');
		var productID = $(this).attr('data-product-id');
		var url = $(this).attr('data-url');
		$.ajax({
			type: 'delete',
			url: '/admin/products/' + productID +'/edit/deleteimage?id=' + imageID,
			success: function (response) {
				$('#modal-edit').show();
				console.log(response);
			}
		})
	})
</script>
{{-- <script type="text/javascript">
	$(function () {
		$("div#awesome-dropzone").dropzone({ url: "/uploadImg" });
		Dropzone.options.dropzone =
		{
			maxFilesize: 12,
			renameFile: function(file) {
				var dt = new Date();
				var time = dt.getTime();
				return time+file.name;
			},
			acceptedFiles: ".jpeg,.jpg,.png,.gif",
			addRemoveLinks: true,
			timeout: 50000,
			removedfile: function(file) 
			{
				var name = file.upload.filename;
				$.ajax({
					headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            },
					type: 'POST',
					url: '{{ url("image/delete") }}',
					data: {filename: name},
					success: function (data){
						console.log("File has been successfully removed!!");
					},
					error: function(e) {
						console.log(e);
					}});
				var fileRef;
				return (fileRef = file.previewElement) != null ? 
				fileRef.parentNode.removeChild(file.previewElement) : void 0;
			},

			success: function(file, response) 
			{
				console.log(response);
			},
			error: function(file, response)
			{
				return false;
			}
		};
	})
</script> --}}
@endsection










