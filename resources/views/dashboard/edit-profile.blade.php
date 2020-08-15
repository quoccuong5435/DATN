@extends('master')

@section('main-content')

	@include('partials.left-section')

	<!--CENTER SECTION-->
			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4>Sửa hồ sơ</h4>
					<div class="db-2-main-com db2-form-pay db2-form-com">
						<form class="col s12">
							<div class="row">
								<div class="input-field col s12">
									<input type="number" class="validate">
									<label>Email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<input type="password" class="validate">
									<label>Nhập mật khẩu</label>
								</div>
								<div class="input-field col s12 m6">
									<input type="password" class="validate">
									<label>Xác nhận mật khẩu</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<input type="email" class="validate">
									<label>Tên</label>
								</div>
								<div class="input-field col s12 m6">
									<input type="number" class="validate">
									<label>Di động</label>
								</div>
							</div>
							
							<div class="row">
								<div class="input-field col s12">
									<input id="pay-ca" type="number" class="validate">
									<label for="pay-ca">Số thẻ</label>
								</div>
							</div>
							<div class="row db-file-upload">
								<div class="file-field input-field">
									<div class="db-up-btn"> <span>File</span>
										<input type="file"> </div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text"> </div>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="submit" value="Gửi" class="waves-effect waves-light full-btn"> </div>
							</div>
						</form>
					</div>
				</div>
			</div>

	@include('partials.right-section')
@endsection