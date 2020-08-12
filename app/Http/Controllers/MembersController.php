<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MembersController extends Controller
{
    //
    public function list()
    {
       $members = Member::all();
       return view('pages.members', [
           'members'=> $members,
       ]);
    }

    public function store()
    {
        //validate
        $data = request()->validate([
            'last_name'=>'required',
            'first_name'=>'required',
            'bldg_name'=>'required',
            'unit_no'=>'required',
            'email'=>'required|email'
        ]);
        $member = new Member();
        $member->last_name = request('last_name');
        $member->first_name = request('first_name');
        $member->bldg_name = request('bldg_name');
        $member->unit_no = request('unit_no');
        $member->email = request('email');
        $member->save();

        return back();
    }
}
