<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberApp;

class MemberAppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memberApps = MemberApp::all();
        return view('memberApp.index',['memberApps' => $memberApps]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('memberApp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
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

        $newMemberApp = MemberApp::create($data);

        return redirect(route('memberApp.index'));
    }

    public function edit(MemberApp $memberApp){
        return view('memberApp.edit', ['memberApp' => $memberApp]);
    }

    public function update(MemberApp $memberApp, Request $request){
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
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
        $memberApp->update($data);

        return redirect(route('memberApp.index'))->with('success','Registration has been updated.');
    }


    public function destroy(MemberApp $memberApp){
        $memberApp->delete();

        return redirect(route('memberApp.index'))->with('success','Registration has been deleted.');
    }

}

