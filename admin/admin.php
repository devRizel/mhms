<?php include_once 'includes/sidebar.php'; ?>

    <!-- Top Bar -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Staff Management</h2>
        
        <div class="flex items-center space-x-4 w-full md:w-auto">
            <!-- Search -->
            <div class="relative flex-grow md:flex-grow-0">
                <input type="text" placeholder="Search staff..." class="w-full md:w-64 pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-2.5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </div>
            
            <!-- Add Staff Button -->
            <button onclick="openAddStaffModal()" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition dark:bg-blue-700 dark:hover:bg-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Add Admin
            </button>
        </div>
    </div>
    
    <?php
// Database connection
$servername = "localhost";
$username = "root";  // Change as per your database username
$password = "";  // Change as per your database password
$dbname = "mhms";  // The database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch staff data from the 'admin' table
$sql = "SELECT fullname, email, phone, status FROM admin"; // Query to fetch staff data from the 'admin' table
$result = $conn->query($sql);
?>

<!-- Staff Table -->
<div class="bg-white p-6 rounded-xl shadow border border-gray-100 mb-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Fullname</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Role</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Contact</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Status</th>
                    <th scope="col" class="relative px-6 py-3"><span class="sr-only">Actions</span></th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr class='hover:bg-gray-50 dark:hover:bg-gray-700'>
                                <td class='px-6 py-4 whitespace-nowrap'>
                                    <div class='flex items-center'>
                                        <div class='flex-shrink-0 h-10 w-10'>
                                            <img class='h-10 w-10 rounded-full' src='https://randomuser.me/api/portraits/women/44.jpg' alt=''>
                                        </div>
                                        <div class='ml-4'>
                                            <div class='text-sm font-medium text-gray-900 dark:text-white'>{$row['fullname']}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap'>
                                    <div class='text-sm text-gray-900 dark:text-white'>{$row['status']}</div>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap'>
                                    <div class='text-sm text-gray-900 dark:text-white'>{$row['email']}</div>
                                    <div class='text-sm text-gray-500 dark:text-gray-400'>{$row['phone']}</div>
                                </td>
                                <td class='px-6 py-4 whitespace-nowrap'>";

                        // Status handling (active or inactive)
                        if ($row['status'] == 'Active') {
                            echo "<span class='px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400'>Active</span>";
                        } else {
                            echo "<span class='px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400'>On Leave</span>";
                        }
                        echo "</td>
                                <td class='px-6 py-4 whitespace-nowrap text-right text-sm font-medium'>
                                    <div class='flex space-x-3'>
                                        <button onclick='openEditStaffModal()' class='text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300'>Edit</button>
                                        <button class='text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300'>Deactivate</button>
                                    </div>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='px-6 py-4 text-center'>No staff found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>  


        
        <!-- Pagination -->
        <div class="flex items-center justify-between mt-6">
            <div class="text-sm text-gray-500 dark:text-gray-400">
                Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span class="font-medium">12</span> staff members
            </div>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border dark:text-white rounded-lg dark:border-gray-700">Previous</button>
                <button class="px-3 py-1 dark:text-white  bg-blue-600 text-white rounded-lg dark:bg-blue-700">1</button>
                <button class="px-3 py-1 dark:text-white  border rounded-lg dark:border-gray-700">2</button>
                <button class="px-3 py-1 dark:text-white  border rounded-lg dark:border-gray-700">Next</button>
            </div>
        </div>
    </div>
</div>

<!-- Add Staff Modal -->
<div id="addStaffModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-xl w-[90vh] max-w-xxl dark:bg-gray-800">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Add New Admin Member</h3>
                <button onclick="closeAddStaffModal()" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
<form action="includes/admin-admin.php" method="POST">
    <div class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
            <input type="text" name="fullname" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Phone</label>
            <input type="tel" name="phone" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Role</label>
            <select name="role" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <option>Staff</option>
                <option>Administrator</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
            <input type="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Password</label>
            <input type="password" name="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>
    </div>
    <div class="mt-6 flex justify-end space-x-3">
        <button type="button" onclick="closeAddStaffModal()" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700">
            Cancel
        </button>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800">
            Add Staff
        </button>
    </div>
</form>
        </div>
    </div>
</div>

<!-- Edit Staff Modal -->
<div id="editStaffModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md dark:bg-gray-800">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Edit Staff Member</h3>
                <button onclick="closeEditStaffModal()" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form action="includes/admin-admin-edit.php" method="POST">
                <div class="space-y-4">
                <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
            <input type="text" name="fullname" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Phone</label>
            <input type="tel" name="number" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Role</label>
            <select name="role" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <option>Staff</option>
                <option>Administrator</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
            <input type="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </div>
                </div>
                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" onclick="closeEditStaffModal()" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700">
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

<script>
    function openAddStaffModal() {
        document.getElementById('addStaffModal').classList.remove('hidden');
    }
    function closeAddStaffModal() {
        document.getElementById('addStaffModal').classList.add('hidden');
    }
    function openEditStaffModal() {
        document.getElementById('editStaffModal').classList.remove('hidden');
    }
    function closeEditStaffModal() {
        document.getElementById('editStaffModal').classList.add('hidden');
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const appointmentStatus = urlParams.get('appointment');
    const appointmentMessage = urlParams.get('message');
    if (appointmentStatus === 'success') {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Added Successfully.',
        });
    } else if (appointmentStatus === 'error' && appointmentMessage === 'empty_fields') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Please fill in all fields.',
        });
    } else if (appointmentStatus === 'error' && appointmentMessage === 'invalid_phone') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Phone number must be 11 digits.',
        });
    } else if (appointmentStatus === 'error' && appointmentMessage === 'duplicate_email') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'This email is already registered.',
        });
    } else if (appointmentStatus === 'error' && appointmentMessage === 'insert_failed') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Failed to insert data.',
        });
    }
</script>
<script src="../assets/js/script.js"></script>