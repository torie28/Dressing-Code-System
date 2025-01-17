@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay">
            <div class="hero-content">
                <h1 class="animate__animated animate__fadeIn animate__delay-1s">Welcome to the Chaga Tribe Dress Code</h1>
                <p class="animate__animated animate__fadeIn animate__delay-2s">Register to explore the traditional dress codes of the Chaga tribe and other tribes.</p>
                <a href="{{ route('register') }}" class="btn-register animate__animated animate__fadeIn animate__delay-3s">Register Now</a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="features-container">
        <div class="feature-card">
            <i class="fas fa-users fa-4x"></i>
            <h3>Create Your Profile</h3>
            <p>Fill in your personal details to start your journey and explore Chaga's unique dress codes.</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-check-circle fa-4x"></i>
            <h3>Discover Dress Codes</h3>
            <p>Learn about the beautiful and rich dress codes that represent the Chaga tribe's culture.</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-bullhorn fa-4x"></i>
            <h3>Join the Community</h3>
            <p>Become a part of the growing community that celebrates and shares tribal heritage.</p>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="py-4 text-center">
        <p>&copy; 2025 Chaga Tribe Dress Code System. All rights reserved.</p>
    </footer>
@endsection

@push('styles')
    <style>
        /* Custom Styles */
        @import url('https://fonts.googleapis.com/css2?family=Macondo&display=swap');

        body {
            font-family: 'Macondo', cursive;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero-section {
            height: 100vh;
            background-image: url('https://via.placeholder.com/1920x800?text=Chaga+Tribe+Dress+Code');
            background-size: cover;
            background-position: center;
            position: relative;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #fff;
        }

        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            color: #ddd;
        }

        .btn-register {
            font-size: 1.2rem;
            padding: 15px 30px;
            background-color: #f94f53;
            color: white;
            border: none;
            border-radius: 30px;
            text-decoration: none;
            transition: transform 0.3s, background-color 0.3s;
        }

        .btn-register:hover {
            background-color: #e1423e;
            transform: translateY(-5px);
        }

        /* Features Section */
        .features-container {
            display: flex;
            justify-content: center;
            padding: 80px 20px;
            background-color: #f8f9fa;
            gap: 30px;
        }

        .feature-card {
            text-align: center;
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            width: 250px;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        .feature-card i {
            color: #f94f53;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #333;
        }

        .feature-card p {
            color: #666;
            font-size: 1rem;
        }

        /* Footer Section */
        footer {
            background-color: #f4f4f4;
            color: #333;
        }

        /* Animations */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>
@endpush
