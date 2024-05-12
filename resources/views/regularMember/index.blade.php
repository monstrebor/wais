@extends('partials.layout')

@section('content')
    <div style="display: flex; flex-wrap: nowrap; justify-content: space-between;">
        <h1 style="margin-top: 3%">Register for Regular Members</h1>
        <div>
            @if (session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div style="margin-top: 2%; margin-right: 3%;">
            <button style="border: 1px solid black; border-radius: 5%; pading: 20px;">
                <a style="text-decoration: none; color: black;" href="{{route('regularMember.create')}}"><h3>Register</h3></a>
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
                @foreach ($regularMembers as $regularMember)
                <tr>
                    <td>{{$regularMember->username}}</td>
                    <td>{{$regularMember->email}}</td>
                    <td>{{$regularMember->first_name}}</td>
                    <td>{{$regularMember->middle_name}}</td>
                    <td>{{$regularMember->last_name}}</td>
                    <td>{{$regularMember->present_address}}</td>
                    <td>{{$regularMember->contact_number}}</td>
                    <td>{{$regularMember->date_of_birth}}</td>
                    <td>{{$regularMember->gender}}</td>
                    <td>{{$regularMember->valid_id_type}}</td>
                    <td>{{$regularMember->valid_id_number}}</td>
                    <td>{{$regularMember->occupation}}</td>
                    <td>{{$regularMember->monthly_income}}</td>
                    <td>{{$regularMember->civil_status}}</td>
                    <td>{{$regularMember->spouse_name}}</td>
                    <td>{{$regularMember->number_of_children}}</td>
                    <td>{{$regularMember->name_of_dependents}}</td>
                    <td>{{$regularMember->birthday_of_dependents}}</td>
                    <td><span><a href="{{route('regularMember.edit', ['regularMember' => $regularMember])}}">Edit</a></span></td>
                    <td>
                        <form action="{{route('regularMember.destroy', ['regularMember' => $regularMember])}}" method="post">
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
