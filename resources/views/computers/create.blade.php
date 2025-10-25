@extends('layout')
@section('title', 'Create Computer')
@section('content')

    <div class="container" style="max-width: 500px; margin: 50px auto;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2 style="text-align: center; margin-bottom: 30px;">Product Form</h2>
        <form method="POST" action="{{ route('computers.store') }}">
            @csrf
            <div style="margin-bottom: 20px;">
                <label for="name" style="display: block; margin-bottom: 5px;">Name of Computer:</label>
                <input type="text" id="name" name="name" style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="origin" style="display: block; margin-bottom: 5px;">Origin of Computer:</label>
                <input type="text" id="origin" name="origin" style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="price" style="display: block; margin-bottom: 5px;">Price of Computer:</label>
                <input type="number" id="price" name="price" style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="date_release" style="display: block; margin-bottom: 5px;">Release Date:</label>
                <input type="date" id="date_release" name="date_release" style="width: 100%; padding: 8px;">
            </div>

            <button type="submit"
                style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; cursor: pointer;">Submit</button>
        </form>
    </div>



@endsection
