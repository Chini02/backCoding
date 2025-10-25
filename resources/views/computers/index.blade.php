@extends('layout')
@section('content')

    <div class="container">
        <h1>Computer Page</h1>
        <p>This is some text.</p>
    </div>
    <div class="container">
        @if (!empty($computers))
            <div class="card" style="width: 18rem;">
                @foreach ($computers as $computer)
                    <div class="card-body">
                        <h5 class="card-title">Card {{ $computer['name'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Origin: {{ $computer['origin'] }}</h6>
                        <p class="card-text">Card {{ $computer['name'] }} From : {{ $computer['origin'] }}
                            content.</p>
                    </div>
                @endforeach
            </div>
        @else
            <div class="card">
                <div class="card-body">
                    Nothing to display.
                </div>
            </div>
        @endif

    </div>

@endsection

@section('title', 'Computer')
