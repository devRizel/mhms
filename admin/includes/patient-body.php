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
    </style>
</head>
<body class="bg-gray-50 min-h-screen relative overflow-x-hidden">
    <!-- Circle Shapes -->
    <div class="brand-circle-xl brand-circle-xl-left"></div>
    <div class="brand-circle-lg brand-circle-lg-right"></div>
    <div class="brand-circle-sm brand-circle-sm-center"></div>
    
   
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