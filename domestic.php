<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domestic Tours - TravelEase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --accent-color: #e74c3c;
            --bg-color: #1a1a1a;
            --text-color: #ffffff;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: var(--bg-color);
            color: var(--text-color);
            transition: background-color 1s ease;
            overflow-x: hidden;
        }

        .moving-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .moving-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #ff0000, #00ff00, #0000ff, #ff00ff);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            transform-style: preserve-3d;
            transform: perspective(1000px) rotateX(0deg);
            opacity: 0.15;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
                transform: perspective(1000px) rotateX(0deg) rotateY(0deg);
            }
            50% {
                background-position: 100% 50%;
                transform: perspective(1000px) rotateX(5deg) rotateY(5deg);
            }
            100% {
                background-position: 0% 50%;
                transform: perspective(1000px) rotateX(0deg) rotateY(0deg);
            }
        }

        .tour-card {
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

        .tour-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255,255,255,0.1), rgba(255,255,255,0));
            transform: translateY(-100%);
            transition: transform 0.5s;
        }

        .tour-card:hover {
            transform: translateZ(20px) rotateX(5deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .tour-card:hover::before {
            transform: translateY(0);
        }

        .destination-flag {
            font-size: 2rem;
            margin: 0.5rem;
            transition: transform 0.3s;
        }

        .destination-flag:hover {
            transform: scale(1.2);
        }

        .perfect-for {
            background: rgba(231, 76, 60, 0.2);
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .features-list {
            list-style: none;
            padding-left: 0;
        }

        .features-list li {
            margin-bottom: 1rem;
            padding-left: 2rem;
            position: relative;
        }

        .features-list li::before {
            content: "✔️";
            position: absolute;
            left: 0;
        }

        .navbar {
            background: rgba(0, 0, 0, 0.8) !important;
            backdrop-filter: blur(10px);
        }

        .cta-button {
            background: linear-gradient(45deg, #e74c3c, #c0392b);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            border: none;
            font-size: 1.2rem;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            overflow: hidden;
        }

        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .cta-button::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: var(--accent-color);
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
    </style>
</head>
<body>
    <div class="moving-bg"></div>
    
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
                    <li class="nav-item"><a class="nav-link active" href="domestic.php">Domestic Tours</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container py-5 mt-5">
        <h1 class="section-title display-4 mb-5">Domestic Tours – Rediscover Your Country</h1>
        
        <!-- City Escape Tour -->
        <div class="tour-card" data-tilt>
            <h2>🌆 1. The Ultimate City Escape Tour</h2>
            <div class="perfect-for">
                Perfect for: Urban explorers, nightlife lovers, and foodies! 🍔🎶🌃
            </div>
            <ul class="features-list mb-4">
                <li>Metropolitan Marvels: Explore historic landmarks, skyscrapers, and modern attractions.</li>
                <li>Foodie Paradise: Indulge in famous street foods and fine dining at Michelin-starred restaurants.</li>
                <li>Cultural Hotspots: Visit museums, art galleries, and live performances.</li>
                <li>Skyline Views: Rooftop dining, helicopter tours, and breathtaking cityscapes.</li>
            </ul>
            <div class="destinations text-center">
                <span class="destination-flag" title="New York City">🇺🇸</span>
                <span class="destination-flag" title="London">🇬🇧</span>
                <span class="destination-flag" title="Mumbai">🇮🇳</span>
                <span class="destination-flag" title="Sydney">🇦🇺</span>
            </div>
        </div>

        <!-- Seaside Tour -->
        <div class="tour-card" data-tilt>
            <h2>🏝️ 2. Seaside & Island Getaway Tour</h2>
            <div class="perfect-for">
                Perfect for: Beach lovers, honeymooners, and relaxation seekers. 🌊🌴☀️
            </div>
            <ul class="features-list mb-4">
                <li>Golden Sand Beaches: Enjoy sunbathing, swimming, and beachfront resorts.</li>
                <li>Island Adventures: Snorkeling, scuba diving, and glass-bottom boat rides.</li>
                <li>Sunset Cruises: Sail along the coast with mesmerizing ocean views.</li>
                <li>Luxury & Wellness: Spa retreats, yoga on the beach, and seafood feasts.</li>
            </ul>
            <div class="destinations text-center">
                <span class="destination-flag" title="Hawaii">🇺🇸</span>
                <span class="destination-flag" title="Goa">🇮🇳</span>
                <span class="destination-flag" title="Bali">🇮🇩</span>
                <span class="destination-flag" title="Great Barrier Reef">🇦🇺</span>
            </div>
        </div>

        <!-- Mountain Tour -->
        <div class="tour-card" data-tilt>
            <h2>🏔️ 3. The Majestic Mountains & Nature Tour</h2>
            <div class="perfect-for">
                Perfect for: Hikers, nature lovers, and photography enthusiasts. 🏕️🌿🏞️
            </div>
            <ul class="features-list mb-4">
                <li>Breathtaking Hikes: Trails leading to panoramic viewpoints and waterfalls.</li>
                <li>Wildlife Safari: Encounter rare animals in national parks.</li>
                <li>Cozy Cabin Stays: Experience mountain lodges with fireplaces and starry skies.</li>
                <li>Adventure Activities: Rock climbing, paragliding, and off-road biking.</li>
            </ul>
            <div class="destinations text-center">
                <span class="destination-flag" title="Himalayas">🇮🇳</span>
                <span class="destination-flag" title="Rocky Mountains">🇺🇸</span>
                <span class="destination-flag" title="Banff & Jasper">🇨🇦</span>
                <span class="destination-flag" title="Swiss Alps">🇨🇭</span>
            </div>
        </div>

        <!-- Why Choose Us -->
        <div class="tour-card text-center mt-5">
            <h2 class="mb-4">🌟 Why Choose Our Domestic Tours?</h2>
            <div class="row">
                <div class="col-md-3">
                    <i class="fas fa-map-marked-alt fa-3x mb-3"></i>
                    <h5>Exclusive Local Experiences</h5>
                    <p>Explore your country in a new way!</p>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-piggy-bank fa-3x mb-3"></i>
                    <h5>Budget-friendly Options</h5>
                    <p>Get the best deals without international travel.</p>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-route fa-3x mb-3"></i>
                    <h5>Customizable Itineraries</h5>
                    <p>Personalize your journey based on interests.</p>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-star fa-3x mb-3"></i>
                    <h5>Luxury & Adventure</h5>
                    <p>Choose between leisure or thrilling activities.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-5">
            <button class="cta-button">
                📢 Book your next domestic tour today! 🏡✈️
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

        document.addEventListener('mousemove', (e) => {
            const bg = document.querySelector('.moving-bg');
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            bg.style.transform = `perspective(1000px) rotateX(${mouseY * 5}deg) rotateY(${mouseX * 5}deg)`;
        });
    </script>
</body>
</html>
