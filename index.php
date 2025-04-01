<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelEase - Your Ultimate Tourism Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/images/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            align-items: center;
            color: white;
        }
        .feature-card {
            transition: transform 0.3s;
            cursor: pointer;
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">TravelEase</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="destinations.php" id="destinationsDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-map-marker-alt"></i> Destinations
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="destinations.php#popular">Popular Places</a></li>
                            <li><a class="dropdown-item" href="international.php">International Tours</a></li>
                            <li><a class="dropdown-item" href="domestic.php">Domestic Tours</a></li>
                            <li><a class="dropdown-item" href="adventure.php">Adventure Tours</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="hotelsDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-hotel"></i> Accommodations
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#luxury">Luxury Hotels</a></li>
                            <li><a class="dropdown-item" href="#resorts">Resorts</a></li>
                            <li><a class="dropdown-item" href="#homestays">Homestays</a></li>
                            <li><a class="dropdown-item" href="#villas">Villas & Apartments</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-concierge-bell"></i> Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#flights">Flight Booking</a></li>
                            <li><a class="dropdown-item" href="#transfers">Airport Transfers</a></li>
                            <li><a class="dropdown-item" href="#activities">Activities & Tours</a></li>
                            <li><a class="dropdown-item" href="#car-rental">Car Rental</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php"><i class="fas fa-user"></i> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-3 mb-4">Discover Your Next Adventure</h1>
            <p class="lead mb-4">Experience the world's best destinations with our premium travel services</p>
            <a href="#search" class="btn btn-primary btn-lg">Start Exploring</a>
        </div>
    </section>

    <!-- Search Section -->
    <section id="search" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow">
                        <div class="card-body">
                            <form class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">Destination</label>
                                    <input type="text" class="form-control" placeholder="Where to?">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Check In</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Check Out</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">&nbsp;</label>
                                    <button type="submit" class="btn btn-primary w-100">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Sections -->
    <section id="destinations" class="py-5">
        <div class="container">
    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Why Choose Us</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-hotel fa-3x mb-3 text-primary"></i>
                            <h4>Premium Hotels</h4>
                            <p>Experience luxury stays at the best hotels worldwide</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-plane fa-3x mb-3 text-primary"></i>
                            <h4>Best Flights</h4>
                            <p>Get the best deals on flights to your dream destination</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt fa-3x mb-3 text-primary"></i>
                            <h4>Guided Tours</h4>
                            <p>Expert guides to enhance your travel experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>TravelEase</h5>
                    <p>Your ultimate tourism platform for unforgettable experiences.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">About Us</a></li>
                        <li><a href="#" class="text-white">Contact</a></li>
                        <li><a href="#" class="text-white">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: info@travelease.com<br>Phone: +1 234 567 890</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
