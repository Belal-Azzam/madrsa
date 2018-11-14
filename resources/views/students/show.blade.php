@extends('layouts.admin')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('students')}}">Students</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$student->id_name}}</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header">
            Student Details
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$student->full_name}}</h5>
            <p class="card-text">

            <div class="row">
                <div class="col-2">Email</div>
                <div class=" col-2">{{$student->email}}</div>
            </div><div class="row">
                <div class="col-2">Gender</div>
                <div class=" col-2">{{$student->gender_name}}</div>
            </div>
            <div class="row">
                <div class="col-2">Birth Date</div>
                <div class=" col-2">{{$student->birth_date}}</div>
            </div>
            </p>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <div class="row">
                        <div class="col-2">
                            @include('partials.destroy-form', ['route' => route('students.destroy',[$student->id])])
                        </div>
                        <div class="col">
                            <a href="{{route('students.edit', [$student->id])}}" class="btn btn-primary">Edit Student</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    @stop