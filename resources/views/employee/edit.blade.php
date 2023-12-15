@extends('pages.base')

@section('content')  
  <!-- Modal -->
<div class="modal fade" id="deleteEmployeeModal" tabindex="-1" aria-labelledby="deleteEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteEmployeeModalLabel">Delete Employee - {{$employee->firstName}} {{$employee->lastName}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('employees/delete/' .$employee->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this employee?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
</div>

<h1>Edit Employee</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('employees/' .$employee->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="firstName" class="mcdonalds-label">First Name</label>
                <input type="text" name="firstName" class="form-control mcdonalds-input" value="{{$employee->firstName}}">
                @error('firstName')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="lastName" class="mcdonalds-label">Last Name</label>
                <input type="text" name="lastName" class="form-control mcdonalds-input" value="{{$employee->lastName}}">
                @error('lastName')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="position" class="mcdonalds-label">Position</label>
                <input type="text" name="position" class="form-control mcdonalds-input" value="{{$employee->position}}">
                @error('position')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="dateOfBirth" class="mcdonalds-label">Date Of Birth</label>
                <input type="date" name="dateOfBirth" class="form-control mcdonalds-input" value="{{$employee->dateOfBirth}}">
                @error('dateOfBirth')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="hireDate" class="mcdonalds-label">Hire Date</label>
                <input type="date" name="hireDate" class="form-control mcdonalds-input" value="{{$employee->hireDate}}">
                @error('hireDate')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger me-md-2 mt-2 mcdonalds-button2" data-bs-toggle="modal" data-bs-target="#deleteEmployeeModal">Delete Employee</button>
                <button class="btn btn-primary me-md-2 mt-2 mcdonalds-button" type="submit">Edit Employee</button>
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

    .mcdonalds-button2 {
        background-color: #ff1018; 
        color: #000000; 
        border-color: #D10A10; 
        font-weight: bold;
    }

    .mcdonalds-button2:hover {
        background-color: #ff58332a; 
        border-color: #000000; 
    }
</style>

@endsection
