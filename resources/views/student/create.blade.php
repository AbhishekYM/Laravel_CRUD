@extends('layouts.app')

@section('content')
{{-- @livewire('dynamic-input') --}}

    <style>

    </style>

    {!! Form::open([
        'route' => 'students.store',
        'method' => 'POST',
        'enctype' => 'multipart/form-data',
        'class' => 'row g-3',
    ]) !!}
<div>
    <livewire:dynamic-input/>
</div>

    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>
                        Create Student

                    </h4>
                    <a href="{{ route('students.index') }}" class="btn btn-danger btn-sm float-right">Back</a>
                </div>
            </div>
            <div class="card-body">
                {{-- START --}}
           
                <a href="{{ route('dynamic-input') }}">Go to Dynamic Input page</a>

                <div class="row">

                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group mb-2">
                            {!! Form::label('name', 'Full Name', ['class' => 'col-form-label']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'autocomplete' => 'off']) !!}
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group mb-2">
                            {!! Form::label('city', 'City of Residence', ['class' => 'col-form-label']) !!}
                            {!! Form::text('city', null, ['class' => 'form-control', 'id' => 'city', 'autocomplete' => 'off']) !!}
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group mb-2">
                            {!! Form::label('email', 'Email Address', ['class' => 'col-form-label']) !!}
                            {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'name', 'autocomplete' => 'off']) !!}
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('marks', 'Exam Score', ['class' => 'col-form-label']) !!}
                            {!! Form::text('marks', null, ['class' => 'form-control', 'id' => 'marks', 'autocomplete' => 'off']) !!}
                        </div>
                    </div>


                    <div class="col-lg-6 col-sm-12">
                        {!! Form::label('student-address', 'Address', ['class' => 'col-form-label']) !!}
                        <div class="form-floating mb-2">
                            {{ Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Enter your street address', 'id' => 'student-address', 'rows' => '3']) }}
                            {{ Form::label('student-address', ' Address', ['class' => 'form-label']) }}
                            <div class="invalid-feedback">Please enter your address</div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-sm-12">
                        {!! Form::label('datetimepicker', 'Date of birth', ['class' => 'col-form-label']) !!}
                        <div class="form-floating mb-2">
                            {{ Form::input('datetime-local', 'DOB', null, ['class' => 'form-control', 'id' => 'datetimepicker', 'placeholder' => 'Select date and time']) }}
                            <label for="datetimepicker">Select Date of birth:</label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="gender">Gender</label>
                            <div class="d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group mb-2">
                            <label for="subject">Subject</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex gap-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="subject[]" id="cpp"
                                            value="C++">
                                        <label class="form-check-label" for="cpp">C++</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="subject[]" id="python"
                                            value="Python">
                                        <label class="form-check-label" for="python">Python</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="subject[]" id="laravel"
                                            value="laravel">
                                        <label class="form-check-label" for="laravel">Laravel</label>
                                    </div>
                                </div>
                            </div>
                                {{-- <div class="col-md-6"> --}}
                                <small class="form-text text-muted">Select one or more
                                    subjects.</small>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        {!! Form::label('photo', 'Photo', ['class' => 'form-label']) !!}
                        {!! Form::file('photo', ['class' => 'form-control', 'id' => 'photo']) !!}
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-2">
                        {!! Form::label('state', 'State', ['class' => 'form-label']) !!}
                        {!! Form::select(
                            'state',
                            ['' => 'Select State', 'Gujarat' => 'Gujarat', 'Rajasthan' => 'Rajasthan', 'New Delhi' => 'New Delhi'],
                            null,
                            ['class' => 'form-select', 'id' => 'state', 'name' => 'state'],
                        ) !!}
                    </div>
                    {{-- <div class="col-lg-6 col-sm-12">
                        
                    </div> --}}
                    <div class="form-group mb-2 ">
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
                {{-- END --}}
            </div>
        </div>
    </div>
    
@endsection
