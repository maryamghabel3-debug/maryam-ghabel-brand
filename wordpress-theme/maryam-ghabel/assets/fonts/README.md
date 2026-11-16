# راهنمای نصب فونت Vazirmatn

این پوشه برای میزبانی محلی فونت **Vazirmatn** در نظر گرفته شده است.

## روش‌های نصب

### روش ۱ — استفاده از CDN (توصیه‌شده و سریع‌تر)

قالب به‌صورت پیش‌فرض فونت Vazirmatn را از CDN jsDelivr فراخوانی می‌کند:

```
https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css
```

این روش در `functions.php` پیکربندی شده و نیازی به کار اضافی ندارد.

### روش ۲ — میزبانی محلی (آفلاین / سرعت بهتر برای کاربران ایرانی)

اگر می‌خواهید فونت را روی هاست خود نگه دارید:

1. فونت‌ها را از [مخزن رسمی Vazirmatn در GitHub](https://github.com/rastikerdar/vazirmatn) دانلود کنید (نسخه‌ی V33.003 یا جدیدتر).

2. فایل‌های زیر را در همین پوشه (`assets/fonts/`) قرار دهید:
   - `Vazirmatn-Regular.woff2`
   - `Vazirmatn-Medium.woff2`
   - `Vazirmatn-SemiBold.woff2`
   - `Vazirmatn-Bold.woff2`
   - (و سایر وزن‌های مورد نیاز)

3. فایل CSS زیر را بسازید: `assets/fonts/vazirmatn-local.css`

   ```css
   @font-face {
       font-family: 'Vazirmatn';
       src: url('Vazirmatn-Regular.woff2') format('woff2');
       font-weight: 400;
       font-display: swap;
   }
   @font-face {
       font-family: 'Vazirmatn';
       src: url('Vazirmatn-Medium.woff2') format('woff2');
       font-weight: 500;
       font-display: swap;
   }
   @font-face {
       font-family: 'Vazirmatn';
       src: url('Vazirmatn-SemiBold.woff2') format('woff2');
       font-weight: 600;
       font-display: swap;
   }
   @font-face {
       font-family: 'Vazirmatn';
       src: url('Vazirmatn-Bold.woff2') format('woff2');
       font-weight: 700;
       font-display: swap;
   }
   ```

4. در `functions.php` تابع `maryam_ghabel_scripts` را ویرایش کنید و خط مربوط به Vazirmatn CDN را جایگزین کنید:

   ```php
   wp_enqueue_style(
       'maryam-ghabel-vazirmatn',
       MARYAM_GHABEL_URI . '/assets/fonts/vazirmatn-local.css',
       array(),
       MARYAM_GHABEL_VERSION
   );
   ```

## نکات

- وزن‌های استفاده‌شده در قالب: 400، 500، 600، 700
- فرمت توصیه‌شده: WOFF2 (حجم کمتر، پشتیبانی کامل از مرورگرهای مدرن)
- برای سازگاری با مرورگرهای قدیمی، نسخه‌ی WOFF را هم اضافه کنید
- فونت Vazirmatn تحت مجوز **SIL Open Font License 1.1** است و استفاده‌ی تجاری مجاز است
- همیشه `font-display: swap` را استفاده کنید تا در حین بارگذاری فونت، متن مخفی نشود

## اعتبارسنجی

پس از نصب، در ابزارهای توسعه‌ی مرورگر (DevTools → Network → Fonts) بررسی کنید که فونت با کد 200 بارگذاری شود.
