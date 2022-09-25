@extends('layouts.master')

@section('content')

@foreach ($Students as $student)
    <p>{{$student->name}}</p>
@endforeach
@endsection
