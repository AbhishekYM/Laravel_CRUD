<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



@extends('layouts.app')

@section('content')
    <style>

    </style>

    {!! Form::open(['route' => 'students.store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'row g-3']) !!}
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>Add Student</h4>
                                <a href="{{ route('students.index') }}" class="btn btn-outline-secondary">Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                {!! Form::label('name', 'Full Name', ['class' => 'col-sm-2 col-form-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'autocomplete' => 'off']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('city', 'City of Residence', ['class' => 'col-sm-2 col-form-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('city', null, ['class' => 'form-control', 'id' => 'city', 'autocomplete' => 'off']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('marks', 'Exam Score', ['class' => 'col-sm-2 col-form-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('marks', null, ['class' => 'form-control', 'id' => 'marks', 'autocomplete' => 'off']) !!}
                                </div>
                            </div>
                                <div class="form-group row">
                                    {!! Form::label('email', 'Email Address', ['class' => 'col-sm-2 col-form-label']) !!}
                                    <div class="col-sm-10">
                                        {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'name', 'autocomplete' => 'off']) !!}
                                    </div>
                                    <br><br>
                                    <div class="row g-2 mb-3">
                                        <div class="col-md-6">
                                          <div class="form-floating">
                                            {{ Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Enter your street address', 'id' => 'student-address', 'rows' => '3']) }}
                                            {{ Form::label('student-address', ' Address', ['class' => 'form-label']) }}
                                            <div class="invalid-feedback">Please enter your address</div>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-floating">
                                            <input type="datetime-local" class="form-control" id="datetimepicker" name="DOB" placeholder="Select date and time">
                                            <label for="datetimepicker">Select date and time:</label>
                                          </div>
                                        </div>
                                      </div>
                                      
                                      <div class="row">
                                        <div class="mb-3 col-md-6">
                                            {!! Form::label('gender', 'Gender', ['class' => 'form-label']) !!}
                                            <div class="form-check">
                                                {!! Form::radio('gender', 'male', null, ['class' => 'form-check-input check-inline', 'id' => 'male']) !!}
                                                {!! Form::label('male', 'Male', ['class' => 'form-check-label']) !!}
                                            </div>
                                            <div class="form-check">
                                                {!! Form::radio('gender', 'female', null, ['class' => 'form-check-input check-inline', 'id' => 'female']) !!}
                                                {!! Form::label('female', 'Female', ['class' => 'form-check-label']) !!}
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            {!! Form::label('photo', 'Photo', ['class' => 'form-label']) !!}
                                            {!! Form::file('photo', ['class' => 'form-control-file', 'id' => 'photo']) !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            {!! Form::label('state', 'State', ['class' => 'form-label']) !!}
                                            {!! Form::select('state', ['' => 'Select State', 'Gujarat' => 'Gujarat', 'Rajasthan' => 'Rajasthan', 'New Delhi' => 'New Delhi'], null, ['class' => 'form-select', 'id' => 'state', 'name' => 'state']) !!}
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <fieldset>
                                                <div class="mb-3">
                                                    {{ Form::label('subjects', 'Subjects', ['class' => 'form-label']) }}
                                                    <div class="form-check">
                                                        {{ Form::checkbox('subject[]', 'C++', false, ['id' => 'cpp', 'class' => 'form-check-input']) }}
                                                        {{ Form::label('cpp', 'C++', ['class' => 'form-check-label']) }}
                                                    </div>
                                                    <div class="form-check">
                                                        {{ Form::checkbox('subject[]', 'Python', false, ['id' => 'python', 'class' => 'form-check-input']) }}
                                                        {{ Form::label('python', 'Python', ['class' => 'form-check-label']) }}
                                                    </div>
                                                    <div class="form-check">
                                                        {{ Form::checkbox('subject[]', 'laravel', false, ['id' => 'laravel', 'class' => 'form-check-input']) }}
                                                        {{ Form::label('laravel', 'Laravel', ['class' => 'form-check-label']) }}
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    
                               <div class="mb-3 col-md-12">
                                   <div>
                                       {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                                   </div>
                               </div>
                               {{ Form::close() }}
                               
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
