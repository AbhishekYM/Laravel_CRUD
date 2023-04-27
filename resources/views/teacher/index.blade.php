@extends('layouts.app')

@section('content')
    {!! Form::open(['route' => 'teachers.store']) !!}
    <div class="row">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Teacher List</h4>
                <div class="d-flex justify-content-between align-items-center">
                    &nbsp;
                    <a href="{{ route('teachers.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add
                        Teacher</a>
                </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-warning">{{ session('status') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Department</th>
                                <th>Salary</th>
                                <th>Gender</th>
                                <th class="py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td>
                                        <a href="{{ route('teachers.show', $teacher->id) }}" style="text-decoration: none;">
                                            {{ $teacher->name }}
                                        </a>
                                    </td>
                                    <td>{{ $teacher->age }}</td>
                                    <td>{{ $teacher->department }}</td>
                                    <td>{{ $teacher->salary }}</td>
                                    <td>{{ $teacher->gender }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center" style="margin-left: -77%;">
                                            <a href="{{ route('teachers.edit', $teacher->id) }}"
                                                class="btn btn-sm btn-success mr-2">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            &nbsp;
                                            {!! Form::open(['route' => ['teachers.destroy', $teacher->id], 'method' => 'DELETE']) !!}
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this teacher?')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $teachers->links() }}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
