<?php

namespace App\Http\Controllers\Shop\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;


class LoginController extends Controller
{
  public $route= 'shop.login';
  public $baseModel;
  public $rules  = [
      'email' =>'email|max:40|required',
      'password'=> 'max:30|min:6|required'
        ];
    public $rules1  = [
        'name'=> 'max:50|min:2|required',
        'email' =>'email|unique:users,email|max:40|required',
        'password'=> 'max:30|min:6|required',
    ];
  public $mess = [
        'email.email' => 'Định dạng sai email.',
        'email.unique' =>'Email đã tồn tại.',
        'email.max' =>'Email tối đa chỉ 40 kí tự.',
        'password.min' =>'Mật khẩu tối thiểu 6 kí tự.',
        'password.max' =>'Mật khẩu tối đã 30 kí tự.',
        'email.unique' =>'Email này đã tồn tại trên hệ thống',
        'name.min' =>'Họ tên tối thiểu 2 kí tự.',
        'name.max' =>'Họ tên tối đã 50 kí tự.',
        ];

  public function __construct()
  {
      $this->baseModel = new Product();
  }
  public function index(Request $request){

      return view('shop.pages.auth.login');
  }

  public function submit(Request $request){
      $validate = Validator::make($request->all(),$this->rules ,$this->mess,[]);

      if($validate->fails()){
         return back()->withErrors($validate->errors());
      }

          if(Auth::attempt(['email'=>$request->email, 'password'=> $request->password])){

              return back()->with('messenger','Đăng nhập thành công !');
          }
          else {
              return back()->withErrors(['login_false'=>'Sai tài khoản vào mật khẩu']);

          }
  }

  public function checkLogin(){
      if(Auth::check()){
         return $this->ajaxRespond(1,[],[]);
      }
      else {
         return $this->ajaxRespond(0,[],[]);
      }
  }

  public function logout(){
      if(Auth::check()){
          Auth::logout();
          return redirect('/login')->with('messenger','Đăng xuất thành công !');

      }
  }
  public function sighUp(Request $request){
      $validate = Validator::make($request->all(),$this->rules1 ,$this->mess,[]);
      if($validate->fails()){
          return back()->withErrors($validate->errors());
      }
      if($request->password !== $request->confirm_password){
          return back()->withErrors(['sighup_false'=>'Mật khẩu xác nhận không trùng khớp!']);
      }
      $account = ['email'=>$request->email, 'password'=> bcrypt($request->password), 'name'=>$request->name];
      if($account){
          $create_user= User::create($account);
          if($create_user){
              if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password ])){
                  return back()->with('messenger','Đăng kí và đăng nhập thành công !');
              }
          }
      }


  }


}
