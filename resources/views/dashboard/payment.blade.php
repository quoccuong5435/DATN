@extends('master')

@section('main-content')

	@include('partials.left-section')

	<!--CENTER SECTION-->
			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4>Nhập chi tiết thanh toán <span class="db-pay-amount">Tổng: $1200</span></h4>
					<div class="db-2-main-com db2-form-pay db2-form-com">
						<div class="db-pay-card">
							<h5>Những loại thẻ được chấp nhận</h5><img src="images/cards.png" alt="" /> </div>
						<form class="col s12">
							<div class="row">
								<div class="input-field col s12">
									<input type="number" class="validate">
									<label>Nhập số tiền</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<select>
										<option value="" disabled selected>Chọn loại thẻ</option>
										<option value="1">Master Card</option>
										<option value="2">Visa</option>
										<option value="3">American Express</option>
										<option value="2">Laser</option>
										<option value="2">Discover</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="number" class="validate">
									<label>Số thẻ</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6">
									<input type="number" class="validate">
									<label>Ngày hết hạn (DD/MM)</label>
								</div>
								<div class="input-field col s12 m6">
									<input type="number" class="validate">
									<label>Mã số bảo mật</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="pay-ca" type="text" class="validate">
									<label for="pay-ca">Tên in trên thẻ</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="submit" value="Thanh toán" class="waves-effect waves-light full-btn"> </div>
							</div>
						</form>
					</div>
				</div>
			</div>

	@include('partials.right-section')
@endsection