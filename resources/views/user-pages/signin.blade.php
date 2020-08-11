@extends('master')

@section('main-content')

<!--DASHBOARD-->
	<section>
		<div class="tr-register">
			<div class="tr-regi-form">
				<h4>Đăng nhập</h4>
				<form action="{{route('dangnhap-send')}}" method="POST" class="col s12">
					@csrf
					 @if(Session::has('thongbao'))
                            <div class="alert alert-danger">
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
					<div class="row">
						<div class="input-field col s12">
							<input type="email" name="email_user" class="validate">
							<label>Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" name="password" class="validate">
							<label>Mật khẩu</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
					</div>
				</form>
				<p><a href="forgot-pass.html">Quên mật khẩu</a> | Bạn chưa có tài khoản ? <a href="{{ route('dangky') }}">Đăng ký</a>
				</p>
				<div class="soc-login">
					<h4>Đăng nhập với</h4>
					<ul>
						<li><a href="#"><i class="fa fa-facebook fb1"></i> Facebook</a> </li>
						<li><a href="#"><i class="fa fa-twitter tw1"></i> Twitter</a> </li>
						<li><a href="#"><i class="fa fa-google-plus gp1"></i> Google</a> </li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--END DASHBOARD-->

@endsection