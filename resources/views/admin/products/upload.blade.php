@extends('admin.layouts.master')

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h1 class="card-title">Zent Closet/Thêm mới ảnh</h1>
			</div>

			<div class="card-body row">
				<div class="col-md-12 row dropzone-image">
					@if($images != null)
					@foreach($images as $row)
					<div class="col-md-3">
						<img src="{{asset('assets/img/products')}}/{{$row->link}}" style="width: 100%;height: 300px; background-color: #f4f4f4;">
						<h5 style="width: 100%; text-align: center;">{{$row->link}}</h5>
					</div>
					@endforeach
					@endif
				</div>
				<form action="{{asset('')}}admin/products/{{$id}}/upload/store" class="dropzone col-md-12" id="awesomedropzone" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="product_id" value="1">
					<div class="fallback">
						<input name="file[]" type="file" multiple />
					</div>
				</form>
				<div class="col-md-12">
					<button type="button" data-url="{{asset('')}}admin/products/{{$id}}/upload/store" class="btn btn-danger " id="btn-add" style="margin-left: 550px; margin-top: 30px;max-width: 80px">Lưu ảnh</button>
				</div>
			</div>
		</div>	
	</div>
</div>
<style>
.dropzone {
	border: 2px dashed #0087F7;
	border-radius: 5px;
	background: white;
}
</style>
@endsection

@section('footer')
<script type="text/javascript">
	// Dropzone.options.awesomedropzone = {
	// 	autoProcessQueue: false,

	// 	init: function (e) {

	// 		var myDropzone = this;

	// 		$('#btn-add').on("click", function() {
	// 			myDropzone.processQueue(); 
	// 		});

	// 		myDropzone.on("sending", function(imageName, xhr, data) {
	// 			$('.dropzone-image').append('<div class="col-md-3"><img style="width: 100%;height: 300px; background-color: #f4f4f4;" src="/'+imageName.name+'"><h5>'+imageName.name+'</h5></div>');
	// 			console.log(imageName.name);
	// 		});

	// 	}
	// };
	Dropzone.options.awesomedropzone = {
		addRemoveLinks: true, 
		autoProcessQueue: false,
		removedfile: function(file) {
			var name = file.name; 
			// if (name) {
			// 	$.ajax({
			// 		type: 'GET',
			// 		url: "/admin/products/{$id}/upload/delete/"+name,  
			// 		dataType: 'json'
			// 	});
			// }
			var _ref;
			return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
		},
		init: function() {
			var myDropzone = this;

			$('#btn-add').on("click", function() {
				myDropzone.processQueue(); 
			});

			myDropzone.on("sending", function(imageName, xhr, data) {
				$('.dropzone-image').append('<div class="col-md-3"><img style="width: 100%;height: 300px; background-color: #f4f4f4;" src="{{asset('assets/img/products')}}/'+imageName.name+'"><h5>'+imageName.name+'</h5></div>');
				console.log(imageName.name);
			});

		}
	};
</script>
@endsection