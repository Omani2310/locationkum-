<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - لوكيشنكم للشحن والتوصيل</title>
    
    <!-- خط Tajawal -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <link href="/css/style.css" rel="stylesheet">
    
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
            gap: 1rem;
            color: white;
            text-decoration: none;
        }
        
        .logo-icon {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        
        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
        }
        
        .back-btn {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .back-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }
        
        /* Main Content */
        .main-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
            z-index: 10;
        }
        
        .login-container {
            max-width: 450px;
            width: 100%;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 3rem 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 1s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Login Header */
        .login-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }
        
        .login-icon {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        .login-title {
            font-size: 2rem;
            font-weight: 700;
            color: white;
            margin-bottom: 0.5rem;
        }
        
        .login-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1rem;
        }
        
        /* Form */
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            color: white;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }
        
        .form-input {
            width: 100%;
            padding: 1rem 1.5rem;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }
        
        .form-input:focus {
            outline: none;
            border-color: rgba(255, 255, 255, 0.5);
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        
        .password-container {
            position: relative;
        }
        
        .password-toggle {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: rgba(255, 255, 255, 0.6);
            cursor: pointer;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }
        
        .password-toggle:hover {
            color: white;
        }
        
        .password-input {
            padding-right: 3rem;
        }
        
        /* Submit Button */
        .submit-btn {
            width: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 15px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
            margin-top: 1rem;
        }
        
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
        }
        
        .submit-btn:active {
            transform: translateY(-1px);
        }
        
        /* Footer */
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding: 1rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .login-container {
                margin: 1rem;
                padding: 2rem 1.5rem;
            }
            
            .login-title {
                font-size: 1.8rem;
            }
            
            .nav-container {
                padding: 0 1rem;
            }
        }
        
        @media (max-width: 480px) {gdfgfdfgdg
            .login-container {
                padding: 2rem 1rem;
            }
            
            .login-title {
                font-size: 1.5rem;
            }
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