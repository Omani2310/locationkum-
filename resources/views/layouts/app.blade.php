<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'لوكيشنكم للشحن والتوصيل')</title>
    
    <!-- خط Tajawal -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
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