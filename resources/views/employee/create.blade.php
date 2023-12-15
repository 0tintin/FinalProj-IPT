@extends('pages.base')

@section('content')
    <h1>Create New Employee</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('employees/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="firstName" class="mcdonalds-label">First Name</label>
                    <input type="text" name="firstName" class="form-control mcdonalds-input">
                    @error('firstName')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="lastName" class="mcdonalds-label">Last Name</label>
                    <input type="text" name="lastName" class="form-control mcdonalds-input">
                    @error('lastName')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="position" class="mcdonalds-label">Position</label>
                    <input type="text" name="position" class="form-control mcdonalds-input">
                    @error('position')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="dateOfBirth" class="mcdonalds-label">Date Of Birth</label>
                    <input type="date" name="dateOfBirth" class="form-control mcdonalds-input">
                    @error('dateOfBirth')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="hireDate" class="mcdonalds-label">Hire Date</label>
                    <input type="date" name="hireDate" class="form-control mcdonalds-input">
                    @error('hireDate')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary mcdonalds-button">
                        Add Employee
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
