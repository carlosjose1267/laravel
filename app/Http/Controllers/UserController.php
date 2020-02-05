<?php
namespace App/Http/controllers;

use App/User;
use App/Http/controllers/Controller


class UserController extends Controller
{
	
	
}

public function showProfile($id)
{
	$user = user::findOrFail($id);
	return view('user.profile', ['user' => $user]);
	
}

}

?>