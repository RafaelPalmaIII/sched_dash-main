<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        body {
            background: #f5f5f5;
            padding: 20px;
        }

        .calendar-container {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .navigation {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .nav-button {
            background: none;
            border: none;
            padding: 8px;
            cursor: pointer;
            border-radius: 6px;
        }

        .nav-button:hover {
            background: #f5f5f5;
        }

        .title {
            font-size: 24px;
            font-weight: 600;
        }

        .subtitle {
            color: #666;
            margin-top: 4px;
        }

        .tabs {
            display: flex;
            gap: 24px;
            border-bottom: 1px solid #eee;
            margin-bottom: 24px;
        }

        .tab {
            padding: 12px 0;
            cursor: pointer;
            border-bottom: 2px solid transparent;
        }

        .tab.active {
            border-bottom-color: #000;
            font-weight: 500;
        }

        .toolbar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 24px;
        }

        .search-box {
            display: flex;
            align-items: center;
            gap: 8px;
            background: #f5f5f5;
            padding: 8px 16px;
            border-radius: 6px;
            width: 240px;
        }

        .search-input {
            border: none;
            background: none;
            outline: none;
            font-size: 14px;
        }

        .button {
            padding: 8px 16px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
        }

        .button.primary {
            background: #000;
            color: white;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 16px;
        }

        .calendar-header {
            padding: 12px;
            text-align: center;
            font-weight: 500;
            color: #666;
        }

        .calendar-cell {
            min-height: 120px;
            padding: 12px;
            border-radius: 8px;
            background: #f8f9fa;
        }

        .event {
            margin: 4px 0;
            padding: 8px;
            border-radius: 4px;
            font-size: 12px;
        }

        .event.blue {
            background: #e3f2fd;
            color: #1976d2;
        }

        .event.purple {
            background: #f3e5f5;
            color: #7b1fa2;
        }

        .event.green {
            background: #e8f5e9;
            color: #388e3c;
        }

        .avatar-group {
            display: flex;
            align-items: center;
        }

        .avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: -8px;
            border: 2px solid white;
        }
    </style>
</head>
<body>
    <div class="calendar-container">
        <div class="header">
            <div>
                <h1 class="title">Calendar</h1>
                <p class="subtitle">Stay Organized and On Track with Your Personalized Calendar</p>
            </div>
            <div class="avatar-group">
                <div class="avatar">AL</div>
                <div class="avatar">DT</div>
                <div class="avatar">+20</div>
                <button class="button">Invite</button>
            </div>
        </div>

        <div class="tabs">
            <div class="tab active">All Scheduled</div>
            <div class="tab">Events</div>
            <div class="tab">Meetings</div>
            <div class="tab">Task Reminders</div>
        </div>

        <div class="toolbar">
            <div class="search-box">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                </svg>
                <input type="text" class="search-input" placeholder="Search...">
            </div>
            <div style="display: flex; gap: 12px;">
                <button class="button">Filter</button>
                <button class="button primary">+ New</button>
            </div>
        </div>

        <div class="calendar-grid">
            <div class="calendar-header">MON 24</div>
            <div class="calendar-header">TUE 25</div>
            <div class="calendar-header">WED 26</div>
            <div class="calendar-header">THU 27</div>
            <div class="calendar-header">FRI 28</div>
            <div class="calendar-header">SAT 29</div>
            <div class="calendar-header">SUN 30</div>

            <!-- Calendar cells with sample events -->
            <div class="calendar-cell">
                <div class="event purple">Client Presentation Preparation</div>
                <div class="event blue">Client Meeting Planning</div>
                <div class="event green">Meetup with UI8 Internal Team</div>
            </div>
            <div class="calendar-cell">
                <div class="event purple">Design Revisions</div>
                <div class="event blue">Client Feedback Meeting</div>
            </div>
            <!-- Add more cells as needed -->
        </div>
    </div>

    <script>
        // Add basic interactivity
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelector('.tab.active').classList.remove('active');
                tab.classList.add('active');
            });
        });

        // Initialize current date
        const today = new Date();
        const month = today.toLocaleString('default', { month: 'long' });
        const year = today.getFullYear();
        document.querySelector('.title').textContent = `${month} ${year}`;
    </script>
</body>
</html>