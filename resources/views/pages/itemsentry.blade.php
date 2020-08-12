@extends('layouts.app')

@section('content')
<a href="items">View Items</a>
<hr>
<form class="bg-secondary">
<h3 class="text-warning">Item Entry</h3>
</form>
 <form action="items" method="Post">
        <div class="form-row">
                <div  class="col-md-4 mb-3">
                <label>Item Code </label>
                    <div input="form-group">
                        <input type="text" class="form-control" name="item_code" value="{{old('item_code')}}">
                        <div>{{$errors->first('item_code')}}</div>
                    </div>
                </div>

                <div  class="col-md-4 mb-3">
                <label>Item Name</label>
                    <div input="form-group">
                        <input type="text" class="form-control" name="item_name" value="{{old('item_name')}}">
                        <div>{{$errors->first('item_name')}}</div>
                    </div>
                </div>

                <div  class="col-md-4 mb-3">
                <label>Item Description</label>
                    <div input="form-group">
                        <input type="text" class="form-control" name="item_desc" value="{{old('item_desc')}}">
                        <div>{{$errors->first('item_desc')}}</div>
                    </div>
                </div>
        </div>

        <div class="form-row">
            <div  class="col-md-4 mb-3">
                <label>Quantity</label>
                    <div input="form-group">
                        <input id="quantity" type="number" class="form-control" name="qty_no" value="0">
                        <div>{{$errors->first('qty_no')}}</div>
                    </div>
                </div>
                <div  class="col-md-4 mb-3">
                    <label>Price</label>
                    <div input="form-group">
                        <input id="price" type="number" class="form-control" name="price" value="0">
                        <div>{{$errors->first('price')}}</div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                <label>Unit of measure</label>
                <div input="form-group">
                <select class="form-control" id="inputUom" type="uom" name="uom">
                    <option selected>Choose...</option>
                    <option value="box">box</option>
                    <option value="pcs">pcs</option>
                    <option value="gallon">gallon</option>
                </select>
                </div>
            </div>
                <div  class="col-md-4 mb-3">
                    <label>Total Cost</label>
                    <div input="form-group">
                        <input id="total" type="number" class="form-control" name="total_cost" value="">
                        <div>{{$errors->first('price')}}</div>
                    </div>
                </div>
        </div>
                <div>
                    <button class="btn btn-primary text-warning bg-secondary" type="submit">Save</button>
                    <a id="testBtn" class="btn btn-primary">Test btn</a>
                </div>
                @csrf
    </form> 
     

@endsection
@section('script')
    <script>
            const quantity = $("#quantity");//document.getElementById('quantity').value;
            const price = $("#price");
            const total = $("#total");
            
            quantity.on("change", function(){
                //alert(quantity.val());
                console.log(quantity.val());
                total.val(quantity.val()*price.val());
            })
            price.on("change", function(){
                //alert(quantity.val());
                console.log(quantity.val());
                total.val(quantity.val()*price.val());
            })

            $("#testBtn").on("click", function(){
                total.val(quantity.val()*price.val());
            })
    </script> 
@endsection