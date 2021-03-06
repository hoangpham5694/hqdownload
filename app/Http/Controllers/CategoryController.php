<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\VideoCate;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function getCateList()
    {
    	return view('admins.categories.list');
    }
    public function getCateListAjax(Request $request,$max, $page)
    {
    	$numberRecord= $max;
        $vitri =($page -1 ) * $numberRecord;
    	$cates = Category::leftJoin('softwares','softwares.cate_id','=','categories.id')
    	->select('categories.id','categories.name','categories.slug',DB::raw('count(softwares.id) as count_softs'))
    //	->where('agencies.status','=','active')
    //	->where('courses.status','!=','delete')
    	->groupBy('categories.id')
    	->limit($numberRecord)->offset($vitri)    	
    	->get();
    	return $cates;
    }
    public function getTotalCategoriesAjax()
    {
    	return Category::select('id')->count();
    }
    public function getAddCateAjax(Request $request)
    {
    	$cate = new Category();
    	$cate->name = $request->catename;
        $cate->slug =str_slug($request->catename, "-");
        if(Category::where('slug','=',$cate->slug)->count()>0){
            return "Danh mục đã tồn tại";
        }
    	$cate->save();
    	return "Thêm danh mục thành công";
    }
    public function getEditCateAjax(Request $request)
    {
    	$cate = Category::findOrFail($request->cateid);
    	$cate->name = $request->catename;
        $cate->slug =str_slug($request->catename, "-");
    	$cate->save();
    	return "Sửa danh mục thành công";
    }
    public function getDeleteCateAjax($id)
    {
    	
    	try{
    		DB::beginTransaction();
			$cate = Category::findOrFail($id);
		//	$s = VideoCate::where('cate_id','=',$id)->delete();
		//	dd($videoCates);
    		$cate->delete();
    		DB::commit();
    		return "Xóa danh mục thành công";

    	}catch(Exception $e){
			DB::rollback();
			return "Lỗi trong quá trình thực hiện";
    	}
    }
    public function getListCateAjax()
    {
        $cates = Category::get();
        return json_decode($cates);
    }

    
}
