@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('client.create') }}"> Add New </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
        @foreach ($client as $c)
        <tr>
            <td>{{ $c->name }}</td>
            <td>{{ $c->address }}</td>
            <td>{{ $c->phone }}</td>
            <td>
                 <a class="btn btn-info" href="{{ route('client.show',$c->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('client.edit',$c->id) }}">Edit</a>
                <form action="{{ route('client.destroy',$c->id) }}" method="POST">

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
