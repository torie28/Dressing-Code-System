<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tribe Dress Code System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Smooth scrolling for the page */
        html {
            scroll-behavior: smooth;
        }

        /* Navbar styling */
        .navbar {
            background-color: #343a40;
            border-radius: 50px; /* Make the navbar oval */
            padding: 10px 50px; /* Add padding to give an oval shape */
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-nav .nav-link:hover {
            color: #ff6f61;
        }

        /* Navbar content aligned to the right */
        .navbar-nav {
            margin-left: auto; /* Push content to the right */
        }

        /* Custom card styles for tribe pages */
        .tribe-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .tribe-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
        }

        /* Background images for tribe cards */
        .tribe-card.sukuma {
            background-image: url('https://via.placeholder.com/400x300?text=Sukuma+Tribe');
            background-size: cover;
            background-position: center;
        }

        .tribe-card.pare {
            background-image: url('https://via.placeholder.com/400x300?text=Pare+Tribe');
            background-size: cover;
            background-position: center;
        }

        .tribe-card.chaga {
            background-image: url('https://via.placeholder.com/400x300?text=Chaga+Tribe');
            background-size: cover;
            background-position: center;
        }

        /* Overlay on tribe cards */
        .tribe-card .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .tribe-card:hover .overlay {
            opacity: 1;
        }

        /* Section title styling */
        h1 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 30px;
            color: #343a40;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="home">Tribe Dress Code System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="ml-auto navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container my-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="py-4 text-center text-white bg-dark">
        <p>&copy; 2025 Tribe Dress Code System. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
