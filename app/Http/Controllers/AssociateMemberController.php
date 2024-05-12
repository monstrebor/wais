<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssociateMember;
use Illuminate\Support\Facades\Hash;

class associateMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $associateMembers = AssociateMember::all();
        return view('associateMember.index',['associateMembers' => $associateMembers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('associateMember.create');
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

        $newAssociateMember = AssociateMember::create($data);

        return redirect(route('associateMember.index'));
    }

    public function edit(AssociateMember $associateMember){
        return view('associateMember.edit', ['associateMember' => $associateMember]);
    }

    public function update(AssociateMember $associateMember, Request $request){
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

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $associateMember->update($data);

        return redirect(route('associateMember.index'))->with('success','Registration has been updated.');
    }


    public function destroy(AssociateMember $associateMember){
        $associateMember->delete();

        return redirect(route('associateMember.index'))->with('success','Registration has been deleted.');
    }

}


