@extends('layouts.app')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ mix('public/css/style.css') }}">
    </head>

    <body>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>Add teacher</h4>
                                <a href="{{ route('teachers.index') }}" class="btn btn-outline-secondary">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'teachers.store', 'method' => 'POST', 'class' => 'row g-3']) !!}
                            <div class="mb-3 col-6">
                                {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
                            </div>
                            <div class="mb-3 col-md-6">
                                {!! Form::label('age', 'Age', ['class' => 'form-label']) !!}
                                {!! Form::text('age', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
                            </div>
                            <div class="mb-3 col-md-6">
                                {!! Form::label('department', 'Department', ['class' => 'form-label']) !!}
                                {!! Form::text('department', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
                            </div>
                            <div class="mb-3 col-md-6">
                                {!! Form::label('salary', 'Salary', ['class' => 'form-label']) !!}
                                {!! Form::text('salary', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
                            </div>
                            <div class="mb-3 col-md-6">
                                {!! Form::label('gender', 'Gender', ['class' => 'form-label']) !!}
                                <div class="form-check">
                                    {!! Form::radio('gender', 'male', false, ['class' => 'form-check-input check-inline', 'id' => 'male']) !!}
                                    {!! Form::label('male', 'Male', ['class' => 'form-check-label']) !!}
                                </div>
                                <div class="form-check">
                                    {!! Form::radio('gender', 'female', false, ['class' => 'form-check-input check-inline', 'id' => 'female']) !!}
                                    {!! Form::label('female', 'Female', ['class' => 'form-check-label']) !!}
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <div>
                                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
