<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madridejos Health Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-clip-circle {
            clip-path: circle(70% at 50% 50%);
        }
        .feature-clip-circle {
            clip-path: circle(50% at 50% 50%);
        }
        @media (max-width: 768px) {
            .hero-clip-circle {
                clip-path: circle(60% at 50% 50%);
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-xl">M</div>
                <span class="text-xl font-semibold text-gray-800">MHMS</span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#" class="text-blue-600 font-medium">Home</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition">About Us</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition">Services</a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition">Contact</a>
                <a href="login.php" class="text-gray-600 hover:text-blue-600 transition">Sign In</a>
                <a href="signup.php" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition">Register</a>
            </div>
            <button class="md:hidden text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-blue-900 opacity-40"></div>
        <div class="hero-clip-circle absolute inset-0 bg-blue-500 opacity-10"></div>
        <div class="container mx-auto px-4 py-24 md:py-32 relative z-10">
            <div class="max-w-2xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Madridejos Health Management System</h1>
                <p class="text-xl text-blue-100 mb-8">Modern healthcare solutions for our community. Access medical services with ease and convenience.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#" class="bg-white text-blue-600 px-6 py-3 rounded-full font-medium hover:bg-gray-100 transition">Learn More</a>
                    <a href="login.php" class="bg-blue-600 text-white px-6 py-3 rounded-full font-medium hover:bg-blue-700 transition">Get Started</a>
                </div>
            </div>
        </div>
        <!-- Background image (replace with your actual path) -->
        <style>
            .hero-section {
                background-image: url('../assets/images/rhu.jpg');
                background-size: cover;
                background-position: center;
            }
        </style>
        <div class="hero-section absolute inset-0"></div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Services</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Comprehensive healthcare services designed to meet the needs of our community.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-md transition">
                    <div class="feature-clip-circle w-20 h-20 bg-blue-100 mx-auto mb-6 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Patient Records</h3>
                    <p class="text-gray-600">Secure digital storage and easy access to your medical history and records.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-md transition">
                    <div class="feature-clip-circle w-20 h-20 bg-green-100 mx-auto mb-6 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Appointments</h3>
                    <p class="text-gray-600">Schedule, reschedule or cancel appointments with healthcare providers online.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-md transition">
                    <div class="feature-clip-circle w-20 h-20 bg-purple-100 mx-auto mb-6 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Health Monitoring</h3>
                    <p class="text-gray-600">Track your vital signs and health metrics with our integrated monitoring system.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                    <div class="relative">
                        <div class="w-64 h-64 bg-blue-200 rounded-full absolute -top-8 -left-8 opacity-20"></div>
                        <div class="w-64 h-64 bg-green-200 rounded-full absolute -bottom-8 -right-8 opacity-20"></div>
                        <div class="relative bg-white p-2 rounded-xl shadow-md">
                            <!-- Replace with your actual image -->
                            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Healthcare professionals" class="rounded-lg w-full h-auto">
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">About Madridejos Health Management System</h2>
                    <p class="text-gray-600 mb-4">MHMS is a comprehensive digital platform designed to streamline healthcare services in Madridejos. Our mission is to provide accessible, efficient, and patient-centered care through innovative technology solutions.</p>
                    <p class="text-gray-600 mb-6">We collaborate with healthcare providers, government agencies, and the community to deliver quality health services to every resident.</p>
                    <a href="#" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-full font-medium hover:bg-blue-700 transition">Learn More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to experience better healthcare?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">Join thousands of Madridejos residents who are already managing their health with our system.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="login.php" class="bg-white text-blue-600 px-6 py-3 rounded-full font-medium hover:bg-gray-100 transition">Sign In</a>
                <a href="signup.php" class="bg-blue-800 text-white px-6 py-3 rounded-full font-medium hover:bg-blue-900 transition">Register Now</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-sm">M</div>
                        <span class="text-lg font-semibold">MHMS</span>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center gap-6 mb-4 md:mb-0">
                    <a href="#" class="text-gray-300 hover:text-white transition">Home</a>
                    <a href="#" class="text-gray-300 hover:text-white transition">About Us</a>
                    <a href="#" class="text-gray-300 hover:text-white transition">Services</a>
                    <a href="#" class="text-gray-300 hover:text-white transition">Contact</a>
                    <a href="#" class="text-gray-300 hover:text-white transition">Privacy Policy</a>
                </div>
                <div class="text-gray-400 text-sm">
                    © 2025 Madridejos Health Management System. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <?php include_once('chatbot.php'); ?>
</body>
</html>