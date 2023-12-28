<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Medcine;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
class UserController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
$data = User::orderBy('id','DESC')->paginate(5);
$roles = Role::all();

return view('users.index',compact('data','roles'))
->with('i', ($request->input('page', 1) - 1) * 5);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
$roles = Role::pluck('name','name')->all();
return view('users.create',compact('roles'));
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$this->validate($request, [
'name' => 'required',
'role_id' => 'required',
'email' => 'required|email|unique:users,email',
'password' => 'required|same:confirm-password',
]);

// dd($request->role_id);

   // $input = $request->all();
   // $input['password'] = Hash::make($input['password']);
   // $user = User::create($input);

   $user= new User();
   $user->name= $request->name;
   $user->email= $request->email;
   $user->password= bcrypt($request->password);
   $user->assignRole($request->role_id);
   $user->save();

toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
return  redirect()->back();

}
/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$user = User::find($id);
return view('users.show',compact('user'));
}
/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$user = User::find($id);
$roles = Role::pluck('name','name')->all();
$userRole = $user->roles->pluck('name','name')->all();
return view('users.edit',compact('user','roles','userRole'));
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
$this->validate($request, [
'name' => 'required',
'email' => 'required|email|unique:users,email,'.$id,
'password' => 'same:confirm-password',
]);
$input = $request->all();
if(!empty($input['password'])){
$input['password'] = Hash::make($input['password']);
}else{
$input = array_except($input,array('password'));
}
$role_id = $request->role_id;

$user = User::where('id',$request->id)->first();
$user->name= $request->name;
$user->email= $request->email;
$user->password= bcrypt($request->password);
DB::table('model_has_roles')->where('model_id', $user->id)->delete();
$user->assignRole(1);
$user->save();
// DB::table('model_has_roles')->where('model_id',$id)->delete();
// $user->assignRole($request->input('roles'));
toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Your account has been restored.');
return  redirect()->back();
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy(Request $request ,$id)
{
   $user= User::where('id',$request->id)->first();
   $user->delete();
   toastr()->closeOnHover(true)->closeDuration(20)->addWarning('Your account has been restored.');
   return  redirect()->back();
}
}