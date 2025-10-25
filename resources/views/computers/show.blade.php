@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Computer Details</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th width="200">ID</th>
                        <td>{{ $computer->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $computer->name }}</td>
                    </tr>
                    <tr>
                        <th>Origin</th>
                        <td>{{ $computer->origin }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>${{ number_format($computer->price) }}</td>
                    </tr>
                    <tr>
                        <th>Release Date</th>
                        <td>{{ $computer->date_release }}</td>
                    </tr>
                </table>
                
                <div class="d-flex gap-2">
                    <a href="{{ route('computers.index') }}" class="btn btn-secondary">Back to List</a>
                    <a href="{{ route('computers.edit', $computer->id) }}" class="btn btn-primary">Edit</a>
                    
                    {{-- Delete Button --}}
                    <form action="{{ route('computers.destroy', $computer->id) }}" 
                          method="POST" 
                          class="d-inline"
                          onsubmit="return confirm('Are you sure you want to delete {{ $computer->name }}? This action cannot be undone.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Computer Details - ' . $computer->name)