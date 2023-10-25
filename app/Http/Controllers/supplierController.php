<?php

namespace App\Http\Controllers;

use App\Models\Supplier as ModelsSupplier;
use Illuminate\Http\Request;

class supplierController extends Controller
{
    public function index(){
        $supplier = ModelsSupplier::select('id', 'name', 'address', 'phone')->get();
        return view('suppData', compact('supplier'));
    }

    public function detail($supplier_id){
        $target = ModelsSupplier::where('id', $supplier_id)->first();
        $target->open_hours = explode('|', $target->open_hours);
        return view('suppDetail', compact('target'));
    }
}
