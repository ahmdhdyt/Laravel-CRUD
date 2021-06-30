<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;
Use Alert;

class MakulController extends Controller
{
    public function index()
    {
     $makul = Makul::all();
     return view('makul.index', compact('makul'));
    }

    public function tambah()
    {
        return view('makul.tambahm');
    }
    
    public function simpan(Request $request)
    {
        Makul::create($request->all());
        alert()->success('Berhasil','data berhasil disimpan!.');
        return redirect()->route('index.makul');
    }
    public function edit($id)
    {
        $makul = Makul::find($id);
       
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
{
    $makul = Makul::find($id);
    $makul->update($request->all());
    toast('Berhasil Update Data','success');
    return redirect()->route('index.makul');
    
}
public function delete($id)
{
    $makul = Makul::find($id);
    $makul-> delete();
    toast('Berhasil Delete Data','success');
    return redirect()->route('index.makul');
}
}
