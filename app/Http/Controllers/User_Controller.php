<?php

namespace App\Http\Controllers;
use App\User_account;
use App\User;
use Auth;
use Admin;
use Account;
use App\Http\Request\Login_Request;
use Illuminate\Http\Request;
use Hash;
use DB;
class User_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    { 
        $user= Auth::User();
       return view('admin.index',compact('user')); 
    }
    public function index()
    {
           return view('user-pages.signup'); 
    }
     public function partner_index()
    {
           return view('user-pages.partner-signup'); 
    }
     public function index2()
    {
           return view('user-pages.signin'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signin(Request $request)
    {
        $this->validate($request,
            [
                
                'email_user' => 'required|email|',
                'password' => 'required|min:6|max:20',
            ],

            [
                
                'email_user.required' =>'Vui lòng nhập email',
                'email_user.email' =>'Không đúng định dạng email',
                'password.required' =>'Vui lòng nhập password',
                'password.min' =>'Mật khẩu ít nhất 6 kí tự',
                'password.max' =>'Mật khẩu không quá 20 kí tự',
            ]);
        if(Auth::attempt(['email_user' => $request->email_user, 'password' => $request->password,'status'=>1,'role_user'=>1])){
            return redirect()->route('trang-chu')->with('thongbao'," Đăng nhập tài khoản thành công");
        }
        else {
            return redirect()->back()->with('thongbao'," Đăng nhập thất bại");
        }
        
    }

 public function signin_admin(Request $request)
    {
        $this->validate($request,
            [
                
                'email_user' => 'required|email|',
                'password' => 'required|min:6|max:20',
            ],

            [
                
                'email_user.required' =>'Vui lòng nhập email',
                'email_user.email' =>'Không đúng định dạng email',
                'password.required' =>'Vui lòng nhập password',
                'password.min' =>'Mật khẩu ít nhất 6 kí tự',
                'password.max' =>'Mật khẩu không quá 20 kí tự',
            ]);
        
        if(Auth::attempt(['email_user' => $request->email_user, 'password' => $request->password,'status'=>1,'role_user'=>0])){
            return redirect()->route('hotel')->with('thongbao'," Đăng nhập tài khoản Admin thành công");
        }
        elseif(Auth::attempt(['email_user' => $request->email_user, 'password' => $request->password,'status'=>1,'role_user'=> 2])){
            return redirect()->route('hotel')->with('thongbao'," Đăng nhập tài khoản Partner thành công");
        }
        else {
            return redirect()->back()->with('thongbao'," Đăng nhập thất bại. Địa chỉ email hoặc mật khẩu không đúng");
        }
        
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function signup(Request $request)
    {
        $this->validate($request,
            [
                
                'email_user' => 'required|email|unique:user,email_user',
                'username' => 'required|max:16|unique:user',
                'password' => 'required|min:6|max:20',
                're-password' => 'required|same:password',
                'phone_user' => 'required|max:10',
                'address_user' => 'required',
                'fullname_user' => 'required',


            ],

            [
                'username.unique' =>'Username đã có người sử dụng',
                'username.required' =>'Vui lòng nhập username',
                'email_user.required' =>'Vui lòng nhập email',
                'email_user.email' =>'Không đúng định dạng email',
                'email_user.unique' =>'Email đã có người sử dụng',
                'email_user.required' =>'Vui lòng nhập email',
                'password.required' =>'Vui lòng nhập password',
                're-password.required' =>'Vui lòng nhập email',
                're-password.same' =>'Mật khẩu không giống nhau',
                'password.min' =>'Mật khẩu ít nhất 6 kí tự',
                'password.max' =>'Mật khẩu không quá 20 kí tự',
                'phone_user.required' =>'Vui lòng nhập số điện thoại',
                'phone_user.max' =>'Số điện thoại không quá 10 kí tự',
            ])
        ;
            $user = new  User();
            $user->username= $request->username;
            $user->fullname_user= $request->fullname_user;
            $user->email_user= $request->email_user;
            $user->password=  Hash::make($request->password);
            $user->phone_user= $request->phone_user;
            $user->gender_user= $request->gender_user;
            $user->address_user= $request->address_user;
            $user->status  =1;
            $user->role_user =1;
            $user->save();

            return redirect()->back()->with('thanhcong',"Đã tạo tạo khoản thành công");



       
    }

    public function partner(Request $request)
    {
        $this->validate($request,
            [
                
                'email_user' => 'required|email|unique:user,email_user',
                'username' => 'required|max:16|unique:user',
                'password' => 'required|min:6|max:20',
                're-password' => 'required|same:password',
                'phone_user' => 'required|max:10',
                'address_user' => 'required',
                'fullname_user' => 'required',


            ],

            [
                'username.unique' =>'Username đã có người sử dụng',
                'username.required' =>'Vui lòng nhập username',
                'email_user.required' =>'Vui lòng nhập email',
                'email_user.email' =>'Không đúng định dạng email',
                'email_user.unique' =>'Email đã có người sử dụng',
                'email_user.required' =>'Vui lòng nhập email',
                'password.required' =>'Vui lòng nhập password',
                're-password.required' =>'Vui lòng nhập email',
                're-password.same' =>'Mật khẩu không giống nhau',
                'password.min' =>'Mật khẩu ít nhất 6 kí tự',
                'password.max' =>'Mật khẩu không quá 20 kí tự',
                'phone_user.required' =>'Vui lòng nhập số điện thoại',
                'phone_user.max' =>'Số điện thoại không quá 10 kí tự',
            ])
        ;
            $user = new  User();
            $user->username= $request->username;
            $user->fullname_user= $request->fullname_user;
            $user->email_user= $request->email_user;
            $user->password=  Hash::make($request->password);
            $user->phone_user= $request->phone_user;
            $user->gender_user= $request->gender_user;
            $user->address_user= $request->address_user;
            $user->status  =1;
            $user->role_user =2;
            $user->save();

            return redirect()->route('get_login')->with('thongbao',"Đã tạo tạo khoản thành công");



       
    }

    public function get_login()
    {
        if(Auth::check())
        {
            return redirect()->route('admin');
        }else {
            return view('admin.login');
        }
    }
    public function get_login_user()
    {
        if(Auth::check())
        {
            return redirect()->route('dashboard');
        }else {
            return view('user-pages.signin');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user=  DB::table('user')->where('status','=',1)
        ->get();
        return view('admin.users.user-list',compact('user'));
    }

public function ban_hotel($id, Request $request)
{
    $hotel=DB::table('user')->where('id','=',$id)
    ->update(['status'=>0]);
    return redirect()->back()->with('thongbao',"Khóa thành công");
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('dangnhap');
    }
    public function logout_admin()
    {
        Auth::logout();
        return view('admin.login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function dashboard()
    {
        return view('dashboard.profile');
    }
    public function edit($id)
    {
        $list_user=User::find($id);
       return view('admin.users.user-edit',compact('list_user'));
    }
    public function edit_user(Request $request)
    {
        $getImages = '';
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        if($request->hasFile('avatar_user')){
            $this->validate($request, 
                [
                    'avatar_user' => 'mimes:jpg,jpeg,png,gif|max:2048',
                     'phone_user' => 'required|max:10',
                'address_user' => 'required',
                'fullname_user' => 'required',
                ],          
                [
                    'avatar_user.mimes' => 'Chỉ chấp nhận ảnh đại diện với đuôi ( jpg, jpeg, png, gif )',
                    'avatar_user.max' => 'Ảnh đại diện không được vượt quá 4MB',
                    'phone_user.required' =>'Vui lòng nhập số điện thoại',
                'phone_user.max' =>'Số điện thoại không quá 10 kí tự',
                ]
            );
            $avatar_user = $request->file('avatar_user');
            $getImages = date('H-i-s_d-m-Y', time()).'_'.$avatar_user->getClientOriginalName();
            $destinationPath = public_path('images/user');
            $avatar_user->move($destinationPath, $getImages);
        }

        $edit_user= DB::table('user')
        ->where('id','=',Auth::User()->id)
        ->update(['fullname_user' =>$request->fullname_user,'phone_user'=> $request->phone_user,'address_user'=>$request->address_user,'gender_user'=>$request->gender_user,'avatar_user'=>$getImages]);
        return redirect()->back()->with('thongbao',"Update tài khoản thành công. ");

    }
     public function update(Request $request,$id)
    {
        $this->validate($request,
            [
                
                
                'phone_user' => 'required|max:10',
                'address_user' => 'required',
                'fullname_user' => 'required',


            ],

            [
                
                'avatar_user.mimes' => 'Chỉ chấp nhận ảnh đại diện với đuôi ( jpg, jpeg, png, gif )',
                    'avatar_user.max' => 'Ảnh đại diện không được vượt quá 4MB',
                    'phone_user.required' =>'Vui lòng nhập số điện thoại',
                'phone_user.max' =>'Số điện thoại không quá 10 kí tự',
            ])
        ;
            $user =   User::find($id);
            
            $user->fullname_user= $request->fullname_user;
           

            $user->phone_user= $request->phone_user;
            $user->gender_user= $request->gender_user;
            $user->address_user= $request->address_user;
            $user->status  =1;
            $user->role_user =$request->role_user ;
            $user->save();

            return redirect()->back()->with('thanhcong',"Update tài khoản thành công");



       
    }
    public function profile()
    {
        $list_user=DB::table('user')
        ->where('id','=',Auth::User()->id)
        ->get();
        return view('admin.admin-profile',compact('$list_user'));
    }
     public function profiles()
    {
        $list_user=DB::table('user')
        ->where('id','=',Auth::User()->id)
        ->get();
        return view('admin.users.profile',compact('$list_user'));
    }
    public function profile_send(Request $request)
    {
         $getImages = '';
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        if($request->hasFile('avatar_user')){
            $this->validate($request, 
                [
                    'avatar_user' => 'mimes:jpg,jpeg,png,gif|max:2048',
                     'phone_user' => 'required|max:10',
                'address_user' => 'required',
                'fullname_user' => 'required',
                ],          
                [
                    'avatar_user.mimes' => 'Chỉ chấp nhận ảnh đại diện với đuôi ( jpg, jpeg, png, gif )',
                    'avatar_user.max' => 'Ảnh đại diện không được vượt quá 4MB',
                    'phone_user.required' =>'Vui lòng nhập số điện thoại',
                'phone_user.max' =>'Số điện thoại không quá 10 kí tự',
                ]
            );
            $avatar_user = $request->file('avatar_user');
            $getImages = date('H-i-s_d-m-Y', time()).'_'.$avatar_user->getClientOriginalName();
            $destinationPath = public_path('images/user');
            $avatar_user->move($destinationPath, $getImages);
        }

        $list_user= DB::table('user')
        ->where('id','=',Auth::User()->id)
        ->update(['fullname_user' =>$request->fullname_user,'phone_user'=> $request->phone_user,'address_user'=>$request->address_user,'avatar_user'=>$getImages]);
        return redirect()->back()->with('thongbao',"Update tài khoản thành công. ");
    }
}
