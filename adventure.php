<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Tours - TravelEase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --bg-color: #1a1a1a;
            --text-color: #ffffff;
            --accent-color: #ff4d4d;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: var(--bg-color);
            color: var(--text-color);
            transition: background-color 1s ease;
            overflow-x: hidden;
        }

        .color-palette {
            position: fixed;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 1000;
        }

        .color-btn {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 2px solid white;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .color-btn:hover {
            transform: scale(1.2);
        }

        .main-title {
            font-size: 4rem;
            text-align: center;
            margin: 2rem 0;
            background: linear-gradient(45deg, #ff4d4d, #ff8533, #ffcc00);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
            transition: transform 0.3s;
        }

        .main-title:hover {
            transform: scale(1.05);
            text-shadow: 0 0 20px rgba(255, 77, 77, 0.5);
        }

        .adventure-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            transform-style: preserve-3d;
            transition: all 0.5s;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .adventure-card::before {
            content: '';
            position: absolute;
            top: -100%;
            left: -100%;
            width: 300%;
            height: 300%;
            background: linear-gradient(45deg, 
                rgba(255,255,255,0) 0%,
                rgba(255,255,255,0.1) 50%,
                rgba(255,255,255,0) 100%);
            transform: rotate(45deg);
            transition: all 0.5s;
        }

        .adventure-card:hover {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .adventure-card:hover::before {
            top: -50%;
            left: -50%;
            transition: all 1s;
        }

        .location-badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: rgba(255, 77, 77, 0.2);
            border-radius: 50px;
            margin: 0.5rem;
            transition: all 0.3s;
        }

        .location-badge:hover {
            background: rgba(255, 77, 77, 0.4);
            transform: scale(1.1);
        }

        .features-list {
            list-style: none;
            padding-left: 0;
        }

        .features-list li {
            margin-bottom: 1rem;
            padding-left: 2rem;
            position: relative;
            transition: transform 0.3s;
        }

        .features-list li:hover {
            transform: translateX(10px);
        }

        .features-list li::before {
            content: "✔️";
            position: absolute;
            left: 0;
        }

        .cta-button {
            background: linear-gradient(45deg, #ff4d4d, #ff8533);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            border: none;
            font-size: 1.2rem;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 77, 77, 0.5);
        }

        .cta-button::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }

        .navbar {
            background: rgba(0, 0, 0, 0.8) !important;
            backdrop-filter: blur(10px);
        }

        .perfect-for {
            background: rgba(255, 77, 77, 0.2);
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            transition: transform 0.3s;
        }

        .perfect-for:hover {
            transform: scale(1.02);
        }

        .icon-feature {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #ff4d4d, #ff8533);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>
</head>
<body>
    <!-- Color Palette -->
    <div class="color-palette">
        <div class="color-btn" style="background: #1a1a1a" onclick="changeBackground('#1a1a1a')"></div>
        <div class="color-btn" style="background: #2c3e50" onclick="changeBackground('#2c3e50')"></div>
        <div class="color-btn" style="background: #27ae60" onclick="changeBackground('#27ae60')"></div>
        <div class="color-btn" style="background: #8e44ad" onclick="changeBackground('#8e44ad')"></div>
        <div class="color-btn" style="background: #c0392b" onclick="changeBackground('#c0392b')"></div>
    </div>

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
                    <li class="nav-item"><a class="nav-link active" href="adventure.php">Adventure Tours</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container py-5 mt-5">
        <h1 class="main-title">Adventure Tours – Embrace the Thrill!</h1>
        <p class="lead text-center mb-5">Dare to push your limits? Our Adventure Tours take you beyond the ordinary, into a world where excitement meets breathtaking landscapes. 🏞️🔥</p>

        <!-- Sky Adventures -->
        <div class="adventure-card" data-tilt>
            <h2>🪂 Sky-High Adventures – Conquer the Skies!</h2>
            <div class="perfect-for">
                Perfect for: Thrill-seekers who love heights and breathtaking views.
            </div>
            <ul class="features-list mb-4">
                <li>Skydiving: Feel the rush as you free-fall from 15,000 feet!</li>
                <li>Paragliding: Glide over stunning valleys and coastal cliffs.</li>
                <li>Hot Air Ballooning: Drift peacefully with panoramic sunrise views.</li>
                <li>Bungee Jumping: Take the ultimate leap of faith!</li>
            </ul>
            <div class="locations">
                <span class="location-badge">🇨🇭 Interlaken, Switzerland</span>
                <span class="location-badge">🇦🇪 Dubai, UAE</span>
                <span class="location-badge">🇿🇲 Victoria Falls</span>
                <span class="location-badge">🇳🇵 Pokhara, Nepal</span>
            </div>
        </div>

        <!-- Water Adventures -->
        <div class="adventure-card" data-tilt>
            <h2>🌊 Water Thrills – Dive into the Deep!</h2>
            <div class="perfect-for">
                Perfect for: Water lovers and adrenaline junkies.
            </div>
            <ul class="features-list mb-4">
                <li>Whitewater Rafting: Navigate through wild rapids on a heart-pounding ride.</li>
                <li>Scuba Diving & Snorkeling: Explore vibrant coral reefs and marine life.</li>
                <li>Shark Cage Diving: Get up close with the ocean's most fascinating predators.</li>
                <li>Jet Skiing & Surfing: Ride the waves for an electrifying experience.</li>
            </ul>
            <div class="locations">
                <span class="location-badge">🇿🇼 Zambezi River</span>
                <span class="location-badge">🇦🇺 Great Barrier Reef</span>
                <span class="location-badge">🇺🇸 Hawaii</span>
                <span class="location-badge">🇧🇸 The Bahamas</span>
            </div>
        </div>

        <!-- Why Choose Us -->
        <div class="adventure-card text-center mt-5">
            <h2 class="mb-4">🌟 Why Choose Our Adventure Tours?</h2>
            <div class="row">
                <div class="col-md-3">
                    <i class="fas fa-shield-alt icon-feature"></i>
                    <h5>Expert Guides & Safety First</h5>
                    <p>Your thrill, our priority</p>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-route icon-feature"></i>
                    <h5>Customizable Itineraries</h5>
                    <p>Personalize your adventure</p>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-layer-group icon-feature"></i>
                    <h5>All Skill Levels</h5>
                    <p>From beginner to extreme</p>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-camera icon-feature"></i>
                    <h5>Unforgettable Memories</h5>
                    <p>Life-changing experiences</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-5">
            <button class="cta-button">
                📢 Ready for the adventure of a lifetime? Book Now! 🌍🚀
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll("[data-tilt]"), {
            max: 5,
            speed: 400,
            glare: true,
            "max-glare": 0.2
        });

        function changeBackground(color) {
            document.body.style.backgroundColor = color;
        }
    </script>
</body>
</html>
