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
        
        <form action="process_meeting.php" method="POST">
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
                    <select 
                        id="meeting_room" 
                        name="meeting_room" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        required>
                        <option value="Meeting Room 1">Meeting Room 1</option>
                        <option value="Meeting Room 2">Meeting Room 2</option>
                        <option value="Meeting Room 3">Meeting Room 3</option>
                    </select>
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


            <!-- Participants -->
            <div class="mb-4">
                <label for="participants_email" class="block text-gray-700 font-bold mb-2">Participants</label>
                <div class="flex space-x-2">
                    <input 
                        type="email" 
                        id="participants_email" 
                        name="participants_email[]" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                        placeholder="Enter participant email" 
                        required>
                    <button 
                        type="button" 
                        id="add_email" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        +
                    </button>
                </div>
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
                <button 
                    type="submit" 
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Schedule Meeting
                </button>
                <a href="{{ route('dashboard') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Cancel
                </a>
            </div>
        </form>
    </div>
    </main>
</body>
</html>
