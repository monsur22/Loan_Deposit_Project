<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userinoutrecord;
use App\CompanyUser;
use App\User;

class usersystemController extends Controller
{
    public function userloginoutRecord(){
        $loginrecord=Userinoutrecord::all();
        $companyUser=CompanyUser::all();
        $admin=User::all();
        return view('admin.usersystem_rec.user_loginout',[
            'loginrecord'=>$loginrecord,
            'companyUser'=>$companyUser,
            'admin'=>$admin,
        ]);
    }
}
