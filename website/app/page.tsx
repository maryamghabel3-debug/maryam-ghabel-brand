import Link from "next/link";
import {
  Activity,
  ArrowLeft,
  Brain,
  Compass,
  Globe,
  Layers,
  Quote,
  Target,
} from "lucide-react";

import { Button } from "@/components/ui/button";
import { HeroParallax } from "@/components/home/hero-parallax";
import { CtaSection } from "@/components/sections/cta-section";
import { SectionHeading } from "@/components/sections/section-heading";

/**
 * Homepage — single-page composition of every top-level brand
 * narrative: hero → short bio → service cards → "why Maryam" trio →
 * anonymous client quotes → final CTA.
 *
 * Splits client-only behaviour (parallax hero) into its own component;
 * the rest is server-rendered.
 */
export default function HomePage() {
  return (
    <>
      {/* 1 — Hero with subtle parallax */}
      <HeroParallax />

      {/* 2 — Short about */}
      <section
        aria-labelledby="about-short-heading"
        className="py-16 sm:py-20 lg:py-24"
      >
        <div className="mx-auto grid max-w-6xl items-center gap-10 px-4 sm:px-6 lg:grid-cols-2 lg:gap-16 lg:px-8">
          {/* Placeholder portrait */}
          <div className="relative mx-auto w-full max-w-sm">
            <div className="aspect-[4/5] overflow-hidden rounded-3xl bg-gradient-to-br from-navy via-navy-light to-navy-dark shadow-xl">
              <div
                aria-hidden="true"
                className="flex h-full w-full items-center justify-center bg-[radial-gradient(circle_at_30%_25%,rgba(201,168,124,0.25),transparent_55%)]"
              >
                <span className="font-bold text-7xl text-gold/40">م</span>
              </div>
            </div>
            {/* Floating experience badge */}
            <div className="absolute -bottom-5 -left-3 flex items-center gap-2 rounded-2xl bg-beige-light px-4 py-3 shadow-lg ring-1 ring-gold/20 sm:-left-6">
              <span className="font-bold text-2xl text-navy">۷+</span>
              <span className="text-xs leading-tight text-soft-black/70">
                سال
                <br />
                تجربه بالینی
              </span>
            </div>
          </div>

          {/* Bio copy */}
          <div className="flex flex-col gap-5">
            <SectionHeading
              align="start"
              eyebrow="درباره مریم قابل"
              title="درگیرِ عمیق با آنچه زیر موفقیت پنهان می‌ماند"
              lead="هفت سال است که به‌عنوان عضو ثابت یک گروه روانکاوی کار می‌کنم؛ تجربه‌ای که نگاه مرا به روان آدم‌ها از «تشخیص» به «فهمیدن» تغییر داد. در کنارش، طرحواره‌درمانی و CBT به من کمک می‌کنند تا بینش‌های عمیق را به گام‌های واقعی و روزمره تبدیل کنم."
            />
            <p className="text-base leading-8 text-soft-black/70">
              با مراجعینی کار می‌کنم که از بیرون موفق به‌نظر می‌رسند — شغل خوب،
              روابط درست، مسیر روشن — اما درونشان خسته، سرگردان یا گیر کرده
              است. صدای آن بخش از روان را می‌شنوم که هنوز زخمی است ولی حرف
              نزده.
            </p>
            <div className="mt-2">
              <Button asChild variant="outline" size="md">
                <Link href="/about">
                  داستان کامل من
                  <ArrowLeft className="size-4" aria-hidden="true" />
                </Link>
              </Button>
            </div>
          </div>
        </div>
      </section>

      {/* 3 — Services (4 cards) */}
      <section
        aria-labelledby="services-heading"
        className="bg-beige-light/50 py-16 sm:py-20 lg:py-24"
      >
        <div className="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <SectionHeading
            eyebrow="خدمات"
            title="چهار مسیر همراهی تخصصی"
            lead="هر خدمت با یک سؤال محوری شروع می‌شود: چه الگویی دوباره و دوباره تکرار می‌شود و چرا حالا دردناک شده است؟"
            className="mb-12"
          />

          <div className="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
            {SERVICES.map((service) => (
              <article
                key={service.title}
                className="group flex flex-col gap-4 rounded-2xl border border-border bg-background p-6 transition-all duration-300 hover:-translate-y-1 hover:border-gold/40 hover:shadow-lg"
              >
                <span className="flex size-12 items-center justify-center rounded-xl bg-navy text-gold transition-colors group-hover:bg-gold group-hover:text-navy">
                  <service.icon className="size-6" aria-hidden="true" />
                </span>
                <h3 className="font-bold text-lg text-navy leading-snug">
                  {service.title}
                </h3>
                <p className="text-sm leading-7 text-soft-black/70">
                  {service.description}
                </p>
                <Link
                  href="/services"
                  className="mt-auto inline-flex items-center gap-1.5 text-sm font-medium text-gold-dark transition-colors hover:text-gold"
                >
                  بیشتر بدانید
                  <ArrowLeft className="size-3.5" aria-hidden="true" />
                </Link>
              </article>
            ))}
          </div>
        </div>
      </section>

      {/* 4 — Why Maryam? (3 columns) */}
      <section
        aria-labelledby="why-heading"
        className="py-16 sm:py-20 lg:py-24"
      >
        <div className="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <SectionHeading
            eyebrow="چرا مریم؟"
            title="جایی که عمق، با گام‌های واقعی همراه می‌شود"
            lead="رویکرد من ترکیبی است از درک عمیق روانکاوانه و ابزارهای عملی طرحواره‌درمانی و CBT — بینش بدون عمل، و عمل بدون بینش، هر دو ناقص‌اند."
            className="mb-12"
          />

          <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            {REASONS.map((reason) => (
              <article
                key={reason.title}
                className="relative flex flex-col gap-4 rounded-2xl border border-border bg-beige-light/40 p-7"
              >
                <span className="flex size-11 items-center justify-center rounded-full bg-gold/15 text-gold-dark">
                  <reason.icon className="size-5" aria-hidden="true" />
                </span>
                <h3 className="font-bold text-lg text-navy leading-snug">
                  {reason.title}
                </h3>
                <p className="text-sm leading-7 text-soft-black/70">
                  {reason.description}
                </p>
              </article>
            ))}
          </div>
        </div>
      </section>

      {/* 5 — Anonymous client questions */}
      <section
        aria-labelledby="quotes-heading"
        className="bg-navy text-beige py-16 sm:py-20 lg:py-24"
      >
        <div className="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <div className="mb-12 flex flex-col items-center gap-3 text-center">
            <span className="inline-flex items-center gap-2 text-xs font-medium uppercase tracking-[0.18em] text-gold-light">
              <span aria-hidden="true" className="h-px w-8 bg-gold-light/60" />
              پرسش‌های رایج مراجعین
            </span>
            <h2 className="font-bold text-3xl text-beige sm:text-4xl">
              حرف‌هایی که اغلب در جلسه اول شنیده می‌شوند
            </h2>
            <p className="max-w-2xl text-sm leading-7 text-beige/70">
              نقل‌قول‌های واقعی، بدون اسم، از مراجعینی که با اجازه و برای حفظ
              محرمانگی، هویتشان پنهان مانده است.
            </p>
          </div>

          <div className="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            {CLIENT_QUOTES.map((q) => (
              <figure
                key={q.quote.slice(0, 20)}
                className="relative flex flex-col gap-4 rounded-2xl border border-beige/15 bg-navy-light/40 p-7"
              >
                <Quote
                  className="size-7 text-gold/60"
                  aria-hidden="true"
                />
                <blockquote className="text-sm leading-8 text-beige/90">
                  «{q.quote}»
                </blockquote>
                <figcaption className="mt-auto text-xs text-beige/50">
                  {q.tag}
                </figcaption>
              </figure>
            ))}
          </div>
        </div>
      </section>

      {/* 6 — Final CTA */}
      <CtaSection
        title="آماده‌ای اولین قدم رو برداری؟"
        description="رزرو جلسه فقط یک کلیک فاصله دارد. تماس اولیه ۱۵ دقیقه‌ای رایگان است تا مطمئن شوی این مسیر برای تو درست است."
        buttonLabel="رزرو جلسه"
      />
    </>
  );
}

