@extends('layouts.admin')

@section('content')
    <div class="card uper">
        <div class="card-header">
            Add Student
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

            <form method="post" action="{{route('students.store')}}">
                <div class="form-group">
                    @csrf
                    <label for="first_name">First Name</label>
                    <input id="first_name" type="text" class="form-control" name="first_name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last name</label>
                    <input id="last_name" type="text" class="form-control" name="last_name">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" class="form-control" name="confirmPassword">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="birth_date">Birth Date</label>
                    <input type="date" id="birthdate" class="form-control" name="birth_date">
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input value="1" type="radio" id="customRadioInline1" name="gender" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input value="2" type="radio" id="customRadioInline2" name="gender" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">Female</label>
                </div>

                <button type="submit" class="float-right btn btn-primary">Add Student</button>
            </form>
        </div>
    </div>
    {{--<div class="card uper">--}}
        {{--<div class="card-header">--}}
            {{--Add Share--}}
        {{--</div>--}}
        {{--<div class="card-body">--}}

            {{--<form method="post" action="{{ route('shares.store') }}">--}}
                {{--<div class="form-group">--}}
                    {{--@csrf--}}
                    {{--<label for="name">Share Name:</label>--}}
                    {{--<input type="text" class="form-control" name="share_name"/>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="price">Share Price :</label>--}}
                    {{--<input type="text" class="form-control" name="share_price"/>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="quantity">Share Quantity:</label>--}}
                    {{--<input type="text" class="form-control" name="share_qty"/>--}}
                {{--</div>--}}
                {{--<button type="submit" class="btn btn-primary">Add</button>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}

@stop