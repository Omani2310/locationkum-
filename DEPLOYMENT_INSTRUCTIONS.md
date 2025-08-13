# تعليمات النشر على Hostinger

## 🚀 نظرة عامة
هذا الملف يحتوي على تعليمات مفصلة لنشر مشروع لوكيشنكم على Hostinger.

## 📦 1. رفع الملفات
- ارفع جميع محتويات مجلد `deployment` إلى المجلد الجذر للموقع على Hostinger
- تأكد من أن `public_html` هو المجلد العام (Document Root)
- تأكد من أن جميع الملفات تم رفعها بشكل صحيح

## 🗄️ 2. إعداد قاعدة البيانات
قم بتشغيل الأوامر التالية في Terminal على Hostinger:

```bash
cd /path/to/your/project
composer install --no-dev --optimize-autoloader
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 🔐 3. إعداد الصلاحيات
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

## 🧪 4. اختبار الموقع
- تأكد من عمل الصفحة الرئيسية: `https://locationkum.net`
- تأكد من عمل صفحة تسجيل الدخول: `https://locationkum.net/login`
- تأكد من عمل لوحة التحكم: `https://locationkum.net/dashboard`

## ⚠️ ملاحظات مهمة
- تأكد من أن PHP 8.2+ مثبت على الخادم
- تأكد من تفعيل MySQL extension
- تأكد من تفعيل mod_rewrite في Apache
- تأكد من أن قاعدة البيانات تعمل بشكل صحيح

## 🔧 معلومات قاعدة البيانات
- **اسم قاعدة البيانات**: `u231669320_db`
- **اسم المستخدم**: `u231669320_us`
- **كلمة المرور**: `!#Oman2310`
- **المضيف**: `localhost`
- **المنفذ**: `3306`

## 📱 بيانات تسجيل الدخول
- **البريد الإلكتروني**: `admin@locationkum.net`
- **كلمة المرور**: `123`

## 🆘 في حالة وجود مشاكل
1. تحقق من سجلات الأخطاء في `storage/logs/`
2. تأكد من صحة إعدادات `.env`
3. تأكد من عمل قاعدة البيانات
4. تحقق من صلاحيات المجلدات

## 📞 الدعم
للمساعدة، يمكنك التواصل عبر:
- **واتساب**: 76888879
- **البريد الإلكتروني**: care@locationkum.net
