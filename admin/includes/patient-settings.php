<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madridejos HMS - User Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Circle shapes */
        .brand-circle-xl {
            position: fixed;
            width: 1000px;
            height: 1000px;
            background: rgba(59, 130, 246, 0.08);
            border-radius: 50%;
            clip-path: circle(50% at 50% 50%);
            z-index: -1;
        }
        
        .brand-circle-xl-left {
            top: -500px;
            left: -400px;
        }
        
        .brand-circle-lg {
            position: fixed;
            width: 800px;
            height: 800px;
            background: rgba(16, 185, 129, 0.08);
            border-radius: 50%;
            clip-path: circle(50% at 50% 50%);
            z-index: -1;
        }
        
        .brand-circle-lg-right {
            bottom: -400px;
            right: -300px;
        }
        
        .brand-circle-sm {
            position: fixed;
            width: 300px;
            height: 300px;
            background: rgba(99, 102, 241, 0.08);
            border-radius: 50%;
            clip-path: circle(50% at 50% 50%);
            z-index: -1;
        }
        
        .brand-circle-sm-center {
            top: 30%;
            right: 20%;
        }
        
        /* Profile specific styles */
        .profile-header {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(16, 185, 129, 0.1) 100%);
        }
        
        .profile-tab {
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
        }
        
        .profile-tab.active {
            border-bottom-color: #3b82f6;
            color: #3b82f6;
            font-weight: 600;
        }
        
        .tab-content {
            display: none;
            animation: fadeIn 0.3s ease;
        }
        
        .tab-content.active {
            display: block;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .stat-card {
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.1);
        }

                /* Enhanced circle shapes */
                .brand-circle-xl {
            position: fixed;
            width: 1000px;
            height: 1000px;
            background: rgba(59, 130, 246, 0.08);
            border-radius: 50%;
            clip-path: circle(50% at 50% 50%);
            z-index: -1;
        }
        
        .brand-circle-xl-right {
            top: -500px;
            right: -400px;
        }
        
        .brand-circle-lg {
            position: fixed;
            width: 800px;
            height: 800px;
            background: rgba(16, 185, 129, 0.08);
            border-radius: 50%;
            clip-path: circle(50% at 50% 50%);
            z-index: -1;
        }
        
        .brand-circle-lg-left {
            bottom: -400px;
            left: -300px;
        }
        
        .brand-circle-md {
            position: fixed;
            width: 600px;
            height: 600px;
            background: rgba(99, 102, 241, 0.08);
            border-radius: 50%;
            clip-path: circle(50% at 50% 50%);
            z-index: -1;
        }
        
        .brand-circle-md-center {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .brand-circle-sm {
            position: fixed;
            width: 300px;
            height: 300px;
            background: rgba(236, 72, 153, 0.08);
            border-radius: 50%;
            clip-path: circle(50% at 50% 50%);
            z-index: -1;
        }
        
        .brand-circle-sm-top {
            top: 100px;
            right: 100px;
        }
        
        /* Profile dropdown */
        .profile-dropdown {
            display: none;
        }
        
        .profile-container:hover .profile-dropdown {
            display: block;
        }
        
        /* Card shadow enhancement */
        .enhanced-card {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            transition: all 0.3s ease;
        }
        
        .enhanced-card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.07), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen relative overflow-x-hidden">
    
    <!-- Circle Shapes -->
    <div class="brand-circle-xl brand-circle-xl-left"></div>
    <div class="brand-circle-lg brand-circle-lg-right"></div>
    <div class="brand-circle-sm brand-circle-sm-center"></div>



        <!-- Dashboard Layout -->
        <div class="container mx-auto px-4 py-8">
        <!-- Top Bar - Reordered with Welcome and Profile -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Welcome back, <span class="text-blue-600">
                <?php echo htmlspecialchars($_SESSION['first_name']); ?> <?php echo htmlspecialchars($_SESSION['last_name']); ?>
                </span></h1>
                <p class="text-gray-500">Here's your health overview for today</p>
            </div>
            
            <div class="flex items-center space-x-4">
                <!-- Notification Bell -->
                <button class="p-2 rounded-full bg-white shadow-sm text-gray-600 hover:bg-gray-50 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                    </svg>
                    <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                </button>
                <script>
    function toggleProfileDropdown() {
        const dropdown = document.getElementById('profileDropdown');
        dropdown.classList.toggle('hidden');
    }
</script>
    <div class="profile-container relative">
    <button onclick="toggleProfileDropdown()" class="flex items-center space-x-2 bg-white rounded-full pl-2 pr-4 py-1 shadow-sm hover:bg-gray-50">
    <img id="profileImage" 
     src="admin/includes/uploads/<?php echo ($_SESSION['profile_image'] ? $_SESSION['profile_image'] : 'patients.png'); ?>" 
     class="h-8 w-8 rounded-full" alt="User">
                        <span class="text-sm font-medium">
                        <?php echo htmlspecialchars($_SESSION['first_name']); ?> <?php echo htmlspecialchars($_SESSION['last_name']); ?>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
    </button>

    <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
    <a href="patient-dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Home</a>
    <a href="patient-profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
     <a href="patient-settings.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
    <a href="admin/includes/patients-logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
    </div>
</div>
            </div>
        </div>
   
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all tab elements
            const tabs = document.querySelectorAll('.profile-tab');
            
            // Add click event to each tab
            tabs.forEach(tab => {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all tabs
                    tabs.forEach(t => {
                        t.classList.remove('active');
                        t.classList.add('text-gray-500');
                        t.classList.remove('text-gray-800');
                    });
                    
                    // Add active class to clicked tab
                    this.classList.add('active');
                    this.classList.remove('text-gray-500');
                    this.classList.add('text-gray-800');
                    
                    // Hide all content sections
                    document.querySelectorAll('.tab-content').forEach(content => {
                        content.classList.remove('active');
                        content.classList.add('hidden');
                    });
                    
                    // Show the selected content section
                    const tabId = this.getAttribute('data-tab');
                    const content = document.getElementById(tabId + '-content');
                    if (content) {
                        content.classList.remove('hidden');
                        content.classList.add('active');
                    }
                });
            });
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // SweetAlert for success or error messages
    const urlParams = new URLSearchParams(window.location.search);
    const successStatus = urlParams.get('success');
    const errorStatus = urlParams.get('error');

    console.log('Success:', successStatus); // Log success status
    console.log('Error:', errorStatus);    // Log error status

    // Password update alerts
    if (successStatus === 'password_updated') {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Your password has been successfully updated.',
        });
    } else if (errorStatus === 'empty_fields') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Please fill in all fields.',
        });
    } else if (errorStatus === 'password_mismatch') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'New password and confirm password do not match.',
        });
    } else if (errorStatus === 'incorrect_current_password') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Current password is incorrect.',
        });
    } else if (errorStatus === 'patient_not_found') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Patient not found.',
        });
    }

    // Email update alerts
    if (successStatus === 'email_updated') {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Your email has been successfully updated.',
        });
    } else if (errorStatus === 'email_mismatch') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'New email and confirm email do not match.',
        });
    } else if (errorStatus === 'incorrect_current_email') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Current email is incorrect.',
        });
    } else if (errorStatus === 'email_already_exists') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'The new email is already in use.',
        });
    }
</script>

</body>
</html>