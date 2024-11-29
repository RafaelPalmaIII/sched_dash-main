<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .gradient-background {
            background: linear-gradient(135deg, #0ea5e9 0%, #1d4ed8 100%);
        }
        
        .admin-card {
            backdrop-filter: blur(16px);
            background: rgba(255, 255, 255, 0.95);
        }

        .custom-input {
            transition: all 0.2s ease;
        }

        .custom-input:focus {
            box-shadow: 0 0 0 3px rgba(37,99,235,0.2);
            border-color: #2563eb;
        }

        .submit-button {
            transition: all 0.2s ease;
        }

        .submit-button:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 
                       0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .back-link {
            transition: all 0.2s ease;
        }

        .back-link:hover {
            color: #1d4ed8;
        }

        .checkbox-custom {
            border-radius: 4px;
            transition: all 0.2s ease;
        }

        .checkbox-custom:checked {
            background-color: #2563eb;
            border-color: #2563eb;
        }
    </style>
</head>
<body class="gradient-background min-h-screen">
    <div class="min-h-screen flex flex-col justify-center items-center p-4">
        <div class="w-full max-w-md">
            <!-- Admin Badge -->
            <div class="flex justify-center mb-4">
                <div class="bg-blue-100 text-blue-800 px-4 py-1 rounded-full text-sm font-semibold tracking-wide">
                    Administrative Access
                </div>
            </div>

            <!-- Main Card -->
            <div class="admin-card rounded-2xl shadow-xl p-8">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Admin Login</h2>
                    <p class="text-gray-600 text-sm">Secure authentication required</p>
                </div>

                @if ($errors->any())
                <div class="mb-6">
                    <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                @foreach ($errors->all() as $error)
                                    <p class="text-sm text-red-600">{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <form method="POST" action="{{ route('admin.login') }}" class="space-y-6">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address
                        </label>
                        <input type="email" 
                               name="email" 
                               id="email"
                               value="{{ old('email') }}"
                               class="custom-input block w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none bg-gray-50"
                               placeholder=""
                               required 
                               autofocus>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Password
                        </label>
                        <input type="password" 
                               name="password" 
                               id="password"
                               class="custom-input block w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none bg-gray-50"
                               placeholder=""
                               required>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" 
                                   name="remember" 
                                   class="checkbox-custom h-4 w-4 border border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-600">Remember this device</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                            class="submit-button w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-lg focus:outline-none">
                        Sign in to Admin Panel
                    </button>

                    <!-- Back Link -->
                    <div class="text-center mt-6">
                        <a href="{{ route('login') }}" 
                           class="back-link inline-flex items-center text-sm text-gray-600 hover:text-gray-900">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Return to main login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>