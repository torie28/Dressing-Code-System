@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="border-0 shadow-lg card" style="border-radius: 20px;">
                <div class="p-5 card-body">
                    <h2 class="mb-4 text-center fw-bold text-primary">Welcome to Our Community!</h2>
                    <p class="mb-4 text-center text-muted">Create your account and start your journey</p>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Full Name Field -->
                        <div class="mb-4">
                            <label for="full_name" class="form-label fw-semibold text-muted">Full Name</label>
                            <input
                                type="text"
                                class="form-control form-control-lg @error('full_name') is-invalid @enderror"
                                id="full_name"
                                name="full_name"
                                value="{{ old('full_name') }}"
                                placeholder="Enter your full name"
                                required
                                style="border-radius: 12px; background-color: #f7f9fc;">
                            @error('full_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tribe Dropdown -->
                        <div class="mb-4">
                            <label for="tribe" class="form-label fw-semibold text-muted">Tribe</label>
                            <select
                                class="form-select form-select-lg @error('tribe') is-invalid @enderror"
                                id="tribe"
                                name="tribe"
                                required
                                style="border-radius: 12px; background-color: #f7f9fc;">
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
                            <label for="password" class="form-label fw-semibold text-muted">Password</label>
                            <input
                                type="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                id="password"
                                name="password"
                                placeholder="Create a secure password"
                                required
                                style="border-radius: 12px; background-color: #f7f9fc;">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold text-muted">Confirm Password</label>
                            <input
                                type="password"
                                class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Re-enter your password"
                                required
                                style="border-radius: 12px; background-color: #f7f9fc;">
                            @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
<div class="text-center">
    <button type="submit" class="w-10 py-3 btn btn-primary fw-bold" style="border-radius: 12px; font-size: 18px; background-color: #4a5d5f; transition: background-color 0.3s ease, transform 0.3s ease;">
        Sign Up
    </button>
</div>

                    </form>

                    {{-- <div class="mt-4 text-center">
                        <p class="mb-0">Already have an account?
                            <a href="{{ route('login') }}" class="text-primary fw-bold">Login</a>
                        </p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    body {
        background: linear-gradient(to bottom, #e0f7fa, #ffffff);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card {
        border-radius: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #ffffff;
    }

    .card:hover {
        transform: scale(1.03);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .form-label {
        font-weight: 600;
        color: #5c6bc0;
    }

    .form-control-lg, .form-select-lg {
        border: 1px solid #e1e8f0;
        padding: 14px;
        font-size: 16px;
        transition: box-shadow 0.3s ease;
        background-color: #f7f9fc;
    }

    .form-control-lg:focus, .form-select-lg:focus {
        box-shadow: 0 0 10px rgba(92, 107, 192, 0.4);
        border-color: #5c6bc0;
        background-color: #ffffff;
    }

    .btn-primary {
        background-color: #5c6bc0;
        border: none;
        font-size: 18px;
        padding: 14px 0;
        border-radius: 12px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #3f4a82;
        transform: scale(1.05);
    }

    .text-primary {
        color: #5c6bc0 !important;
    }

    .text-primary:hover {
        color: #3f4a82 !important;
        text-decoration: underline;
    }

    .invalid-feedback {
        font-size: 0.9rem;
        color: #e74c3c;
    }
    .btn-primary {
    background-color: #4a5d5f;
    border: none;
    font-size: 18px;
    padding: 14px 0;
    border-radius: 12px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn-primary:hover {
    background-color: #3c494a;  /* Slightly darker color for hover */
    transform: scale(1.05);      /* Slight enlargement on hover */
}

</style>
@endpush
