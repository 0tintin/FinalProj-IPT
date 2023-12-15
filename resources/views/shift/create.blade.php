@extends('pages.base')

@section('content')
    <h1>Create New Shift</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('shifts/create')}}" method="POST">
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

                <div class="form-group mt-2">
                    <label for="startTime" class="mcdonalds-label">Start Time</label>
                    <input type="time" name="startTime" class="form-control mcdonalds-input">
                    @error('startTime')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="endTime" class="mcdonalds-label">End Time</label>
                    <input type="time" name="endTime" class="form-control mcdonalds-input">
                    @error('endTime')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="date" class="mcdonalds-label">Date</label>
                    <input type="date" name="date" class="form-control mcdonalds-input">
                    @error('date')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="breaksTaken" class="mcdonalds-label">Breaks Taken</label>
                    <input type="text" name="breaksTaken" class="form-control mcdonalds-input">
                    @error('breaksTaken')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                    <button class="btn btn-primary mcdonalds-button">
                        Add Shift
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