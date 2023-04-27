@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Show Student Data</h4>
                            {!! link_to_route('students.index', 'Back', [], ['class' => 'btn btn-danger btn-sm']) !!}
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped unique-table">
                            <tr>
                                <td>Student Name:</td>
                                <td>{{ $student->name }}</td>
                            </tr>
                            <tr>
                                <td>Student City:</td>
                                <td>{{ $student->city }}</td>
                            </tr>
                            <tr>
                                <td>Student Marks:</td>
                                <td>{{ $student->marks }}</td>
                            </tr>
                            <tr>
                                <td>Student Email:</td>
                                <td>{{ $student->email }}</td>
                            </tr>
                            <tr>
                                <td>Student Address:</td>
                                <td>{{ $student->address }}</td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td>{{ $student->gender }}</td>
                            </tr>
                            <tr>
                                <td>Subject:</td>
                                <td>{{ $student->subject }}</td>
                            </tr>
                            <tr>
                                <td>State:</td>
                                <td>{{ $student->state }}</td>
                            </tr>
                        </table>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-4">
                                <label for="">Photo:</label>
                            </div>
                            <div class="col-8">
                                {!! Html::image('/storage/photos/'.$student->photo, 'Image', ['class' => 'img-fluid mb-2', 'style' => 'max-height: 400px; max-width: 100%;']) !!}
                            </div>
                        </div>
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
