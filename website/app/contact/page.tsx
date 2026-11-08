import type { Metadata } from "next";
import { Clock, Mail, MapPin } from "lucide-react";

import { PageHero } from "@/components/sections/page-hero";
import { CtaSection } from "@/components/sections/cta-section";
import { ContactForm } from "@/components/contact/contact-form";
import {
  InstagramIcon,
  TelegramIcon,
  WhatsAppIcon,
} from "@/components/icons";

export const metadata: Metadata = {
  title: "تماس",
  description:
    "راه‌های ارتباطی با مریم قابل: ایمیل، واتساپ، اینستاگرام و تلگرام. ساعات کاری و فرم تماس ساده برای ارسال پیام مستقیم.",
};

/**
 * Contact page — channels, form, working hours, and a map placeholder.
 */
export default function ContactPage() {
  return (
    <>
      <PageHero
        eyebrow="تماس"
        title="راه‌های ارتباطی"
        description="هر کدام از این راه‌ها راحت‌تر است؛ انتخاب با تو. ساعات کاری و فرم تماس هم همین‌جا زیر دستت است."
      />

      {/* Contact channels */}
      <section
        aria-labelledby="channels-heading"
        className="py-16 sm:py-20 lg:py-24"
      >
        <div className="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <h2 id="channels-heading" className="sr-only">
            کانال‌های ارتباطی
          </h2>

          <div className="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
            {CHANNELS.map((ch) => (
              <a
                key={ch.label}
                href={ch.href}
                target={ch.href.startsWith("http") ? "_blank" : undefined}
                rel={
                  ch.href.startsWith("http")
                    ? "noopener noreferrer"
                    : undefined
                }
                className="group flex flex-col gap-4 rounded-2xl border border-border bg-background p-6 transition-all duration-300 hover:-translate-y-1 hover:border-gold/40 hover:shadow-lg"
              >
                <span className="flex size-12 items-center justify-center rounded-xl bg-navy text-gold transition-colors group-hover:bg-gold group-hover:text-navy">
                  {ch.icon}
                </span>
                <div className="flex flex-col gap-1">
                  <span className="text-xs font-medium uppercase tracking-[0.18em] text-gold-dark">
                    {ch.label}
                  </span>
                  <span
                    dir={ch.ltr ? "ltr" : undefined}
                    className="text-sm font-medium text-navy"
                  >
                    {ch.value}
                  </span>
                </div>
                <p className="mt-auto text-xs leading-6 text-soft-black/60">
                  {ch.note}
                </p>
              </a>
            ))}
          </div>
        </div>
      </section>

      {/* Form + side panel */}
      <section
        aria-labelledby="form-heading"
        className="bg-beige-light/50 py-16 sm:py-20 lg:py-24"
      >
        <div className="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <div className="grid gap-8 lg:grid-cols-[1.4fr_1fr] lg:gap-10">
            {/* Form */}
            <div className="rounded-3xl border border-border bg-background p-6 shadow-sm sm:p-8 lg:p-10">
              <div className="mb-8 flex flex-col gap-2">
                <span className="inline-flex w-fit items-center gap-2 rounded-full bg-gold/10 px-3 py-1 text-xs font-medium text-gold-dark">
                  فرم تماس
                </span>
                <h2
                  id="form-heading"
                  className="font-bold text-2xl text-navy sm:text-3xl"
                >
                  پیامت را بفرست
                </h2>
                <p className="text-sm leading-7 text-soft-black/70">
                  برای پرسش‌های کوتاه یا هماهنگی اولیه. برای رزرو جلسه لطفاً از
                  صفحه{" "}
                  <a
                    href="/booking"
                    className="font-medium text-gold-dark underline-offset-4 hover:underline"
                  >
                    رزرو جلسه
                  </a>{" "}
                  استفاده کن.
                </p>
              </div>

              <ContactForm />
            </div>

            {/* Side panel — working hours + map placeholder */}
            <div className="flex flex-col gap-6">
              {/* Working hours */}
              <div className="rounded-3xl border border-border bg-background p-6 sm:p-7">
                <div className="mb-5 flex items-center gap-3">
                  <span className="flex size-10 items-center justify-center rounded-xl bg-navy text-gold">
                    <Clock className="size-5" aria-hidden="true" />
                  </span>
                  <h3 className="font-bold text-lg text-navy">ساعات کاری</h3>
                </div>
                <ul className="flex flex-col gap-3">
                  {WORKING_HOURS.map((day) => (
                    <li
                      key={day.label}
                      className="flex items-center justify-between border-b border-border/70 pb-3 text-sm last:border-0 last:pb-0"
                    >
                      <span className="text-soft-black/75">{day.label}</span>
                      <span
                        className={
                          day.closed
                            ? "text-xs text-muted-foreground"
                            : "font-medium text-navy"
                        }
                      >
                        {day.hours}
                      </span>
                    </li>
                  ))}
                </ul>
              </div>

              {/* Map placeholder */}
              <div className="relative overflow-hidden rounded-3xl border border-border bg-navy text-beige">
                <div
                  aria-hidden="true"
                  className="absolute inset-0 opacity-25"
                  style={{
                    backgroundImage:
                      "linear-gradient(rgba(232,220,200,0.6) 1px, transparent 1px), linear-gradient(90deg, rgba(232,220,200,0.6) 1px, transparent 1px)",
                    backgroundSize: "40px 40px",
                  }}
                />
                <div
                  aria-hidden="true"
                  className="pointer-events-none absolute -right-16 -top-12 h-48 w-48 rounded-full bg-gold/15 blur-3xl"
                />
                <div className="relative flex h-64 flex-col items-center justify-center gap-4 p-6 text-center">
                  <span className="flex size-14 items-center justify-center rounded-full bg-gold text-navy shadow-lg">
                    <MapPin className="size-7" aria-hidden="true" />
                  </span>
                  <div className="flex flex-col gap-1">
                    <p className="font-bold text-base text-beige">
                      جلسات آنلاین
                    </p>
                    <p className="text-xs leading-6 text-beige/70">
                      تمام جلسات به‌صورت آنلاین برگزار می‌شوند؛ مکان فیزیکی
                      نداریم. اگر ترجیح داری حضوری باشی، در تماس اولیه هماهنگ
                      می‌کنیم.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <CtaSection
        title="اگر هنوز در شکی، یک تماس کوتاه می‌تواند کمک کند"
        description="تماس اولیه ۱۵ دقیقه‌ای رایگان است. فقط برای اینکه ببینی آیا این مسیر برای تو درست است."
        buttonLabel="رزرو تماس اولیه"
      />
    </>
  );
}

