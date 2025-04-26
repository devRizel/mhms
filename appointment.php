<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madridejos HMS - Appointments & Medical History</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Circle shapes */
        .brand-circle-xl {
            position: fixed;
            width: 1000px;
            height: 1000px;
            background: rgba(59, 130, 246, 0.06);
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
            background: rgba(16, 185, 129, 0.06);
            border-radius: 50%;
            clip-path: circle(50% at 50% 50%);
            z-index: -1;
        }
        
        .brand-circle-lg-bottom {
            bottom: -400px;
            left: -300px;
        }
        
        .brand-circle-sm {
            position: fixed;
            width: 400px;
            height: 400px;
            background: rgba(99, 102, 241, 0.06);
            border-radius: 50%;
            clip-path: circle(50% at 50% 50%);
            z-index: -1;
        }
        
        .brand-circle-sm-center {
            top: 30%;
            right: 20%;
        }
        
        /* Tab styles */
        .tab-button {
            transition: all 0.3s ease;
        }
        
        .tab-button.active {
            border-bottom: 3px solid #3b82f6;
            color: #3b82f6;
            font-weight: 600;
        }
        
        /* Status badges */
        .status-badge {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
        }
        
        .status-confirmed {
            background-color: #D1FAE5;
            color: #065F46;
        }
        
        .status-pending {
            background-color: #FEF3C7;
            color: #92400E;
        }
        
        .status-cancelled {
            background-color: #FEE2E2;
            color: #991B1B;
        }
        
        .status-completed {
            background-color: #E0E7FF;
            color: #3730A3;
        }
        
        /* Card hover effects */
        .hover-card {
            transition: all 0.3s ease;
        }
        
        .hover-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.07);
        }
        
        /* Accordion styles */
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .accordion.active .accordion-content {
            max-height: 500px;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen relative overflow-x-hidden">
    <!-- Circle Shapes -->
    <div class="brand-circle-xl brand-circle-xl-right"></div>
    <div class="brand-circle-lg brand-circle-lg-bottom"></div>
    <div class="brand-circle-sm brand-circle-sm-center"></div>
    
    <!-- Main Container -->
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Health Services</h1>
                <p class="text-gray-600">Manage your appointments and medical history</p>
            </div>
            <div class="mt-4 md:mt-0">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                    </svg>
                    New Appointment
                </button>
            </div>
        </div>
        
        <!-- Tab Navigation -->
        <div class="border-b border-gray-200 mb-8">
            <nav class="flex space-x-8">
                <button class="tab-button active py-4 px-1 text-sm font-medium">Appointments</button>
                <button class="tab-button py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700">Medical History</button>
                <button class="tab-button py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700">Reminders</button>
            </nav>
        </div>
        
        <!-- Appointments Section -->
        <div id="appointments-section">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-800">Upcoming Appointments</h2>
                <div class="mt-2 md:mt-0">
                    <div class="relative">
                        <select class="appearance-none bg-white border border-gray-300 rounded-lg pl-3 pr-8 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option>All Statuses</option>
                            <option>Confirmed</option>
                            <option>Pending</option>
                            <option>Cancelled</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Appointment Cards -->
            <div class="grid grid-cols-1 gap-4 mb-8">
                <!-- Appointment 1 -->
                <div class="bg-white hover-card rounded-xl border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 p-3 rounded-lg bg-blue-50 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-800">Annual Physical Examination</h3>
                                    <p class="text-sm text-gray-500 mt-1">With Dr. Sarah Johnson</p>
                                    <div class="mt-2 flex items-center text-sm text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        May 15, 2023 • 10:30 AM - 11:15 AM
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 md:mt-0 flex flex-col md:flex-row md:items-center space-y-2 md:space-y-0 md:space-x-4">
                                <span class="status-badge status-confirmed">Confirmed</span>
                                <button class="px-3 py-1 border border-blue-600 text-blue-600 rounded-lg text-sm hover:bg-blue-50">
                                    Reschedule
                                </button>
                                <button class="px-3 py-1 border border-red-600 text-red-600 rounded-lg text-sm hover:bg-red-50">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Appointment 2 -->
                <div class="bg-white hover-card rounded-xl border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 p-3 rounded-lg bg-purple-50 text-purple-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-800">Dental Cleaning</h3>
                                    <p class="text-sm text-gray-500 mt-1">With Dr. Michael Chen</p>
                                    <div class="mt-2 flex items-center text-sm text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        June 2, 2023 • 2:15 PM - 3:00 PM
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 md:mt-0 flex flex-col md:flex-row md:items-center space-y-2 md:space-y-0 md:space-x-4">
                                <span class="status-badge status-pending">Pending</span>
                                <button class="px-3 py-1 border border-blue-600 text-blue-600 rounded-lg text-sm hover:bg-blue-50">
                                    Reschedule
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Past Appointments -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Past Appointments</h2>
                
                <!-- Accordion for past appointments -->
                <div class="bg-white rounded-xl border border-gray-100 overflow-hidden">
                    <!-- Accordion Item 1 -->
                    <div class="accordion border-b border-gray-100">
                        <button class="accordion-toggle w-full flex justify-between items-center p-6 text-left">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0 p-3 rounded-lg bg-green-50 text-green-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-800">Follow-up Consultation</h3>
                                    <p class="text-sm text-gray-500 mt-1">With Dr. Sarah Johnson</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span class="status-badge status-completed mr-4">Completed</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 transform transition-transform" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                        <div class="accordion-content">
                            <div class="px-6 pb-6">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Date & Time</label>
                                        <p class="text-gray-900">March 10, 2023 • 9:00 AM - 9:30 AM</p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Purpose</label>
                                        <p class="text-gray-900">Blood test results review</p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Notes</label>
                                        <p class="text-gray-900">Blood work normal, continue current medication</p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button class="text-sm text-blue-600 hover:text-blue-800">View Full Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- More past appointments would go here -->
                </div>
            </div>
        </div>
        
        <!-- Medical History Section (Hidden by default) -->
        <div id="medical-history-section" class="hidden">
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Consultation History</h2>
                <div class="bg-white rounded-xl border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Doctor</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Purpose</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Diagnosis</th>
                                    <th scope="col" class="relative px-6 py-3"><span class="sr-only">View</span></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">March 10, 2023</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Dr. Sarah Johnson</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Follow-up</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Normal results</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-blue-600 hover:text-blue-900">View</a>
                                    </td>
                                </tr>
                                <!-- More rows would go here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Vaccination Records -->
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Vaccination Records</h2>
                    <div class="bg-white rounded-xl border border-gray-100 overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vaccine</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Next Due</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">COVID-19 Booster</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">January 15, 2023</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">January 2024</td>
                                    </tr>
                                    <!-- More rows would go here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Lab Results -->
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Lab Results</h2>
                    <div class="bg-white rounded-xl border border-gray-100 overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Test</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th scope="col" class="relative px-6 py-3"><span class="sr-only">View</span></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Complete Blood Count</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">March 5, 2023</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <span class="status-badge status-completed">Completed</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-blue-600 hover:text-blue-900">View</a>
                                        </td>
                                    </tr>
                                    <!-- More rows would go here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Reminders Section (Hidden by default) -->
        <div id="reminders-section" class="hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Checkup Reminders -->
                <div class="bg-white hover-card rounded-xl border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 p-3 rounded-lg bg-blue-50 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">Annual Checkup Due</h3>
                                <p class="text-sm text-gray-500 mt-1">Your annual physical examination is due in 2 months</p>
                                <div class="mt-3">
                                    <button class="text-sm text-blue-600 hover:text-blue-800">Schedule Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Immunization Reminder -->
                <div class="bg-white hover-card rounded-xl border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 p-3 rounded-lg bg-green-50 text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">Flu Vaccine</h3>
                                <p class="text-sm text-gray-500 mt-1">Recommended before flu season (October)</p>
                                <div class="mt-3">
                                    <button class="text-sm text-blue-600 hover:text-blue-800">Request Appointment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Medication Reminder -->
                <div class="bg-white hover-card rounded-xl border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 p-3 rounded-lg bg-purple-50 text-purple-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v10a2 2 0 002 2h4a2 2 0 002-2V7M5 10h14M5 10a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v2a2 2 0 01-2 2" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-800">Medication Refill</h3>
                                <p class="text-sm text-gray-500 mt-1">Lisinopril prescription will need refill in 2 weeks</p>
                                <div class="mt-3">
                                    <button class="text-sm text-blue-600 hover:text-blue-800">Request Refill</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Notification Settings -->
            <div class="mt-8 bg-white rounded-xl border border-gray-100 overflow-hidden">
                <div class="p-6 border-b">
                    <h2 class="text-lg font-semibold text-gray-800">Notification Preferences</h2>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-sm font-medium text-gray-800">Email Notifications</h3>
                                <p class="text-sm text-gray-500">Receive reminders via email</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" checked>
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                            </label>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-sm font-medium text-gray-800">SMS Notifications</h3>
                                <p class="text-sm text-gray-500">Receive reminders via text message</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                            </label>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-sm font-medium text-gray-800">Push Notifications</h3>
                                <p class="text-sm text-gray-500">Receive reminders via app notifications</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" checked>
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Save Preferences</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
</body>
</html>