/* -------------------------------------------------------------------------- */
/*                                Data                                        */
/* -------------------------------------------------------------------------- */

const SERVICES = [
  {
    title: "روانکاوی و روان‌تحلیلی",
    description:
      "کاوش در الگوهای ناخودآگاه، ریشه‌های کهن روابط تکرارشونده و آنچه زیر لایه‌های آگاهانه پنهان شده.",
    icon: Brain,
  },
  {
    title: "طرحواره‌درمانی",
    description:
      "شناسایی طرحواره‌های ناسازگار قدیمی و یادگیری راه‌های جدید برای پاسخ دادن به آن‌ها، به‌جای تکرار همان واکنش‌های همیشگی.",
    icon: Layers,
  },
  {
    title: "درمان شناختی-رفتاری (CBT)",
    description:
      "ابزارهای عملی برای مدیریت اضطراب، افسردگی و الگوهای فکری ناکارآمد، همراه با گام‌های قابل اندازه‌گیری.",
    icon: Activity,
  },
  {
    title: "مشاوره آنلاین مهاجرین",
    description:
      "همراهی تخصصی برای ایرانیان مقیم خارج؛ مهاجرت، هویت دوتایی، دلتنگی و بازسازی ریشه‌ها در زبان مادری.",
    icon: Globe,
  },
] as const;

const REASONS = [
  {
    title: "عمق تخصصی",
    description:
      "هفت سال عضویت پایدار در یک گروه روانکاوی فعال، نگاه مرا به روان انسان از روی علائم به زیر آن‌ها برده است.",
    icon: Compass,
  },
  {
    title: "رویکرد ترکیبی",
    description:
      "روانکاوی برای فهم ریشه‌ها، طرحواره برای شناسایی الگوها و CBT برای گام‌های عملی — کنار هم، نه به‌جای هم.",
    icon: Layers,
  },
  {
    title: "تمرکز بر بزرگسالان موفق",
    description:
      "تخصص ویژه روی بزرگسالان ۳۰ تا ۴۰ ساله‌ای که از بیرون موفق‌اند اما درون در حال کشمکش‌اند؛ از کارمندان موفق تا مهاجرین ایرانی.",
    icon: Target,
  },
] as const;

const CLIENT_QUOTES = [
  {
    quote:
      "همه فکر می‌کنند دارم بهترین دور زندگی‌م رو می‌گذرونم. ولی تو خونه، بعدِ همه چیز، یه جای درد دارم که نمی‌تونم اسمش بذارم.",
    tag: "مراجع ۳۴ ساله، مدیر محصول",
  },
  {
    quote:
      "به همه کمک می‌کنم ولی وقتی نوبت خودم می‌شه، گیر می‌کنم. این الگو رو تو همه روابطم دارم. می‌خوام بفهمم چرا.",
    tag: "مراجع ۳۸ ساله، روان‌شناس",
  },
  {
    quote:
      "مهاجرت‌ام موفق بود، ولی یه چیزی از خودم رو اونجا جا گذاشتم. نمی‌دونم چی، ولی دلم هر شب برمی‌گرده.",
    tag: "مراجع ۳۲ ساله، مهندس نرم‌افزار در برلین",
  },
] as const;
