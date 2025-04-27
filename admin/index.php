<<<<<<< HEAD
<?php
session_start();

if (isset($_SESSION['admin_id'], $_SESSION['admin_email'], $_SESSION['admin_name'])) {
    if ($_SESSION['admin_id'] && $_SESSION['admin_email'] && $_SESSION['admin_name']) {
        header("Location: dashboard.php");
        exit();
    }
}
?>

=======
>>>>>>> 81562b5b68c4a174416cfd9d5f03721db355a3ab
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Madridejos HMS - Login</title>
    <script src="https://cdn.tailwindcss.com"></script><script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

=======
    <title>Madridejos HMS - Forgot Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
>>>>>>> 81562b5b68c4a174416cfd9d5f03721db355a3ab
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
    
<<<<<<< HEAD
    <!-- Login Card -->
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg border-gray-100 border-top-2 overflow-hidden">
        <!-- Header -->
        <div class="py-6 px-8 text-center">
          
            <img src="../assets/images/logo.png" class="h-16 w-16 rounded-lg ms-auto mx-auto " alt="">
            <h1 class="text-2xl font-bold text-">Madridejos HMS</h1>
            <p class="text--100 mt-1">Admin Portal</p>
        </div>
        
        <!-- Login Form -->
        <div class="p-8">
            <form id="loginForm">
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                    <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="your@email.com">
                </div>
                
                <div class="mb-6 relative">
                    <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                    
                    <div class="relative">
                        <input type="password" id="password" class="w-full px-4 py-3 pr-12 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="••••••••">
                        
                        <!-- Eye Icon -->
                        <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-3 flex items-center text-gray-500 hover:text-blue-800">
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                </div>



                
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input id="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>
                    
                    <a href="forgotpass.php" class="text-sm text-blue-600 hover:text-blue-800">Forgot password?</a>
                </div>
                
                <button type="submit" class="w-full bg-blue-800 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-200">
                    Sign In
                </button>
            </form>
            
          
=======
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
<<<<<<<< HEAD:admin/forgotpass.php
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
========
        <form action="includes/admin-login.php" method="POST">
    <div class="mb-6">
        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
        <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="your@email.com">
    </div>
    
    <div class="mb-6">
        <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
        <input type="password" id="password" name="password" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="••••••••">
    </div>
    
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center">
            <input id="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="remember-me" class="ml-2 block text-sm text-gray-700">Remember me</label>
        </div>
        
        <a href="forgotpass.html" class="text-sm text-blue-600 hover:text-blue-800">Forgot password?</a>
    </div>
    
    <button type="submit" class="w-full bg-blue-800 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-200">
        Sign In
    </button>
</form>

          
>>>>>>>> 81562b5b68c4a174416cfd9d5f03721db355a3ab:admin/index.php
>>>>>>> 81562b5b68c4a174416cfd9d5f03721db355a3ab
        </div>
    </div>
    
    <!-- Footer -->
    <div class="absolute bottom-4 left-0 right-0 text-center text-gray-500 text-sm">
<<<<<<< HEAD
        &copy; 2025 Madridejos Healthcare Management System
    </div>


<!-- crud sweetalerts  this is included inside all the pages below uaing include-->
<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
<script>
Swal.fire({
    icon: "<?php echo $_SESSION['status_icon']; ?>",
    title: "<?php echo $_SESSION['status']; ?>",
    confirmButtonText: "Ok"
});
</script>
<?php
unset($_SESSION['status']);
unset($_SESSION['status_icon']);
}
?>

<!-- end  -->
  
    <!-- AJAX REQUEST -->
<script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault(); // prevent page reload

    var email = document.getElementById('email').value.trim();
    var password = document.getElementById('password').value.trim();

    if (email === '' || password === '') {
        Swal.fire({
            icon: 'warning',
            title: 'Missing Fields',
            text: 'Please enter both email and password.'
        });
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'functions/login.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        if (xhr.status === 200) {
            var response = xhr.responseText.trim();
            if (response === 'success') {
              
                    window.location.href = 'dashboard.php';
             
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Login Failed',
                    text: response
                });
            }
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Server Error',
                text: 'Something went wrong. Please try again.'
            });
        }
    };

    xhr.send('email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));
});

</script>


    <script>
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.055 10.055 0 012.403-4.467m3.652-2.672A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.957 9.957 0 01-4.032 5.21M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
        `;
    } else {
        passwordInput.type = 'password';
        eyeIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        `;
    }
}
</script>

=======
        &copy; 2023 Madridejos Healthcare Management System
    </div>

 
>>>>>>> 81562b5b68c4a174416cfd9d5f03721db355a3ab
</body>
</html>