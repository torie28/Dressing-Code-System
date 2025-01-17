@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="hero-section" style="position: relative; background-image: url('https://via.placeholder.com/1920x800?text=Welcome+to+Tribe+Dress+Code+System'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center; color: white; text-align: center;">
        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

        <div class="content" style="z-index: 2; position: relative;">
            <h1 class="mb-4" style="font-size: 4rem; font-weight: bold; animation: fadeInDown 1.5s;">Welcome to the Tribe Dress Code System</h1>
            <p class="mb-4" style="font-size: 1.5rem; animation: fadeIn 2s;">A personalized dress code system based on your tribe. Discover your tribe’s traditional dress code.</p>
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg" style="padding: 15px 30px; font-size: 1.2rem; border-radius: 30px; background: #ff6f61; border: none; animation: bounceIn 2.5s;">Get Started</a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container py-5">
        <div class="text-center row">
            <div class="mb-4 col-lg-4 col-md-6">
                <div class="p-4 rounded feature-card" style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: all 0.3s;">
                    <i class="mb-3 fas fa-users fa-3x" style="color: #ff6f61;"></i>
                    <h4>Create Your Profile</h4>
                    <p>Fill in your information, including your full name and tribe, to get started with the dress code system.</p>
                </div>
            </div>
            <div class="mb-4 col-lg-4 col-md-6">
                <div class="p-4 rounded feature-card" style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: all 0.3s;">
                    <i class="mb-3 fas fa-check-circle fa-3x" style="color: #ff6f61;"></i>
                    <h4>Discover Your Dress Code</h4>
                    <p>Explore the traditional dress code of your tribe and learn how to embrace your cultural heritage.</p>
                </div>
            </div>
            <div class="mb-4 col-lg-4 col-md-6">
                <div class="p-4 rounded feature-card" style="background-color: #ffffff; border: 1px solid #ddd; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: all 0.3s;">
                    <i class="mb-3 fas fa-bullhorn fa-3x" style="color: #ff6f61;"></i>
                    <h4>Join the Community</h4>
                    <p>Be part of a vibrant community, share experiences, and stay connected with your tribe.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* Hero Section */
        .hero-section {
            position: relative;
        }

        .hero-section h1,
        .hero-section p,
        .hero-section .btn {
            animation: fadeIn ease-in-out 1s;
        }

        .hero-section .btn:hover {
            background: #e65c54;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
        }

        /* Feature Cards */
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Animations */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }
            60% {
                opacity: 1;
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
@endpush
