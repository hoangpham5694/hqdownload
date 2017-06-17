<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function getListSoftwareSWithCate($cateslug, $cateid)
    {

    	return view('guests.list-software-with-cate',['cateId'=>$cateid]);
    }
}
