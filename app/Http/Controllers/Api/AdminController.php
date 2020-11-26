<?php
namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     *email 1712954704@qq.com
     * User Mr.Xu
    */
    public function login(Request $request)
    {
        dd($request->input());
        $res = Admin::get();
        return return_msg(200,'success',$res);
    }

}
