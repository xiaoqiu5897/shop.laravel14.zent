@extends('admin.layouts.master')

@section('content')
<div class="card row">
	<div class="card-header">
		<h3 class="card-title">Zent Closet/Bán hàng</h3><br>
	</div>
	<!-- /.card-header -->
	<div class="card-body row col-11" style=" border: 1px solid #e0e0e0 ; margin: auto; color: #003489; border-radius: 10px; margin-top: 20px;margin-bottom: 20px;">
		<div class="col-10" style="margin: auto; margin-top: 50px; font-size: 20px;">
			<img class="col-12" src="{{asset('admin_assets/img/bill.jpg')}}" style="position: relative; z-index: 1">
			<div class="col-12" style="position: absolute; z-index: 2; top: 0px;">
				<h1 style="font-family: 'Playfair Display', serif!important; font-weight: bolder; font-size: 70px;">Zent Closet</h1>
				<br>
				<h1 align="center" >Hóa đơn bán hàng</h1><br><br>
				<div class="row" style="font-size: 20px">
					<div class="col-6" >
						<p>Họ tên: {{$customer->name}}</p>
						<p>Số ĐT: {{$customer->sdt}}</p>
						<p>Địa chỉ: {{$customer->address}}</p>
					</div>
					<div align="center" class="col-6">
						<p>Mã hóa đơn: {{$bill->code_bill}}</p>
						<p>Ngày bán: {{$bill->created_at}}</p>
					</div>
				</div>
				<br>
				<div style="height: 50px; width: 100%; background-image: url('{{asset('admin_assets/img/star.jpg')}}'); background-repeat: repeat-x;"></div>
				<table style="width: 100%;color: #003489;font-size: 20px;">
					<thead>
						<tr style="font-size: 30px; border-top: 3px solid #b50000;border-bottom: 3px solid #b50000;" align="center">
							<th>Mã sản phẩm</th>
							<th>Tên sản phẩm</th>
							<th>Số lượng</th>
							<th>Đơn giá</th>
							<th>Thành tiền</th>
						</tr>
					</thead>
					<tbody>
						@foreach($bill_details as $row)
						<tr align="center" style=" height:50px">
							<td>{{$row->code_product}}</td>
							@foreach($products as $row1)
							@if($row1->id == $row->code_product)
							<td>{{$row1->name}}</td>
							@endif
							@endforeach
							<td>{{$row->quantity}}</td>
							@foreach($products as $row1)
							@if($row1->id == $row->code_product)
							<td align="right">{{number_format($row1->price_sale)}}</td>
							@endif
							@endforeach
							<td align="right">{{number_format($row->subtotal)}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<hr style="height: 1.5px; background-color: #b50000">
				<p align="right" style="font-weight: bolder;">Thuế: {{number_format($bill->tax)}}</p><br>
				<p align="right" style="font-weight: bolder;">Tổng tiền: {{number_format($bill->total)}}</p><br>
				<p align="right" style="margin-right: 100px">Người bán</p>
				<p align="right" style="margin-right: 70px"></p>
			</div>
		</div>
	</div>
	<button class="btn" style="background-color: #003489!important; width: 100px; margin: auto; color: white; margin-bottom: 20px;" onclick="print_bill()">In hóa đơn</button>
</div>
<!-- /.card-body -->
</div>
<script type="text/javascript">
	function print_bill() {
		window.print();
	}
</script>
@endsection{{}}