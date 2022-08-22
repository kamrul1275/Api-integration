<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function AddUser(Request $request)
    {

    if(  $request->isMethod='post'){
        $data = $request->all();

    // return  $data;

    $UsersAdd = new User();

    $UsersAdd ->name = $data['name'];
    $UsersAdd ->email = $data['email'];
    $UsersAdd ->password = bcrypt($data['password']);

    $UsersAdd ->save();

    $Message = 'User Added Succesfully';

    return response()->json(['Message'=>$Message],201);

    }
      }


      public function ShowUser($id = null)
      {

  if($id==''){

      $Userss =User::all();

      return response()->json(['Userss'=>$Userss],200);
  } else{



      $Userss =User::all();

      return response()->json(['Userss'=>$Userss],200);
  }



      }













    function DeleteUser( $id = null)
    {


$userDelete = User::find($id);
$userDelete->delete();

$Message = 'User delete Succesfully';

return response()->json(['Message'=>$Message],201);



    }





}
