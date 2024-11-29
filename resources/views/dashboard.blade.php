<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    @include('layouts\Usersidebar') 
    
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="px-4 py-6 mx-auto max-w-7xl">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-semibold text-gray-800">Dashboard</h2>
                <div class="text-gray-600">
                    <div id="currentTime" class="text-lg font-medium"></div>
                    <div id="currentDate" class="text-md font-medium"></div>
                </div>
            </div>
        </div>
    </header>

<!-- Button to Navigate to Request Form -->
    <div class="mt-4 mb-6">
        <a href="{{ route('request_form') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
            <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Request Form
        </a>
    </div>

    <!-- Main Content -->
    <main class="px-4 py-8 mx-auto max-w-7xl">
        <div class="grid gap-6 md:grid-cols-2">
        <div class="bg-white rounded-lg shadow-sm">
    <div class="p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-semibold text-gray-900">Schedules</h3>
        </div>
        <div class="space-y-4">

            <!-- Schedule Item 1 -->
            <div class="flex items-center gap-4">
                <div class="flex flex-col items-center min-w-[60px] bg-green-100 rounded-lg p-2">
                    <span class="text-sm font-medium text-green-600">DEC</span>
                    <span class="text-2xl font-bold text-green-600">09</span>
                </div>
                <div class="flex-1 p-4 border rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h4 class="font-medium text-gray-900">Team Meeting</h4>
                            <p class="text-sm text-gray-500">10:00 AM - 11:00 AM</p>
                        </div>
                        <span class="px-3 py-1 text-xs font-medium text-blue-600 bg-blue-100 rounded-full">
                            Upcoming
                        </span>
                    </div>
                </div>
            </div>

            <!-- Schedule Item 2 -->
            <div class="flex items-center gap-4">
                <div class="flex flex-col items-center min-w-[60px] bg-green-100 rounded-lg p-2">
                    <span class="text-sm font-medium text-green-600">DEC</span>
                    <span class="text-2xl font-bold text-green-600">09</span>
                </div>
                <div class="flex-1 p-4 border rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h4 class="font-medium text-gray-900">Project Review</h4>
                            <p class="text-sm text-gray-500">2:00 PM - 3:30 PM</p>
                        </div>
                        <span class="px-3 py-1 text-xs font-medium text-green-600 bg-green-100 rounded-full">
                            Confirmed
                        </span>
                    </div>
                </div>
            </div>

            <!-- Schedule Item 3 -->
            <div class="flex items-center gap-4">
                <div class="flex flex-col items-center min-w-[60px] bg-green-100 rounded-lg p-2">
                    <span class="text-sm font-medium text-green-600">DEC</span>
                    <span class="text-2xl font-bold text-green-600">10</span>
                </div>
                <div class="flex-1 p-4 border rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h4 class="font-medium text-gray-900">Team Meeting</h4>
                            <p class="text-sm text-gray-500">10:00 AM - 11:00 AM</p>
                        </div>
                        <span class="px-3 py-1 text-xs font-medium text-blue-600 bg-blue-100 rounded-full">
                            Upcoming
                        </span>
                    </div>
                </div>
            </div>

            <!-- Schedule Item 4 -->
            <div class="flex items-center gap-4">
                <div class="flex flex-col items-center min-w-[60px] bg-green-100 rounded-lg p-2">
                    <span class="text-sm font-medium text-green-600">DEC</span>
                    <span class="text-2xl font-bold text-green-600">11</span>
                </div>
                <div class="flex-1 p-4 border rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h4 class="font-medium text-gray-900">Team Meeting</h4>
                            <p class="text-sm text-gray-500">10:00 AM - 11:00 AM</p>
                        </div>
                        <span class="px-3 py-1 text-xs font-medium text-blue-600 bg-blue-100 rounded-full">
                            Upcoming
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- Announcements Container -->
            <div class="bg-white rounded-lg shadow-sm">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-gray-900">Announcements</h3>
                        
                    </div>
                    <div class="relative h-96"> <!-- Increased height to accommodate media -->
                        <!-- Announcement Slideshow -->
                        <div class="announcement-slideshow">
                            <!-- Announcement 1 -->
                            <div class="announcement-slide bg-white rounded-lg border border-gray-100">
                                <div class="aspect-w-16 aspect-h-9 mb-4">
                                    <img src="/api/placeholder/800/400" alt="" class="w-full h-48 bg-green-100 object-cover rounded-t-lg"/>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                            </svg>
                                        </div>
                                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">All Colleges</span>
                                        <span class="text-xs text-gray-500">Posted: Oct 23, 2024</span>
                                    </div>
                                    <h4 class="font-medium text-gray-900 mb-2">Library Hours Update</h4>
                                    <p class="text-sm text-gray-600">The library will have extended hours during the final examination period.</p>
                                </div>
                            </div>

                            <!-- Announcement 2 -->
                            <div class="announcement-slide bg-white rounded-lg border border-gray-100 hidden">
                                <div class="aspect-w-16 aspect-h-9 mb-4">
                                    <img src="/api/placeholder/800/400" alt="" class="w-full h-48 bg-green-100 object-cover rounded-t-lg"/>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                            <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                            </svg>
                                        </div>
                                        <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded">Important</span>
                                        <span class="text-xs text-gray-500">Posted: Oct 24, 2024</span>
                                    </div>
                                    <h4 class="font-medium text-gray-900 mb-2">Campus Network Maintenance</h4>
                                    <p class="text-sm text-gray-600">Scheduled network maintenance this Saturday.</p>
                                </div>
                            </div>

                            <!-- Announcement 3 -->
                            <div class="announcement-slide bg-white rounded-lg border border-gray-100 hidden">
                                <div class="aspect-w-16 aspect-h-9 mb-4">
                                    <img src="/api/placeholder/800/400" alt="" class="w-full h-48  object-cover bg-green-100 rounded-t-lg"/>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                                            </svg>
                                        </div>
                                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Event</span>
                                        <span class="text-xs text-gray-500">Posted: Oct 25, 2024</span>
                                    </div>
                                    <h4 class="font-medium text-gray-900 mb-2">Campus Career Fair</h4>
                                    <p class="text-sm text-gray-600">Join us for the annual Career Fair on November 15th.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation Dots -->
                        <div class="absolute bottom-2 left-0 right-0 flex justify-center gap-2">
                            <button class="w-2 h-2 rounded-full bg-blue-600" onclick="showSlide(0)"></button>
                            <button class="w-2 h-2 rounded-full bg-gray-300" onclick="showSlide(1)"></button>
                            <button class="w-2 h-2 rounded-full bg-gray-300" onclick="showSlide(2)"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script>
        // Date and Time Update
        function updateDateTime() {
            const now = new Date();
            
            // Update Time
            const timeElement = document.getElementById('currentTime');
            timeElement.textContent = now.toLocaleTimeString('en-US', { 
                hour: '2-digit', 
                minute: '2-digit'
            });
            
            // Update Date
            const dateElement = document.getElementById('currentDate');
            dateElement.textContent = now.toLocaleDateString('en-US', { 
                weekday: 'long',
                year: 'numeric', 
                month: 'long', 
                day: 'numeric'
            });
        }

        // Update immediately and then every second
        updateDateTime();
        setInterval(updateDateTime, 1000);

        // Slideshow functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.announcement-slide');
        const dots = document.querySelectorAll('.bottom-2 button');

        function showSlide(n) {
            slides.forEach(slide => slide.classList.add('hidden'));
            dots.forEach(dot => dot.classList.replace('bg-blue-600', 'bg-gray-300'));
            
            slides[n].classList.remove('hidden');
            dots[n].classList.replace('bg-gray-300', 'bg-blue-600');
            currentSlide = n;
        }

        function nextSlide() {
            let next = currentSlide + 1;
            if (next >= slides.length) {
                next = 0;
            }
            showSlide(next);
        }

        // Auto advance slides every 5 seconds
        setInterval(nextSlide, 5000);

        // Add slide animations
        slides.forEach(slide => {
            slide.style.transition = 'opacity 0.5s ease-in-out';
        });

        // Add fade effect
        const slideStyles = document.createElement('style');
        slideStyles.textContent = `
            .announcement-slide {
                opacity: 0;
                transition: opacity 0.5s ease-in-out;
            }
            .announcement-slide:not(.hidden) {
                opacity: 1;
            }
            .announcement-slide.hidden {
                display: none;
            }
        `;
        document.head.appendChild(slideStyles);  
    </script>
    
</body>
</html>

        
