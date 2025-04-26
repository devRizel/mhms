<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madridejos HMS - Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .brand-circle {
            position: fixed;
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
            position: fixed;
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
        
        body {
            padding-bottom: 60px; /* Add space for the footer */
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen p-4 relative">
    <!-- Branding Circles -->
    <div class="brand-circle brand-circle-top"></div>
    <div class="brand-circle brand-circle-bottom"></div>
    <div class="brand-accent brand-accent-top"></div>
    <div class="brand-accent brand-accent-bottom"></div>
    
    <!-- Signup Card -->
    <div class="w-full max-w-2xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden my-8">
        <!-- Header -->
        <div class="py-6 px-8 text-center">
            <img src="assets/images/logo.png" class="h-16 w-16 rounded-lg ms-auto mx-auto" alt="">
            <h1 class="text-2xl font-bold">MADRIDEJOS HMS</h1>
            <p class="text-gray-500 mt-1">Create Your Patient Account</p>
        </div>
        
        <!-- Signup Form -->
        <div class="p-8">
        <form action="admin/includes/patients-signup.php" method="POST">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <div>
            <label for="first-name" class="block text-gray-700 text-sm font-medium mb-2">First Name</label>
            <input type="text" id="first-name" name="first_name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="John" required>
        </div>
        
        <div>
            <label for="last-name" class="block text-gray-700 text-sm font-medium mb-2">Last Name</label>
            <input type="text" id="last-name" name="last_name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="Doe" required>
        </div>
    </div>
    
    <div class="mb-6">
        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
        <input type="email" id="emailemail" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="your@email.com" required>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <div>
            <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="+63 XXX XXX XXXX" required>
        </div>
        <div>
            <label for="birthdate" class="block text-gray-700 text-sm font-medium mb-2">Date of Birth</label>
            <input type="date" id="birthdate" name="birthdate" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" required>
        </div>
    </div>
    
    <div class="mb-6">
        <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
        <input type="password" id="password" name="password" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="••••••••" required>
    </div>
    
    <div class="mb-6">
        <label for="confirm-password" class="block text-gray-700 text-sm font-medium mb-2">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm_password" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="••••••••" required>
    </div>
    
    <div class="mb-6">
        <div class="flex items-start">
            <input id="terms" type="checkbox" name="terms" class="h-4 w-4 mt-1 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" required>
            <label for="terms" class="ml-2 block text-sm text-gray-700">
                I agree to the <a href="#" class="text-blue-600 hover:text-blue-800">Terms of Service</a> and <a href="#" class="text-blue-600 hover:text-blue-800">Privacy Policy</a>
            </label>
        </div>
    </div>
    
    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-200">
        Create Account
    </button>
</form>

            
            <div class="mt-6 text-center">
                <p class="text-gray-600 text-sm">Already have an account? 
                    <a href="login.php" class="text-blue-600 hover:text-blue-800 font-medium">Sign in</a>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // SweetAlert for success or error messages
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
                text: 'Please enter a valid email address.',
            });
        } else if (errorStatus === 'password_mismatch') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Passwords do not match.',
            });
        } else if (errorStatus === 'no_terms') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'You must agree to the terms and conditions.',
            });
        } else if (errorStatus === 'connection_failed') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Failed to connect to the database.',
            });
        }
     else if (errorStatus === 'email_exists') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'This email is already registered. Please use another one.',
            });
        }
        else if (errorStatus === 'invalid_phone_length') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Phone number must be exactly 11 digits.',
            });
        }
        else if (errorStatus === 'invalid_birthdate') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Birthdate cannot be in the future.',
            });
        }


    </script>

    <!-- Footer -->
    <div class="w-full text-center text-gray-500 text-sm py-4 mt-4">
        &copy; 2023 Madridejos Healthcare Management System
    </div>
</body>
</html>