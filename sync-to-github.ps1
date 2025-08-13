# مزامنة لوكيشنكم مع GitHub
# PowerShell Script

param(
    [string]$CommitMessage = ""
)

# تعيين ترميز UTF-8
[Console]::OutputEncoding = [System.Text.Encoding]::UTF8

# دالة لعرض رسائل ملونة
function Write-ColorOutput {
    param(
        [string]$Message,
        [string]$Color = "White"
    )
    Write-Host $Message -ForegroundColor $Color
}

# دالة لعرض العنوان
function Show-Header {
    Clear-Host
    Write-ColorOutput "========================================" "Cyan"
    Write-ColorOutput "    مزامنة لوكيشنكم مع GitHub" "Yellow"
    Write-ColorOutput "========================================" "Cyan"
    Write-Host ""
}

# دالة للتحقق من Git
function Test-GitInstallation {
    try {
        $gitVersion = git --version 2>$null
        if ($LASTEXITCODE -eq 0) {
            Write-ColorOutput "✅ Git مثبت: $gitVersion" "Green"
            return $true
        }
    }
    catch {
        Write-ColorOutput "❌ Git غير مثبت على النظام" "Red"
        Write-ColorOutput "يرجى تثبيت Git من: https://git-scm.com/" "Yellow"
        return $false
    }
    return $false
}

# دالة للتحقق من المستودع
function Test-GitRepository {
    if (-not (Test-Path ".git")) {
        Write-ColorOutput "❌ هذا المجلد ليس مستودع Git" "Red"
        Write-ColorOutput "يرجى التأكد من أنك في المجلد الصحيح" "Yellow"
        return $false
    }
    
    Write-ColorOutput "✅ مستودع Git موجود" "Green"
    return $true
}

# دالة لعرض حالة المستودع
function Show-RepositoryStatus {
    Write-ColorOutput "📊 حالة المستودع الحالية:" "Cyan"
    $status = git status --porcelain 2>$null
    if ($status) {
        Write-Host $status
    } else {
        Write-ColorOutput "   لا توجد تغييرات" "Gray"
    }
    Write-Host ""
}

# دالة لعرض التغييرات
function Show-Changes {
    Write-ColorOutput "📝 التغييرات المضافة:" "Cyan"
    $changes = git diff --cached --name-status 2>$null
    if ($changes) {
        Write-Host $changes
    }
    Write-Host ""
}

# دالة لعمل commit
function New-GitCommit {
    param([string]$Message)
    
    Write-ColorOutput "🔒 عمل commit..." "Yellow"
    git commit -m $Message 2>$null
    
    if ($LASTEXITCODE -eq 0) {
        Write-ColorOutput "✅ تم عمل commit بنجاح" "Green"
        return $true
    } else {
        Write-ColorOutput "❌ فشل في عمل commit" "Red"
        return $false
    }
}

# دالة لرفع التغييرات
function Push-ToGitHub {
    Write-ColorOutput "🚀 رفع التغييرات إلى GitHub..." "Yellow"
    git push origin main 2>$null
    
    if ($LASTEXITCODE -eq 0) {
        Write-ColorOutput "✅ تم رفع التغييرات بنجاح" "Green"
        return $true
    } else {
        Write-ColorOutput "❌ فشل في رفع التغييرات" "Red"
        Write-ColorOutput "🔍 محاولة حل المشكلة..." "Yellow"
        
        # محاولة pull أولاً
        Write-ColorOutput "📥 جاري سحب التحديثات من GitHub..." "Yellow"
        git pull origin main 2>$null
        
        if ($LASTEXITCODE -eq 0) {
            Write-ColorOutput "✅ تم سحب التحديثات بنجاح" "Green"
            
            # محاولة push مرة أخرى
            Write-ColorOutput "🚀 محاولة رفع التغييرات مرة أخرى..." "Yellow"
            git push origin main 2>$null
            
            if ($LASTEXITCODE -eq 0) {
                Write-ColorOutput "✅ تم رفع التغييرات بنجاح" "Green"
                return $true
            }
        }
        
        Write-ColorOutput "❌ فشل في رفع التغييرات" "Red"
        Write-ColorOutput "💡 حلول مقترحة:" "Yellow"
        Write-ColorOutput "1. تأكد من اتصال الإنترنت" "White"
        Write-ColorOutput "2. تأكد من صحة بيانات GitHub" "White"
        Write-ColorOutput "3. تأكد من وجود صلاحيات الكتابة" "White"
        return $false
    }
}

