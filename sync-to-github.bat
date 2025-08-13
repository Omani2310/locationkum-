@echo off
chcp 65001 >nul
title مزامنة لوكيشنكم مع GitHub

echo.
echo ========================================
echo    مزامنة لوكيشنكم مع GitHub
echo ========================================
echo.

:: التحقق من وجود Git
git --version >nul 2>&1
if errorlevel 1 (
    echo ❌ Git غير مثبت على النظام
    echo يرجى تثبيت Git من: https://git-scm.com/
    pause
    exit /b 1
)

:: التحقق من وجود المستودع
if not exist ".git" (
    echo ❌ هذا المجلد ليس مستودع Git
    echo يرجى التأكد من أنك في المجلد الصحيح
    pause
    exit /b 1
)

echo ✅ Git مثبت ومستودع موجود
echo.

:: عرض حالة المستودع
echo 📊 حالة المستودع الحالية:
git status --porcelain

echo.
echo ========================================
echo           بدء المزامنة
echo ========================================
echo.

:: إضافة جميع التغييرات
echo 🔄 إضافة التغييرات...
git add .

:: التحقق من وجود تغييرات
git diff --cached --quiet
if errorlevel 1 (
    echo ✅ تم العثور على تغييرات جديدة
    
    :: عرض التغييرات
    echo.
    echo 📝 التغييرات المضافة:
    git diff --cached --name-status
    
    echo.
    echo 💬 إدخال رسالة الـ commit...
    set /p commit_msg="أدخل رسالة الـ commit (أو اضغط Enter للرسالة الافتراضية): "
    
    if "%commit_msg%"=="" (
        set commit_msg="تحديث تلقائي: %date% %time%"
    )
    
    :: عمل commit
    echo.
    echo 🔒 عمل commit...
    git commit -m "%commit_msg%"
    
    if errorlevel 1 (
        echo ❌ فشل في عمل commit
        pause
        exit /b 1
    )
    
    echo ✅ تم عمل commit بنجاح
    
    :: رفع التغييرات
    echo.
    echo 🚀 رفع التغييرات إلى GitHub...
    git push origin main
    
    if errorlevel 1 (
        echo ❌ فشل في رفع التغييرات
        echo.
        echo 🔍 محاولة حل المشكلة...
        
        :: محاولة pull أولاً
        echo.
        echo 📥 جاري سحب التحديثات من GitHub...
        git pull origin main
        
        if errorlevel 1 (
            echo ❌ فشل في سحب التحديثات
            echo.
            echo 💡 حلول مقترحة:
            echo 1. تأكد من اتصال الإنترنت
            echo 2. تأكد من صحة بيانات GitHub
            echo 3. تأكد من وجود صلاحيات الكتابة
            pause
            exit /b 1
        )
        
        echo ✅ تم سحب التحديثات بنجاح
        
        :: محاولة push مرة أخرى
        echo.
        echo 🚀 محاولة رفع التغييرات مرة أخرى...
        git push origin main
        
        if errorlevel 1 (
            echo ❌ فشل في رفع التغييرات مرة أخرى
            pause
            exit /b 1
        )
    )
    
    echo ✅ تم رفع التغييرات بنجاح
    
    :: عرض حالة المستودع بعد المزامنة
    echo.
    echo 📊 حالة المستودع بعد المزامنة:
    git status
    
    echo.
    echo 🎉 تمت المزامنة بنجاح!
    
) else (
    echo ℹ️ لا توجد تغييرات جديدة للمزامنة
)

echo.
echo ========================================
echo           انتهت المزامنة
echo ========================================
echo.

:: عرض آخر commits
echo 📚 آخر 5 commits:
git log --oneline -5

echo.
echo 💡 نصائح:
echo - يمكنك تشغيل هذا الملف في أي وقت للمزامنة
echo - تأكد من وجود اتصال بالإنترنت
echo - تأكد من صحة بيانات GitHub
echo.

pause
