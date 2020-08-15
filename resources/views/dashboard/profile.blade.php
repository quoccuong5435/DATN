@extends('master')

@section('main-content')

	@include('partials.left-section')

	<!--CENTER SECTION-->
			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4>Hồ Sơ Của Tôi</h4>
					<div class="db-2-main-com db-2-main-com-table">
						<table style="color: #000; " class="responsive-table">
							<tbody>
								<tr>
									<td>Tên</td>
									<td>:</td>
									<td>Sam Anderson</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>sam_anderson@gmail.com</td>
								</tr>
								<tr>
									<td>Mật khẩu</td>
									<td>:</td>
									<td>mypasswordtour</td>
								</tr>
								<tr>
									<td>Di động</td>
									<td>:</td>
									<td>0321456789</td>
								</tr>
								<tr>
									<td>Ngày sinh</td>
									<td>:</td>
									<td>03 Jun 1990</td>
								</tr>
								<tr>
									<td>Địa chỉ</td>
									<td>:</td>
									<td>1017/25 Trần Thị Liền, Phước Kiển, Nhà Bè </td>
								</tr>
							</tbody>
						</table>
						<div class="db-mak-pay-bot">
							<a href="{{ route('db-editprofile') }}" class="waves-effect waves-light btn-large">Sửa hồ sơ</a> </div>
					</div>
				</div>
			</div>

	@include('partials.right-section')
@endsection