@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <h2>Our Services</h2>

    <ul>
        <li><strong>SEO Optimization</strong> – Improve your website's visibility on search engines like Google.</li>
        <li><strong>Social Media Marketing</strong> – Boost your presence on platforms like Facebook, Instagram, and LinkedIn.</li>
        <li><strong>Content Creation</strong> – Get high-quality blogs, graphics, and videos tailored to your brand.</li>
    </ul>

    <a href="{{ url('/contact') }}" class="btn">📩 Get in Touch</a>
@endsection
