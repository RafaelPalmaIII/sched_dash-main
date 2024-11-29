<!-- sidebar.php -->
<div id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <h3>Admin</h3>
    </div>
    <ul class="list-unstyled components">
        <li><a href="{{ route('admin.AdminDashboard') }}">Dashboard</a></li>  
        <li><a href="department.php">Schedule</a></li>
        <li><a href="course.php">Announcements</a></li>
        <li><a href="{{ route('admin.users.index') }}">Staff</a></li>
    </ul>
    
    <form method="POST" action="{{ route('logout') }}" class="logout-form">
        @csrf
        <button type="submit" class="logout-btn">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
        </button>
    </form>
</div>

<div id="sidebar-trigger"></div>

<style>
    .sidebar {
        min-width: 280px;
        max-width: 280px;
        min-height: 100vh;
        background: rgba( 0, 0, 0, 0.25 );
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(6.5px);
        -webkit-backdrop-filter: blur(6.5px);
        border-radius: 0 10px 10px 0;
        border: 1px solid rgba(255, 255, 255, 0.18);
        color: #2c3e50;
        transition: all 0.3s ease-in-out;
        position: fixed;
        top: 0;
        left: -280px;
        z-index: 9999;
        padding: 20px 0;
        display: flex;
        flex-direction: column;
    }

    .sidebar.active {
        left: 0;
        transform: translateX(0);
    }

    .sidebar .sidebar-header {
        padding: 20px 25px;
        margin-bottom: 20px;
    }

    .sidebar .sidebar-header h3 {
        margin: 0;
        font-size: 1.8em;
        font-weight: 700;
        letter-spacing: 2px;
        color: #2c3e50;
    }

    .sidebar ul.components {
        padding: 0;
        list-style: none;
        flex-grow: 1;
    }

    .sidebar ul li {
        padding: 0 15px;
        margin-bottom: 5px;
    }

    .sidebar ul li a {
        padding: 12px 20px;
        font-size: 1.1em;
        display: block;
        color: #2c3e50;
        text-decoration: none;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .sidebar ul li a:hover {
        background: rgba(255, 255, 255, 0.4);
        color: #1a252f;
        transform: translateX(5px);
    }

    .sidebar ul li.active > a {
        background: rgba(255, 255, 255, 0.5);
        color: #1a252f;
    }

    .logout-form {
        padding: 15px;
        margin-top: auto;
    }

    .logout-btn {
        width: 100%;
        padding: 12px ;
        background: rgba(255, 255, 255, 0.3);
        border: 1px solid rgba(255, 255, 255, 0.18);
        border-radius: 8px;
        color: #2c3e50;
        font-size: 1.1em;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .logout-btn:hover {
        background: rgba(255, 255, 255, 0.5);
        transform: translateX(5px);
    }

    #sidebar-trigger {
        position: fixed;
        top: 0;
        left: 0;
        width: 20px;
        height: 100vh;
        z-index: 9998;
    }

    @media (max-width: 768px) {
        .sidebar {
            min-width: 250px;
            max-width: 250px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const sidebarTrigger = document.getElementById('sidebar-trigger');

        sidebarTrigger.addEventListener('mouseenter', function() {
            sidebar.classList.add('active');
        });

        sidebar.addEventListener('mouseleave', function() {
            sidebar.classList.remove('active');
        });
    });
</script>