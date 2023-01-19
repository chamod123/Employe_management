@extends('layout.employee_layout')
@section('employee_body')


    <div class="container">
        <br>
        <div class="row">
            <h1 class="col-md-6" style="color: blue">Employee Details</h1>
            <div class="col-md-6"><a href="/Employee/NewEmployee" class="btn btn-success">Add New Employee</a></div>
        </div>



        <table class="table">
            <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Gender</th>
                <th scope="col">Hire Date</th>
                <th scope="col"></th>
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
                        <td><a href="/Employee/{{$employee->emp_no}}/View"><i class="fa fa-eye" style="color: #52baff" aria-hidden="true"></i></a></td>
                </tr>
             @endforeach

            </tbody>
        </table>

    </div>
@endsection
