<?php
namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    /**
     *email 1712954704@qq.com
     * User Mr.Xu
    */
    public function login(Request $request)
    {
        $admin = new Admin();
        // 新增
//        $admin->username = $request->name;
//        $admin->password = Crypt::encrypt($request->password);;
//        $admin->save();
        $res = $admin->where('username',$request->name)->first();
        $data = Crypt::encrypt($res);
        if ($res){
            if($request->password == Crypt::decrypt($res->password)){
                return return_msg(200,'success',$data);
            }
            return return_msg(201,'密码不匹配');
        }
        return return_msg(201,'用户不存在');
    }

}
