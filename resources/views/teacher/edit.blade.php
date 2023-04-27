@extends('layouts.app')
@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Edit Student details
                            <a href="{{ route('teachers.index') }}" class="btn btn-danger btn-sm float-right">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        {!! Form::model($teacher, [
                            'route' => ['teachers.update', $teacher->id],
                            'method' => 'PUT',
                            'class' => 'row g-3',
                        ]) !!}
                        <div class="form-group mb-3 col-md-6">
                            {!! Form::label('name', 'Teacher Name') !!}
                            {!! Form::text('name', $teacher->name, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            {!! Form::label('age', 'Teacher Age') !!}
                            {!! Form::text('age', $teacher->age, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            {!! Form::label('department', 'Teacher Department') !!}
                            {!! Form::text('department', $teacher->department, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            {!! Form::label('salary', 'Teacher Salary') !!}
                            {!! Form::text('salary', $teacher->salary, ['class' => 'form-control']) !!}
                        </div>
                        <label for="">Gender</label>
                        <div class="form-check col-md-6">
                            {!! Form::radio('gender', 'male', $teacher->gender === 'male', ['class' => 'form-check-input']) !!}
                            {!! Form::label('gender', 'Male', ['class' => 'form-check-label col-md-6']) !!}
                        </div>
                        <div class="form-check">
                            {!! Form::radio('gender', 'female', $teacher->gender === 'female', ['class' => 'form-check-input']) !!}
                            {!! Form::label('gender', 'Female', ['class' => 'form-check-label col-md-6']) !!}
                        </div>
                        <div class="form-group mb-3 ">
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
