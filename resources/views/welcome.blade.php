<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوكيشنكم للشحن والتوصيل - تحت الصيانة</title>
    
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
        
        .login-btn {
            background: white;
            color: #667eea;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
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
        
        .content-wrapper {
            max-width: 900px;
            width: 100%;
            text-align: center;
        }
        
        /* Hero Section */
        .hero-section {
            margin-bottom: 3rem;
            animation: fadeInUp 1s ease-out;
        }
        
        .main-icon {
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 50%;
            margin: 0 auto 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .main-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 1rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out 0.2s both;
        }
        
        .subtitle {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 0.5rem;
            animation: fadeInUp 1s ease-out 0.4s both;
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
        
        /* Countdown Section */
        .countdown-section {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 3rem 2rem;
            margin: 2rem 0;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 1s ease-out 0.6s both;
        }
        
        .countdown-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            margin-bottom: 2rem;
        }
        
        .countdown-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .countdown-item {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            padding: 1.5rem 1rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .countdown-number {
            display: block;
            font-size: 2.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        .countdown-label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        .progress-bar {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            height: 8px;
            overflow: hidden;
            margin-top: 1rem;
        }
        
        .progress-fill {
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
            height: 100%;
            width: 65%;
            border-radius: 10px;
            animation: progress 3s ease-in-out infinite;
        }
        
        @keyframes progress {
            0%, 100% { width: 65%; }
            50% { width: 75%; }
        }
        
        /* Contact Section */
        .contact-section {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem 0;
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: fadeInUp 1s ease-out 0.8s both;
        }
        
        .contact-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1.5rem;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }
        
        .contact-info {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
        }
        
        .contact-info strong {
            color: white;
        }
        
        /* Login Button */
        .login-section {
            animation: fadeInUp 1s ease-out 1s both;
        }
        
        .main-login-btn {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1.2rem 3rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
            border: 2px solid rgba(255, 255, 255, 0.2);
        }
        
        .main-login-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.5);
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
            .main-title {
                font-size: 2.5rem;
            }
            
            .countdown-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }
            
            .countdown-number {
                font-size: 2rem;
            }
            
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .nav-container {
                padding: 0 1rem;
            }
            
            .main-container {
                padding: 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .main-title {
                font-size: 2rem;
            }
            
            .countdown-grid {
                grid-template-columns: 1fr;
            }
            
            .countdown-section {
                padding: 2rem 1rem;
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
            <a href="/login" class="login-btn">دخول</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-container">
        <div class="content-wrapper">
            <!-- Hero Section -->
            <section class="hero-section">
                <div class="main-icon">
                    <svg class="w-12 h-12 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <h1 class="main-title">لوكيشنكم للشحن والتوصيل</h1>
                <p class="subtitle">نعتذر، الموقع تحت الصيانة حالياً</p>
                <p class="subtitle">نحن نعمل على تحديث النظام لخدمتكم بشكل أفضل</p>
            </section>

            <!-- Countdown Section -->
            <section class="countdown-section">
                <h2 class="countdown-title">تاريخ العودة المتوقع: 1/9/2025</h2>
                <div class="countdown-grid">
                    <div class="countdown-item">
                        <span class="countdown-number" id="days">00</span>
                        <span class="countdown-label">يوم</span>
                    </div>
                    <div class="countdown-item">
                        <span class="countdown-number" id="hours">00</span>
                        <span class="countdown-label">ساعة</span>
                    </div>
                    <div class="countdown-item">
                        <span class="countdown-number" id="minutes">00</span>
                        <span class="countdown-label">دقيقة</span>
                    </div>
                    <div class="countdown-item">
                        <span class="countdown-number" id="seconds">00</span>
                        <span class="countdown-label">ثانية</span>
                    </div>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="contact-section">
                <h3 class="contact-title">للتواصل معنا</h3>
                <div class="contact-grid">
                    <div class="contact-item">
                        <div class="contact-icon">📱</div>
                        <div class="contact-info">
                            <div>واتساب</div>
                            <strong>76888879</strong>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📧</div>
                        <div class="contact-info">
                            <div>البريد الإلكتروني</div>
                            <strong>care@locationkum.net</strong>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 لوكيشنكم للشحن والتوصيل. جميع الحقوق محفوظة.</p>
    </footer>

    <script>
        // Countdown Timer
        function updateCountdown() {
            const targetDate = new Date('September 1, 2025 00:00:00').getTime();
            const now = new Date().getTime();
            const distance = targetDate - now;
            
            if (distance > 0) {
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                document.getElementById('days').textContent = days.toString().padStart(2, '0');
                document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
                document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
                document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
            } else {
                document.getElementById('days').textContent = '00';
                document.getElementById('hours').textContent = '00';
                document.getElementById('minutes').textContent = '00';
                document.getElementById('seconds').textContent = '00';
            }
        }
        
        // Update countdown every second
        setInterval(updateCountdown, 1000);
        updateCountdown();
    </script>
    </body>
</html>
