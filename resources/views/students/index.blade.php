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
                <div class="row">
            <a href="{{route('students.show', [$student->id])}}" class=" btn btn-info">View</a>
            <a href="{{route('students.edit', [$student->id])}}" class=" btn btn-primary">Edit</a>
            <form action="{{route('students.destroy', [$student->id])}}" method="post">
            @csrf
            @method('DELETE')
            <button  type="submit " class="btn btn-danger">Delete</button>
            </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        @endforeach

    </div>

@stop