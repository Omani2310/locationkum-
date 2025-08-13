<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - لوكيشنكم للشحن والتوصيل</title>
    
    <!-- خط Tajawal -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
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
        <nav class="nav-container">
            <a href="/" class="logo">
                <div class="logo-icon">
                    <svg class="w-6 h-6" fill="none" stroke="#667eea" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <span class="logo-text">لوكيشنكم</span>
            </a>
            <a href="/" class="back-btn">العودة للرئيسية</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-container">
        <div class="login-container">
            <!-- Login Header -->
            <div class="login-header">
                <div class="login-icon">
                    <svg class="w-8 h-8" fill="none" stroke="#667eea" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h1 class="login-title">تسجيل الدخول</h1>
                <p class="login-subtitle">أدخل بياناتك للوصول للنظام</p>
            </div>

            <!-- Login Form -->
            <form method="POST" action="/login" id="loginForm">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">البريد الإلكتروني</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="أدخل بريدك الإلكتروني" required>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">كلمة المرور</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" class="form-input password-input" placeholder="أدخل كلمة المرور" required>
                        <button type="button" class="password-toggle" onclick="togglePassword()">
                            👁️
                        </button>
                    </div>
                </div>

                <button type="submit" class="submit-btn">تسجيل الدخول</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 لوكيشنكم للشحن والتوصيل. جميع الحقوق محفوظة.</p>
    </footer>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleBtn = document.querySelector('.password-toggle');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleBtn.textContent = '🙈';
            } else {
                passwordInput.type = 'password';
                toggleBtn.textContent = '👁️';
            }
        }
        
        // Handle form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Check admin credentials
            if (email === 'admin@locationkum.net' && password === '123') {
                // Redirect to dashboard
                window.location.href = '/dashboard';
            } else {
                alert('بيانات تسجيل الدخول غير صحيحة');
            }
        });
    </script>
</body>
</html> 