@extends('layouts.admin')

@section('content')
    <div class="card uper">
        <div class="card-header">
            Add Grade
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{!isset($grade) ? route('grades.store') : route('grades.update', [$grade->id])}}">
                <div class="form-group">
                    @csrf

                    @if(isset($grade))
                    @method('PUT')
                    @endif
                    <label for="name">Name</label>
                    <input value="{{old('name',isset($grade->name)?$grade->name:'')}}" id="first_name" type="text" class="form-control" name="name">
                </div>


                <button type="submit" class="float-right btn btn-primary">Save Grade</button>
            </form>
        </div>
    </div>


@stop