<?php include_once 'includes/sidebar.php'; ?>

    <!-- Top Bar -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">System Settings</h2>
        
        <div class="flex items-center space-x-4 w-full md:w-auto">
            <!-- Save Button -->
            <button type="submit" form="settingsForm" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition dark:bg-blue-700 dark:hover:bg-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                Save Changes
            </button>
        </div>
    </div>

    <!-- Settings Tabs -->
    <div class="mb-6 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px" id="settingsTabs" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 text-blue-500 border-b-2 rounded-t-lg active" id="general-tab" data-tabs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="true">General</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="clinic-tab" data-tabs-target="#clinic" type="button" role="tab" aria-controls="clinic" aria-selected="false">Clinic Info</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="notifications-tab" data-tabs-target="#notifications" type="button" role="tab" aria-controls="notifications" aria-selected="false">Notifications</button>
            </li>
            <li role="presentation">
                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="security-tab" data-tabs-target="#security" type="button" role="tab" aria-controls="security" aria-selected="false">Security</button>
            </li>
        </ul>
    </div>

    <!-- Settings Form -->
    <form id="settingsForm" class="space-y-8">
        <!-- General Settings Tab -->
        <div class="bg-white p-6 rounded-xl shadow border border-gray-100 dark:bg-gray-800 dark:border-gray-700" id="general" role="tabpanel" aria-labelledby="general-tab">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">General Settings</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Language -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Language</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <option>English</option>
                        <option>Spanish</option>
                        <option>French</option>
                        <option>German</option>
                    </select>
                </div>
                
                <!-- Timezone -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Timezone</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <option>(UTC-05:00) Eastern Time</option>
                        <option>(UTC-06:00) Central Time</option>
                        <option>(UTC-07:00) Mountain Time</option>
                        <option>(UTC-08:00) Pacific Time</option>
                    </select>
                </div>
                
                <!-- Date Format -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Date Format</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <option>MM/DD/YYYY (12/31/2023)</option>
                        <option>DD/MM/YYYY (31/12/2023)</option>
                        <option>YYYY-MM-DD (2023-12-31)</option>
                    </select>
                </div>
                
                <!-- Time Format -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Time Format</label>
                    <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <option>12-hour (3:45 PM)</option>
                        <option>24-hour (15:45)</option>
                    </select>
                </div>
            </div>
            
            <!-- Dark Mode Toggle -->
            <div class="mt-6">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <span class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-300">Enable Dark Mode</span>
                </label>
            </div>
        </div>

        <!-- Clinic Info Tab (initially hidden) -->
        <div class="bg-white p-6 rounded-xl shadow border border-gray-100 dark:bg-gray-800 dark:border-gray-700 hidden" id="clinic" role="tabpanel" aria-labelledby="clinic-tab">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Clinic Information</h3>
            
            <div class="space-y-4">
                <!-- Clinic Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Clinic Name</label>
                    <input type="text" value="Madridejos Medical Center" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>
                
                <!-- Address -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Address</label>
                    <input type="text" value="123 Medical Plaza, Madridejos" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>
                
                <!-- Contact Info -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Phone Number</label>
                        <input type="tel" value="(555) 987-6543" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                        <input type="email" value="contact@madridejosmed.com" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    </div>
                </div>
                
                <!-- Business Hours -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Business Hours</label>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <span class="w-24 text-sm text-gray-600 dark:text-gray-400">Monday - Friday</span>
                            <input type="time" value="08:00" class="px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <span class="mx-2 text-gray-500 dark:text-gray-400">to</span>
                            <input type="time" value="17:00" class="px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        </div>
                        <div class="flex items-center">
                            <span class="w-24 text-sm text-gray-600 dark:text-gray-400">Saturday</span>
                            <input type="time" value="09:00" class="px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <span class="mx-2 text-gray-500 dark:text-gray-400">to</span>
                            <input type="time" value="13:00" class="px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        </div>
                        <div class="flex items-center">
                            <span class="w-24 text-sm text-gray-600 dark:text-gray-400">Sunday</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Closed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notifications Tab (initially hidden) -->
        <div class="bg-white p-6 rounded-xl shadow border border-gray-100 dark:bg-gray-800 dark:border-gray-700 hidden" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Notification Settings</h3>
            
            <div class="space-y-6">
                <!-- Email Notifications -->
                <div>
                    <h4 class="font-medium text-gray-700 dark:text-gray-300 mb-3">Email Notifications</h4>
                    <div class="space-y-3">
                        <label class="flex items-center">
                            <input type="checkbox" checked class="form-checkbox h-5 w-5 text-blue-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">New appointment bookings</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" checked class="form-checkbox h-5 w-5 text-blue-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Appointment cancellations</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Patient registration</span>
                        </label>
                    </div>
                </div>
                
                <!-- SMS Notifications -->
                <div>
                    <h4 class="font-medium text-gray-700 dark:text-gray-300 mb-3">SMS Notifications</h4>
                    <div class="space-y-3">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Appointment reminders (24h before)</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Emergency alerts</span>
                        </label>
                    </div>
                </div>
                
                <!-- In-App Notifications -->
                <div>
                    <h4 class="font-medium text-gray-700 dark:text-gray-300 mb-3">In-App Notifications</h4>
                    <div class="space-y-3">
                        <label class="flex items-center">
                            <input type="checkbox" checked class="form-checkbox h-5 w-5 text-blue-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">System updates</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" checked class="form-checkbox h-5 w-5 text-blue-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">New messages</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Security Tab (initially hidden) -->
        <div class="bg-white p-6 rounded-xl shadow border border-gray-100 dark:bg-gray-800 dark:border-gray-700 hidden" id="security" role="tabpanel" aria-labelledby="security-tab">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Security Settings</h3>
            
            <div class="space-y-6">
                <!-- Password Change -->
                <div>
                    <h4 class="font-medium text-gray-700 dark:text-gray-300 mb-3">Change Password</h4>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Current Password</label>
                            <input type="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">New Password</label>
                            <input type="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Confirm New Password</label>
                            <input type="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        </div>
                        <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800">
                            Update Password
                        </button>
                    </div>
                </div>
                
                <!-- Two-Factor Authentication -->
                <div>
                    <h4 class="font-medium text-gray-700 dark:text-gray-300 mb-3">Two-Factor Authentication</h4>
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-sm font-medium text-gray-900 dark:text-white">Status: <span class="text-yellow-600 dark:text-yellow-400">Disabled</span></div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Add an extra layer of security to your account</div>
                        </div>
                        <button type="button" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                            Enable
                        </button>
                    </div>
                </div>
                
                <!-- Session Management -->
                <div>
                    <h4 class="font-medium text-gray-700 dark:text-gray-300 mb-3">Active Sessions</h4>
                    <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-700">
                        <div class="flex items-center justify-between mb-3">
                            <div>
                                <div class="font-medium text-gray-900 dark:text-white">Chrome on Windows</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Madridejos, PH • Last active 2 hours ago</div>
                            </div>
                            <button type="button" class="text-sm text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300">
                                Revoke
                            </button>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="font-medium text-gray-900 dark:text-white">Safari on iPhone</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Cebu City, PH • Last active 3 days ago</div>
                            </div>
                            <button type="button" class="text-sm text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300">
                                Revoke
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
    const tabs = document.querySelectorAll('[role="tab"]');
    const tabPanels = document.querySelectorAll('[role="tabpanel"]');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Deactivate all tabs and hide all tab panels
            tabs.forEach(t => {
                t.classList.remove('active', 'border-b-2', 'border-blue-600', 'text-blue-600');
                t.setAttribute('aria-selected', false);
            });

            tabPanels.forEach(panel => panel.classList.add('hidden'));

            // Activate the clicked tab and show its panel
            tab.classList.add('active', 'border-b-2', 'border-blue-600', 'text-blue-600');
            tab.setAttribute('aria-selected', true);

            const targetId = tab.getAttribute('data-tabs-target');
            const targetPanel = document.querySelector(targetId);
            if (targetPanel) {
                targetPanel.classList.remove('hidden');
            }
        });
    });
</script>


<script src="../assets/js/script.js"></script>