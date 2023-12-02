<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipController extends Controller
{
    //Return Membership index view
    public function index(){
        return view('membership.index');
    }
    //Return Membership creation view
    public function create(){
        return view('membership.create');
    }
}
