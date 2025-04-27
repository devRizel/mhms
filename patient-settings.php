<?php include 'admin/includes/patients-session.php'; ?>
<?php include_once('admin/includes/patient-settings.php'); ?>

<!-- Settings Content -->
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 w-full max-w-2xl">
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
            <form action="admin/includes/patients-password.php" method="POST" class="space-y-4">
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
