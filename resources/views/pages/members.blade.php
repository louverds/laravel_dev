@extends('layouts.app')
 

@section('content')
    <form class="bg-secondary" >
    <h5 class="text-warning">New Member Entry</h5>
    </form>
    <form action="members" method="Post">
    
        <div class="form-row">
                <div  class="col-md-3 mb-3">
                <label>Last Name </label>
                    <div input="form-group">
                        <input type="last_name" class="form-control" name="last_name" value="{{old('last_name')}}">
                        <div>{{$errors->first('last_name')}}</div>
                    </div>
                </div>

                <div  class="col-md-3 mb-3">
                <label>First Name</label>
                    <div input="form-group">
                        <input type="text" class="form-control" name="first_name" value="{{old('first_name')}}">
                        <div>{{$errors->first('first_name')}}</div>
                    </div>
                </div>
                <div  class="col-md-3 mb-3">
                    <label>Email</label>
                    <div input="form-group">
                        <input type="text" class="form-control" name="email" value="{{old('email')}}">
                        <div>{{$errors->first('email')}}</div>
                    </div>
                </div>
        </div>

        <div class="form-row">
                <div  class="col-md-3 mb-3">
                <label>Building Number</label>
                    <div input="form-group">
                        <input type="text" class="form-control" name="bldg_name" value="{{old('bldg_name')}}">
                        <div>{{$errors->first('first_name')}}</div>
                    </div>
                </div>
                <div  class="col-md-3 mb-3">
                <label>Unit Number</label>
                    <div input="form-group">
                        <input type="text" class="form-control" name="unit_no" value="{{old('unit_no')}}">
                        <div>{{$errors->first('unit_no')}}</div>
                    </div>
                </div>
        </div>
            <button class="btn bg-secondary text-warning" type="submit">Add Member</button>
        @csrf
    </form>   
<hr>
<h1>Member List</h1>
        @foreach ($members as $member)
        <!-- retrieve data -->
        <li>{{$member->last_name}} {{$member->first_name}} {{$member->bldg_name}} {{$member->unit_no}} {{$member->email}}</li>
        @endforeach
@endsection