# دالة لعرض آخر commits
function Show-LastCommits {
    Write-ColorOutput "📚 آخر 5 commits:" "Cyan"
    $commits = git log --oneline -5 2>$null
    if ($commits) {
        Write-Host $commits
    }
    Write-Host ""
}

# دالة لعرض النصائح
function Show-Tips {
    Write-ColorOutput "💡 نصائح:" "Yellow"
    Write-ColorOutput "- يمكنك تشغيل هذا الملف في أي وقت للمزامنة" "White"
    Write-ColorOutput "- تأكد من وجود اتصال بالإنترنت" "White"
    Write-ColorOutput "- تأكد من صحة بيانات GitHub" "White"
    Write-ColorOutput "- يمكنك تمرير رسالة commit كمعامل" "White"
    Write-ColorOutput "  مثال: .\sync-to-github.ps1 'تحديث جديد'" "Gray"
    Write-Host ""
}

# دالة رئيسية للمزامنة
function Start-Sync {
    Show-Header
    
    # التحقق من Git
    if (-not (Test-GitInstallation)) {
        Read-Host "اضغط Enter للخروج"
        return
    }
    
    # التحقق من المستودع
    if (-not (Test-GitRepository)) {
        Read-Host "اضغط Enter للخروج"
        return
    }
    
    Write-Host ""
    Write-ColorOutput "========================================" "Cyan"
    Write-ColorOutput "           بدء المزامنة" "Yellow"
    Write-ColorOutput "========================================" "Cyan"
    Write-Host ""
    
    # عرض حالة المستودع
    Show-RepositoryStatus
    
    # إضافة جميع التغييرات
    Write-ColorOutput "🔄 إضافة التغييرات..." "Yellow"
    git add . 2>$null
    
    # التحقق من وجود تغييرات
    $hasChanges = git diff --cached --quiet 2>$null
    if ($LASTEXITCODE -ne 0) {
        Write-ColorOutput "✅ تم العثور على تغييرات جديدة" "Green"
        
        # عرض التغييرات
        Show-Changes
        
        # إدخال رسالة commit
        if (-not $CommitMessage) {
            $CommitMessage = Read-Host "💬 أدخل رسالة الـ commit (أو اضغط Enter للرسالة الافتراضية)"
        }
        
        if (-not $CommitMessage) {
            $CommitMessage = "تحديث تلقائي: $(Get-Date -Format 'yyyy/MM/dd HH:mm:ss')"
        }
        
        # عمل commit
        if (New-GitCommit -Message $CommitMessage) {
            # رفع التغييرات
            if (Push-ToGitHub) {
                # عرض حالة المستودع بعد المزامنة
                Write-ColorOutput "📊 حالة المستودع بعد المزامنة:" "Cyan"
                git status 2>$null
                Write-Host ""
                Write-ColorOutput "🎉 تمت المزامنة بنجاح!" "Green"
            }
        }
    } else {
        Write-ColorOutput "ℹ️ لا توجد تغييرات جديدة للمزامنة" "Blue"
    }
    
    Write-Host ""
    Write-ColorOutput "========================================" "Cyan"
    Write-ColorOutput "           انتهت المزامنة" "Yellow"
    Write-ColorOutput "========================================" "Cyan"
    Write-Host ""
    
    # عرض آخر commits
    Show-LastCommits
    
    # عرض النصائح
    Show-Tips
}

# تشغيل المزامنة
try {
    Start-Sync
}
catch {
    Write-ColorOutput "❌ حدث خطأ أثناء المزامنة: $($_.Exception.Message)" "Red"
}
finally {
    Read-Host "اضغط Enter للخروج"
}
