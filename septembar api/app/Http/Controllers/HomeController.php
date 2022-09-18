<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function showUser($id=null)
    {

if($id==''){

$Show= User::all();

return response()->json(['success'=>$Show],200);

}else{

    $Show= User::find($id);

    return response()->json(['success'=>$Show],200);



}

    }


    public function AddUser(Request $request)
    {

        if($request->isMethod('post')){

          $data=$request->all();

        }
//return  $data;


        $dataObj = new User();
        $dataObj->name = $request->name;
        $dataObj->email = $request->email;
        $dataObj->phone = $request->phone;
        $dataObj->password =Hash::make($request->password);

        $dataObj->save();

        $msg= "data added successfuly...";
        return response()->json(['success'=>$msg],200);


    }



    public function EditUser($id)
    {




    }


    public function update(Request $request,$id)
    {




    }



    public function DeleteUser( $id = null)
    {
        $dataObj =  User::find($id);
        $dataObj->delete();
        $msg= "data delete successfuly...";
        return response()->json(['success'=>$msg],201);


    }



}
