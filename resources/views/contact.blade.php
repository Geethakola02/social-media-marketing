@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h2>Contact Us</h2>

    @if(session('success'))
        <div style="color: green; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/contact" method="POST" style="max-width: 600px;">
        @csrf

        <div style="margin-bottom: 15px;">
            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name" required style="width: 100%; padding: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required style="width: 100%; padding: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="message">Message:</label><br>
            <textarea name="message" id="message" rows="5" required style="width: 100%; padding: 8px;"></textarea>
        </div>

        <button type="submit" style="padding: 10px 20px;">Send Message</button>
    </form>
@endsection
