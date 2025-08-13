# 🚀 لوكيشنكم للشحن والتوصيل

نظام إدارة متكامل لشركة لوكيشنكم للشحن والتوصيل، مبني باستخدام Laravel و Tailwind CSS.

## ✨ المميزات

- 🎨 **تصميم تفاعلي**: واجهة مستخدم حديثة وجذابة
- 📱 **متجاوب**: يعمل على جميع الأجهزة
- 🔐 **نظام تسجيل دخول**: آمن ومحمي
- 📊 **لوحة تحكم**: إحصائيات وتقارير شاملة
- 🌐 **دعم اللغة العربية**: واجهة باللغة العربية بالكامل
- ⚡ **أداء عالي**: محسن للسرعة والأداء

## 🛠️ التقنيات المستخدمة

- **Backend**: Laravel 11
- **Frontend**: Tailwind CSS, JavaScript
- **Database**: MySQL
- **Build Tool**: Vite
- **Icons**: Font Awesome

## 🚀 النشر التلقائي

تم إعداد GitHub Actions للنشر التلقائي على Hostinger:

### 📋 متطلبات النشر
- PHP 8.2+
- MySQL 5.7+
- Composer
- Node.js 18+

### 🔄 كيفية النشر
1. **تحديث الكود**: عند عمل push إلى فرع `main`
2. **بناء تلقائي**: GitHub Actions يقوم ببناء المشروع
3. **حزمة النشر**: يتم إنشاء `locationkum-deployment.zip`
4. **تحميل الحزمة**: من تبويب Actions في المستودع
5. **رفع على Hostinger**: فك الضغط في مجلد `public_html`

### 📦 ملفات النشر
- `locationkum-deployment.zip` - حزمة النشر الكاملة
- `DEPLOYMENT_INSTRUCTIONS.md` - تعليمات مفصلة للنشر

## 🏃‍♂️ التشغيل المحلي

### 1. تثبيت المتطلبات
```bash
composer install
npm install
```

### 2. إعداد البيئة
```bash
cp .env.example .env
php artisan key:generate
```

### 3. إعداد قاعدة البيانات
```bash
php artisan migrate
php artisan db:seed
```

### 4. بناء الأصول
```bash
npm run build
```

### 5. تشغيل الخادم
```bash
php artisan serve
```

## 🔑 بيانات تسجيل الدخول

- **البريد الإلكتروني**: `admin@locationkum.net`
- **كلمة المرور**: `123`

## 📁 هيكل المشروع

```
Locationkum.net/
├── app/                    # منطق التطبيق
├── config/                 # ملفات الإعدادات
├── database/               # قاعدة البيانات والـ Seeders
├── public_html/            # المجلد العام (Document Root)
├── resources/              # الموارد (CSS, JS, Views)
├── routes/                 # مسارات التطبيق
├── storage/                # الملفات المؤقتة
└── .github/workflows/      # GitHub Actions
```

## 🌐 الروابط

- **الموقع**: https://locationkum.net
- **لوحة التحكم**: https://locationkum.net/dashboard
- **تسجيل الدخول**: https://locationkum.net/login

## 📞 الدعم

للمساعدة والدعم:
- **واتساب**: 76888879
- **البريد الإلكتروني**: care@locationkum.net

## 📄 الترخيص

هذا المشروع مملوك لشركة لوكيشنكم للشحن والتوصيل.

---

**تم التطوير بواسطة فريق لوكيشنكم** 🚀
