@extends('layout.employee_layout')
@section('employee_body')


    <div class="container">
        <br>
        <div class="row">
            <h1 class="col-md-6" style="color: blue">Employee Profile</h1>
            <div class="col-md-6"><a href="/Employee/{{$employee->emp_no}}/Edit" class="btn btn-success">Edit Employee</a></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label"><b>Employee Name :</b></label>
            <label class="col-sm-7 col-form-label">{{$employee->first_name}} {{$employee->last_name}}</label>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label"><b>Date Of Birth :</b></label>
            <label class="col-sm-7 col-form-label">{{$employee->birth_date}}</label>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label"><b>Gender :</b></label>
            <label class="col-sm-7 col-form-label">{{$employee->gender}}</label>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label"><b>Hire Date :</b></label>
            <label class="col-sm-7 col-form-label">{{$employee->hire_date}}</label>
        </div>



<br>

        <fieldset style="border:1px solid #999; border-radius:8px; box-shadow:0 0 8px #999;padding:6px;">
            <legend style="text-align: left;">Salary Details</legend>
            <table class="table">
                <thead>
                <tr>
                    <th>Amount</th>
                    <th>From Date</th>
                    <th>To Date</th>
                </tr>
                </thead>

                <tbody>
                @foreach($employee->salary as $salary)
                    <tr>
                        <th>{{$salary->salary}}</th>
                        <th>{{$salary->from_date}}</th>
                        <th>{{$salary->to_date}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </fieldset>


        <br>
        <fieldset style="border:1px solid #999; border-radius:8px; box-shadow:0 0 8px #999;padding:6px;">
            <legend style="text-align: left;">Designation Details</legend>
            <table class="table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>From Date</th>
                    <th>To Date</th>
                </tr>
                </thead>

                <tbody>
                @foreach($employee->employee_titles as $employee_titles)
                    <tr>
                        <th>{{$employee_titles->title}}</th>
                        <th>{{$employee_titles->from_date}}</th>
                        <th>{{$employee_titles->to_date}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>


        </fieldset>



    </div>
@endsection
