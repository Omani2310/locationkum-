<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوكيشنكم للشحن والتوصيل - تحت الصيانة</title>
    
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
