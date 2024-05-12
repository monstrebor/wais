@extends('partials.layout')

@section('content')
<div>
    <div style="display: flex; justify-content: right; flex-wrap: nowrap;">
        <div style="margin-top: 2%; margin-right: 3%;">
            <button style="border: 1px solid black; border-radius: 5%; pading: 20px;">
                <a style="text-decoration: none; color: black;" href="{{route('associateMember.index')}}"><h3>Index</h3></a>
            </button>
            <button style="border: 1px solid black; border-radius: 5%; pading: 20px; margin-left: 10px;">
                <a style="text-decoration: none; color: black;" href="{{ route('home') }}"><h3>Home</h3></a>
            </button>
        </div>
    </div>
    <div style="text-align: center; border: 2px solid black; margin-left: 20%; margin-right: 20%;">
        <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form method="post" action="{{route('associateMember.store')}}">
        @csrf
        @method('post')
        <div style="text-align: center">
            <h1>Registration for Associate Member</h1>
            <div style="margin: 10px">
                <label for="username">username</label>
                <input type="text" name="username" placeholder="username">
            </div>
            <div style="margin: 10px">
                <label for="password">password</label>
                <input type="password" name="password" placeholder="password">
            </div>
            <div style="margin: 10px">
                <label for="confirm-password">confirm password</label>
                <input type="password" name="password_confirmation" id="confirm-password" placeholder="password">
            </div>
            <div style="margin: 10px">
                <label for="email">email</label>
                <input type="email" name="email" placeholder="email">
            </div>
            <div style="margin: 10px">
                <label for="first_name">first name</label>
                <input type="text" name="first_name" placeholder="first name">
            </div>
            <div style="margin: 10px">
                <label for="middle_name">middle name</label>
                <input type="text" name="middle_name" placeholder="middle name">
            </div>
            <div style="margin: 10px">
                <label for="last_name">last name</label>
                <input type="text" name="last_name" placeholder="last name">
            </div>
            <div style="margin: 10px">
                <label for="present_address">present address</label>
                <input type="text" name="present_address" placeholder="present address">
            </div>
            <div style="margin: 10px">
                <label for="contact_number">contact number</label>
                <input type="number" name="contact_number" placeholder="contact number">
            </div>
            <div style="margin: 10px">
                <label for="date_of_birth">date of birth</label>
                <input type="date" name="date_of_birth" placeholder="date of birth">
            </div>
            <div style="margin: 10px">
                <label for="gender">gender</label>
                <input type="text" name="gender" placeholder="gender">
            </div>
            <div style="margin: 10px">
                <label for="valid_id_type">valid id type</label>
                <input type="text" name="valid_id_type" placeholder="valid id type">
            </div>
            <div style="margin: 10px">
                <label for="valid_id_number">valid id number</label>
                <input type="number" name="valid_id_number" placeholder="valid id number">
            </div>
            <div style="margin: 10px">
                <label for="occupation">occupation</label>
                <input type="text" name="occupation" placeholder="occupation">
            </div>
            <div style="margin: 10px">
                <label for="monthly_income">monthly income</label>
                <input type="number" name="monthly_income" placeholder="monthly income">
            </div>
            <div style="margin: 10px">
                <label for="civil_status">civil status</label>
                <input type="text" name="civil_status" placeholder="civil status">
            </div>
            <div style="margin: 10px">
                <label for="spouse_name">spouse name</label>
                <input type="text" name="spouse_name" placeholder="spouse name">
            </div>
            <div style="margin: 10px">
                <label for="number_of_children">number of children</label>
                <input type="number" name="number_of_children" placeholder="number of children">
            </div>
            <div style="margin: 10px">
                <label for="name_of_dependents">name of dependents</label>
                <input type="text" name="name_of_dependents" placeholder="name of dependents">
            </div>
            <div style="margin: 10px">
                <label for="birthday_of_dependents">birthday of dependents</label>
                <input type="date" name="birthday_of_dependents" placeholder="birthday of dependents">
            </div>
            <div>
                <input type="submit" value="Submit" style="margin:10px">
            </div>
        </div>
    </div>
</div>
@endsection
