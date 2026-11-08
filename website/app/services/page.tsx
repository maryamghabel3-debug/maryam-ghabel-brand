import type { Metadata } from "next";
import Link from "next/link";
import {
  ArrowLeft,
  Brain,
  Compass,
  Globe,
  HeartHandshake,
  Layers,
  Lightbulb,
} from "lucide-react";

import { PageHero } from "@/components/sections/page-hero";
import { CtaSection } from "@/components/sections/cta-section";

export const metadata: Metadata = {
  title: "خدمات روان‌شناختی",
  description:
    "پنج مسیر محتوایی مریم قابل: الگوهای ناخودآگاه در روابط، روان‌شناسی موفقیت و فرسودگی، درس‌های بالینی ناشناخته، بازتاب شخصی و روان‌شناسی مهاجرت — در کنار رویکرد درمانی ترکیبی.",
};

/**
 * Services page — full content catalogue of the five therapeutic
 * content pillars + an "about my approach" section + closing CTA.
 */
export default function ServicesPage() {
  return (
    <>
      <PageHero
        eyebrow="خدمات روان‌شناختی"
        title="پنج مسیر برای فهمِ عمیق‌تر خودت"
        description="این پنج مسیر، قاب محتوایی کار من است. هر مسیر یک سؤال بنیادین را دنبال می‌کند و در جلسه، بسته به آنِ تو، عمیق‌تر می‌شود."
      />

      {/* 5 content pillars */}
      <section
        aria-labelledby="pillars-heading"
        className="py-16 sm:py-20 lg:py-24"
      >
        <div className="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <h2 id="pillars-heading" className="sr-only">
            مسیرهای محتوایی
          </h2>

          <div className="flex flex-col gap-10 lg:gap-14">
            {PILLARS.map((pillar, idx) => (
              <article
                key={pillar.title}
                className="grid gap-6 rounded-3xl border border-border bg-beige-light/40 p-6 sm:p-8 lg:grid-cols-[1fr_1.4fr] lg:gap-10 lg:p-10"
              >
                {/* Heading column */}
                <div className="flex flex-col gap-4">
                  <span className="inline-flex w-fit items-center gap-2 rounded-full bg-navy px-3 py-1 text-xs font-medium text-gold">
                    {PILLAR_NUMBERS[idx]}
                  </span>
                  <span className="flex size-12 items-center justify-center rounded-xl bg-gold/15 text-gold-dark">
                    <pillar.icon className="size-6" aria-hidden="true" />
                  </span>
                  <h3 className="font-bold text-2xl leading-snug text-navy sm:text-[1.7rem]">
                    {pillar.title}
                  </h3>
                  <Link
                    href="/booking"
                    className="mt-1 inline-flex w-fit items-center gap-1.5 text-sm font-medium text-gold-dark transition-colors hover:text-gold"
                  >
                    شروع این مسیر
                    <ArrowLeft className="size-3.5" aria-hidden="true" />
                  </Link>
                </div>

                {/* Body column */}
                <div className="flex flex-col gap-6">
                  <p className="text-sm leading-8 text-soft-black/75 sm:text-base sm:leading-9">
                    {pillar.description}
                  </p>

                  <div>
                    <p className="mb-3 text-xs font-medium uppercase tracking-[0.18em] text-gold-dark">
                      مثال‌هایی از این مسیر
                    </p>
                    <ul className="grid gap-2">
                      {pillar.examples.map((ex) => (
                        <li
                          key={ex}
                          className="flex items-start gap-2.5 text-sm leading-7 text-soft-black/80"
                        >
                          <span
                            aria-hidden="true"
                            className="mt-2.5 size-1.5 shrink-0 rounded-full bg-gold"
                          />
                          {ex}
                        </li>
                      ))}
                    </ul>
                  </div>
                </div>
              </article>
            ))}
          </div>
        </div>
      </section>

      {/* My therapeutic approach */}
      <section
        aria-labelledby="approach-heading"
        className="bg-navy text-beige py-16 sm:py-20 lg:py-24"
      >
        <div className="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
          <div className="mb-10 flex flex-col items-center gap-3 text-center">
            <span className="inline-flex items-center gap-2 text-xs font-medium uppercase tracking-[0.18em] text-gold-light">
              <span aria-hidden="true" className="h-px w-8 bg-gold-light/60" />
              رویکرد درمانی من
            </span>
            <h2
              id="approach-heading"
              className="font-bold text-3xl text-beige sm:text-4xl"
            >
              ترکیب روانکاوی، طرحواره‌درمانی و CBT
            </h2>
            <p className="max-w-2xl text-sm leading-7 text-beige/70">
              هیچ مکتبی به‌تنهایی برای همه کافی نیست. من از هرکدام آن چیزی را
              می‌گیرم که در جای خودش قدرتمندترین ابزار است.
            </p>
          </div>

          <div className="grid grid-cols-1 gap-5 sm:grid-cols-3">
            {APPROACH.map((a) => (
              <div
                key={a.title}
                className="flex flex-col gap-3 rounded-2xl border border-beige/15 bg-navy-light/40 p-6"
              >
                <span className="flex size-10 items-center justify-center rounded-xl bg-gold/15 text-gold">
                  <a.icon className="size-5" aria-hidden="true" />
                </span>
                <h3 className="font-bold text-lg text-beige">{a.title}</h3>
                <p className="text-sm leading-7 text-beige/75">
                  {a.description}
                </p>
                <span className="mt-auto text-xs text-gold-light/80">
                  {a.role}
                </span>
              </div>
            ))}
          </div>

          {/* Synthesis line */}
          <p className="mx-auto mt-10 max-w-3xl text-center text-sm leading-8 text-beige/70 sm:text-base sm:leading-9">
            <span className="text-gold-light">روانکاوی</span> برای فهم ریشه‌ها،{" "}
            <span className="text-gold-light">طرحواره‌درمانی</span> برای شناسایی
            الگوها، و <span className="text-gold-light">CBT</span> برای گام‌های
            عملی روزمره — هر سه، در خدمت فهمیدن و تغییر دادن، نه فقط برچسب
            زدن.
          </p>
        </div>
      </section>

      <CtaSection
        title="می‌خوای بدونی کدوم مسیر برای تو درست‌تره؟"
        description="در یک تماس اولیه ۱۵ دقیقه‌ای رایگان، با هم نگاهی کوتاه می‌اندازیم به آنچه الان برایت مهم‌تر است و مسیر درست را پیدا می‌کنیم."
        buttonLabel="رزرو تماس اولیه"
      />
    </>
  );
}

