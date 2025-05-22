<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Farmer;
use App\Models\Client;
use App\Models\Form;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class Authcontroller extends Controller
{
    public function login(){
        return view('Auth.loginregister');
    }
    public function createuser(Request $request){
        
        $request->validate([
            'name'=>'required|string',
            'email'=>'email|required',
            'password'=>'required',
            // 'cnfpswrd'=>'required|same:password'
        ]);
        $user=new User ([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>Hash::make($request->get('password')),
        ]);
        $user->save();
        echo"data saved succesfully"; 
    }

    public function authenticate(Request $request){   
        $request->validate([
            'email'=>'email|required',
            'password'=>'required',
        ]);
        if(Auth::attempt(array('email'=>$request->get('email'),'password'=>$request->get('password')))){

            return view('Category.category');
        }
        else{   
            echo '<script> alert("Email adress or Password is Wrong")</script>';
            return view('Auth.loginregister');
        }
    }
    public function category1(){
        return view('Farmerregisteration.farmer');
    }
    public function farmerregister(Request $request){
        $data=new Farmer([
            'firstname'=>$request->get('firstname'),
            'lastname'=>$request->get('lastname'),
            'username'=>$request->get('username'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'address2'=>$request->get('address2'),
            'state'=>$request->get('state'),
            'district'=>$request->get('district'),
            'pincode'=>$request->get('pincode'),
        ]);
        $data->save();
        return view('ClientDashboard.dashboard');
    }
    public function category2(){
        return view('Client.client');
    }
    public function clientregister(Request $request){
        $clientdata=new Client([
            'firstname'=>$request->get('firstname'),
            'lastname'=>$request->get('lastname'),
            'username'=>$request->get('username'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'address2'=>$request->get('address2'),
            'state'=>$request->get('state'),
            'district'=>$request->get('district'),
            'pincode'=>$request->get('pincode'),
            'dimmension'=>$request->get('dimmension'),
            'longitude'=>$request->get('longitude'),
            'latitude'=>$request->get('latitude'),
            'soilreport'=>$request->get('soilreport'),
            'BhoomiLandId'=>$request->get('BhoomiLandId'),
        ]);
        $clientdata->save();
        return redirect()->route('farmer.dashboard');
    }
    public function farmerdashboard(){
        $clientdata=Client::all();
        $data=compact('clientdata');
        return view('FarmerDashboard.index')->with($data);
    }
    public function admindashboard(){
        return view('AdminDashboard.index');
    }
    public function addedit(){
        $url=url('/submit');
        $btnname='save';
        $form= new Form();
        $data=compact('url','btnname','form');
        return view('AdminDashboard.editadd')->with($data);
    }
    public function formsave(Request $request){
        $form= new Form([
            'name'=>$request->get('name'),
            'adress'=>$request->get('adress'),
            'phone'=>$request->get('phone'),
            'state'=>$request->get('state'),
            'pincode'=>$request->get('pincode')
        ]);
        $form->save();
        return redirect()->route('display');
    }
    public function display(){
        $data1= Form::all();
        return view('AdminDashboard.index',['userdata'=>$data1]);
    }
    public function edit($id){
        $form=Form::find($id);
        $url=url('/form/update').'/'.$id;
        $btnname='Update';
        $data=compact('form','url','btnname');
        return view('AdminDashboard.editadd')->with($data);
        
    }
    public function update($id ,Request $request){
        $form = Form::find($id);
        $form->update([
            'name'=>$request->get('name'),
            'adress'=>$request->get('adress'),
            'phone'=>$request->get('phone'),
            'state'=>$request->get('state'),
            'pincode'=>$request->get('pincode')
        ]);
        $form->save();
        return redirect()->route('display');  
    }
    public function delete($id){
        Form::find($id)->delete();
        return redirect()->route('display');  
    }
}