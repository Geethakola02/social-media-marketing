@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h2>Welcome to Social Media Marketing</h2>

    <p>We help your brand grow through:</p>

    <ul style="list-style: none; padding: 0;">
        <li> SEO Optimization</li>
        <li> Social Media Marketing</li>
        <li> Content Creation</li>
    </ul>

    <a href="{{ url('/contact') }}" class="btn">👉 Contact Us Now</a>
@endsection
