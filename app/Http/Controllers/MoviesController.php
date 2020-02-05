<?php
namespace App/Http/Controllers;

use App/User;
use App/Http/Controllers/Controller;

class MoviesController extends Controllers
{
	
	public function showProfile($id)
	{
		$user = user::findOrFail($id);
		return view('user.profile', ['user' => $user]);
	}
	
}


?>