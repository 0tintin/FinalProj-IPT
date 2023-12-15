@extends('pages.base')

@section('content')
@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
    <a href="{{url('attendances/create')}}" class="btn btn-primary mcdonalds-button me-md-2" type ="button">
        Add New Attendance
    </a>
</div>

<table class="table table-bordered table-striped table-sm mcdonalds-table">
    <thead>
        <th>ID</th>
        <th>Employee's Full Name</th>
        <th>Position</th>
        <th>Attendance Status</th>
        <th>Attendance Date</th>
        <th>Notes</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($attendances as $attendance)
            <tr>
                <td>{{$attendance->id}}</td>
                <td>{{$attendance->employee->firstName . ' ' . $attendance->employee->lastName }}</td>
                <td>{{$attendance->employee->position}}</td>
                <td>{{$attendance->attendanceStatus}}</td>
                <td>{{$attendance->attendanceDate}}</td>
                <td>{{$attendance->notes}}</td>
                <td class="text-center">
                    <a href="{{url('/attendances/'.$attendance->id)}}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                    </a>
                </td>
            </tr> 
        @endforeach
    </tbody>
</table>
<style>
    .mcdonalds-table {
        background-color: #FFD100; 
        color: #D10A10; 
    }

    .mcdonalds-table th,
    .mcdonalds-table td {
        border-color: #D10A10; 
    }

    .mcdonalds-table a {
        color: #D10A10; 
    }

    .mcdonalds-table a:hover {
        color: #FF5733; 
    }

    .mcdonalds-table .btn-primary {
        background-color: #ffffff; 
        border-color: #D10A10; 
    }

    .mcdonalds-table .btn-primary:hover {
        background-color: #ff58332a; 
        border-color: #ff5833; 
    }

    .mcdonalds-button {
        background-color: #FFD100; 
        color: #000000; 
        border-color: #D10A10; 
    }

    .mcdonalds-button:hover {
        background-color: #ff58332a; 
        border-color: #000000; 
    }

</style>
@endsection