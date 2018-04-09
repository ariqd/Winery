<?php

namespace App\Http\Controllers\Admin;

use App\Bank;
use App\Category;
use App\Holder;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
        $data['banks'] = Bank::orderBy('nama')->get();
        $data['types'] = Type::all();
        $data['holders'] = Holder::all();
        $data['categories'] = Category::all();
        return view('admin.setting.setting', $data);
    }

    // Bank
    public function manage_bank(Request $request, $id = 0)
    {
        if ($id != 0) {
            $bank = Bank::find($id);
        } else {
            $bank = new Bank;
        }

        $file = $request->file('gambar');
        if ($file) {
            //Display File Name
            echo 'File Name: '.$file->getClientOriginalName();
            echo '<br>';
            //Move Uploaded File
            $destinationPath = 'img/bank';
            $file->move($destinationPath,$file->getClientOriginalName());
            $bank->gambar = $file->getClientOriginalName();
        }

        $bank->nama = $request->nama;
        $bank->deskripsi = $request->deskripsi;

        $bank->save();

        return redirect('admin/setting');
    }

    public function edit_bank($id)
    {
        $data['bank'] = Bank::find($id);
        return view('admin.setting.form-bank', $data);
    }

    public function delete_bank($id)
    {
        Bank::destroy($id);
        return redirect('admin/setting');
    }

    // Jenis Kartu
    public function manage_jenis(Request $request, $id = 0)
    {
        if ($id != 0) {
            $jenis = Type::find($id);
        } else {
            $jenis = new Type;
        }

        $jenis->nama = $request->nama;

        $jenis->save();

        return redirect('admin/setting');
    }

    public function edit_jenis($id)
    {
        $data['jenis'] = Type::find($id);
        return view('admin.setting.form-jenis', $data);
    }

    public function delete_jenis($id)
    {
        Type::destroy($id);
        return redirect('admin/setting');
    }

    // Pemegang Kartu
    public function manage_holder(Request $request, $id = 0)
    {
        if ($id != 0) {
            $holder = Holder::find($id);
        } else {
            $holder = new Holder;
        }

        $holder->nama = $request->nama;

        $holder->save();

        return redirect('admin/setting');
    }

    public function edit_holder($id)
    {
        $data['holder'] = Holder::find($id);
        return view('admin.setting.form-holder', $data);
    }

    public function delete_holder($id)
    {
        Holder::destroy($id);
        return redirect('admin/setting');
    }

    // kategori
    public function manage_category(Request $request, $id = 0)
    {
//        dd($request->all());
        if ($id != 0) {
            $category = Category::find($id);
        } else {
            $category = new Category;
        }

        $category->nama = $request->nama;
        $category->deskripsi = $request->deskripsi;
        if ($request->gambar) {
            $category->gambar = $request->gambar;
        }

        $category->save();

        return redirect('admin/setting');
    }

    public function edit_category($id)
    {
        $data['category'] = Category::find($id);
        return view('admin.setting.form-category', $data);
    }

    public function delete_category($id)
    {
        Category::destroy($id);
        return redirect('admin/setting');
    }
}
