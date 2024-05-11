@extends('partials.layout')

@section('content')
    <h1>Register</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <a href="{{route('memberApp.create')}}">Register</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>username</th>
                <th>password</th>
                <th>email</th>
                <th>first name</th>
                <th>middle name</th>
                <th>last name</th>
                <th>present address</th>
                <th>contact number</th>
                <th>date of birth</th>
                <th>gender</th>
                <th>valid id type</th>
                <th>valid id number</th>
                <th>occupation</th>
                <th>monthly income</th>
                <th>civil status</th>
                <th>spouse name</th>
                <th>number of children</th>
                <th>name of dependents</th>
                <th>birthday of dependents</th>
                <th>Action</th>
                <th>Delete</th>
            </tr>
                @foreach ($memberApps as $memberApp)
                <tr>
                    <td>{{$memberApp->id}}</td>
                    <td>{{$memberApp->username}}</td>
                    <td>{{$memberApp->password}}</td>
                    <td>{{$memberApp->email}}</td>
                    <td>{{$memberApp->first_name}}</td>
                    <td>{{$memberApp->middle_name}}</td>
                    <td>{{$memberApp->last_name}}</td>
                    <td>{{$memberApp->present_address}}</td>
                    <td>{{$memberApp->contact_number}}</td>
                    <td>{{$memberApp->date_of_birth}}</td>
                    <td>{{$memberApp->gender}}</td>
                    <td>{{$memberApp->valid_id_type}}</td>
                    <td>{{$memberApp->valid_id_number}}</td>
                    <td>{{$memberApp->occupation}}</td>
                    <td>{{$memberApp->monthly_income}}</td>
                    <td>{{$memberApp->civil_status}}</td>
                    <td>{{$memberApp->spouse_name}}</td>
                    <td>{{$memberApp->number_of_children}}</td>
                    <td>{{$memberApp->name_of_dependents}}</td>
                    <td>{{$memberApp->birthday_of_dependents}}</td>
                    <td><span><a href="{{route('memberApp.edit', ['memberApp' => $memberApp])}}">Edit</a></span></td>
                    <td>
                        <form action="{{route('memberApp.destroy', ['memberApp' => $memberApp])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" >
                        </form>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection
