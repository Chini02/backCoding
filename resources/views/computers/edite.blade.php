@extends('layout')
@section('title', 'Edite Computer')
@section('content')

    <div class="container" style="max-width: 500px; margin: 50px auto;">
        <h2 style="text-align: center; margin-bottom: 30px;">EdiT Computer</h2>
        <form method="POST" action="{{ route('computers.update', $computer->id) }}">
            @csrf
            @method('PUT')
            <div style="margin-bottom: 20px;">
                <label for="name" style="display: block; margin-bottom: 5px;">Name of Computer:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $computer->name) }}"
                    style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="origin" style="display: block; margin-bottom: 5px;">Origin of Computer:</label>
                <input type="text" id="origin" name="origin" value="{{ old('origin', $computer->origin) }}"
                    style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="price" style="display: block; margin-bottom: 5px;">Price of Computer:</label>
                <input type="number" id="price" name="price" value="{{ old('price', $computer->price) }}"
                    style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="date_release" style="display: block; margin-bottom: 5px;">Release Date:</label>
                <input type="date" id="date_release" name="date_release"
                    value="{{ old('date_release', $computer->date_release) }}" style="width: 100%; padding: 8px;">
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('computers.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>



@endsection
