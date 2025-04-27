<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madridejos HMS - Forgot Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .brand-circle {
            position: absolute;
            width: 400px;
            height: 400px;
            background: rgba(59, 130, 246, 0.15);
            border-radius: 50%;
            clip-path: circle(50% at 50% 50%);
            z-index: -1;
        }
        
        .brand-circle-top {
            top: -200px;
            left: -200px;
        }
        
        .brand-circle-bottom {
            bottom: -200px;
            right: -200px;
        }
        
        .brand-accent {
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(16, 185, 129, 0.15);
            border-radius: 50%;
            clip-path: circle(50% at 50% 50%);
            z-index: -1;
        }
        
        .brand-accent-top {
            top: 100px;
            left: 100px;
        }
        
        .brand-accent-bottom {
            bottom: 100px;
            right: 100px;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
    <!-- Branding Circles -->
    <div class="brand-circle brand-circle-top"></div>
    <div class="brand-circle brand-circle-bottom"></div>
    <div class="brand-accent brand-accent-top"></div>
    <div class="brand-accent brand-accent-bottom"></div>
    
    <!-- Password Reset Card -->
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="py-6 px-8 text-center">
            <div class="flex justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Reset Your Password</h1>
            <p class="text-gray-500 mt-2">Enter your email to receive a reset link</p>
        </div>
        
        <!-- Password Reset Form -->
        <div class="p-8">
            <form>
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                    <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="your@email.com" required>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-200 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    Send Reset Link
                </button>
            </form>
            
            <div class="mt-6 text-center">
                <p class="text-gray-600 text-sm">Remember your password? 
                    <a href="login.html" class="text-blue-600 hover:text-blue-800 font-medium">Sign in here</a>
                </p>
            </div>
            
            <!-- Success Message (hidden by default) -->
            <div id="success-message" class="hidden mt-6 p-4 bg-green-50 text-green-700 rounded-lg">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <span>Password reset link sent! Check your email.</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="absolute bottom-4 left-0 right-0 text-center text-gray-500 text-sm">
        &copy; 2023 Madridejos Healthcare Management System
    </div>

 
</body>
</html>