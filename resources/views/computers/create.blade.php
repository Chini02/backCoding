@extends('layout')
@section('title', 'Create Computer')
@section('content')

  <div class="container" style="max-width: 500px; margin: 50px auto;">
        <h2 style="text-align: center; margin-bottom: 30px;">Product Form</h2>
        <form method="POST" action="{{ route('computers.store') }}">
            @csrf
            <div style="margin-bottom: 20px;">
                <label for="name" style="display: block; margin-bottom: 5px;">Name of Computer:</label>
                <input type="text" id="name" name="name" required style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="origin" style="display: block; margin-bottom: 5px;">Origin of Computer:</label>
                <input type="text" id="origin" name="origin" required style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="price" style="display: block; margin-bottom: 5px;">Price of Computer:</label>
                <input type="number" id="price" name="price" required style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="date_release" style="display: block; margin-bottom: 5px;">Release Date:</label>
                <input type="date" id="date_release" name="date_release" required style="width: 100%; padding: 8px;">
            </div>

            <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; cursor: pointer;">Submit</button>
        </form>
    </div>



@endsection
