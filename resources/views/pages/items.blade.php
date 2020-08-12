@extends('layouts.app')

@section('content')
    <a href="itemsentry">Add Item</a>
    <h1>Item List</h1>
    <hr>
    <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">Item Code</th>
                <th scope="col">Item Name</th>
                <th scope="col">Item Desc</th>
                <th scope="col">Quantity</th>
                <th scope="col">Unit of Measure</th>
                <th scope="col">Price</th>
                </tr>
            </thead>
                @foreach($items as $item)
                <tr>
                    <td>{{$item->item_code}}</td>
                    <td>{{$item->item_name}}</td>
                    <td>{{$item->item_desc}}</td>
                    <td>{{$item->uom}}</td>
                    <td>{{$item->qty_no}} </td>
                    <td>{{$item->price}} </td>
                @endforeach 
                </tr>     

    </table>

@endsection