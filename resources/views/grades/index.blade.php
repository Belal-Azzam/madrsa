@extends('layouts.admin')

@section('content')
    <div  class="pages-head  alert-primary  ">
        <div class="row ">
            <div class="col-8 ">
                <h3>Manage Grades</h3>
            </div>
            <div class="col-4 text-right">
                <a href="{{route('grades.create')}}" class="btn btn-success">Add Grade</a>
            </div>

        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Grades</h5>
        @foreach($grades as $grade)
        <div class="card-body">
            <div class="row">

            <div class="col">
            <h5 class="card-title">{{$grade->name}}</h5>
            </div>
            <div class="col ">
                <div class="row">
            <a href="{{route('grades.show', [$grade->id])}}" class=" btn btn-info">View</a>
            <a href="{{route('grades.edit', [$grade->id])}}" class=" btn btn-primary">Edit</a>
            <form action="{{route('grades.destroy', [$grade->id])}}" method="post">
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