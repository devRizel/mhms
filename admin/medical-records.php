
<?php include_once 'includes/sidebar.php'; ?>
    <!-- Top Bar -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Medical Records</h2>
        
        <div class="flex items-center space-x-4 w-full md:w-auto">
            <!-- Search -->
            <div class="relative flex-grow md:flex-grow-0">
                <input type="text" placeholder="Search records..." class="w-full md:w-64 pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-2.5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </div>
            
            <button class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition dark:bg-blue-700 dark:hover:bg-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd" />
                </svg>
                New Record
            </button>
        </div>
    </div>
    
    <!-- Filters -->
    <div class="bg-white p-6 rounded-xl shadow border border-gray-100 mb-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Patient</label>
                <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                    <option>All Patients</option>
                    <option>John Smith</option>
                    <option>Maria Garcia</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Record Type</label>
                <select class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                    <option>All Types</option>
                    <option>Consultation</option>
                    <option>Lab Results</option>
                    <option>Prescription</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Date From</label>
                <input type="date" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-800 dark:border-gray-700 dark:text-white">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Date To</label>
                <input type="date" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:bg-gray-800 dark:border-gray-700 dark:text-white">
            </div>
        </div>
    </div>
    
    <!-- Records Table -->
    <div class="bg-white p-6 rounded-xl shadow border border-gray-100 mb-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Patient</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Record Type</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Date</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Doctor</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">Status</th>
                        <th scope="col" class="relative px-6 py-3"><span class="sr-only">Actions</span></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                    <!-- Record 1 -->
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
                            <div class="text-sm text-gray-900 dark:text-white">Consultation</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900 dark:text-white">2023-06-15</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900 dark:text-white">Dr. Sarah Johnson</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Completed</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex space-x-2">
                                <button class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">View</button>
                                <button class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300">Print</button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Record 2 -->
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900 dark:text-white">Maria Garcia</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">ID: #P-1005</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900 dark:text-white">Lab Results</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900 dark:text-white">2023-06-10</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900 dark:text-white">Dr. Michael Chen</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">Pending Review</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex space-x-2">
                                <button class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">View</button>
                                <button class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-300">Print</button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- More records... -->
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="flex items-center justify-between mt-6">
            <div class="text-sm text-gray-500 dark:text-gray-400">
                Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">24</span> records
            </div>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border dark:text-white rounded-lg dark:border-gray-700">Previous</button>
                <button class="px-3 py-1 dark:text-white  bg-blue-600 text-white rounded-lg dark:bg-blue-700">1</button>
                <button class="px-3 py-1 dark:text-white  border rounded-lg dark:border-gray-700">2</button>
                <button class="px-3 py-1 dark:text-white  border rounded-lg dark:border-gray-700">Next</button>
            </div>
        </div>
    </div>
    
    <!-- Record Preview Section (optional) -->
    <div class="bg-white p-6 rounded-xl shadow border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Record Preview</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Patient Info -->
            <div>
                <h4 class="font-medium text-gray-700 dark:text-gray-300 mb-2">Patient Information</h4>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-700">
                    <div class="flex items-center mb-3">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="h-12 w-12 rounded-full mr-3" alt="">
                        <div>
                            <div class="font-medium text-gray-900 dark:text-white">John Smith</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">ID: #P-1001</div>
                        </div>
                    </div>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-500 dark:text-gray-400">Age:</span>
                            <span class="text-gray-900 dark:text-white">42</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-500 dark:text-gray-400">Gender:</span>
                            <span class="text-gray-900 dark:text-white">Male</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-500 dark:text-gray-400">Blood Type:</span>
                            <span class="text-gray-900 dark:text-white">O+</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Record Details -->
            <div class="md:col-span-2">
                <h4 class="font-medium text-gray-700 dark:text-gray-300 mb-2">Record Details</h4>
                <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-700">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Record Type</div>
                            <div class="font-medium text-gray-900 dark:text-white">Consultation</div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Date</div>
                            <div class="font-medium text-gray-900 dark:text-white">June 15, 2023</div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Doctor</div>
                            <div class="font-medium text-gray-900 dark:text-white">Dr. Sarah Johnson</div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Status</div>
                            <div class="font-medium text-green-600 dark:text-green-400">Completed</div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-1">Diagnosis</div>
                        <div class="font-medium text-gray-900 dark:text-white">Hypertension, Stage 1</div>
                    </div>
                    
                    <div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-1">Notes</div>
                        <div class="text-gray-900 dark:text-white">
                            Patient presented with elevated blood pressure readings over the past month. Recommended lifestyle modifications including reduced sodium intake and regular exercise. Prescribed medication and scheduled follow-up in 4 weeks.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="../assets/js/script.js"></script>