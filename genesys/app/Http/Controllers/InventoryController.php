<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InventoryController extends Controller
{
    public function index() 
    {
    	$dataInventory = DB::table('inventory')
                ->select('*')
                ->orderBy('inventory_id','ASC')
                ->get();

        // dd($dataInventory);

        return view('home.inventory',compact('dataInventory'));
    }

    public function pembelianForm() 
    {
    	$dataInventory = DB::table('inventory')
                ->select('*')
                ->orderBy('inventory_id','ASC')
                ->get();

        return view('home.inventory-pembelian-form',compact('dataInventory'));
    }

    public function pembelian() 
    {
    	//maaf yg input pembelian belum sempat saya selesaikan, terimakasih

    }
}