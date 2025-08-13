<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'لوكيشنكم للشحن والتوصيل')</title>
    
    <!-- خط Tajawal -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <link href="/css/style.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Tajawal', sans-serif;
            direction: rtl;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            position: relative;
            overflow-x: hidden;
        }
        
        /* Animated Background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        
        .bg-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 20s infinite linear;
        }
        
        .bg-shape:nth-child(1) {
            width: 300px;
            height: 300px;
            top: -150px;
            left: -150px;
            animation-delay: 0s;
        }
        
        .bg-shape:nth-child(2) {
            width: 200px;
            height: 200px;
            top: 50%;
            right: -100px;
            animation-delay: -5s;
        }
        
        .bg-shape:nth-child(3) {
            width: 150px;
            height: 150px;
            bottom: -75px;
            left: 50%;
            animation-delay: -10s;
        }
        
        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
            100% { transform: translateY(0px) rotate(360deg); }
        }
        
        /* Header */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 1rem 0;
        }
        
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .logo-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 0.75rem;
        }
        
        .back-btn {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .back-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }
        
        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 80px;
            right: 0;
            width: 280px;
            height: calc(100vh - 80px);
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-left: 1px solid rgba(255, 255, 255, 0.2);
            z-index: 999;
            padding: 2rem 0;
            overflow-y: auto;
            transition: all 0.3s ease;
        }
        
        .sidebar-header {
            padding: 0 2rem 2rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 2rem;
        }
        
        .sidebar-title {
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .sidebar-subtitle {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }
        
        .sidebar-menu {
            padding: 0 1rem;
        }
        
        .menu-section {
            margin-bottom: 2rem;
        }
        
        .menu-title {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1rem;
            padding: 0 1rem;
        }
        
        .menu-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            color: white;
            text-decoration: none;
            border-radius: 15px;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .menu-item:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(-5px);
        }
        
        .menu-item.active {
            background: rgba(255, 255, 255, 0.3);
            border-right: 3px solid white;
        }
        
        .menu-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 1rem;
            font-size: 1.1rem;
        }
        
        .menu-text {
            flex: 1;
            font-weight: 500;
        }
        
        .menu-badge {
            background: rgba(255, 255, 255, 0.3);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        /* Main Content */
        .main-content {
            margin-right: 280px;
            padding: 2rem;
            min-height: calc(100vh - 80px);
            margin-top: 80px;
            padding-bottom: 100px;
        }
        
        .content-header {
            margin-bottom: 2rem;
        }
        
        .page-title {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .page-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
        }
        
        .content-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 2rem;
        }
        
        /* Footer */
        .footer {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding: 1rem 2rem;
            margin-right: 280px;
            margin-top: 2rem;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }
        
        /* Responsive Design */
        @media (max-width: 1024px) {
            .sidebar {
                transform: translateX(100%);
                top: 80px;
            }
            
            .sidebar.open {
                transform: translateX(0);
            }
            
            .main-content {
                margin-right: 0;
            }
            
            .footer {
                margin-right: 0;
            }
            
            .sidebar-toggle {
                display: block;
            }
        }
        
        .sidebar-toggle {
            display: none;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            padding: 0.5rem;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.2rem;
        }
        
        /* User Menu */
        .user-menu {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .user-btn {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .user-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }
        
        .logout-btn {
            background: rgba(239, 68, 68, 0.2);
            color: #fca5a5;
            border-color: rgba(239, 68, 68, 0.3);
        }
        
        .logout-btn:hover {
            background: rgba(239, 68, 68, 0.3);
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="animated-bg">
        <div class="bg-shape"></div>
        <div class="bg-shape"></div>
        <div class="bg-shape"></div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="nav-container">
            <div class="flex items-center">
                <button class="sidebar-toggle" onclick="toggleSidebar()">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="/" class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <span>لوكيشنكم</span>
                </a>
            </div>
            <div class="user-menu">
                <button class="user-btn">
                    <i class="fas fa-user-circle mr-2"></i>
                    المدير
                </button>
                <button class="logout-btn" onclick="logout()">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    تسجيل الخروج
                </button>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h2 class="sidebar-title">لوحة التحكم</h2>
            <p class="sidebar-subtitle">مرحباً بك في النظام</p>
        </div>
        
        <nav class="sidebar-menu">
            <div class="menu-section">
                <h3 class="menu-title">الرئيسية</h3>
                <a href="/dashboard" class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
                    <div class="menu-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <span class="menu-text">لوحة التحكم</span>
                </a>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <div class="content-header">
            <h1 class="page-title">@yield('page-title', 'لوحة التحكم')</h1>
            <p class="page-subtitle">@yield('page-subtitle', 'مرحباً بك في لوحة التحكم')</p>
        </div>
        
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div>
                <p>&copy; 2025 لوكيشنكم للشحن والتوصيل. جميع الحقوق محفوظة.</p>
            </div>
            <div>
                <span>الإصدار 1.0.0</span>
            </div>
        </div>
    </footer>

    <script>
        // Toggle sidebar on mobile
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('open');
        }
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(e) {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.querySelector('.sidebar-toggle');
            
            if (window.innerWidth <= 1024) {
                if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
                    sidebar.classList.remove('open');
                }
            }
        });
        
        // Add active class to current menu item
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const menuItems = document.querySelectorAll('.menu-item');
            
            menuItems.forEach(item => {
                const href = item.getAttribute('href');
                if (href === currentPath) {
                    item.classList.add('active');
                }
            });
        });
        
        // Logout function
        function logout() {
            if (confirm('هل أنت متأكد من تسجيل الخروج؟')) {
                window.location.href = '/login';
            }
        }
    </script>
</body>
</html> 