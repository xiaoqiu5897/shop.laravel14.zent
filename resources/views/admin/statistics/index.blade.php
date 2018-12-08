@extends('admin.layouts.master')

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h1 class="card-title">Zent Closet/Thống kê</h1>
			</div>

			<div class="card-body row">
				<div class="col-md-12">
					<div class="card card-info collapsed-card card-outline" style="border-top:0px;box-shadow: 0px -5px 10px -2px #979797;">
						<div class="card-header" style="background-color: #ffc107">
							<h3 class="card-title">Thống kê ngày</h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" style="color: white;" data-widget="collapse"><i class="fa fa-plus"></i>
								</button>
							</div>
						</div>
						<div class="card-body" style="border: 1px solid rgb(206, 206, 206);border-top: none;    border-radius: 7px;">
							The body of the card
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="card card-info collapsed-card card-outline" style="border-top:0px;box-shadow: 0px -5px 10px -2px #979797;">
						<div class="card-header" style="background-color: #20c997">
							<h3 class="card-title">Thống kê tháng</h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" style="color: white;" data-widget="collapse"><i class="fa fa-plus"></i>
								</button>
							</div>
						</div>
						<div class="card-body" style="border: 1px solid rgb(206, 206, 206);border-top: none;    border-radius: 7px;">
							The body of the card
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="card card-info collapsed-card card-outline" style="border-top:0px;box-shadow: 0px -5px 10px -2px #979797;">
						<div class="card-header" style="background-color: #6F42E3">
							<h3 class="card-title">Thống kê năm</h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" style="color: white;" data-widget="collapse"><i class="fa fa-plus"></i>
								</button>
							</div>
						</div>
						<div class="card-body" style="border: 1px solid rgb(206, 206, 206);border-top: none;    border-radius: 7px;">
							The body of the card
						</div>
					</div>
				</div>

			</div>	
		</div>
	</div>
</div>
@endsection

