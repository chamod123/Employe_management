@extends('layout.employee_layout')
@section('employee_body')


    <div class="container">
        <br>
        <div class="row">
            <h3 class="col-md-6" style="color: blue">Add New Employee</h3>
            <div class="col-md-6"><a href="/Employee" class="btn btn-info">View Employee List</a></div>

        </div>

        <hr>

        <form action="/Employee/Save" method="POST" enctype="multipart/form-data" id="FormId">

            @csrf
            <div class="row">
                <h4>Employee Profile</h4>
            </div>
            <hr>
            <div class="row">
                <h4>Profile Details</h4>
            </div>


            <div class="form-group row">
                <label class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input class="form-control" required type="text" placeholder="First Name" name="first_name"
                           id="first_name">
                </div>
            </div>

            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input class="form-control" required type="text" placeholder="Last Name" name="last_name"
                           id="last_name">
                </div>
            </div>

            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Date Of Birth</label>
                <div class="col-sm-10">
                    <input class="form-control" required type="date" placeholder="Date Of Birth" name="birth_date"
                           id="birth_date">
                </div>
            </div>

            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Hire Date</label>
                <div class="col-sm-10">
                    <input class="form-control" required type="date" placeholder="Hire Date" name="hire_date"
                           id="hire_date">
                </div>
            </div>

            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <select class="form-control" required name="gender" id="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>


            {{--salary details--}}

            <hr>
            <div class="row">
                <h4>Salary Details</h4>
            </div>


            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Salary</label>
                <div class="col-sm-10">
                    <input class="form-control" required type="text" placeholder="Salary" name="salary" id="salary">
                </div>
            </div>

            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">From Date</label>
                <div class="col-sm-10">
                    <input class="form-control" required type="date" placeholder="From Date" name="salary_from_date"
                           id="salary_from_date">
                </div>
            </div>

            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">To Date</label>
                <div class="col-sm-10">
                    <input class="form-control" required type="date" placeholder="To Date" name="salary_to_date"
                           id="salary_to_date">
                </div>
            </div>


            {{--designation details--}}

            <hr>
            <div class="row">
                <h4>Designation Details</h4>
            </div>


            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input class="form-control" required type="text" placeholder="Title" name="title" id="title">
                </div>
            </div>

            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">From Date</label>
                <div class="col-sm-10">
                    <input class="form-control" required type="date" placeholder="From Date"
                           name="designation_from_date" id="designation_from_date">
                </div>
            </div>

            <br>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">To Date</label>
                <div class="col-sm-10">
                    <input class="form-control" required type="date" placeholder="To Date" name="designation_to_date"
                           id="designation_to_date">
                </div>
            </div>


            <hr>
            <br>
            <div class="form-group row">
                <button type="submit" class="btn btn-success" style="width: 100px">Save</button>
                &nbsp;&nbsp;
                <a href="/Employee" class="btn btn-warning" style="width: 100px">Cancel</a>
            </div>
            <br>
        </form>
    </div>
@endsection
