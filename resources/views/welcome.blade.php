@extends('layout.employee_layout')
@section('employee_body')


<div class="container">
    <h1>Employee Details</h1>

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
    <tr class="table-active">

        <td>Mark</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
    </tr>
    <tr>

        <td>Jacob</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@fat</td>
    </tr>

    </tbody>
</table>

</div>
@endsection
