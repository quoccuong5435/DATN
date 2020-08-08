<?php

namespace App\Http\Controllers;
use App\User_account;
use App\User;
use Auth;
use App\Http\Request\Login_Request;
use Illuminate\Http\Request;
use Hash;
class User_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           return view('user-pages.signup'); 
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
                
                'email' => 'required|email|',
                'password' => 'required|min:6|max:20',
            ],

            [
                
                'email.required' =>'Vui lòng nhập email',
                'email.email' =>'Không đúng định dạng email',
                'password.required' =>'Vui lòng nhập password',
                'password.min' =>'Mật khẩu ít nhất 6 kí tự',
                'password.max' =>'Mật khẩu không quá 20 kí tự',
            ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('trang-chu');
        }
        else {
            return redirect()->back()->with('thongbao'," Đăng nhập thất bại");
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
                
                'email' => 'required|email|unique:user_account,email',
                'username' => 'required|max:16|unique:user_account',
                'password' => 'required|min:6|max:20',
                're-password' => 'required|same:password'
            ],

            [
                'username.unique' =>'Username đã có người sử dụng',
                'username.required' =>'Vui lòng nhập username',
                'email.required' =>'Vui lòng nhập email',
                'email.email' =>'Không đúng định dạng email',
                'email.unique' =>'Email đã có người sử dụng',
                'email.required' =>'Vui lòng nhập email',
                'password.required' =>'Vui lòng nhập password',
                're-password.required' =>'Vui lòng nhập email',
                're-password.same' =>'Mật khẩu không giống nhau',
                'password.min' =>'Mật khẩu ít nhất 6 kí tự',
                'password.max' =>'Mật khẩu không quá 20 kí tự',
            ])
        ;
            $user = new  User_account();
            $user->username= $request->username;
            $user->email= $request->email;
            $user->password=  Hash::make($request->password);
            $user->status  =1;
            $user->role  =1;
            $user->save();

            return redirect()->back()->with('thanhcong',"Đã tạo tạo khoản thành công");



       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user=  User_account::all();
        return view('admin.users.user-list',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
