<?php

namespace App\Http\Controllers\admin\ozellik;

use App\Helper\imageUpload;
use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Ozellik;
//use Faker\Core\File;
use Illuminate\Http\Request;
use File;
class indexController extends Controller
{
    public function index()
    {
        $data = Ozellik::paginate(10);   //buraya Model ismi yazılır
        return view('admin.ozellik.index', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.ozellik.create');
    }

    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $insert = Ozellik::create($all);
        $all['image'] = imageUpload::singleUpload(rand(1, 9000), "ozellik", $request->file('image'));
        if ($insert) {
            return redirect()->back()->with('status', 'Yeni Özellik Eklendi.');
        } else {
            return redirect()->back()->with('status', 'Özellik Eklenemedi..');

        }
    }

    public function edit($id)
    {
        $c = Ozellik::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = Ozellik::where('id', '=', $id)->get();
            return view('admin.ozellik.edit', ['data' => $data]);
        } else {
            return redirect('/');
        }
    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        $c = Ozellik::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = Ozellik::where('id', '=', $id)->get();
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
             $all['image'] = imageUpload::singleUploadUpdate(rand(1, 900), 'ozellik', $request->file('image'), $data, 'image');
            $update = Ozellik::where('id', '=', $id)->update($all);
            if ($update) {
                return redirect()->back()->with('status', 'Özellikler Başarıyla Düzenlendi.');
            } else {
                return redirect()->back()->with('status', 'Özellikler Düzenlenemedi..');

            }
        } else {
            return redirect('/');
        }
    }

    public function delete($id){
        $c = Ozellik::where('id', '=', $id)->count();
        if ($c != 0) {
            $w = Ozellik::where('id', '=', $id)->get();
            File::delete('public/'.$w[0]['image']);
            Ozellik::where('id','=',$id)->delete();
            return redirect()->back();
        }else{
            return redirect('/');
        }
    }

}
