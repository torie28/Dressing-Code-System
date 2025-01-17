@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card border-0 shadow" style="border-radius: 20px;">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4 fw-bold" style="color: #4a90e2;">Welcome!</h2>
                    <p class="text-center text-muted mb-4">Create your account to get started</p>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Full Name Field -->
                        <div class="mb-4">
                            <label for="full_name" class="form-label fw-semibold">Full Name</label>
                            <input
                                type="text"
                                class="form-control form-control-lg @error('full_name') is-invalid @enderror"
                                id="full_name"
                                name="full_name"
                                value="{{ old('full_name') }}"
                                placeholder="Enter your full name"
                                required
                                style="border-radius: 12px;">
                            @error('full_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tribe Dropdown -->
                        <div class="mb-4">
                            <label for="tribe" class="form-label fw-semibold">Tribe</label>
                            <select
                                class="form-select form-select-lg @error('tribe') is-invalid @enderror"
                                id="tribe"
                                name="tribe"
                                required
                                style="border-radius: 12px;">
                                <option value="">Select your tribe</option>
                                @foreach ($tribes as $tribe)
                                    <option value="{{ $tribe->id }}" {{ old('tribe') == $tribe->id ? 'selected' : '' }}>
                                        {{ $tribe->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('tribe')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <input
                                type="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                id="password"
                                name="password"
                                placeholder="Create a secure password"
                                required
                                style="border-radius: 12px;">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
                            <input
                                type="password"
                                class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Re-enter your password"
                                required
                                style="border-radius: 12px;">
                            @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100 py-3 fw-bold" style="border-radius: 12px; font-size: 18px;">
                                Sign Up
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-4">
                        <p class="mb-0">Already have an account?
                            <a href="{{ route('login') }}" class="text-primary fw-bold">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    body {
        background: linear-gradient(to bottom, #f0f4ff, #ffffff);
    }

    .card {
        border-radius: 20px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .form-label {
        font-weight: 600;
        color: #4a90e2;
    }

    .form-control-lg, .form-select-lg {
        border: 1px solid #e0e7ff;
        padding: 12px;
        font-size: 16px;
        transition: box-shadow 0.3s ease;
    }

    .form-control-lg:focus, .form-select-lg:focus {
        box-shadow: 0 0 8px rgba(74, 144, 226, 0.4);
        border-color: #4a90e2;
    }

    .btn-primary {
        background-color: #4a90e2;
        border: none;
        font-size: 18px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #3a78c2;
        transform: scale(1.02);
    }

    .text-primary {
        color: #4a90e2 !important;
    }

    .text-primary:hover {
        color: #3a78c2 !important;
        text-decoration: underline;
    }
</style>
@endpush
