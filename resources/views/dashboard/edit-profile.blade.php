@extends('master')

@section('main-content')

	@include('partials.left-section')

	<!--CENTER SECTION-->
			<div class="db-2">
				<div class="db-2-com db-2-main">
					<h4>Sửa hồ sơ</h4>
					@if(Session::has('thongbao'))
                            <div class="alert alert-success">
                                {{Session::get('thongbao')}}
                            </div>
                                   

                            
                        @endif
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $fail)
                               {{$fail}} <br>
                               
                                @endforeach
                            </div>
                                
                                @endif
					<div class="db-2-main-com db2-form-pay db2-form-com">
						<form class="col s12" action="{{route('edit_profile')}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="row">

								<div class="input-field col s12">
									<input type="text" name="fullname_user" value="{{Auth::User()->fullname_user}}" class="validate">
									<label>Tên</label>
								</div>
							</div>
							<div class="row">

							<div class="input-field col s12 ">
									<input type="number" name="phone_user" value="{{Auth::User()->phone_user}}" class="validate">
									<label>Di động</label>
								</div>
							</div>
							<div class="row">

								<div class="input-field col s12 ">
									<input type="text" name="address_user" value="{{Auth::User()->address_user}}" class="validate">
									<label>Địa chỉ</label>
								</div>
							</div>
							<div class="row">

								<div class="input-field col s12 ">
									<select name="gender_user" >
										
										<option @if(Auth::User()->gender_user=='Nam') selected @endif  value="Nam">Nam</option>
										
										<option @if(Auth::User()->gender_user=='Nữ')  selected @endif value="Nữ">Nữ</option>
										
									</select>
									
								</div>
								</div>
							
							<div class="row db-file-upload">
								<div class="file-field input-field">
									<div class="db-up-btn"> <span>File</span>
										<input type="file" value="{{Auth::User()->avatar_user}}" name="avatar_user"> </div>
									<div class="file-path-wrapper">
										<input class="file-path validate"   value="{{Auth::User()->avatar_user}}" type="text"> </div>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<button type="" class="waves-effect waves-light full-btn">Gửi thông tin</button> </div>
							</div>
						</form>
					</div>
				</div>
			</div>

	@include('partials.right-section')
@endsection