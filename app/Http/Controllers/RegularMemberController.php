<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegularMember;
use Illuminate\Support\Facades\Hash;

class RegularMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regularMembers = RegularMember::all();
        return view('regularMember.index',['regularMembers' => $regularMembers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('regularMember.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required|confirmed',
            'email' => 'required',
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'present_address' => 'required',
            'contact_number' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'valid_id_type' => 'required',
            'valid_id_number' => 'required',
            'occupation' => 'required',
            'monthly_income' => 'required',
            'civil_status' => 'required',
            'spouse_name' => 'nullable',
            'number_of_children' => 'nullable',
            'name_of_dependents' => 'required',
            'birthday_of_dependents' => 'required',
        ]);

        $data['password'] = Hash::make($request->password);

        $newRegularMember = RegularMember::create($data);

        return redirect(route('regularMember.index'));
    }

    public function edit(RegularMember $regularMember){
        return view('regularMember.edit', ['regularMember' => $regularMember]);
    }

    public function update(RegularMember $regularMember, Request $request){
        $data = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'present_address' => 'required',
            'contact_number' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'valid_id_type' => 'required',
            'valid_id_number' => 'required',
            'occupation' => 'required',
            'monthly_income' => 'required',
            'civil_status' => 'required',
            'spouse_name' => 'nullable',
            'number_of_children' => 'nullable',
            'name_of_dependents' => 'required',
            'birthday_of_dependents' => 'required',
        ]);

        $data['password'] = Hash::make($request->password);

        $regularMember->update($data);

        return redirect(route('regularMember.index'))->with('success','Registration has been updated.');
    }


    public function destroy(RegularMember $regularMember){
        $regularMember->delete();

        return redirect(route('regularMember.index'))->with('success','Registration has been deleted.');
    }

}

