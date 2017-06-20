<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\System;
use App\Software;
use App\Http\Requests;

class HomeController extends Controller
{
    public function getListSoftwareSWithCate($cateslug, $cateid)
    {

    	return view('guests.list-software-with-cate',['cate'=>Category::findOrFail($cateid)]);
    }
    public function getListSoftwareSWithSystem($systemslug, $systemid)
    {
    	return view('guests.list-software-with-system',['system'=>System::findOrFail($systemid)]);
    }
    public function getDetailSoftware($softwareslug,$softwareid)
    {
    	$software = Software::findOrFail($softwareid);
    	$arrTags = explode(",", $software->tags);
    	$keyword ="";
    	if(count($arrTags)>0 ){
    		$keyword = $arrTags[0];
    	}
    	//dd($keyword);
    	$suggestSoftwares = Software::select('name','id','title','image','slug','downloaded')
    	->where('status','=','active')
    	->where(function($query) use ($keyword){
            $query->where('name','LIKE','%'.$keyword.'%')
            ->orWhere('description','LIKE','%'.$keyword.'%')
            ->orWhere('content','LIKE','%'.$keyword.'%');
            })
    	->where('system_id','=',$software->system_id)
    	->where('id','!=',$software->id)
    	->limit(5)
    	->get();
  		//dd($suggestSoftwares);
    	return view('guests.software-detail',['software'=>$software,'suggestSoftwares'=>$suggestSoftwares]);
    }
    public function getDownloadSoftware($softwareslug,$softwareid)
    {
    	$software = Software::select('name','id','title','image','size','version','direct_link','mirror_link1','mirror_link2','crack_link','publisher_name','publisher_url')->findOrFail($softwareid);
    	$arrTags = explode(",", $software->tags);
    	$keyword ="";
    	if(count($arrTags)>0 ){
    		$keyword = $arrTags[0];
    	}
    	//dd($keyword);
    	$suggestSoftwares = Software::select('name','id','title','image','slug','downloaded')
    	->where('status','=','active')
    	->where(function($query) use ($keyword){
            $query->where('name','LIKE','%'.$keyword.'%')
            ->orWhere('description','LIKE','%'.$keyword.'%')
            ->orWhere('content','LIKE','%'.$keyword.'%');
            })
    	->where('system_id','=',$software->system_id)
    	->where('id','!=',$software->id)
    	->limit(5)
    	->get();
  		//dd($suggestSoftwares);
    	return view('guests.download',['software'=>$software,'suggestSoftwares'=>$suggestSoftwares]);
    }
}
