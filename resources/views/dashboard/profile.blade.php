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
									<td>{{Auth::User()->username}}</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>{{Auth::User()->email_user}}</td>
								</tr>
								{{-- <tr>
									<td>Mật khẩu</td>
									<td>:</td>
									<td>mypasswordtour</td>
								</tr> --}}
								<tr>
									<td>Di động</td>
									<td>:</td>
									<td>{{Auth::User()->phone_user}}</td>
								</tr>
								<tr>
									<td>Gender</td>
									<td>:</td>
									<td>{{Auth::User()->gender_user}}</td>
									
								</tr>
								<tr>
									<td>Địa chỉ</td>
									<td>:</td>
									<td>{{Auth::User()->address_user}}</td>
									
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