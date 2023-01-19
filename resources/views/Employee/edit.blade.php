@extends('layout.employee_layout')
@section('employee_body')


    <div class="container">
        <br>
        <div class="row">
            <h3 class="col-md-6" style="color: blue">Edit Employee</h3>
            <div class="col-md-6"><a href="/Employee" class="btn btn-info">View Employee List</a></div>

        </div>

        <hr>

        <form action="/Employee/Update" method="POST" enctype="multipart/form-data" id="FormId">

            @csrf
            <div class="row">
                <h4>Employee Profile</h4>
            </div>
            <hr>
            <div class="row">
                <h4>Profile Details</h4>
            </div>

            <input hidden value="{{$employee->emp_no}}" name="emp_no" id="emp_no">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input value="{{$employee->first_name}}" class="form-control" required type="text"
                           placeholder="First Name" name="first_name" id="first_name">
                </div>
            </div>

            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input value="{{$employee->last_name}}" class="form-control" required type="text"
                           placeholder="Last Name" name="last_name" id="last_name">
                </div>
            </div>

            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Date Of Birth</label>
                <div class="col-sm-10">
                    <input value="{{$employee->birth_date}}" class="form-control" required type="date"
                           placeholder="Date Of Birth" name="birth_date" id="birth_date">
                </div>
            </div>

            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Hire Date</label>
                <div class="col-sm-10">
                    <input value="{{$employee->hire_date}}" class="form-control" required type="date"
                           placeholder="Hire Date" name="hire_date" id="hire_date">
                </div>
            </div>

            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <select class="form-control" required name="gender" id="gender">
                        <option @if($employee->gender == 'Male') selected @endif value="Male">Male</option>
                        <option @if($employee->gender == 'Female') selected @endif value="Female">Female</option>
                    </select>
                </div>
            </div>


            {{--salary details--}}

            <hr>
            <div class="row">
                <h4>Salary Details</h4>
            </div>

            @foreach($employee->salary as $salary)
                <input hidden value="{{$salary->id}}" name="salary_id" id="salary_id">
                <fieldset style="border:1px solid #999; border-radius:8px; box-shadow:0 0 8px #999;padding:6px;">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Salary</label>
                        <div class="col-sm-10">
                            <input value="{{$salary->salary}}" class="form-control" required type="text"
                                   placeholder="Salary" name="salary"
                                   id="salary">
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">From Date</label>
                        <div class="col-sm-10">
                            <input value="{{$salary->from_date}}" class="form-control" required type="date"
                                   placeholder="From Date"
                                   name="salary_from_date" id="salary_from_date">
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">To Date</label>
                        <div class="col-sm-10">
                            <input value="{{$salary->to_date}}" class="form-control" required type="date"
                                   placeholder="To Date" name="salary_to_date"
                                   id="salary_to_date">
                        </div>
                    </div>
                </fieldset>
            @endforeach



            {{--designation details--}}

            <hr>
            <div class="row">
                <h4>Designation Details</h4>
            </div>

            @foreach($employee->employee_titles as $employee_titles)
                <input hidden value="{{$employee_titles->id}}" name="title_id" id="title_id">
                <fieldset style="border:1px solid #999; border-radius:8px; box-shadow:0 0 8px #999;padding:6px;">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input value="{{$employee_titles->title}}" class="form-control" required type="text"
                                   placeholder="Title" name="title"
                                   id="title">
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">From Date</label>
                        <div class="col-sm-10">
                            <input value="{{$employee_titles->from_date}}" class="form-control" required type="date"
                                   placeholder="From Date"
                                   name="designation_from_date" id="designation_from_date">
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">To Date</label>
                        <div class="col-sm-10">
                            <input value="{{$employee_titles->to_date}}" class="form-control" required type="date"
                                   placeholder="To Date"
                                   name="designation_to_date" id="designation_to_date">
                        </div>
                    </div>
                </fieldset>
            @endforeach


            <hr>
            <br>
            <div class="form-group row">
                <button type="submit" class="btn btn-success" style="width: 100px">Edit</button>
                &nbsp;&nbsp;
                <a href="/Employee" class="btn btn-warning" style="width: 100px">Cancel</a>
            </div>
            <br>
        </form>
    </div>
@endsection
