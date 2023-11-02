<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\barangKirim;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class barangController extends Controller
{
    public function generateUniqueCode()
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersNumber = strlen($characters);
        $codeLength = 6;

        $code = '';

        while (strlen($code) < 6) {
            $position = rand(0, $charactersNumber - 1);
            $character = $characters[$position];
            $code = $code . $character;
        }
        if (Barang::where('code', $code)->exists()) {
            $this->generateUniqueCode();
        }
        return $code;
    }

    public function index(Request $request)
    {
        $query = $request->search;
        $q = Str::length($query);
        $barang = Barang::where('name', 'LIKE', '%'.$query.'%')->orWhere('code', 'LIKE', '%'.$query.'%')->get();
        return view('barangData', compact('barang', 'q', 'query'));
    }

    public function tambah()
    {
        return view('barangBaru');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'satuan' => 'required',
            'qty' => 'required'
        ]);

        Barang::create([
            'code' => $this->generateUniqueCode(),
            'name' => $request->name,
            'satuan' => $request->satuan,
            'qty' => $request->qty
        ]);

        return redirect('/data-barang');
    }

    public function edit($code)
    {
        $target = barang::where('code', $code)->first();
        // dd($target);
        return view('editBarang', compact('target'));
    }

    public function update($code, Request $request)
    {
        $target = barang::where('code', $code)->first();

        $request->validate([
            'name' => 'required',
            'satuan' => 'required',
            'qty' => 'required'
        ]);

        $target->update([
            'name' => $request->name,
            'satuan' => $request->satuan,
            'qty' => $request->qty
        ]);
        return redirect('/data-barang');
    }

    public function destroy($code)
    {
        $target = barang::where('code', $code)->first();
        if($target){
            $target->delete();
        }
        return redirect('/data-barang');
    }











    public function indexKirim()
    {
        $data = barangKirim::with('Barang', 'Supplier')->get();

        return view('kirimData', compact('data'));
    }

    public function tambahKirim()
    {
        $supplier = Supplier::get();
        $byk = count($supplier);

        $barang = Barang::get();
        $bykb = count($barang);

        return view('ngirim', compact('supplier', 'byk', 'barang', 'bykb'));
    }

    public function simpanKirim(Request $request)
    {
        $request->validate([
            'id_supplier' => 'required',
            'id_barang' => 'required',
            'qty' => 'required'
        ]);

        barangKirim::create([
            'id_supplier' => $request->id_supplier,
            'id_barang' => $request->id_barang,
            'qty' => $request->qty
        ]);

        return redirect('/barang-terkirim');
    }

    public function editKirim($id)
    {
        $target = barangKirim::where('id', $id)->first();
        $supplier = Supplier::get();
        $barang = Barang::get();
        // dd($target);
        return view('editNgirim', compact('target', 'supplier', 'barang'));
    }

    public function updateKirim($id, Request $request)
    {
        $target = barangKirim::where('id', $id)->first();

        $request->validate([
            'name' => 'required',
            'satuan' => 'required',
            'qty' => 'required'
        ]);

        $target->update([
            'name' => $request->name,
            'satuan' => $request->satuan,
            'qty' => $request->qty
        ]);
        return redirect('/barang-terkirim');
    }

    public function destroyKirim($id)
    {
        $target = barangKirim::where('id', $id)->first();
        if($target){
            $target->delete();
        }
        return redirect('/barang-terkirim');
    }
}
