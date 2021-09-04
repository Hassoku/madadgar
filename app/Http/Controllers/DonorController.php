<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function profile(){
    	return view('donor.pages.profile');
    }
}
