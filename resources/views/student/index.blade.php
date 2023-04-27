@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Student form</h4>
                <a href="{{ route('students.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add
                    Student</a>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-warning">{{ session('status') }}</div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th>ID</th> --}}
                            <th>Name</th>
                            <th>City</th>
                            <th>Marks</th>
                            <th>Email Address</th>
                            <th>Address</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Subject</th>
                            <th>State</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td> {!! Html::linkRoute('students.show', $student->name, [$student->id], ['style' => 'text-decoration: none;']) !!}</td>
                                <td>{{ $student->city }}</td>
                                <td>{{ $student->marks }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->DOB }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->subject }}</td>
                                <td>{{ $student->state }}</td>
                                <td>{{ $student->photo }}</td>
                                <td>
                                    <div class="d-flex justify-content-center" style="margin-left: -77%;">
                                        <a href="{{ route('students.edit', $student->id) }}"
                                            class="btn btn-sm btn-success mr-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        &nbsp;
                                        {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'DELETE']) !!}
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this teacher?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        {{-- @endif --}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $students->links() }}

    
    
@endsection
