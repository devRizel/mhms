<?php include_once "includes/sidebar.php"; ?>

    <!-- Top Bar -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Profile Information</h2>
        <div class="flex items-center space-x-4">
            <button onclick="openEditModal()" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition dark:bg-blue-700 dark:hover:bg-blue-800">
                <i class="fas fa-edit mr-2"></i> Edit Profile
            </button>
        </div>
    </div>

    <!-- Profile Card -->
    <div class="bg-white p-6 rounded-xl shadow border border-gray-100 mb-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Avatar Section -->
            <div class="w-full md:w-1/4 flex flex-col items-center">
                <div class="relative mb-4">
                    <img class="h-40 w-40 rounded-full object-cover border-4 border-blue-100 dark:border-gray-600" 
                         src="https://randomuser.me/api/portraits/men/75.jpg" 
                         alt="Admin Avatar"
                         id="profileAvatar">
                    <label for="avatarUpload" class="absolute bottom-2 right-2 bg-blue-600 text-white p-2 rounded-full cursor-pointer hover:bg-blue-700">
                        <i class="fas fa-camera"></i>
                        <input type="file" id="avatarUpload" class="hidden" accept="image/*">
                    </label>
                </div>
                <button onclick="confirmDelete()" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition dark:bg-red-700 dark:hover:bg-red-800">
                    <i class="fas fa-trash-alt mr-2"></i> Delete Account
                </button>
            </div>

            <!-- Profile Details -->
            <div class="w-full md:w-3/4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Personal Info -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white border-b pb-2 dark:border-gray-700">Personal Information</h3>
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Full Name</p>
                            <p class="text-gray-800 dark:text-white font-medium" id="profileName">Dr. Robert Johnson</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Email</p>
                            <p class="text-gray-800 dark:text-white font-medium" id="profileEmail">robert.johnson@madridejosmed.com</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Phone</p>
                            <p class="text-gray-800 dark:text-white font-medium" id="profilePhone">(555) 123-4567</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Date of Birth</p>
                            <p class="text-gray-800 dark:text-white font-medium" id="profileDob">June 15, 1980</p>
                        </div>
                    </div>

                    <!-- Professional Info -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white border-b pb-2 dark:border-gray-700">Professional Information</h3>
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Position</p>
                            <p class="text-gray-800 dark:text-white font-medium" id="profilePosition">Chief Administrator</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Department</p>
                            <p class="text-gray-800 dark:text-white font-medium" id="profileDepartment">Administration</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Staff ID</p>
                            <p class="text-gray-800 dark:text-white font-medium" id="profileStaffId">ADM-1001</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Join Date</p>
                            <p class="text-gray-800 dark:text-white font-medium" id="profileJoinDate">January 10, 2015</p>
                        </div>
                    </div>
                </div>

                <!-- Address Section -->
                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white border-b pb-2 dark:border-gray-700">Address</h3>
                    <p class="text-gray-800 dark:text-white mt-2" id="profileAddress">
                        123 Medical Plaza, Madridejos, Cebu 6053, Philippines
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Security Section -->
    <div class="bg-white p-6 rounded-xl shadow border border-gray-100 mb-8 dark:bg-gray-800 dark:border-gray-700">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Security Settings</h3>
        
        <div class="space-y-6">
            <!-- Password Change -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h4 class="font-medium text-gray-700 dark:text-gray-300">Password</h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Last changed 3 months ago</p>
                </div>
                <button onclick="openPasswordModal()" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800 w-full md:w-auto">
                    Change Password
                </button>
            </div>
            
            <!-- Two-Factor Authentication -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h4 class="font-medium text-gray-700 dark:text-gray-300">Two-Factor Authentication</h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Add an extra layer of security</p>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400">
                        Disabled
                    </span>
                    <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 w-full md:w-auto">
                        Enable
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Profile Modal -->
<div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-xl shadow-lg w-full max-w-2xl dark:bg-gray-800">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Edit Profile Information</h3>
                <button onclick="closeEditModal()" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <form id="profileForm" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
                        <input type="text" id="editName" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white" value="Dr. Robert Johnson">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                        <input type="email" id="editEmail" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white" value="robert.johnson@madridejosmed.com">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Phone</label>
                        <input type="tel" id="editPhone" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white" value="(555) 123-4567">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Date of Birth</label>
                        <input type="date" id="editDob" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white" value="1980-06-15">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Position</label>
                        <input type="text" id="editPosition" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white" value="Chief Administrator">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Department</label>
                        <input type="text" id="editDepartment" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white" value="Administration">
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Address</label>
                    <textarea id="editAddress" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">123 Medical Plaza, Madridejos, Cebu 6053, Philippines</textarea>
                </div>
                
                <div class="flex justify-end space-x-3 pt-4">
                    <button type="button" onclick="closeEditModal()" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Change Password Modal -->
<div id="passwordModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-xl shadow-lg w-full max-w-md dark:bg-gray-800">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Change Password</h3>
                <button onclick="closePasswordModal()" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <form id="passwordForm" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Current Password</label>
                    <input type="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">New Password</label>
                    <input type="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Confirm New Password</label>
                    <input type="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white" required>
                </div>
                
                <div class="flex justify-end space-x-3 pt-4">
                    <button type="button" onclick="closePasswordModal()" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800">
                        Update Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-xl shadow-lg w-full max-w-md dark:bg-gray-800">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Confirm Account Deletion</h3>
                <button onclick="closeDeleteModal()" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="space-y-4">
                <p class="text-gray-700 dark:text-gray-300">Are you sure you want to delete your account? This action cannot be undone.</p>
                <p class="text-sm text-gray-500 dark:text-gray-400">All your data and records will be permanently removed from our system.</p>
                
                <div class="flex justify-end space-x-3 pt-4">
                    <button onclick="closeDeleteModal()" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700">
                        Cancel
                    </button>
                    <button onclick="deleteAccount()" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 dark:bg-red-700 dark:hover:bg-red-800">
                        Delete Account
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Modal functions
    function openEditModal() {
        document.getElementById('editModal').classList.remove('hidden');
    }
    
    function closeEditModal() {
        document.getElementById('editModal').classList.add('hidden');
    }
    
    function openPasswordModal() {
        document.getElementById('passwordModal').classList.remove('hidden');
    }
    
    function closePasswordModal() {
        document.getElementById('passwordModal').classList.add('hidden');
    }
    
    function confirmDelete() {
        document.getElementById('deleteModal').classList.remove('hidden');
    }
    
    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }
    
    function deleteAccount() {
        // Add account deletion logic here
        alert('Account deletion request sent');
        closeDeleteModal();
    }
    
    // Handle avatar upload
    document.getElementById('avatarUpload').addEventListener('change', function(e) {
        if (e.target.files && e.target.files[0]) {
            const reader = new FileReader();
            reader.onload = function(event) {
                document.getElementById('profileAvatar').src = event.target.result;
            };
            reader.readAsDataURL(e.target.files[0]);
        }
    });
    
    // Handle form submission
    document.getElementById('profileForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Update profile information here
        alert('Profile updated successfully');
        closeEditModal();
    });
    
    document.getElementById('passwordForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Update password here
        alert('Password changed successfully');
        closePasswordModal();
    });
</script>

<script src="../assets/js/script.js"></script>