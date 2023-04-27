@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>View Data</h4>
                            {{ Html::linkRoute('teachers.index', 'Back', [], ['class' => 'btn btn-danger btn-sm']) }}
                        </div>
                    </div>
                    <div class="card-body">
                        {{ csrf_field() }}
                        <table class="table table-striped unique-table">
                            <tr>
                                <td>Teacher Name:</td>
                                <td>{{ $teacher->name }}</td>
                            </tr>
                            <tr>
                                <td>Teacher Age:</td>
                                <td>{{ $teacher->age }}</td>
                            </tr>
                            <tr>
                                <td>Teacher Department:</td>
                                <td>{{ $teacher->department }}</td>
                            </tr>
                            <tr>
                                <td>Teacher Salary</td>
                                <td>{{ $teacher->salary }}</td>
                            </tr>
                            <tr>
                                <td>Teacher Gender:</td>
                                <td>{{ $teacher->gender }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .unique-table {
            background: #f2f2f2;
        }
    </style>
@endsection
