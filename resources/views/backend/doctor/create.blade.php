@extends('backend.master')

@section('title', 'Create Doctor.')

@section('content')
    <div class="container px-4 ">
        <h3 class="text-center fw-bold text-dark" style="margin-top: 6%" >Add New Doctors</h3>
        <hr class="text-primary">
        <div class="col-8 offset-2 ">
            @if (Session::get('notification'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('notification') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form method="POST" action="{{ route('storedoctor') }}" enctype="multipart/form-data">
                @csrf {{-- security purpose --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Department List: </label>
                    <select name="department_id" id="" class="form-select">
                        <option value="" >Choice Dept.</option>
                        @foreach($department as $dept)
                            <option value="{{$dept->id}}"> {{$dept->name}} </option>
                        @endforeach
                    </select>

                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Doctor Name: </label>
                    <input type="text" class="form-control" name="name" id="title" aria-describedby="">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Doctor Designition: </label>
                    <input type="text" class="form-control" name="designition" id="title" aria-describedby="">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Description: </label>
                    <input type="text" class="form-control" name="description" id="title" aria-describedby="">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Phone: </label>
                    <input type="number" class="form-control" name="phone" id="title" aria-describedby="">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Image: </label>
                    <input type="file" class="form-control" name="image" accept="images/*" aria-describedby="">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Doctor</button>
            </form>
        </div>
    </div>
    @endsection
