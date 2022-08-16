<?php

namespace App\Http\Controllers\admin\yurtlar;

use App\Helper\imageUpload;
use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Kategoriler;
use App\Models\Yurtlar;
use File;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = Yurtlar::paginate(10); //Yurtlar->Model İsmi
        return view('admin.yurtlar.index', ['data' => $data]);
    }

    public function create()
    {


        $kategori=Kategoriler::all();
        return view('admin.yurtlar.create', ['kategori'=>$kategori]);
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $all['image'] = imageUpload::singleUpload(rand(1, 9000), "yurtlar", $request->file('image'));

        $insert = Yurtlar::create($all);
        if ($insert) {
            return redirect()->back()->with('status', 'Yurt Eklendi.');


        } else {
            return redirect()->back()->with('status', 'Yurt Ekleme Başarısız..');
        }
    }


    public function edit($id)
    {


        $c = Yurtlar::where('id', '=', $id)->count();
        if ($c != 0) {
            $kategori=Kategoriler::all();
            $data = Yurtlar::where('id', '=', $id)->get();
            return view('admin.yurtlar.edit', ['data' => $data,'kategori'=>$kategori]);

        } else {
            return redirect('/');
        }

    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        $c = Yurtlar::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = Yurtlar::where('id', '=', $id)->get();
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
            $all['image'] = imageUpload::singleUploadUpdate(rand(1, 9000), 'yurtlar', $request->file('image'), $data, 'image');

            $update = Yurtlar::where('id', '=', $id)->update($all);
            if ($update) {
                return redirect()->back()->with('status', 'Yurtlar Düzenlendi.');

            } else {
                return redirect()->back()->with('status', 'Yurtlar Düzenlenemedi.');

            }

        } else {
            return redirect('/');
        }
    }

    public function delete($id)
    {
        $c = Yurtlar::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = Yurtlar::where('id', '=', $id)->get();
            File::delete('public/'.$data[0]['image']);
            Yurtlar::where('id','=',$id)->delete();
            return redirect('/admin');
        }else{
            return redirect('/');
        }
    }
}
