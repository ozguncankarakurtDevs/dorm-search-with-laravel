<?php

namespace App\Http\Controllers\front\yurtlar;

use App\Http\Controllers\Controller;
use App\Models\Telefon;
use App\Models\Yurtlar;
use Illuminate\Http\Request;

class indexController extends Controller
{

    public function index($selflink)
    {
        $c=Yurtlar::where('selflink','=',$selflink)->count();
        if($c!=0){
            $w=Yurtlar::where('selflink','=',$selflink)->get(); //bilgilerini alıyoruz

            return view('front.yurtlar.index',['data'=>$w]);
        }else{
            return redirect('/');
        }

    }
}