/* -------------------------------------------------------------------------- */
/*                                Data                                        */
/* -------------------------------------------------------------------------- */

const PILLAR_NUMBERS = ["۰۱", "۰۲", "۰۳", "۰۴", "۰۵"] as const;

const PILLARS = [
  {
    title: "الگوهای ناخودآگاه در روابط",
    icon: Compass,
    description:
      "ما در روابطمان اغلب همان واکنش‌های قدیمی را تکرار می‌کنیم — واکنش‌هایی که روزی برای بقا ساخته شدیم، اما اکنون دیگر به درد ما نمی‌خورند. در این مسیر، با هم به دنبال شناسایی این الگوهای تکرارشونده، ریشه‌های ناخودآگاه آن‌ها و بازشناسی واکنش‌هایی هستیم که از جای دیگری در روان ما می‌آیند. هدف فقط «درک» نیست؛ هدف قطع دایره تکرار و ساختن پاسخی جدید است که به جای امروز، متعلق به دیروز نباشد.",
    examples: [
      "چرا همیشه جذب کسانی می‌شوم که از من دور می‌شوند؟",
      "چرا در نزدیک‌ترین روابطم خودم را گم می‌کنم؟",
      "چرا هر بار که یک رابطه جدی می‌شود، می‌ترسم؟",
    ],
  },
  {
    title: "روان‌شناسی موفقیت و فرسودگی",
    icon: Lightbulb,
    description:
      "موفقیت بیرونی و رضایت درونی، دو خط موازی‌ای هستند که گاهی هرگز به هم نمی‌رسند. خیلی از مراجعین من از بیرون موفق‌اند — شغل خوب، درآمد بالا، مسیر روشن — اما درون خسته‌اند، بی‌حس شده‌اند یا معنای کارشان را گم کرده‌اند. این مسیر درباره فهم ریشه‌های فرسودگی، بازنگری در تعریف موفقیت و پیدا کردن دوباره تماس با آن چیزی است که شاید روزی معنا داشت ولی در مسیر هول زده شده است.",
    examples: [
      "چرا وقتی به همه اهدافم رسیده‌ام، خالی‌تر از همیشه‌ام؟",
      "چرا هر موفقیت جدید، فقط چند روز طول می‌کشد؟",
      "چطور بی‌آنکه چیزی فرو بریزم، سرعت‌ام را کم کنم؟",
    ],
  },
  {
    title: "درس‌های بالینی ناشناخته",
    icon: Brain,
    description:
      "هفت سال تجربه بالینی، حرف‌هایی دارد که در کتاب‌ها نوشته نشده‌اند. این مسیر، فضایی است برای بازنویسی آن درس‌هایی که از مراجعین آموخته‌ام — با حفظ کامل محرمانگی. اینکه چرا گاهی لحظه‌ای کوچک در یک جلسه، کل مسیر درمان را تغییر می‌دهد؛ چرا گاهی مقاومتِ مراجع، در واقع راهی است که روانش می‌خواهد برود؛ و چرا گاهی تشخیص، مهم‌ترین چیزی است که باید فراموش شود تا درمان شروع شود. درس‌هایی از کنار تخت، نه از داخل کتاب.",
    examples: [
      "چرا گاهی مراجع بدتر شدن، در واقع بهتر شدن است؟",
      "مقاومت، یعنی کجا در حال محافظت از خودم است؟",
      "چرا یک نگاه کوتاه گاهی از هزار کلمه کار می‌کند؟",
    ],
  },
  {
    title: "بازتاب شخصی",
    icon: HeartHandshake,
    description:
      "بازتاب شخصی، یعنی نگاهی صادقانه و دلسوزانه به خودی که بوده‌ایم، هستیم و در حال شدنیم. این مسیر، تمرینی است برای ایستادن جلوی آینه‌ای که تصویرمان را بدون داوری نشان می‌دهد؛ برای شنیدن صدای داخلی‌ای که وسط هیاهوی روزمره گم شده؛ و برای ساختن رابطه‌ای متفاوت با احساس‌ها، خاطرات و آن قسمت‌هایی از خودمان که ترجیح می‌دهیم نبینیم. بازتاب، پیش‌نیاز هر تغییر پایدار است.",
    examples: [
      "چرا از شنیدن صدای درونم می‌ترسم؟",
      "چرا بعضی احساس‌ها را فقط در تنهایی‌ام حس می‌کنم؟",
      "چطور با بخش‌های نپذیرفته خودم دوست شوم؟",
    ],
  },
  {
    title: "روان‌شناسی مهاجرت",
    icon: Globe,
    description:
      "مهاجرت فقط جابه‌جایی جغرافیایی نیست؛ یک جابه‌جایی روانی است. تو در یک کشور جدید، اما روانت هنوز در حال گفت‌وگو با جایی است که از آن آمده‌ای. این مسیر، برای مهاجرین ایرانی است که می‌خواهند درباره هویت دوتایی، دلتنگی، احساس غریبگی در میان آشنایان، بازسازی ریشه‌ها در زبان دوم و آن حسرت مبهمی که گاهی بدون دلیل می‌آید، حرف بزنند. کار در زبان مادری، در فضایی که فهم می‌کند مهاجرت یعنی چه.",
    examples: [
      "چرا وقتی همه چیز خوب است، دلم برای چیزی ناشناخته تنگ می‌شود؟",
      "چطور با دو هویت خودم زندگی کنم؟",
      "چرا حرف زدن به فارسی، احساس می‌کنم خودم می‌شوم؟",
    ],
  },
] as const;

const APPROACH = [
  {
    title: "روانکاوی",
    icon: Brain,
    description:
      "کاوش در ناخودآگاه، ریشه‌های کهن الگوهای تکرارشونده و آنچه زیر لایه‌های آگاهانه پنهان شده است.",
    role: "برای فهم ریشه‌ها",
  },
  {
    title: "طرحواره‌درمانی",
    icon: Layers,
    description:
      "شناسایی طرحواره‌های ناسازگار قدیمی و یادگیری پاسخ‌های جدید به آن‌ها، به‌جای تکرار همان واکنش‌های همیشگی.",
    role: "برای شناسایی الگوها",
  },
  {
    title: "CBT",
    icon: Lightbulb,
    description:
      "ابزارهای عملی برای مدیریت افکار ناکارآمد و ساختن گام‌های قابل اندازه‌گیری در روزمره.",
    role: "برای گام‌های واقعی",
  },
] as const;
