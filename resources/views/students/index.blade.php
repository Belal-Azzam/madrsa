@extends('layouts.admin')

@section('content')
    <div class="card">
        <h5 class="card-header">Students</h5>
        @foreach($students as $student)
        <div class="card-body">
            <div class="row">

            <div class="col">
            <h5 class="card-title">{{$student->full_name}}</h5>
            <h5 class="card-title">{{$student->email}}</h5>
            <h5 class="card-title">{{$student->birth_date}}</h5>
            </div>
            <div class="col ">
            <a href="#" class=" btn btn-info">View</a>
            <a href="#" class=" btn btn-primary">Edit</a>
            <a href="#" class=" btn btn-danger">Delete</a>
            </div>
            </div>
        </div>
        </div>
        @endforeach

    </div>

@stop