@extends('layouts.app')

@section('title', 'لوحة التحكم - لوكيشنكم للشحن والتوصيل')

@section('page-title', 'لوحة التحكم')
@section('page-subtitle', 'مرحباً بك في لوحة التحكم - نظرة عامة على النظام')

@section('content')
<div class="dashboard-content">
    <!-- Stats Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-shipping-fast"></i>
            </div>
            <div class="stat-info">
                <h3>إجمالي الشحنات</h3>
                <p class="stat-number">15,847</p>
                <span class="stat-change positive">+12.5%</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-info">
                <h3>العملاء النشطين</h3>
                <p class="stat-number">3,291</p>
                <span class="stat-change positive">+8.3%</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-money-bill-wave"></i>
            </div>
            <div class="stat-info">
                <h3>الإيرادات الشهرية</h3>
                <p class="stat-number">₺2.8M</p>
                <span class="stat-change positive">+15.2%</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-chart-pie"></i>
            </div>
            <div class="stat-info">
                <h3>معدل الرضا</h3>
                <p class="stat-number">96.8%</p>
                <span class="stat-change positive">+2.1%</span>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="charts-section">
        <div class="chart-card">
            <div class="chart-header">
                <h3>إحصائيات الشحنات الشهرية</h3>
                <div class="chart-actions">
                    <button class="chart-btn active">شهري</button>
                    <button class="chart-btn">ربعي</button>
                    <button class="chart-btn">سنوي</button>
                </div>
            </div>
            <div class="chart-container">
                <canvas id="shipmentsChart"></canvas>
            </div>
        </div>

        <div class="chart-card">
            <div class="chart-header">
                <h3>توزيع الإيرادات</h3>
            </div>
            <div class="chart-container">
                <canvas id="revenueChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Recent Activity & Quick Actions -->
    <div class="activity-actions-section">
        <div class="activity-card">
            <div class="card-header">
                <h3>النشاطات الأخيرة</h3>
                <a href="/logs" class="view-all">عرض الكل</a>
            </div>
            <div class="activity-list">
                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="activity-content">
                        <h4>تم تسليم شحنة جديدة</h4>
                        <p>شحنة رقم #LK-2025-001 تم تسليمها بنجاح</p>
                        <span class="activity-time">منذ 5 دقائق</span>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="activity-content">
                        <h4>عميل جديد مسجل</h4>
                        <p>تم تسجيل عميل جديد في نظام CRM</p>
                        <span class="activity-time">منذ 15 دقيقة</span>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <div class="activity-content">
                        <h4>فاتورة جديدة</h4>
                        <p>تم إنشاء فاتورة جديدة في نظام المحاسبة</p>
                        <span class="activity-time">منذ 30 دقيقة</span>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="activity-content">
                        <h4>تقرير شهري</h4>
                        <p>تم إنشاء التقرير الشهري للإدارة</p>
                        <span class="activity-time">منذ ساعة</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="quick-actions-card">
            <div class="card-header">
                <h3>الإجراءات السريعة</h3>
            </div>
            <div class="actions-grid">
                <a href="/operations" class="action-item">
                    <div class="action-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <span>نظام العمليات</span>
                </a>

                <a href="/crm" class="action-item">
                    <div class="action-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <span>نظام المبيعات</span>
                </a>

                <a href="/accounting" class="action-item">
                    <div class="action-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <span>نظام المحاسبة</span>
                </a>

                <a href="/management" class="action-item">
                    <div class="action-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <span>نظام الإدارة</span>
                </a>

                <a href="/users" class="action-item">
                    <div class="action-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <span>إدارة المستخدمين</span>
                </a>

                <a href="/reports" class="action-item">
                    <div class="action-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <span>التقارير</span>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
/* Dashboard Styles */
.dashboard-content {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

/* Stats Grid */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.stat-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border-radius: 20px;
    padding: 2rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
    display: flex;
    align-items: center;
    gap: 1.5rem;
    transition: all 0.3s ease;
    cursor: pointer;
}

.stat-card:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

.stat-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    color: white;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
}

.stat-info {
    flex: 1;
}

.stat-info h3 {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
    font-weight: 500;
}

