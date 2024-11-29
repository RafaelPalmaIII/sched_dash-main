<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New User</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --primary-light: #e0e7ff;
            --success: #22c55e;
            --danger: #ef4444;
            --background: #f8fafc;
            --surface: #ffffff;
            --text: #0f172a;
            --text-light: #64748b;
            --border: #e2e8f0;
            --focus-ring: #e0e7ff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', system-ui, sans-serif;
        }

        body {
            background-color: var(--background);
            color: var(--text);
            line-height: 1.5;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .header {
            margin-bottom: 2rem;
            text-align: center;
        }

        .header h1 {
            font-size: 1.75rem;
            font-weight: 600;
            color: var(--text);
            margin-bottom: 0.5rem;
        }

        .card {
            background-color: var(--surface);
            border-radius: 1rem;
            box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1);
            overflow: hidden;
        }

        .card-body {
            padding: 1rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group.full-width {
            grid-column: span 2;
        }

        @media (max-width: 768px) {
            .form-group.full-width {
                grid-column: span 1;
            }
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text);
            margin-bottom: 0.5rem;
        }

        .form-label.required::after {
            content: "*";
            color: var(--danger);
            margin-left: 0.25rem;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            font-size: 0.875rem;
            line-height: 1.25rem;
            color: var(--text);
            background-color: var(--surface);
            border: 1px solid var(--border);
            border-radius: 0.5rem;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px var(--focus-ring);
        }

        .input-group {
            position: relative;
        }

        .input-group .form-control {
            padding-right: 3rem;
        }

        .input-group-append {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            display: flex;
            align-items: center;
            padding: 0 1rem;
        }

        .btn-toggle-password {
            background: none;
            border: none;
            color: var(--text-light);
            cursor: pointer;
            padding: 0.25rem;
        }

        .btn-toggle-password:hover {
            color: var(--text);
        }

        .file-input-wrapper {
            position: relative;
        }

        .file-input {
            width: 100%;
            padding: 0.75rem 1rem;
            font-size: 0.875rem;
            color: var(--text-light);
            background-color: var(--surface);
            border: 1px solid var(--border);
            border-radius: 0.5rem;
            cursor: pointer;
        }

        .file-input::-webkit-file-upload-button {
            padding: 0.5rem 1rem;
            margin-right: 1rem;
            background-color: var(--primary-light);
            color: var(--primary);
            border: none;
            border-radius: 0.375rem;
            font-weight: 500;
            cursor: pointer;
        }

        .error-message {
            color: var(--danger);
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-radius: 0.5rem;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-primary {
            background-color: #347928;
            color: white;
        }

        .btn-primary:hover {
            background-color: transparent;
            color: black;
        }

        .form-footer {
            margin-top: 2rem;
            display: flex;
            justify-content: flex-start;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 0.3s ease forwards;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Create New User</h1>
            <p class="text-light">Add a brand new user to be part of this site</p>
        </div>

        <div class="card fade-in">
            <div class="card-body">
                <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-grid">
                        <!-- Username -->
                        <div class="form-group full-width">
                            <label for="username" class="form-label required">Username</label>
                            <input type="text" 
                                   name="username" 
                                   id="username" 
                                   class="form-control"
                                   placeholder="User name must be program name"
                                   required
                                   value="{{ old('username') }}">
                            @error('username')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- First Name -->
                        <div class="form-group">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" 
                                   name="first_name" 
                                   id="first_name" 
                                   class="form-control"
                                   value="{{ old('first_name') }}">
                            @error('first_name')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Middle Name -->
                        <div class="form-group">
                            <label for="middle_name" class="form-label">Middle Name</label>
                            <input type="text" 
                                   name="middle_name" 
                                   id="middle_name" 
                                   class="form-control"
                                   value="{{ old('middle_name') }}">
                            @error('middle_name')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Last Name -->
                        <div class="form-group">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" 
                                   name="last_name" 
                                   id="last_name" 
                                   class="form-control"
                                   value="{{ old('last_name') }}">
                            @error('last_name')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" 
                                   name="email" 
                                   id="email" 
                                   class="form-control"
                                   value="{{ old('email') }}">
                            @error('email')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" 
                                       name="password" 
                                       id="password" 
                                       class="form-control">
                                <div class="input-group-append">
                                    <button type="button" 
                                            class="btn-toggle-password"
                                            onclick="togglePassword('password')">
                                        <i class="far fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            @error('password')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Role -->
                        <div class="form-group">
                            <label for="role" class="form-label">Role</label>
                            <select name="role" 
                                    id="role" 
                                    class="form-control">
                                <option value="user">User</option>
                            </select>
                            @error('role')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Signature -->
                        <div class="form-group full-width">
                            <label for="signature" class="form-label">Signature</label>
                            <div class="file-input-wrapper">
                                <input type="file" 
                                       name="signature" 
                                       id="signature" 
                                       class="file-input">
                            </div>
                            @error('signature')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-user-plus"></i>
                            Create User
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const icon = field.parentElement.querySelector('i');
            
            if (field.type === 'password') {
                field.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                field.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // Add animation when form loads
        document.addEventListener('DOMContentLoaded', function() {
            const card = document.querySelector('.card');
            card.classList.add('fade-in');
        });

        // Enhance file input
        const fileInput = document.querySelector('.file-input');
        fileInput.addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name;
            if (fileName) {
                fileInput.style.color = 'var(--text)';
            }
        });
    </script>
</body>
</html>