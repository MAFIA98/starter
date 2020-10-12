<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Front;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class UserController extends BaseController
{
    public function showUsereName()
    {
        return 'Mosab Al moghrabi';
    }

    public function getIndex()
    {
       /* $data=[];
        $data['id']=1;
        $data['Name']='Mosab';
        $data['Age']=22;*/

        /*$obj=new \stdClass();

        $obj->id=1;
        $obj->name='Mosab';
        $obj->gender='male';*/

        $data=['Ahmad','Mosab'];
        $data1=[];

        return view('welcome',compact('data','data1'))->with('Name','Mosab Al moghrabi');
    }

}
