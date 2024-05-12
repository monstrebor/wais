@extends('partials.layout')

@section('content')
    <div style="display: flex; flex-wrap: nowrap; justify-content: space-between;">
        <h1 style="margin-top: 3%">Register for Associate Members</h1>
        <div>
            @if (session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div style="margin-top: 2%; margin-right: 3%;">
            <button style="border: 1px solid black; border-radius: 5%; pading: 20px;">
                <a style="text-decoration: none; color: black;" href="{{route('associateMember.create')}}"><h3>Register</h3></a>
            </button>
            <button style="border: 1px solid black; border-radius: 5%; pading: 20px; margin-left: 10px;">
                <a style="text-decoration: none; color: black;" href="{{ route('home') }}"><h3>Home</h3></a>
            </button>
        </div>
    </div>
    <div style="margin-top: 3%;">
        <table border="1">
            <tr>
                <th>username</th>
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
                @foreach ($associateMembers as $associateMember)
                <tr>
                    <td>{{$associateMember->username}}</td>
                    <td>{{$associateMember->email}}</td>
                    <td>{{$associateMember->first_name}}</td>
                    <td>{{$associateMember->middle_name}}</td>
                    <td>{{$associateMember->last_name}}</td>
                    <td>{{$associateMember->present_address}}</td>
                    <td>{{$associateMember->contact_number}}</td>
                    <td>{{$associateMember->date_of_birth}}</td>
                    <td>{{$associateMember->gender}}</td>
                    <td>{{$associateMember->valid_id_type}}</td>
                    <td>{{$associateMember->valid_id_number}}</td>
                    <td>{{$associateMember->occupation}}</td>
                    <td>{{$associateMember->monthly_income}}</td>
                    <td>{{$associateMember->civil_status}}</td>
                    <td>{{$associateMember->spouse_name}}</td>
                    <td>{{$associateMember->number_of_children}}</td>
                    <td>{{$associateMember->name_of_dependents}}</td>
                    <td>{{$associateMember->birthday_of_dependents}}</td>
                    <td><span><a href="{{route('associateMember.edit', ['associateMember' => $associateMember])}}">Edit</a></span></td>
                    <td>
                        <form action="{{route('associateMember.destroy', ['associateMember' => $associateMember])}}" method="post">
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
