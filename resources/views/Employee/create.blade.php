@extends('layout.employee_layout')
@section('employee_body')


    <div class="container">
        <br>
        <div class="row">
            <h3 class="col-md-6" style="color: blue">Add New Employee</h3>

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
                <input class="form-control" type="text" placeholder="First Name" name="first_name" id="first_name">
            </div>
        </div>

        <br>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Last Name" name="last_name" id="last_name">
            </div>
        </div>

        <br>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Date Of Birth</label>
            <div class="col-sm-10">
                <input class="form-control" type="date" placeholder="Date Of Birth" name="birth_date" id="birth_date">
            </div>
        </div>

        <br>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hire Date</label>
            <div class="col-sm-10">
                <input class="form-control" type="date" placeholder="Hire Date" name="hire_date" id="hire_date">
            </div>
        </div>

        <br>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
                <select class="form-control" name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>

        <br>
        <div class="form-group row">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
        </form>
    </div>
@endsection
