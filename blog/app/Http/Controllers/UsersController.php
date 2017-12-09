<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
 

				return $users;

    }
}
