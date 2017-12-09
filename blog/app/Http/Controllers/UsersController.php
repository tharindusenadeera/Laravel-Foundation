<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
    	$users = [
			'0' => [
						'firstname' => 'Tharindu',
						'lastname'  => 'Senadeera',
						'city'      => 'Nittambuwa'],
			'1' => [
						'firstname' => 'Madushani',
						'lastname'  => 'Jayalath',
						'city'      => 'Attanagalla']
			];
 

				return view('admin.users.index',compact('users'));

    }

    public function create(){
    	return view('admin.users.create');
    }

    public function store(Request $request){

    	//User::create($request->all());
    	//return 'Success';
    	return $request->all();
    }
}
