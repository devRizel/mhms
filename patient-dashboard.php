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
        
        <!-- Main Content Area -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Health Summary -->
            <div class="lg:col-span-2 bg-white enhanced-card rounded-xl border border-gray-100 overflow-hidden">
                <div class="p-6 border-b">
                    <h2 class="text-xl font-semibold text-gray-800">Health Summary</h2>
                </div>
                <div class="p-6">
                    <div class="flex items-start space-x-6">
                        <div class="flex-shrink-0">
                            <div class="h-16 w-16 rounded-full bg-blue-50 flex items-center justify-center text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-800">Good Health Status</h3>
                            <p class="text-gray-500 mt-1">Your recent checkup indicates all vitals are within normal range. Continue with your current health regimen.</p>
                            
                            <div class="mt-4 grid grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm text-gray-500">Blood Pressure</p>
                                    <p class="font-medium">120/80 mmHg</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Heart Rate</p>
                                    <p class="font-medium">72 bpm</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Weight</p>
                                    <p class="font-medium">68 kg</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">BMI</p>
                                    <p class="font-medium">22.1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="font-medium text-gray-800">Recent Health Indicators</h4>
                            <a href="#" class="text-sm text-blue-600">View History</a>
                        </div>
                        
                        <!-- Sample chart placeholder -->
                        <div class="bg-gray-50 rounded-lg h-48 flex items-center justify-center text-gray-400">
                            [Health Trends Chart Placeholder]
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="bg-white enhanced-card rounded-xl border border-gray-100 overflow-hidden">
                <div class="p-6 border-b">
                    <h2 class="text-xl font-semibold text-gray-800">Quick Actions</h2>
                </div>
                <div class="p-6 space-y-4">
                    <a href="#" class="flex items-center p-4 border border-gray-100 rounded-lg hover:bg-gray-50 transition">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-800">Book Appointment</h3>
                            <p class="text-sm text-gray-500">Schedule with your doctor</p>
                        </div>
                    </a>
                    
                    <a href="#" class="flex items-center p-4 border border-gray-100 rounded-lg hover:bg-gray-50 transition">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-green-50 flex items-center justify-center text-green-600 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-800">Request Prescription</h3>
                            <p class="text-sm text-gray-500">Get medication refill</p>
                        </div>
                    </a>
                    
                    <a href="#" class="flex items-center p-4 border border-gray-100 rounded-lg hover:bg-gray-50 transition">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-purple-50 flex items-center justify-center text-purple-600 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-800">Ask a Question</h3>
                            <p class="text-sm text-gray-500">Message your doctor</p>
                        </div>
                    </a>
                    
                    <a href="#" class="flex items-center p-4 border border-gray-100 rounded-lg hover:bg-gray-50 transition">
                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-yellow-50 flex items-center justify-center text-yellow-600 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-800">View Reports</h3>
                            <p class="text-sm text-gray-500">Test results & history</p>
                        </div>
                    </a>
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

</body>
</html>