@extends('layouts.app')

@section('title', 'إدارة المستخدمين - لوكيشنكم للشحن والتوصيل')

@section('page-title', 'إدارة المستخدمين')
@section('page-subtitle', 'إدارة المستخدمين والصلاحيات')

@section('content')
<div class="users-content">
    <!-- Stats Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-info">
                <h3>إجمالي المستخدمين</h3>
                <p class="stat-number">156</p>
                <span class="stat-change positive">+12</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-user-check"></i>
            </div>
            <div class="stat-info">
                <h3>المستخدمين النشطين</h3>
                <p class="stat-number">142</p>
                <span class="stat-change positive">+8</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-user-shield"></i>
            </div>
            <div class="stat-info">
                <h3>المديرين</h3>
                <p class="stat-number">8</p>
                <span class="stat-change neutral">0</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-user-clock"></i>
            </div>
            <div class="stat-info">
                <h3>المستخدمين الجدد</h3>
                <p class="stat-number">5</p>
                <span class="stat-change positive">+3</span>
            </div>
        </div>
    </div>

    <!-- Users Table -->
    <div class="content-card">
        <div class="card-header">
            <h3>قائمة المستخدمين</h3>
            <button class="add-btn">
                <i class="fas fa-plus ml-2"></i>
                إضافة مستخدم جديد
            </button>
        </div>
        
        <div class="table-container">
            <table class="users-table">
                <thead>
                    <tr>
                        <th>المستخدم</th>
                        <th>البريد الإلكتروني</th>
                        <th>الدور</th>
                        <th>الحالة</th>
                        <th>آخر تسجيل دخول</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="user-info">
                                <div class="user-avatar">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <div class="user-name">أحمد محمد</div>
                                    <div class="user-id">#001</div>
                                </div>
                            </div>
                        </td>
                        <td>ahmed@locationkum.net</td>
                        <td><span class="role-badge admin">مدير</span></td>
                        <td><span class="status-badge active">نشط</span></td>
                        <td>منذ 5 دقائق</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="user-info">
                                <div class="user-avatar">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <div class="user-name">فاطمة علي</div>
                                    <div class="user-id">#002</div>
                                </div>
                            </div>
                        </td>
                        <td>fatima@locationkum.net</td>
                        <td><span class="role-badge user">مستخدم</span></td>
                        <td><span class="status-badge active">نشط</span></td>
                        <td>منذ ساعة</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="user-info">
                                <div class="user-avatar">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <div class="user-name">محمد حسن</div>
                                    <div class="user-id">#003</div>
                                </div>
                            </div>
                        </td>
                        <td>mohamed@locationkum.net</td>
                        <td><span class="role-badge manager">مدير قسم</span></td>
                        <td><span class="status-badge inactive">غير نشط</span></td>
                        <td>منذ يومين</td>
                        <td>
                            <div class="actions">
                                <button class="action-btn edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
/* Users Content */
.users-content {
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

.stat-change.neutral {
    color: #6b7280;
    background: rgba(107, 114, 128, 0.1);
}

/* Content Card */
.content-card {
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
    font-size: 1.5rem;
    font-weight: 600;
}

.add-btn {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 15px;
    font-size: 0.9rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
    display: inline-flex;
    align-items: center;
}

.add-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
}

/* Table */
.table-container {
    overflow-x: auto;
}

.users-table {
    width: 100%;
    border-collapse: collapse;
    color: white;
}

.users-table th {
    background: rgba(255, 255, 255, 0.1);
    padding: 1rem;
    text-align: right;
    font-weight: 600;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.users-table td {
    padding: 1rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.users-table tr:hover {
    background: rgba(255, 255, 255, 0.05);
}

/* User Info */
.user-info {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.user-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1rem;
}

.user-name {
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.user-id {
    font-size: 0.8rem;
    color: rgba(255, 255, 255, 0.6);
}

/* Badges */
.role-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

.role-badge.admin {
    background: rgba(239, 68, 68, 0.2);
    color: #fca5a5;
}

.role-badge.manager {
    background: rgba(59, 130, 246, 0.2);
    color: #93c5fd;
}

.role-badge.user {
    background: rgba(16, 185, 129, 0.2);
    color: #6ee7b7;
}

.status-badge {
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

.status-badge.active {
    background: rgba(16, 185, 129, 0.2);
    color: #6ee7b7;
}

.status-badge.inactive {
    background: rgba(107, 114, 128, 0.2);
    color: #9ca3af;
}

/* Actions */
.actions {
    display: flex;
    gap: 0.5rem;
}

.action-btn {
    width: 35px;
    height: 35px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.9rem;
}

.action-btn.edit {
    background: rgba(59, 130, 246, 0.2);
    color: #93c5fd;
}

.action-btn.edit:hover {
    background: rgba(59, 130, 246, 0.3);
    transform: scale(1.1);
}

.action-btn.delete {
    background: rgba(239, 68, 68, 0.2);
    color: #fca5a5;
}

.action-btn.delete:hover {
    background: rgba(239, 68, 68, 0.3);
    transform: scale(1.1);
}

/* Responsive Design */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .card-header {
        flex-direction: column;
        gap: 1rem;
        align-items: stretch;
    }
    
    .users-table {
        font-size: 0.9rem;
    }
    
    .users-table th,
    .users-table td {
        padding: 0.75rem 0.5rem;
    }
}
</style>
@endsection 