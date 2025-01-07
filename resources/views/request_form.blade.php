<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Form</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 w-full max-w-3xl">
        <h1 class="text-2xl font-bold mb-6 text-center">Schedule a Meeting</h1>
        
        <form action="{{ route('requests.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Meeting Title -->
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <label for="meeting_title" class="block text-gray-700 font-bold mb-2">Meeting Title</label>
                    <input 
                        type="text" 
                        id="meeting_title" 
                        name="meeting_title" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        placeholder="Enter meeting title" 
                        required>
                </div>

                <!-- Meeting Room -->
                <div>
                    <label for="meeting_room" class="block text-gray-700 font-bold mb-2">Meeting Room</label>
                    <input 
                        type="text" 
                        id="meeting_room" 
                        name="meeting_room" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        placeholder="Type meeting room name" 
                        required>
                </div>
            </div>

            <!-- Meeting Time -->
            <div class="mb-4">
                <label for="meeting_time" class="block text-gray-700 font-bold mb-2">
                    Meeting Room 1 - Meeting Time
                </label>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Date Picker -->
                    <input 
                        type="date" 
                        id="meeting_date" 
                        name="meeting_date" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        required>
                    
                    <!-- Time Slot Dropdown -->
                    <select 
                        id="meeting_time" 
                        name="meeting_time" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        required>
                        <option value="" disabled selected>Select a time</option>
                        <?php 
                        // Generate time slots dynamically with AM/PM
                        $hours = [7, 8, 9, 10, 11, 12, 1, 2, 3, 4, 5, 6]; // 12-hour format
                        $minutes = ['00', '30']; // Half-hour intervals
                        $ampm = ['AM', 'PM'];

                        // Loop through hours, minutes, and AM/PM to create time slots
                        foreach ($ampm as $period) {
                            foreach ($hours as $hour) {
                                foreach ($minutes as $minute) {
                                    $slot = "$hour:$minute $period";
                                    echo "<option value='$slot'>$slot</option>";
                                }
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>

            <!-- Upload Image or Video -->
            <div class="mb-4">
                <label for="files" class="block text-gray-700 font-bold mb-2">Upload Image or Video (optional)</label>
                <input 
                    type="file" 
                    id="files" 
                    name="files[]" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    multiple>
            </div>

            <!-- Program -->
            <div class="mb-4">
                <label for="program" class="block text-gray-700 font-bold mb-2">Program</label>
                <select 
                    id="program" 
                    name="program" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    required>
                    <option value="">Select Program</option>
                    <option value="bpa">Bachelor of Performing Arts</option>
                    <option value="bpubad">Bachelor of Public Administration</option>
                    <option value="bsbio">Bachelor of Science in Biology</option>
                    <option value="bsenv">Bachelor of Science in Environmental Science</option>
                    <option value="bsess">Bachelor of Science in Exercise Sports and Sciences</option>
                    <option value="bsmath">Bachelor of Science in Mathematics</option>
                    <option value="bssw">Bachelor of Science in Social Work</option>
                </select>
            </div>

            <!-- Additional Notes -->
            <div class="mb-4">
                <label for="notes" class="block text-gray-700 font-bold mb-2">Additional Notes</label>
                <textarea 
                    id="notes" 
                    name="notes" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter any additional notes" 
                    rows="5"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit" class="relative inline-block px-8 py-3 font-bold text-white bg-gradient-to-r from-green-400 to-green-600 rounded-full shadow-lg hover:from-green-500 hover:to-green-700 focus:ring-4 focus:ring-green-300 focus:ring-opacity-50 active:scale-95 transition-all duration-300 ease-in-out">
                    <span class="absolute inset-0 w-full h-full bg-white opacity-0 rounded-full blur-md transform scale-110 transition-opacity duration-300 hover:opacity-10"></span>
                    <span class="relative">Schedule Meeting</span>
                </button>

                <!-- Cancel Button -->
                <a href="{{ route('dashboard') }}" class="relative inline-block px-8 py-3 font-bold text-white bg-gradient-to-r from-gray-400 to-gray-600 rounded-full shadow-lg hover:from-gray-500 hover:to-gray-700 focus:ring-4 focus:ring-gray-300 focus:ring-opacity-50 active:scale-95 transition-all duration-300 ease-in-out">
                    <span class="absolute inset-0 w-full h-full bg-white opacity-0 rounded-full blur-md transform scale-110 transition-opacity duration-300 hover:opacity-10"></span>
                    <span class="relative">Cancel</span>
                </a>
            </div>
        </form>
    </div>
</body>
</html>

