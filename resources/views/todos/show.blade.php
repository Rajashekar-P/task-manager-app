@extends('layouts.app')

@section('title')
    Single Todo: {{ $todo->name }}
@endsection

@section('content')
    <h1 class="text-center md-2">{{ $todo->name }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="card-header">Details</div>
                <div class="card-body">
                    {{ $todo->description }}
                </div>
            </div>
            <a href="/todos" style="color: #fff;" class="btn btn-dark btn-sm my-2">Todos List</a>
            <a href="/todos/{{ $todo->id }}/edit" style="color: #fff;" class="btn btn-info btn-sm my-2">Edit</a>
            <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm my-2">Delete</a>
        </div>
    </div>
@endsection
