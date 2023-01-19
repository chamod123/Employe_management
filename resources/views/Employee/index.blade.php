@extends('layout.employee_layout')
@section('employee_body')


    <div class="container">
        <h1>Employee s</h1>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Gender</th>
                <th scope="col">Hire Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->first_name}}</td>
                    <td>{{$employee->last_name}}</td>
                    <td>{{$employee->birth_date}}</td>
                    <td>{{$employee->gender}}</td>
                    <td>{{$employee->hire_date}}</td>
                </tr>
             @endforeach

            </tbody>
        </table>

    </div>
@endsection
