@extends('admin.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Data Tables</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Data Tables</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Danh sách khách hàng</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="customers-table" class="table table-bordered">
						<thead>
							<tr style="background: black;">
								<th style=" color: white;">ID</th>
								<th style=" color: white;">Tên</th>
								<th style=" color: white;">Email</th>
								<th style=" color: white;">Địa chỉ</th>
								<th style=" color: white;">SDT</th>
								<th style=" color: white;">Chức năng</th>
							</tr>
						</thead>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>

<!-- /.content -->
<!-- Modal detail -->
<div class="modal fade" id="modal-show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 2000">
	<style type="text/css">
	body.modal-show {
		overflow: hidden;
	}
</style>
<div class="modal-dialog modal-lg" role="document" style="max-width: 80%">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title" id="exampleModalCenterTitle">Chi tiết bài viết</h2>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-7">
					<img src="" class="thumbnail" style="width: 100%">
				</div>
				<div class="col-5">
					<h1 class="title"></h1>
					<ul>
						<li>Mô tả: <p class="description"></p></li>
						<li>Nội dung: <p class="postcontent"></p></li>
						<li>Người up: <p class="user_id"></p></li>
						<li>Slug: <p class="slug"></p></li>
						<li>Thuộc category: <p class="category_id"></p></li>
						<li>Lượt xem: <p class="view_count"></p></li>
						<li>Ngày tạo: <p class="created_at"></p></li>
						<li>Ngày sửa: <p class="updated_at"></p></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!--End Modal detail -->

<!-- Modal add new -->
<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 2000">
	<div class="modal-dialog modal-lg" role="document" style="max-width: 80%">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title" id="exampleModalCenterTitle">Thêm mới bài viết</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="POST" role="form">
					<div class="form-group">
						<label for="">Tiêu đề</label>
						<input type="text" class="form-control" id="" placeholder="Tiêu đề">
					</div>
					<div class="form-group">
						<label for="">Mô tả</label>
						<input type="text" class="form-control" id="" placeholder="Mô tả">
					</div>
					<div class="form-group">
						<label for="">Nội dung</label>
						<div id="editor">
						</div>
					</div>
					<div class="form-group">
						<label for="">Ảnh</label>
						<input type="file" class="form-control" id="" placeholder="Nội dung">
					</div>
					<div class="form-group">
						<label for="">Slug</label>
						<input type="text" class="form-control" id="" placeholder="Slug">
					</div>
					<div class="form-group">
						<label for="">Category</label>
						<input type="text" class="form-control" id="" placeholder="Category">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!--End modal add new -->

@endsection