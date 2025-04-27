<?php include 'admin/includes/patients-session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madridejos HMS - User Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
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
    <!-- Multiple Circle Shapes -->
    <div class="brand-circle-xl brand-circle-xl-right"></div>
    <div class="brand-circle-lg brand-circle-lg-left"></div>
    <div class="brand-circle-md brand-circle-md-center"></div>
    <div class="brand-circle-sm brand-circle-sm-top"></div>
    
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
        
        <!-- Health Overview Cards - Enhanced Visibility -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Card 1 -->
            <div class="bg-white enhanced-card p-6 rounded-xl border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Next Appointment</p>
                        <h3 class="text-xl font-bold mt-1">May 15</h3>
                        <p class="text-sm text-gray-500 mt-2">With Dr. Smith</p>
                    </div>
                    <div class="p-3 rounded-lg bg-blue-50 text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="bg-white enhanced-card p-6 rounded-xl border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Current Medication</p>
                        <h3 class="text-xl font-bold mt-1">3 Active</h3>
                        <p class="text-sm text-blue-500 mt-2">View details</p>
                    </div>
                    <div class="p-3 rounded-lg bg-green-50 text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="bg-white enhanced-card p-6 rounded-xl border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Last Test Results</p>
                        <h3 class="text-xl font-bold mt-1">Normal</h3>
                        <p class="text-sm text-gray-500 mt-2">Blood work (Apr 28)</p>
                    </div>
                    <div class="p-3 rounded-lg bg-purple-50 text-purple-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="bg-white enhanced-card p-6 rounded-xl border border-gray-100">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Upcoming Reminders</p>
                        <h3 class="text-xl font-bold mt-1">2 Pending</h3>
                        <p class="text-sm text-gray-500 mt-2">Medication & Follow-up</p>
                    </div>
                    <div class="p-3 rounded-lg bg-yellow-50 text-yellow-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        
        
<!-- Upcoming Appointments -->
<div class="mt-8 bg-white enhanced-card rounded-xl border border-gray-100 overflow-hidden">
    <div class="p-6 border-b">
        <div class="flex justify-between items-center">
            <h2 class="text-lg font-semibold text-gray-800">Appointments</h2>
            <button id="openModalBtn" class="text-sm text-blue-600 hover:text-blue-800">+ Add New Appointment</button>
        </div>
    </div>
    <div class="p-6">
        <div class="space-y-4">
            <?php if (count($appointments) > 0): ?>
                <?php foreach ($appointments as $appointment): ?>
                    <div class="flex items-start p-4 border border-gray-100 rounded-lg">
                        <div class="flex-shrink-0 p-3 rounded-lg bg-blue-50 text-blue-600 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h3 class="font-medium text-gray-800"><?php echo htmlspecialchars($appointment['appointment_details']); ?></h3>
                            <div class="mt-2 flex items-center text-sm text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <?php echo date('F j, Y • g:i A', strtotime($appointment['appointment_date'] . ' ' . $appointment['appointment_time'])); ?>
                            </div>
                        </div>
                        <div class="flex-shrink-0 ml-4">
                            <?php
                            // Example of displaying status (could be more dynamic based on the appointment status)
                            $status = 'Pending'; // Default status (you can change this logic based on actual data)
                            echo "<span class='px-3 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800'>{$status}</span>";
                            ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-gray-500">You have no upcoming appointments.</p>
            <?php endif; ?>
        </div>
    </div>
</div>


    
    <!-- modal.php -->
<div id="appointmentModal" class="fixed inset-0 flex justify-center items-center bg-gray-800 bg-opacity-50 z-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-md w-96">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Schedule an Appointment</h3>
        <form action="admin/includes/patients_appointment.php" method="POST">
            <div class="mb-4">
                <label for="appointmentDate" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="date" id="appointmentDate" name="appointmentDate" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="appointmentTime" class="block text-sm font-medium text-gray-700">Time</label>
                <input type="time" id="appointmentTime" name="appointmentTime" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="appointmentDetails" class="block text-sm font-medium text-gray-700">Details</label>
                <textarea id="appointmentDetails" name="appointmentDetails" class="w-full p-2 border rounded" rows="3" required></textarea>
            </div>
            <div class="flex justify-end">
                <button type="button" id="closeModalBtn" class="text-sm text-gray-600 hover:text-gray-800">Cancel</button>
                <button type="submit" class="ml-3 bg-blue-600 text-white px-4 py-2 rounded">Schedule</button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const appointmentStatus = urlParams.get('appointment');
    const appointmentMessage = urlParams.get('message');

    if (appointmentStatus === 'success') {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Your appointment has been scheduled successfully.',
        });
    } else if (appointmentStatus === 'error' && appointmentMessage) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: appointmentMessage,
        });
    }
</script>

    <script>
    document.getElementById("openModalBtn").addEventListener("click", function() {
        document.getElementById("appointmentModal").classList.remove("hidden");
    });

    document.getElementById("closeModalBtn").addEventListener("click", function() {
        document.getElementById("appointmentModal").classList.add("hidden");
    });
</script>
<?php include_once('chatbot.php'); ?>
</body>
</html>