.stat-number {
    color: white;
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.stat-change {
    font-size: 0.8rem;
    font-weight: 600;
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
}

.stat-change.positive {
    color: #10b981;
    background: rgba(16, 185, 129, 0.1);
}

/* Charts Section */
.charts-section {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 2rem;
    margin-bottom: 2rem;
}

.chart-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border-radius: 20px;
    padding: 2rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.chart-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
}

.chart-header h3 {
    color: white;
    font-size: 1.3rem;
    font-weight: 600;
}

.chart-actions {
    display: flex;
    gap: 0.5rem;
}

.chart-btn {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.7);
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 0.5rem 1rem;
    border-radius: 15px;
    font-size: 0.9rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.chart-btn.active,
.chart-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    color: white;
}

.chart-container {
    height: 300px;
    position: relative;
}

/* Activity & Actions Section */
.activity-actions-section {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 2rem;
}

.activity-card,
.quick-actions-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border-radius: 20px;
    padding: 2rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
}

.card-header h3 {
    color: white;
    font-size: 1.3rem;
    font-weight: 600;
}

.view-all {
    color: rgba(255, 255, 255, 0.7);
    text-decoration: none;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.view-all:hover {
    color: white;
}

/* Activity List */
.activity-list {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.activity-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 15px;
    transition: all 0.3s ease;
    cursor: pointer;
}

.activity-item:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateX(-5px);
}

.activity-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: white;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.activity-content {
    flex: 1;
}

.activity-content h4 {
    color: white;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.activity-content p {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
}

.activity-time {
    color: rgba(255, 255, 255, 0.5);
    font-size: 0.8rem;
    background: rgba(255, 255, 255, 0.1);
    padding: 0.25rem 0.75rem;
    border-radius: 10px;
}

/* Quick Actions */
.actions-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}

.action-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 15px;
    text-decoration: none;
    color: white;
    transition: all 0.3s ease;
    cursor: pointer;
}

.action-item:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-5px);
}

.action-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: white;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
}

.action-item span {
    font-size: 0.9rem;
    font-weight: 500;
    text-align: center;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .charts-section {
        grid-template-columns: 1fr;
    }
    
    .activity-actions-section {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .actions-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Initialize charts when page loads
document.addEventListener('DOMContentLoaded', function() {
    // Shipments Chart
    const shipmentsCtx = document.getElementById('shipmentsChart').getContext('2d');
    const shipmentsChart = new Chart(shipmentsCtx, {
        type: 'line',
        data: {
            labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو'],
            datasets: [{
                label: 'الشحنات',
                data: [1200, 1350, 1100, 1500, 1800, 1600],
                borderColor: '#667eea',
                backgroundColor: 'rgba(102, 126, 234, 0.1)',
                borderWidth: 3,
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                x: {
                    ticks: {
                        color: 'rgba(255, 255, 255, 0.7)'
                    },
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    }
                },
                y: {
                    ticks: {
                        color: 'rgba(255, 255, 255, 0.7)'
                    },
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    }
                }
            }
        }
    });

    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    const revenueChart = new Chart(revenueCtx, {
        type: 'doughnut',
        data: {
            labels: ['العمليات', 'المبيعات', 'المحاسبة', 'الإدارة'],
            datasets: [{
                data: [35, 30, 20, 15],
                backgroundColor: [
                    '#667eea',
                    '#764ba2',
                    '#f093fb',
                    '#f5576c'
                ],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        color: 'rgba(255, 255, 255, 0.7)',
                        padding: 20
                    }
                }
            }
        }
    });

    // Animate stats numbers
    const statNumbers = document.querySelectorAll('.stat-number');
    statNumbers.forEach(stat => {
        const finalValue = parseInt(stat.textContent.replace(/[^\d]/g, ''));
        const startValue = 0;
        const duration = 2000;
        const startTime = Date.now();
        
        function updateValue() {
            const currentTime = Date.now();
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            const currentValue = startValue + (finalValue - startValue) * progress;
            stat.textContent = Math.round(currentValue).toLocaleString();
            
            if (progress < 1) {
                requestAnimationFrame(updateValue);
            }
        }
        
        updateValue();
    });
});
</script>
@endsection 