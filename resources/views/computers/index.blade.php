@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Computer List</h1>
            <a href="{{ route('computers.create') }}" class="btn btn-primary">Add New Computer</a>
        </div>

        @if (!empty($computers))
            <div class="row">
                @foreach ($computers as $computer)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $computer['name'] }}</h5>
                                <h6 class="card-subtitle mb-3 text-muted">Origin: {{ $computer['origin'] }}</h6>
                                <p class="card-text">
                                    Computer {{ $computer['name'] }} from {{ $computer['origin'] }} and Price {{ $computer['price'] }}$ ,
                                    {{ $computer['date_release'] }}
                                </p>
                                <a href="{{ route('computers.show', $computer['id']) }}" class="btn btn-sm btn-outline-primary">View Details</a>
                                <a href="{{ route('computers.edit', $computer['id']) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info text-center">
                <h4>No Computers Available</h4>
                <p>There are no computers to display at the moment.</p>
            </div>
        @endif
    </div>
@endsection

@section('title', 'Computers')