{{-- @extends('pages.base')

@section('content')
    <h1>Create New User</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('users/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="full_name">Full Name</label>
                    <input type="text" name="full_name" class="form-control">
                    @error('full_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                    @error('username')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                    <button class="btn btn-primary">
                        Add User
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection --}}