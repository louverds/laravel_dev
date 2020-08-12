<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    //
    public function itemlist()
    {
        //select items form item table
        $items = Item::all();
        return view('pages.items',[
            'items' => $items,
        ]);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create template
        return  view('pages.itemsentry'); 

    }
    public function store()
    {
        //validate
        //$data = request()->validate([
        //    'item_code'=>'required',
         //   'item_name'=>'required',
        //    'item_desc'=>'required',
        //    'uom'=>'required',
         //   'price'=>'required',
         //   'qty'=>'required'
        //]);
        
        $item = new Item();
        $item->item_code = request('item_code');
        $item->item_name = request('item_name');
        $item->item_desc = request('item_desc');
        $item->uom = request('uom');
        $item->price = request('price');
        $item->qty_no = request('qty_no');
        $item->total_cost = request('total_cost');
        $item->save();

        return view('pages.items');
    }
    
}
