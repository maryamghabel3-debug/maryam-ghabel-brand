import type { Metadata } from "next";
import {
  Calendar,
  Clock,
  PhoneCall,
  Sparkles,
  Wallet,
} from "lucide-react";

import { PageHero } from "@/components/sections/page-hero";
import { BookingForm } from "@/components/booking/booking-form";

export const metadata: Metadata = {
  title: "رزرو جلسه",
  description:
    "رزرو جلسه روان‌درمانی آنلاین با مریم قابل. جلسه ۵۰ دقیقه‌ای، تماس اولیه ۱۵ دقیقه‌ای رایگان. فرآیند ساده: پر کردن فرم، تماس تأییدی و رزرو نهایی.",
};

/**
 * Booking page — info box (gold border) + front-end-only form.
 */
export default function BookingPage() {
  return (
    <>
      <PageHero
        eyebrow="رزرو جلسه"
        title="یک قدم تا اولین جلسه"
        description="فرم زیر را پر کن. حداکثر تا ۲۴ ساعت آینده، برای هماهنگی تماس اولیه با شما تماس می‌گیرم."
      />

      {/* Important info box */}
      <section
        aria-labelledby="info-heading"
        className="py-12 sm:py-16"
      >
        <div className="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
          <div className="relative overflow-hidden rounded-3xl border-2 border-gold/60 bg-beige-light/60 p-6 sm:p-8 lg:p-10">
            <div
              aria-hidden="true"
              className="pointer-events-none absolute -left-20 -top-20 h-56 w-56 rounded-full bg-gold/15 blur-3xl"
            />
            <div className="relative flex flex-col gap-6">
              <div className="flex items-center gap-3">
                <span className="flex size-10 items-center justify-center rounded-xl bg-gold/15 text-gold-dark">
                  <Sparkles className="size-5" aria-hidden="true" />
                </span>
                <h2
                  id="info-heading"
                  className="font-bold text-xl text-navy sm:text-2xl"
                >
                  قبل از پر کردن فرم، این موارد را بدان
                </h2>
              </div>

              <ul className="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                {INFO_ITEMS.map((item) => (
                  <li
                    key={item.label}
                    className="flex flex-col gap-2 rounded-2xl bg-background/80 p-4 ring-1 ring-gold/15"
                  >
                    <span className="flex size-9 items-center justify-center rounded-lg bg-navy text-gold">
                      <item.icon className="size-4" aria-hidden="true" />
                    </span>
                    <span className="text-xs font-medium text-gold-dark">
                      {item.label}
                    </span>
                    <span className="text-sm leading-7 text-soft-black/80">
                      {item.value}
                    </span>
                  </li>
                ))}
              </ul>

              {/* Process flow */}
              <div className="mt-2 rounded-2xl bg-background/60 p-5 ring-1 ring-gold/15">
                <p className="mb-4 text-xs font-medium uppercase tracking-[0.18em] text-gold-dark">
                  فرآیند رزرو
                </p>
                <ol className="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                  {PROCESS.map((step, idx) => (
                    <li
                      key={step.title}
                      className="flex flex-1 items-start gap-3 sm:flex-col sm:items-start sm:gap-2"
                    >
                      <span className="flex size-7 shrink-0 items-center justify-center rounded-full bg-navy text-xs font-bold text-gold">
                        {PROCESS_NUMBERS[idx]}
                      </span>
                      <div className="flex flex-col gap-0.5">
                        <span className="text-sm font-medium text-navy">
                          {step.title}
                        </span>
                        <span className="text-xs leading-6 text-soft-black/65">
                          {step.description}
                        </span>
                      </div>
                    </li>
                  ))}
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Booking form */}
      <section
        aria-labelledby="form-heading"
        className="pb-16 sm:pb-20 lg:pb-24"
      >
        <div className="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
          <div className="rounded-3xl border border-border bg-background p-6 shadow-sm sm:p-8 lg:p-10">
            <div className="mb-8 flex flex-col gap-2">
              <span className="inline-flex w-fit items-center gap-2 rounded-full bg-gold/10 px-3 py-1 text-xs font-medium text-gold-dark">
                فرم رزرو
              </span>
              <h2
                id="form-heading"
                className="font-bold text-2xl text-navy sm:text-3xl"
              >
                یک درخواست اولیه ثبت کن
              </h2>
              <p className="text-sm leading-7 text-soft-black/70">
                فیلدهای ستاره‌دار الزامی‌اند. پر کردن دقیق این فرم، کمک می‌کند
                جلسه اول را هوشمندانه‌تر شروع کنیم.
              </p>
            </div>

            <BookingForm />
          </div>
        </div>
      </section>
    </>
  );
}

/* -------------------------------------------------------------------------- */
/*                                Data                                        */
/* -------------------------------------------------------------------------- */

const INFO_ITEMS = [
  {
    label: "قالب جلسه",
    value: "جلسه آنلاین، ۵۰ دقیقه‌ای",
    icon: Clock,
  },
  {
    label: "تعرفه",
    value: "۱,۰۰۰,۰۰۰ تا ۱,۵۰۰,۰۰۰ تومان",
    icon: Wallet,
  },
  {
    label: "تماس اولیه",
    value: "۱۵ دقیقه‌ای، رایگان",
    icon: PhoneCall,
  },
  {
    label: "زمان پاسخ",
    value: "حداکثر ۲۴ ساعت",
    icon: Calendar,
  },
] as const;

const PROCESS = [
  {
    title: "پر کردن فرم",
    description: "اطلاعات اولیه و موضوع مورد نظرت را ثبت کن.",
  },
  {
    title: "تماس تأییدی",
    description: "تماس ۱۵ دقیقه‌ای رایگان برای آشنایی و تعیین مسیر.",
  },
  {
    title: "رزرو نهایی",
    description: "هماهنگی زمان جلسه و پرداخت آنلاین.",
  },
] as const;

const PROCESS_NUMBERS = ["۱", "۲", "۳"] as const;
