@extends('pages.base')

@section('content')
    <h1>Create New Attendance</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('attendances/create')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="employee_id" class="mcdonalds-label">Select Employee</label>
                    <select name="employee_id" id="employee_id" class="form-select mcdonalds-select">
                        <option value="" selected disabled>Select Employee</option>
                        @foreach ($employees as $employeeId => $employee)
                            <option value="{{ $employeeId }}">{{ $employee }}</option>
                        @endforeach
                    </select>
                    @error('employee_id')
                        <p class="text-danger mcdonalds-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="shift_id" class="mcdonalds-label">Select Shift</label>
                    <select name="shift_id" id="shift_id" class="form-select mcdonalds-select">
                        <option value="" selected disabled>Select Shift</option>
                        @foreach ($shifts as $shiftId => $shift)
                            <option value="{{ $shiftId }}">{{ $shift }}</option>
                        @endforeach
                    </select>
                    @error('shift_id')
                        <p class="text-danger mcdonalds-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="attendanceStatus" class="mcdonalds-label">Attendance Status</label>
                    <input type="text" name="attendanceStatus" class="form-control mcdonalds-input">
                    @error('attendanceStatus')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="attendanceDate" class="mcdonalds-label">Attendance Date</label>
                    <input type="date" name="attendanceDate" class="form-control mcdonalds-input">
                    @error('attendanceDate')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="notes" class="mcdonalds-label">Notes</label>
                    <input type="text" name="notes" class="form-control mcdonalds-input">
                    @error('notes')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                    <button class="btn btn-primary mcdonalds-button">
                        Add Attendance
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <style>
        .mcdonalds-label {
            font-weight: bold;
            color: #050404;
        }

        .mcdonalds-select {
            background-color: #ffffff;
            border-color: #D10A10;
            color: #000000;
        }

        .mcdonalds-select:focus {
            border-color: #FF5733;
        }

        .mcdonalds-error {
            color: #D10A10;
            font-weight: bold;
        }

        .mcdonalds-input {
            background-color: #ffffff; 
            border-color: #D10A10; 
            color: #000000; 
        }

        .mcdonalds-input:focus {
            border-color: #FF5733; 
        }

        .mcdonalds-button {
            background-color: #FFD100; 
            color: #000000; 
            border-color: #D10A10; 
            font-weight: bold;
        }

        .mcdonalds-button:hover {
            background-color: #ff58332a; 
            border-color: #000000; 
        }
    </style>
    
@endsection