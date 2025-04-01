<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Tours - TravelEase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --accent-color: #e74c3c;
        }

        body {
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            color: white;
            perspective: 1000px;
        }

        .tour-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            transform-style: preserve-3d;
            transition: transform 0.5s;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .tour-card:hover {
            transform: translateZ(20px) rotateX(5deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .destination-flag {
            font-size: 1.5rem;
            margin-right: 0.5rem;
        }

        .experience-list {
            list-style: none;
            padding-left: 0;
        }

        .experience-list li {
            margin-bottom: 1rem;
            padding-left: 2rem;
            position: relative;
        }

        .experience-list li::before {
            content: "✔️";
            position: absolute;
            left: 0;
        }

        .hero-section {
            text-align: center;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://source.unsplash.com/1600x900/?travel') center/cover;
            filter: brightness(0.3);
            z-index: -1;
        }

        .why-choose-us {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            padding: 2rem;
            margin-top: 3rem;
        }

        .book-now {
            background: var(--accent-color);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            border: none;
            font-size: 1.2rem;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .book-now:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .navbar {
            background: rgba(0, 0, 0, 0.8) !important;
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">TravelEase</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="destinations.php">Destinations</a></li>
                    <li class="nav-item"><a class="nav-link active" href="international.php">International Tours</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 mb-4">International Tours – Explore the World Like Never Before!</h1>
            <p class="lead">Discover handpicked global travel experiences that offer luxury, adventure, and culture like never before.</p>
        </div>
    </section>

    <!-- Tours Section -->
    <div class="container py-5">
        <!-- Ultimate Europe Tour -->
        <div class="tour-card">
            <h2 class="mb-4">🌟 1. Ultimate Europe Tour</h2>
            <div class="destinations mb-3">
                <span class="destination-flag">🇫🇷</span>
                <span class="destination-flag">🇮🇹</span>
                <span class="destination-flag">🇨🇭</span>
                <span class="destination-flag">🇪🇸</span>
                <span class="destination-flag">🇬🇷</span>
            </div>
            <ul class="experience-list">
                <li>Walk the charming streets of Paris, marvel at the Eiffel Tower, and explore the Louvre Museum.</li>
                <li>Glide through Venice's Grand Canal, witness the Colosseum in Rome, and taste authentic Italian pizza.</li>
                <li>Enjoy the breathtaking Swiss Alps with a scenic train ride on the Glacier Express.</li>
                <li>Discover the historic streets of Barcelona and relax on the sun-kissed beaches of Spain.</li>
                <li>Watch the world-famous Santorini sunset and explore the ancient ruins of Greece.</li>
            </ul>
        </div>

        <!-- Tropical Island Paradise Tour -->
        <div class="tour-card">
            <h2 class="mb-4">🏝️ 2. Tropical Island Paradise Tour</h2>
            <div class="destinations mb-3">
                <span class="destination-flag">🇲🇻</span>
                <span class="destination-flag">🇮🇩</span>
                <span class="destination-flag">🇫🇯</span>
                <span class="destination-flag">🇸🇨</span>
                <span class="destination-flag">🇲🇺</span>
            </div>
            <ul class="experience-list">
                <li>Stay in luxury water villas in the Maldives and snorkel in crystal-clear waters.</li>
                <li>Witness Bali's stunning waterfalls, temples, and lush green rice terraces.</li>
                <li>Enjoy a private beach retreat in Fiji with world-class spa treatments.</li>
                <li>Go on a romantic sunset cruise in Seychelles.</li>
                <li>Take part in underwater walking and dolphin spotting in Mauritius.</li>
            </ul>
        </div>

        <!-- Arabian Nights Adventure Tour -->
        <div class="tour-card">
            <h2 class="mb-4">🏜️ 3. Arabian Nights Adventure Tour</h2>
            <div class="destinations mb-3">
                <span class="destination-flag">🇦🇪</span>
                <span class="destination-flag">🇪🇬</span>
                <span class="destination-flag">🇲🇦</span>
                <span class="destination-flag">🇯🇴</span>
                <span class="destination-flag">🇹🇷</span>
            </div>
            <ul class="experience-list">
                <li>Experience desert safaris and sky-high luxury in Dubai.</li>
                <li>Cruise along the Nile River and explore the Great Pyramids of Giza.</li>
                <li>Get lost in the vibrant markets of Marrakech, Morocco.</li>
                <li>Visit the stunning Petra ruins in Jordan, one of the Seven Wonders of the World.</li>
                <li>Soak in the beauty of Istanbul, where Europe meets Asia.</li>
            </ul>
        </div>

        <!-- Nature & Wildlife Expedition -->
        <div class="tour-card">
            <h2 class="mb-4">🌿 4. Nature & Wildlife Expedition</h2>
            <div class="destinations mb-3">
                <span class="destination-flag">🇧🇷</span>
                <span class="destination-flag">🇰🇪</span>
                <span class="destination-flag">🇨🇷</span>
                <span class="destination-flag">🇦🇺</span>
                <span class="destination-flag">🇨🇦</span>
            </div>
            <ul class="experience-list">
                <li>Amazon Rainforest Safari – Spot rare wildlife and explore indigenous cultures.</li>
                <li>Kenyan Safari – Witness the Big Five in Maasai Mara.</li>
                <li>Costa Rica's Eco-Tourism – Zip-line through rainforests and relax in hot springs.</li>
                <li>Great Barrier Reef, Australia – Dive into one of the world's most breathtaking marine ecosystems.</li>
                <li>Rocky Mountain Adventure, Canada – Go hiking, kayaking, and spot grizzly bears.</li>
            </ul>
        </div>

        <!-- Why Choose Us Section -->
        <div class="why-choose-us">
            <h2 class="text-center mb-4">🔥 Why Choose Our International Tours?</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <i class="fas fa-hotel fa-2x mb-3"></i>
                    <p>Handpicked luxury accommodations</p>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-passport fa-2x mb-3"></i>
                    <p>Hassle-free Visa assistance</p>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-route fa-2x mb-3"></i>
                    <p>Customizable itineraries</p>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-headset fa-2x mb-3"></i>
                    <p>24/7 support and local guides</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-5">
            <h3 class="mb-4">📢 Ready to Start Your Adventure?</h3>
            <button class="book-now">Book Now & Unlock Special Discounts! 🌍✈️</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
