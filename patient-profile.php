<?php include 'admin/includes/patients-session.php'; ?>
<?php include_once('admin/includes/patient-body.php'); ?>
    <!-- Profile Container -->
    <div class="container mx-auto px-4 py-8">
        <!-- Profile Header -->
        <div class="profile-header rounded-xl p-6 mb-8">
            <div class="flex flex-col md:flex-row items-start md:items-center">
                <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                    <div class="relative">
                        <img src="admin/includes/images/patients.png" class="h-24 w-24 rounded-full border-4 border-white shadow-md" alt="Profile">
                        <button class="absolute bottom-0 right-0 bg-white p-2 rounded-full shadow-md text-blue-600 hover:bg-blue-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <h1 class="text-2xl font-bold text-gray-800">
                            <?php echo htmlspecialchars($_SESSION['first_name']); ?> <?php echo htmlspecialchars($_SESSION['last_name']); ?>
                            </h1>
                            <p class="text-gray-600">Patient ID: P-10024567</p>
                            <div class="flex items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-600">Madridejos, Cebu, Philippines</span>
                            </div>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                Message
                            </button>
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                                Edit Profile
                            </button>
                        </div>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
                        <div class="stat-card bg-white p-4 rounded-lg text-center">
                            <p class="text-sm text-gray-500">Age</p>
                            <p class="text-xl font-bold text-gray-800">32</p>
                        </div>
                        <div class="stat-card bg-white p-4 rounded-lg text-center">
                            <p class="text-sm text-gray-500">Blood Type</p>
                            <p class="text-xl font-bold text-gray-800">O+</p>
                        </div>
                        <div class="stat-card bg-white p-4 rounded-lg text-center">
                            <p class="text-sm text-gray-500">Last Visit</p>
                            <p class="text-xl font-bold text-gray-800">May 15</p>
                        </div>
                        <div class="stat-card bg-white p-4 rounded-lg text-center">
                            <p class="text-sm text-gray-500">Member Since</p>
                            <p class="text-xl font-bold text-gray-800">2018</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Profile Navigation Tabs -->
        <div class="border-b border-gray-200 mb-8">
            <nav class="flex space-x-8">
                <a href="#" data-tab="overview" class="profile-tab active py-4 px-1 text-sm font-medium">Overview</a>
                <a href="#" data-tab="medical-records" class="profile-tab py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700">Medical Records</a>
                <a href="#" data-tab="appointments" class="profile-tab py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700">Appointments</a>
                <a href="#" data-tab="prescriptions" class="profile-tab py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700">Prescriptions</a>
                <a href="#" data-tab="billing" class="profile-tab py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700">Billing</a>
                <a href="#" data-tab="settings" class="profile-tab py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700">Settings</a>
            </nav>
        </div>
        
        <!-- Overview Content -->
        <div id="overview-content" class="tab-content active">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left Column - Personal Info -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden mb-6">
                        <div class="p-6 border-b">
                            <h2 class="text-lg font-semibold text-gray-800">Personal Information</h2>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                    <p class="text-gray-900">
                                    <?php echo htmlspecialchars($_SESSION['first_name']); ?> <?php echo htmlspecialchars($_SESSION['last_name']); ?>
                                    </p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Birth Date</label>
                                    <p class="text-gray-900">  <?php echo htmlspecialchars($_SESSION['birthdate']); ?></p>
                                </div>
                                <!-- <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Gender</label>
                                    <p class="text-gray-900">Male</p>
                                </div> -->
                                <!-- <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Marital Status</label>
                                    <p class="text-gray-900">Married</p>
                                </div> -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                    <p class="text-gray-900">
                                    <?php echo htmlspecialchars($_SESSION['email']); ?>
                                    </p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                    <p class="text-gray-900">
                                    <?php echo htmlspecialchars($_SESSION['phone']); ?>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- <div class="mt-6">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                                <p class="text-gray-900">123 Healthcare St., Madridejos, Cebu 6053 Philippines</p>
                            </div> -->
                        </div>
                    </div>
                    
                    <!-- Emergency Contacts -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="p-6 border-b">
                            <div class="flex justify-between items-center">
                                <h2 class="text-lg font-semibold text-gray-800">Emergency Contacts</h2>
                                <button class="text-sm text-blue-600 hover:text-blue-800">+ Add Contact</button>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex items-start p-4 border border-gray-100 rounded-lg">
                                    <div class="flex-shrink-0 p-3 rounded-lg bg-blue-50 text-blue-600 mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="flex-grow">
                                        <h3 class="font-medium text-gray-800">Maria Doe (Spouse)</h3>
                                        <div class="mt-2 grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Relationship</p>
                                                <p class="text-gray-900">Spouse</p>
                                            </div>
                                            <div>
                                                <p class="text-sm text-gray-500">Phone</p>
                                                <p class="text-gray-900">
                                                <?php echo htmlspecialchars($_SESSION['phone']); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ml-4 flex space-x-2">
                                        <button class="p-2 text-gray-400 hover:text-blue-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                            </svg>
                                        </button>
                                        <button class="p-2 text-gray-400 hover:text-red-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Medical Summary -->
                <div>
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden mb-6">
                        <div class="p-6 border-b">
                            <h2 class="text-lg font-semibold text-gray-800">Medical Summary</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Primary Physician</label>
                                    <p class="text-gray-900">Dr. Sarah Johnson</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Last Visit</label>
                                    <p class="text-gray-900">May 15, 2023 - Annual Checkup</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Allergies</label>
                                    <p class="text-gray-900">Penicillin, Peanuts</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Chronic Conditions</label>
                                    <p class="text-gray-900">None</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Current Medications</label>
                                    <ul class="list-disc list-inside text-gray-900">
                                        <li>Lisinopril (10mg daily)</li>
                                        <li>Atorvastatin (20mg nightly)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Insurance Information -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="p-6 border-b">
                            <h2 class="text-lg font-semibold text-gray-800">Insurance Information</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Primary Insurance</label>
                                    <p class="text-gray-900">PhilHealth</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Member ID</label>
                                    <p class="text-gray-900">PH-123456789</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Group Number</label>
                                    <p class="text-gray-900">GRP-98765</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Expiration Date</label>
                                    <p class="text-gray-900">December 31, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Medical Records Content -->
        <div id="medical-records-content" class="tab-content hidden">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-6">Medical Records</h2>
                <div class="space-y-6">
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h3 class="font-medium text-gray-800 mb-2">Consultation History</h3>
                        <p class="text-sm text-gray-600">View your complete medical consultation records</p>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h3 class="font-medium text-gray-800 mb-2">Lab Test Results</h3>
                        <p class="text-sm text-gray-600">Access your laboratory examinations and reports</p>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h3 class="font-medium text-gray-800 mb-2">Vaccination Records</h3>
                        <p class="text-sm text-gray-600">View your immunization history and schedules</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Appointments Content -->
        <div id="appointments-content" class="tab-content hidden">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-6">Appointments</h2>
                <div class="space-y-6">
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h3 class="font-medium text-gray-800 mb-2">Upcoming Appointments</h3>
                        <p class="text-sm text-gray-600">View and manage your scheduled visits</p>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h3 class="font-medium text-gray-800 mb-2">Past Appointments</h3>
                        <p class="text-sm text-gray-600">Review your previous consultations</p>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h3 class="font-medium text-gray-800 mb-2">Schedule New Appointment</h3>
                        <p class="text-sm text-gray-600">Book with your healthcare provider</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Prescriptions Content -->
        <div id="prescriptions-content" class="tab-content hidden">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-6">Prescriptions</h2>
                <div class="space-y-6">
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h3 class="font-medium text-gray-800 mb-2">Current Medications</h3>
                        <p class="text-sm text-gray-600">View your active prescriptions</p>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h3 class="font-medium text-gray-800 mb-2">Medication History</h3>
                        <p class="text-sm text-gray-600">Review your past prescribed medications</p>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h3 class="font-medium text-gray-800 mb-2">Request Refill</h3>
                        <p class="text-sm text-gray-600">Request renewal for your prescriptions</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Billing Content -->
        <div id="billing-content" class="tab-content hidden">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-6">Billing</h2>
                <div class="space-y-6">
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h3 class="font-medium text-gray-800 mb-2">Payment History</h3>
                        <p class="text-sm text-gray-600">View your completed transactions</p>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h3 class="font-medium text-gray-800 mb-2">Outstanding Balances</h3>
                        <p class="text-sm text-gray-600">Check your unpaid bills</p>
                    </div>
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h3 class="font-medium text-gray-800 mb-2">Payment Methods</h3>
                        <p class="text-sm text-gray-600">Manage your payment options</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Settings Content -->
        <div id="settings-content" class="tab-content hidden">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-6">Account Settings</h2>
                
                <!-- Change Email Form -->
                <div class="mb-8">
    <h3 class="text-lg font-medium text-gray-800 mb-4">Change Email Address</h3>
    <form action="admin/includes/patients-email.php" method="POST" class="space-y-4">
        <div>
            <label for="current-email" class="block text-sm font-medium text-gray-700 mb-1">Current Email</label>
            <input 
                type="email" 
                id="current-email" 
                name="current_email" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                placeholder="Current email address" required>
        </div>
        <div>
            <label for="new-email" class="block text-sm font-medium text-gray-700 mb-1">New Email</label>
            <input 
                type="email" 
                id="new-email" 
                name="new_email" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                placeholder="Enter new email address" 
                required>
        </div>
        <div>
            <label for="confirm-email" class="block text-sm font-medium text-gray-700 mb-1">Confirm New Email</label>
            <input 
                type="email" 
                id="confirm-email" 
                name="confirm_email" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                placeholder="Confirm new email address" 
                required>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Update Email
        </button>
    </form>
</div>

                
                <!-- Change Password Form -->
                <div class="mb-8">
    <h3 class="text-lg font-medium text-gray-800 mb-4">Change Password</h3>
    <form action="admin/includes/patients-password.php" method="POST"action="admin/includes/patients-password.php" method="POST" class="space-y-4">
        <div>
            <label for="current-password" class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
            <input type="password" id="current-password" name="current-password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter current password">
        </div>
        <div>
            <label for="new-password" class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
            <input type="password" id="new-password" name="new-password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter new password">
        </div>
        <div>
            <label for="confirm-password" class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
            <input type="password" id="confirm-password" name="confirm-password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Confirm new password">
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Update Password</button>
    </form>
</div>

               
            </div>
        </div>
    </div>
