@extends('layouts.app')

@section('content')
<div>
    @foreach ($formFields as $field)
        <div>
            <label>{{ $field['label'] }}</label>
            <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" value="{{ $field['value'] }}">
        </div>
    @endforeach
</div>


@endsection
