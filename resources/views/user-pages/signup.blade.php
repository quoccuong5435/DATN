@extends('master')

@section('main-content')
 
    <!--DASHBOARD-->
    <section>
        
                            
        <div class="tr-register">
            <div class="tr-regi-form">
                @if(Session::has('thanhcong'))
                            <div class="alert alert-success">
                                {{Session::get('thanhcong')}}
                            </div>
                                   

                            
                        @endif
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $fail)
                               {{$fail}} <br>
                               
                                @endforeach
                            </div>
                                
                                @endif
                            
                <h4>Tạo Tài Khoản</h4>
                <form action="{{route('dangky-send')}}" method="POST" class="col s12">

                    

                         <div class="input-field col  s12">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" class="validate">
                        </div>
                        <div class="input-field col  s12">
                            <input type="text" name="username" class="validate">
                            <label>User Name</label>
                        </div>
                        <div class="input-field col m6 s12">
                            <input type="email" name="email" class="validate">
                            <label>Email</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="password" name="password" class="validate">
                            <label>Password</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="password" name="re-password" class="validate">
                            <label>Re-Password</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="submit" value="Tạo tài khoản" class="waves-effect waves-light btn-large full-btn"> </div>
                         <p>Bạn đã có tài khoản ? <a href="{{ route('dangnhap') }}">Đăng nhập</a>
                    </div>
                    
                </form>
               
                </p>
            </div>
        </div>
    </section>
    <!--END DASHBOARD-->
@endsection