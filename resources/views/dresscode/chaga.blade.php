<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaga - Tribe</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css for Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #eef2f3, #dfe7e9);
            color: #3a3d3f;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }

        .hero {
            text-align: center;
            padding: 100px 20px;
            background: linear-gradient(to bottom, #dfe7e9, #eef2f3);
            border-bottom: 5px solid #7a9c9f;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            color: #4a5d5f;
            animation: fadeInDown 2s;
        }

        .hero p {
            font-size: 1.2rem;
            margin: 20px auto;
            max-width: 600px;
            animation: fadeInUp 2s;
        }

        .about-section {
            padding: 50px 20px;
            background-color: #ffffff;
        }

        .about-section h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #4a5d5f;
            font-size: 2.5rem;
            animation: fadeInUp 2s;
        }

        .feature-card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 20px;
            border-radius: 8px;
            overflow: hidden;
            background-color: #f9f9f9;
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: scale(1.05);
        }

        .feature-card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .feature-card .card-body {
            padding: 20px;
        }

        .feature-card h5 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #7a9c9f;
        }

        .feature-card p {
            color: #4a5d5f;
        }

        .scroll-to-about {
            padding: 20px 30px;
            background-color: #7a9c9f;
            color: white;
            margin-top: 30px;
            text-align: center;
        }

        .scroll-to-about a {
            color: #fff;
            font-size: 1.5rem;
            text-decoration: none;
            font-weight: bold;
        }

        .scroll-to-about a:hover {
            color: #678586;
        }


        .photo-gallery {
            padding: 50px 20px;
            background-color: #f5f5f5;
        }
        .photo-gallery h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #4a5d5f;
            font-size: 2.5rem;
            animation: fadeInUp 2s;
        }

        .photo-gallery .gallery-item {
            margin: 15px;
        }

        .gallery-item img {
            border-radius: 8px;
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        /* Sliding shadow and motion effect on hover */
        .gallery-item img:hover {
            transform: scale(1.1); /* Slight zoom effect */
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2); /* Sliding shadow effect */
        }

        /* Adding animation for smooth effect */
        @keyframes slideIn {
            0% {
                transform: translateY(50px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .photo-gallery .gallery-item img {
            animation: slideIn 1s ease-out;
        }
        <style>
    .return-home {
        text-align: center;
        margin-top: 50px;
    }

    .btn-return {
        padding: 15px 30px;
        font-size: 1.2rem;
        color: white;
        background-color: #7a9c9f; /* Similar to the theme color */
        border: none;
        border-radius: 30px;
        text-decoration: none;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .btn-return:hover {
        background-color: #678586;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }

    .btn-return:focus {
        outline: none;
    }
</style>


    </style>
</head>

<body>

    <!-- Hero Section -->
    <section class="hero">
        <h1 class="animate__animated animate__fadeInDown">Welcome to Chaga</h1>
        <p class="animate__animated animate__fadeInUp">Discover the rich culture and heritage of the Chaga people. Learn more about their traditions, language, and way of life.</p>
    </section>

    <!-- Scroll to About Section -->
    <section class="scroll-to-about">
        <a href="#about">Learn More About Chaga</a>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <h2>About the Chaga</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <h5 class="card-title">Location</h5>
                            <p>The Chaga people live in the Kilimanjaro region of Tanzania, primarily around Mount Kilimanjaro. Their towns are known for their beautiful landscapes and fertile soil.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <h5 class="card-title">Population</h5>
                            <p>The Chaga are a sizable ethnic group, with an estimated population of about 2 million people, making them one of the prominent groups in Tanzania.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <h5 class="card-title">Language</h5>
                            <p>The Chaga primarily speak KiChaga, although Swahili is also widely spoken, especially in urban areas and for interethnic communication.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 row">
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <h5 class="card-title">Culture</h5>
                            <p>Chaga culture is deeply rooted in agricultural practices, especially the cultivation of crops like coffee. Traditional crafts, dances, and ceremonies are an important part of their heritage.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <h5 class="card-title">Religion</h5>
                            <p>While many Chaga people have embraced Christianity, traditional African religions are still practiced, with an emphasis on ancestor worship and rituals that honor the earth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <h5 class="card-title">Social Structure</h5>
                            <p>The Chaga have a rich social structure, with strong family ties and a tradition of communal living. The society is traditionally organized into clans, each with its own customs and practices.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Photo Gallery Section -->
     <section id="gallery" class="photo-gallery">
        <h3>Tribal Dressing Photos</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-4 gallery-item">
                    <img src="/assets/chaga/photo1.jpeg" alt="Photo 1">
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="/assets/chaga/photo2.jpeg" alt="Photo 2">
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="/assets/chaga/photo3.jpeg" alt="Photo 3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 gallery-item">
                    <img src="/assets/chaga/photo4.jpeg" alt="Photo 4">
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="/assets/chaga/photo5.jpeg" alt="Photo 5">
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="/assets/chaga/photo6.jpeg" alt="Photo 6">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section with Return to Home Button -->
<footer class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center col-md-6">
                <p>&copy; 2025 Chaga. All rights reserved.</p>
                <section class="return-home">
                    <a href="home" class="btn btn-return">Return to Home</a>
                </section>
            </div>
        </div>
    </div>
</footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
