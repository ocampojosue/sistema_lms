@extends('layouts.app')
@section('content')
<div class="container">
    @if(session('message'))
            <div class="alert alert success">
                <h3></h3>
            </div>
        @endif
        @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>                    
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="row justify-content-center">
        <div class="col-md-8">       
            <div class="card">
                <div class="card-header">Add New Course</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('course.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="description" value="{{ old('description') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="period" class="col-md-4 col-form-label text-md-right">{{ __('Period') }}</label>
                            <div class="col-md-6">
                                <select name="period_id" class="form-control" id="">
                                    <option value="">--Seleccione una opción--</option>
                                    @foreach ($periods as $period)
                                        <option value="{{$period->id}}">{{$period->year}}</option>
                                    @endforeach
                                </select> 
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Course') }}
                                </button>
                                <a href="{{route('course.index')}}" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection