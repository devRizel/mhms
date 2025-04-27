


<?php include_once 'includes/sidebar.php'; ?>
    <h1> <span class="ml-2 text-4xl dark:text-white mb-4">Dashboard</span></h1>
        <!-- Stats Cards -->
     <!-- Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-8 mt-5">
    <!-- Total Patients Card -->
    <div class="relative bg-white p-5 md:p-6 rounded-xl shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700 overflow-hidden hover:shadow-md hover:scale-[1.02] transition-all duration-300">
        <div class="absolute inset-0 opacity-7 bg-gradient-to-br from-blue-50 to-transparent dark:from-blue-900/10 dark:to-transparent"></div>
        <div class="relative flex items-center justify-between">
            <div class="space-y-1">
                <p class="text-xs md:text-sm text-gray-500 dark:text-gray-400 font-medium">Total Patients</p>
                <h3 class="text-xl md:text-2xl font-bold dark:text-white">1,248</h3>
                <p class="text-xs md:text-sm text-green-600 dark:text-green-400 font-medium flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    +12% from last month
                </p>
            </div>
            <div class="p-3 rounded-lg bg-blue-100 text-blue-600 dark:bg-blue-900/40 dark:text-blue-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Today's Appointments Card -->
    <div class="relative bg-white p-5 md:p-6 rounded-xl shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700 overflow-hidden hover:shadow-md hover:scale-[1.02] transition-all duration-300">
        <div class="absolute inset-0 opacity-7 bg-gradient-to-br from-green-50 to-transparent dark:from-green-900/10 dark:to-transparent"></div>
        <div class="relative flex items-center justify-between">
            <div class="space-y-1">
                <p class="text-xs md:text-sm text-gray-500 dark:text-gray-400 font-medium">Today's Appointments</p>
                <h3 class="text-xl md:text-2xl font-bold dark:text-white">24</h3>
                <p class="text-xs md:text-sm text-green-600 dark:text-green-400 font-medium flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    +2 from yesterday
                </p>
            </div>
            <div class="p-3 rounded-lg bg-green-100 text-green-600 dark:bg-green-900/40 dark:text-green-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Pending Tasks Card -->
    <div class="relative bg-white p-5 md:p-6 rounded-xl shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700 overflow-hidden hover:shadow-md hover:scale-[1.02] transition-all duration-300">
        <div class="absolute inset-0 opacity-7 bg-gradient-to-br from-yellow-50 to-transparent dark:from-yellow-900/10 dark:to-transparent"></div>
        <div class="relative flex items-center justify-between">
            <div class="space-y-1">
                <p class="text-xs md:text-sm text-gray-500 dark:text-gray-400 font-medium">Pending Tasks</p>
                <h3 class="text-xl md:text-2xl font-bold dark:text-white">8</h3>
                <p class="text-xs md:text-sm text-red-600 dark:text-red-400 font-medium flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                    -3 from yesterday
                </p>
            </div>
            <div class="p-3 rounded-lg bg-yellow-100 text-yellow-600 dark:bg-yellow-900/40 dark:text-yellow-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Available Staff Card -->
    <div class="relative bg-white p-5 md:p-6 rounded-xl shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700 overflow-hidden hover:shadow-md hover:scale-[1.02] transition-all duration-300">
        <div class="absolute inset-0 opacity-7 bg-gradient-to-br from-purple-50 to-transparent dark:from-purple-900/10 dark:to-transparent"></div>
        <div class="relative flex items-center justify-between">
            <div class="space-y-1">
                <p class="text-xs md:text-sm text-gray-500 dark:text-gray-400 font-medium">Available Staff</p>
                <h3 class="text-xl md:text-2xl font-bold dark:text-white">14</h3>
                <p class="text-xs md:text-sm text-gray-500 dark:text-gray-400 font-medium flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    3 on leave
                </p>
            </div>
            <div class="p-3 rounded-lg bg-purple-100 text-purple-600 dark:bg-purple-900/40 dark:text-purple-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
        </div>
    </div>
</div>

        
        <!-- Upcoming Appointments -->
        <div class="bg-white p-6 rounded-xl shadow border border-gray-100 mb-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Upcoming Appointments</h3>
                <a href="#" class="text-sm text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">View All</a>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Patient</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Time</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Doctor</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Purpose</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Status</th>
                            <th scope="col" class="relative px-6 py-3"><span class="sr-only">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900 dark:text-white">John Smith</div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">ID: #P-1001</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 dark:text-white">Today, 10:30 AM</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 dark:text-white">Dr. Sarah</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900 dark:text-white">Routine Checkup</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Confirmed</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">View</a>
                            </td>
                        </tr>
                        <!-- More appointment rows... -->
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Recent Patients & Quick Actions -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Recent Patients -->
            <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Recent Patients</h3>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">View All</a>
                </div>
                
                <div class="space-y-4">
                    <!-- Patient Card -->
                    <div class="flex flex-col sm:flex-row items-center p-4 border border-gray-100 rounded-lg hover:bg-gray-50 dark:border-gray-700 dark:hover:bg-gray-700">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" class="h-12 w-12 rounded-full" alt="">
                        <div class="sm:ml-4 mt-3 sm:mt-0 flex-grow text-center sm:text-left">
                            <h4 class="font-medium text-gray-900 dark:text-white">Maria Garcia</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Last visit: 2 days ago</p>
                        </div>
                        <div class="mt-3 sm:mt-0 text-center sm:text-right">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">ID: #P-1005</p>
                            <p class="text-xs text-blue-600 dark:text-blue-400">View Profile</p>
                        </div>
                    </div>
                    
                    <!-- More patient cards... -->
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="bg-white p-6 rounded-xl shadow border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-6">Quick Actions</h3>
                
                <div class="space-y-3">
                    <a href="#" class="flex items-center p-3 border border-gray-100 rounded-lg hover:bg-gray-50 dark:border-gray-700 dark:hover:bg-gray-700">
                        <div class="p-2 rounded-lg bg-blue-50 text-blue-600 dark:bg-blue-900/30 dark:text-blue-400 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6z" />
                            </svg>
                        </div>
                        <span class="dark:text-white">Add New Patient</span>
                    </a>
                    
                    <a href="#" class="flex items-center p-3 border border-gray-100 rounded-lg hover:bg-gray-50 dark:border-gray-700 dark:hover:bg-gray-700">
                        <div class="p-2 rounded-lg bg-green-50 text-green-600 dark:bg-green-900/30 dark:text-green-400 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="dark:text-white">Schedule Appointment</span>
                    </a>
                    
                    <a href="#" class="flex items-center p-3 border border-gray-100 rounded-lg hover:bg-gray-50 dark:border-gray-700 dark:hover:bg-gray-700">
                        <div class="p-2 rounded-lg bg-purple-50 text-purple-600 dark:bg-purple-900/30 dark:text-purple-400 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="dark:text-white">Generate Report</span>
                    </a>
                    
                    <a href="#" class="flex items-center p-3 border border-gray-100 rounded-lg hover:bg-gray-50 dark:border-gray-700 dark:hover:bg-gray-700">
                        <div class="p-2 rounded-lg bg-yellow-50 text-yellow-600 dark:bg-yellow-900/30 dark:text-yellow-400 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                            </svg>
                        </div>
                        <span class="dark:text-white">View Notifications</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-8 mb-8">
    <!-- Line Chart Card -->
 
    
    <!-- Bar Chart Card -->
    <div class="bg-white p-6 rounded-xl shadow border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Appointments by Department</h3>
        <div class="h-64">
            <canvas id="barChart"></canvas>
        </div>
    </div>
    
    <!-- Doughnut Chart Card -->
    <div class="bg-white p-6 rounded-xl shadow border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Patient Gender Distribution</h3>
        <div class="h-64">
            <canvas id="doughnutChart"></canvas>
        </div>
    </div>
</div>
<div class="bg-white p-6 rounded-xl shadow border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Patient Growth (Last 6 Months)</h3>
        <div class="h-64">
            <canvas id="lineChart"></canvas>
        </div>
    </div>

    </div>
    <?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
<script>
   
    Swal.fire({
        icon: "<?php echo $_SESSION['status_icon']; ?>",
        title: "<?php echo $_SESSION['status']; ?>",
        confirmButtonText: "Ok",
      
    });
</script>
<?php
unset($_SESSION['status']);
unset($_SESSION['status_icon']);
}
?>



<!-- Add this script right before your existing script.js include -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Line Chart
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    new Chart(lineCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'New Patients',
                data: [65, 59, 80, 81, 56, 72],
                borderColor: 'rgb(59, 130, 246)',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                tension: 0.3,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            }
        }
    });

    // Bar Chart
    const barCtx = document.getElementById('barChart').getContext('2d');
    new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['Cardiology', 'Pediatrics', 'Orthopedics', 'Neurology', 'Dermatology'],
            datasets: [{
                label: 'Appointments',
                data: [45, 30, 28, 22, 15],
                backgroundColor: [
                    'rgba(16, 185, 129, 0.8)',
                    'rgba(59, 130, 246, 0.8)',
                    'rgba(245, 158, 11, 0.8)',
                    'rgba(139, 92, 246, 0.8)',
                    'rgba(239, 68, 68, 0.8)'
                ],
                borderColor: [
                    'rgba(16, 185, 129, 1)',
                    'rgba(59, 130, 246, 1)',
                    'rgba(245, 158, 11, 1)',
                    'rgba(139, 92, 246, 1)',
                    'rgba(239, 68, 68, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            }
        }
    });

    // Doughnut Chart
    const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
    new Chart(doughnutCtx, {
        type: 'doughnut',
        data: {
            labels: ['Male', 'Female', 'Other'],
            datasets: [{
                data: [45, 52, 3],
                backgroundColor: [
                    'rgba(59, 130, 246, 0.8)',
                    'rgba(244, 63, 94, 0.8)',
                    'rgba(139, 92, 246, 0.8)'
                ],
                borderColor: [
                    'rgba(59, 130, 246, 1)',
                    'rgba(244, 63, 94, 1)',
                    'rgba(139, 92, 246, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
});
</script>

<!-- Your existing script include -->
<script src="../assets/js/script.js"></script>
</body>
</html>