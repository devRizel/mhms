<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madridejos HMS - Login</title>
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
    
    <!-- Login Card -->
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg border-gray-100 border-top-2 overflow-hidden">
        <!-- Header -->
        <div class="py-6 px-8 text-center">
          
            <img src="assets/images/logo.png" class="h-16 w-16 rounded-lg ms-auto mx-auto" alt="">
            <h1 class="text-2xl font-bold text-">Madridejos HMS</h1>
            <p class="text--100 mt-1">Healthcare Management System</p>
        </div>
        
        <!-- Login Form -->
        <div class="p-8">
        <form action="admin/includes/patients-login.php" method="POST">
    <div class="mb-6">
        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
        <input type="email" id="email" name="email" 
            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" 
            placeholder="your@email.com" required>
    </div>
    
    <div class="mb-6">
        <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
        <input type="password" id="password" name="password" 
            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" 
            placeholder="••••••••" required>
    </div>
    
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center">
            <input id="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="remember-me" class="ml-2 block text-sm text-gray-700">Remember me</label>
        </div>
        
        <a href="forgot.php" class="text-sm text-blue-600 hover:text-blue-800">Forgot password?</a>
    </div>
    
    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-200">
        Sign In
    </button>
</form>
            
            <div class="mt-6 text-center">
                <p class="text-gray-600 text-sm">Don't have an account? 
                    <a href="signup.php" class="text-blue-600 hover:text-blue-800 font-medium">Register here</a>
                </p>
            </div>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const signupStatus = urlParams.get('signup');
    const errorStatus = urlParams.get('error');

    if (signupStatus === 'success') {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Your account has been created successfully. Please log in.',
        });
    } else if (errorStatus === 'empty_fields') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Please fill in all fields.',
        });
    } else if (errorStatus === 'invalid_email') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Username/Password Incorrect!',
        });
    } else if (errorStatus === 'email_not_found') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Username/Password Incorrect!',
        });
    } else if (errorStatus === 'wrong_password') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Username/Password Incorrect!',
        });
    } else if (errorStatus === 'connection_failed') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Failed to connect to the database.',
        });
    }
</script>



    
    <!-- Footer -->
    <div class="absolute bottom-4 left-0 right-0 text-center text-gray-500 text-sm">
        &copy; 2023 Madridejos Healthcare Management System
    </div>
</body>
</html>