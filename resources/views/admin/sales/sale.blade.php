@extends('admin.layouts.master')

@section('content')
<!-- /.content -->
<div class="card" >
	<div class="card-header">
		<h3 class="card-title">August/Bán hàng</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body row">
		<div id="example1_wrapper" class="col-5 dataTables_wrapper container-fluid dt-bootstrap4" >
			<div class="row">
				<div class="col-12">
					<h2>Danh sách sản phẩm</h2>
				</div>
				<div class="col-9">
					<div class="dataTables_length" id="example1_length">
						<label>Hiển thị
							<select name="example1_length" aria-controls="example1" class="form-control form-control-sm">
								<option value="10">10</option><option value="25">25</option>
								<option value="50">50</option>
								<option value="100">100</option>
							</select>
						</label>
					</div>
				</div>
				<div class="col-3">
					<div id="example1_filter" class="dataTables_filter">
						<label>Tìm kiếm:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
					</div>
				</div>
			</div>
			<!-- <div style="height: 50px; width: 100%; background-image: url('img/star.jpg'); background-repeat: repeat-x;"></div> -->
			<div class="row">
				<div class="col-12">
					<table id="selling-table" class="table table-bordered"  style="border: 1px solid #bfbfbf">
						<thead>
							<tr role="row" style=" border-top: 3px solid #b50000;border-bottom: 3px solid #b50000;" align="center">
								<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width: 200.4px;  padding-top: 10px; padding-bottom: 10px">Mã sản phẩm</th>
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 258px;">Tên sản phẩm</th>
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 230px;">Đơn giá</th>
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 230px;">Gía khuyến mãi</th>
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 122.8px;">Action</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
		<div class="col-7" >
			<h2>Danh sách sản phẩm khách chọn</h2>
			<h4 style="margin-top: 65px;">HÓA ĐƠN BÁN HÀNG</h4>
			<div>
				<p>Mã KH: {{$customer->id}}</p>
				<p>Họ tên: {{$customer->name}}</p>
			</div>
			<div>
				<p>Số ĐT: {{$customer->sdt}}</p>
				<p>Địa chỉ: {{$customer->address}}</p>
			</div>
			<table id="example1" class="table table-bordered table-striped data-list">
				<thead>
					<tr>
						<th>Mã sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Đơn giá</th>
						<th>Thành tiền</th>
					</tr>
				</thead>
				<tbody>
					@foreach(Cart::content() as $row)
					<tr>
						<td>{{$row->id}}</td>
						<td>{{$row->name}}</td>
						<td>
							<label id="qty-{{$row->rowId}}">{{$row->qty}}&nbsp&nbsp</label>
							<button rowId="{{$row->rowId}}" status="1" class="btn btn-dark btn-add-minnus">+</button>
							<button rowId="{{$row->rowId}}" status="-1" class="btn btn-dark btn-add-minnus">-</button>
						</td>
						<td style="text-align: right!important">{{number_format($row->options->price_sale)}}</td>
						<td  style="text-align: right!important"><span id="subtotal-{{$row->rowId}}">{{number_format($row->subtotal)}}</span> <label> VNĐ</label></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<h5 style="width: 100%;text-align: right!important">Thuế: <span id="tax-cart">{{\Cart::tax()}}</span>&nbspVNĐ</h5>
			<h5 style="width: 100%;text-align: right!important">Tổng: <span id="total-cart">{{\Cart::total()}}</span>&nbspVNĐ</h5><br>
			<div style="width: 230px;margin: auto;">
				<a href="{{route('payment',$customer->id)}}" class="btn btn-dark" style="background-color: #b50000!important; border: 1px solid #b50000">Thanh toán</a>
				<button class="btn btn-dark destroy-bill" <?php if (Cart::count()==0) {?> disabled <?php } ?>>Hủy hóa đơn</button>
			</div>
		</div>
	</div>
	<!-- /.card-body -->
</div>

@endsection

@section('footer')
<script type="text/javascript">
	$(function () {
		$('.btn-add-minnus').click(function (e) {
			e.preventDefault();
			var customer_id = {{$customer->id}};
			var rowId = $(this).attr('rowId');
			var status = $(this).attr('status');
			$.ajax({
				type: 'get',
				url: '/admin/sales/'+customer_id+'/addorminus?rowId=' + rowId + '&status=' + status,
				success: function (response) {
					$('#qty-'+rowId).html(response.qty);
					$('#subtotal-'+rowId).html(response.subtotal);
					$('#tax-cart').html(response.tax);
					$('#total-cart').html(response.total);
				}
			})
		})

		$('.destroy-bill').click(function (e) {
			e.preventDefault();
			swal({
				title: "Are you sure!",
				type: "error",
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Yes!",
				showCancelButton: true,
			}),
			$.ajax({
				type: "get",
				url: "{{route('destroy',$customer->id)}}"
			});
		})
	})
</script>
@endsection