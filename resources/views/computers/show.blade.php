@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Computer Details</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $computers['id'] }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $computers['name'] }}</td>
                    </tr>
                    <tr>
                        <th>Origin</th>
                        <td>{{ $computers['origin'] }}</td>
                    </tr>
                </table>
                
                <div class="mt-3">
                    <a href="{{ route('computers.index') }}" class="btn btn-secondary">Back to List</a>
                    <a href="{{ route('computers.edit', $computers['id']) }}" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Computer Details - ' . $computers['name'])