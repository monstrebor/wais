@extends('partials.layout')

@section('content')
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{route('memberApp.update', ['memberApp' => $memberApp])}}">
    @csrf
    @method('put')
    <div style="text-align: center">
        <h1>Edit the Registration</h1>
        <div style="margin: 10px">
            <label for="username">username</label>
            <input type="text" name="username" placeholder="username" value="{{$memberApp->username}}">
        </div>
        <div style="margin: 10px">
            <label for="password">password</label>
            <input type="password" name="password" placeholder="password" value="{{$memberApp->password}}">
        </div>
        <div style="margin: 10px">
            <label for="email">email</label>
            <input type="email" name="email" placeholder="email" value="{{$memberApp->email}}">
        </div>
        <div style="margin: 10px">
            <label for="first_name">first name</label>
            <input type="text" name="first_name" placeholder="first name" value="{{$memberApp->first_name}}">
        </div>
        <div style="margin: 10px">
            <label for="middle_name">middle name</label>
            <input type="text" name="middle_name" placeholder="middle name" value="{{$memberApp->middle_name}}">
        </div>
        <div style="margin: 10px">
            <label for="last_name">last name</label>
            <input type="text" name="last_name" placeholder="last name" value="{{$memberApp->last_name}}">
        </div>
        <div style="margin: 10px">
            <label for="present_address">present address</label>
            <input type="text" name="present_address" placeholder="present address" value="{{$memberApp->present_address}}">
        </div>
        <div style="margin: 10px">
            <label for="contact_number">contact number</label>
            <input type="number" name="contact_number" placeholder="contact number" value="{{$memberApp->contact_number}}">
        </div>
        <div style="margin: 10px">
            <label for="date_of_birth">date of birth</label>
            <input type="date" name="date_of_birth" placeholder="date of birth" value="{{$memberApp->date_of_birth}}">
        </div>
        <div style="margin: 10px">
            <label for="gender">gender</label>
            <input type="text" name="gender" placeholder="gender" value="{{$memberApp->gender}}">
        </div>
        <div style="margin: 10px">
            <label for="valid_id_type">valid id type</label>
            <input type="text" name="valid_id_type" placeholder="valid id type" value="{{$memberApp->valid_id_type}}">
        </div>
        <div style="margin: 10px">
            <label for="valid_id_number">valid id number</label>
            <input type="number" name="valid_id_number" placeholder="valid id number" value="{{$memberApp->valid_id_number}}">
        </div>
        <div style="margin: 10px">
            <label for="occupation">occupation</label>
            <input type="text" name="occupation" placeholder="occupation" value="{{$memberApp->occupation}}">
        </div>
        <div style="margin: 10px">
            <label for="monthly_income">monthly income</label>
            <input type="number" name="monthly_income" placeholder="monthly income" value="{{$memberApp->monthly_income}}">
        </div>
        <div style="margin: 10px">
            <label for="civil_status">civil status</label>
            <input type="text" name="civil_status" placeholder="civil status" value="{{$memberApp->civil_status}}">
        </div>
        <div style="margin: 10px">
            <label for="spouse_name">spouse name</label>
            <input type="text" name="spouse_name" placeholder="spouse name" value="{{$memberApp->spouse_name}}">
        </div>
        <div style="margin: 10px">
            <label for="number_of_children">number of children</label>
            <input type="number" name="number_of_children" placeholder="number of children" value="{{$memberApp->number_of_children}}">
        </div>
        <div style="margin: 10px">
            <label for="name_of_dependents">name of dependents</label>
            <input type="text" name="name_of_dependents" placeholder="name of dependents" value="{{$memberApp->name_of_dependents}}">
        </div>
        <div style="margin: 10px">
            <label for="birthday_of_dependents">birthday of dependents</label>
            <input type="date" name="birthday_of_dependents" placeholder="birthday of dependents" value="{{$memberApp->birthday_of_dependents}}">
        </div>
        <div>
            <input type="submit" value="Update the Registration" style="margin:10px">
        </div>
    </div>
@endsection