/* -------------------------------------------------------------------------- */
/*                                Data                                        */
/* -------------------------------------------------------------------------- */

const CHANNELS = [
  {
    label: "ایمیل",
    value: "info@maryamghabel.ir",
    note: "بهترین راه برای سؤال‌های تفصیلی",
    href: "mailto:info@maryamghabel.ir",
    ltr: true,
    icon: <Mail className="size-6" aria-hidden="true" />,
  },
  {
    label: "واتساپ",
    value: "+98 912 345 6789",
    note: "سریع‌ترین راه برای پاسخ کوتاه",
    href: "https://wa.me/989123456789",
    ltr: true,
    icon: <WhatsAppIcon className="size-6" />,
  },
  {
    label: "اینستاگرام",
    value: "@maryam.ghabel",
    note: "محتوای روزانه و پست‌های روان‌شناختی",
    href: "https://instagram.com/maryam.ghabel",
    ltr: true,
    icon: <InstagramIcon className="size-6" />,
  },
  {
    label: "تلگرام",
    value: "@maryam_ghabel",
    note: "کانال و پیام مستقیم",
    href: "https://t.me/maryam_ghabel",
    ltr: true,
    icon: <TelegramIcon className="size-6" />,
  },
] as const;

const WORKING_HOURS = [
  { label: "شنبه تا دوشنبه", hours: "۹ تا ۱۸", closed: false },
  { label: "سه‌شنبه", hours: "۹ تا ۱۴", closed: false },
  { label: "چهارشنبه", hours: "۹ تا ۱۸", closed: false },
  { label: "پنجشنبه", hours: "۹ تا ۱۳", closed: false },
  { label: "جمعه", hours: "تعطیل", closed: true },
] as const;
