@extends('pages.base')

@section('content')  
  <!-- Modal -->
<div class="modal fade" id="deleteShiftModal" tabindex="-1" aria-labelledby="deleteShiftModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteShiftModalLabel">Delete Shift No. - {{$shift->id}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('shifts/delete/' .$shift->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this shift?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
</div>

<h1>Edit Shift</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('shifts/' .$shift->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="startTime" class="mcdonalds-label">Start Time</label>
                <input type="time" name="startTime" class="form-control" value="{{$shift->startTime}}">
                @error('startTime')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="endTime" class="mcdonalds-label">End Time</label>
                <input type="time" name="endTime" class="form-control mcdonalds-input" value="{{$shift->endTime}}">
                @error('endTime')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="date" class="mcdonalds-label">Date</label>
                <input type="date" name="date" class="form-control mcdonalds-input" value="{{$shift->date}}">
                @error('date')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="breaksTaken" class="mcdonalds-label">Breaks Taken</label>
                <input type="text" name="breaksTaken" class="form-control mcdonalds-input" value="{{$shift->breaksTaken}}">
                @error('breaksTaken')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger me-md-2 mt-2 mcdonalds-button2" data-bs-toggle="modal" data-bs-target="#deleteShiftModal">Delete Shift</button>
                <button class="btn btn-primary me-md-2 mt-2 mcdonalds-button" type="submit">Edit Shift</button>
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

