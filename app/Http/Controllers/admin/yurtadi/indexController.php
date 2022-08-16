<?php

namespace App\Http\Controllers\admin\yurtadi;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\yurtadi;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = yurtadi::paginate(10);//sayfada 10 tane gösterilmesini istiyoruz
        return view('admin.yurtadi.index', ['data' => $data]);
    }
    public function create()
    {
        return view('admin.yurtadi.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);

        $insert = yurtadi::create($all);
        if ($insert) {
            return redirect()->back()->with('status', 'Yurt Başarıyla Eklendi.');
        } else {
            return redirect()->back()->with('status', 'Yurt Eklenemedi..');

        }
    }
    public function edit($id)
    {
        $data = yurtadi::where('id', '=', $id)->get();
        return view('admin.yurtadi.edit', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $id = $request->route('id');
        $c = yurtadi::where('id', '=', $id)->count();
        if ($c != 0) {
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
            $update = yurtadi::where('id', '=', $id)->update($all);
            if ($update) {
                return redirect()->back()->with('status', 'Yurt İsmi Düzenlendi.');
            } else {
                return redirect()->back()->with('status', 'Yurt İsmi Düzenlenemedi..');

            }
        }
    }
    public function delete($id)
    {
        $c = yurtadi::where('id', '=', $id)->count();
        if ($c != 0) {
            $delete = yurtadi::where('id', '=', $id)->delete();
            return redirect()->back();
        } else {
            return redirect()->back()->with('status', 'Yurt İsmi Silinemedi..');

        }
    }
}
