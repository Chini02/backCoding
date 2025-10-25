@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Computer List</h1>
            <a href="{{ route('computers.create') }}" class="btn btn-primary">Add New Computer</a>
        </div>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (!empty($computers) && count($computers) > 0)
            <div class="row">
                @foreach ($computers as $computer)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $computer->name }}</h5>
                                <h6 class="card-subtitle mb-3 text-muted">Origin: {{ $computer->origin }}</h6>
                                <p class="card-text">
                                    <strong>Price:</strong> ${{ number_format($computer->price) }}<br>
                                    <strong>Release Date:</strong> {{ $computer->date_release }}
                                </p>
                                
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="{{ route('computers.show', $computer->id) }}" 
                                       class="btn btn-sm btn-outline-primary">View</a>
                                    
                                    <a href="{{ route('computers.edit', $computer->id) }}" 
                                       class="btn btn-sm btn-outline-secondary">Edit</a>
                                    
                                    {{-- Delete Form --}}
                                    <form action="{{ route('computers.destroy', $computer->id) }}" 
                                          method="POST" 
                                          class="d-inline"
                                          onsubmit="return confirm('Are you sure you want to delete {{ $computer->name }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                </div>
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