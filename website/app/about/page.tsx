import type { Metadata } from "next";
import Link from "next/link";
import {
  ArrowLeft,
  Brain,
  Compass,
  Globe,
  GraduationCap,
  HeartHandshake,
  Layers,
  Lightbulb,
  ShieldCheck,
  Target,
  Users,
} from "lucide-react";

import { PageHero } from "@/components/sections/page-hero";
import { CtaSection } from "@/components/sections/cta-section";
import { SectionHeading } from "@/components/sections/section-heading";
import { Button } from "@/components/ui/button";

export const metadata: Metadata = {
  title: "درباره من",
  description:
    "مریم قابل، روان‌شناس بالینی. داستان ورود به روان‌شناسی، تخصص‌ها، رویکرد درمانی ترکیبی، ۷ سال تجربه در گروه‌درمانی روانکاوی و گروه مراجعینی که با آن‌ها کار می‌کنم.",
};

/**
 * About page — narrative bio, credentials, approach, group-therapy
 * history, target clientele and a closing CTA.
 */
export default function AboutPage() {
  return (
    <>
      <PageHero
        eyebrow="درباره من"
        title="مریم قابل"
        description="روان‌شناس بالینی · همراهِ بزرگسالان موفق و مهاجرین ایرانی"
      >
        {/* Circular placeholder portrait */}
        <div className="mx-auto flex flex-col items-center gap-4">
          <div className="relative size-40 overflow-hidden rounded-full bg-gradient-to-br from-navy via-navy-light to-navy-dark shadow-xl ring-4 ring-gold/30 sm:size-48">
            <div
              aria-hidden="true"
              className="flex h-full w-full items-center justify-center bg-[radial-gradient(circle_at_30%_25%,rgba(201,168,124,0.3),transparent_55%)]"
            >
              <span className="font-bold text-6xl text-gold/40">م</span>
            </div>
          </div>
          <p className="text-sm text-beige/70">
            روان‌شناس بالینی، عضو گروه روانکاوی (۱۳۹۷ تاکنون)
          </p>
        </div>
      </PageHero>

      {/* Personal story */}
      <section
        aria-labelledby="story-heading"
        className="py-16 sm:py-20 lg:py-24"
      >
        <div className="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
          <SectionHeading
            align="start"
            eyebrow="چرا روان‌شناس شدم؟"
            title="یک سؤال قدیمی که راهم را نشان داد"
            className="mb-8"
          />
          <div className="flex flex-col gap-6 text-base leading-9 text-soft-black/75">
            <p>
              نوجوانی بودم که سؤال‌های عجیبی می‌پرسید. چرا آدم‌ها، با اینکه
              می‌دانند چه چیزی به آن‌ها آسیب می‌زند، باز هم آن را تکرار
              می‌کنند؟ چرا بعضی دردها با هیچ چیز بیرونی قابل توضیح نیستند؟ چرا
              موفق‌ترین آدم‌هایی که می‌شناختم، گاهی غمگین‌ترینشان بودند؟
            </p>
            <p>
              این سؤال‌ها مرا اول به مطالعه روان‌شناسی عمومی کشاند، بعد به
              دانشگاه، و در نهایت به یک گروه روانکاوی کوچک که هفت سال است عضو
              ثابتش هستم. آنجا فهمیدم روان انسان، نه ماشینی است که قابل تعمیر
              باشد و نه معمایی که قابل حل باشد؛ بلکه زمینی است که می‌توان
              یاد گرفت درش قدم زد، باخبر شد، و گاهی، آن را وسیع‌تر کرد.
            </p>
            <p>
              امروز، با ترکیب آنچه از روانکاوی آموخته‌ام و ابزارهای عملی
              طرحواره‌درمانی و CBT، با مراجعینی کار می‌کنم که می‌خواهند آن
              زمینِ درونشان را بهتر بشناسند؛ گاهی برای تغییر چیزی، و گاهی
              فقط برای اینکه بالاخره صدایش را بشنوند.
            </p>
          </div>
        </div>
      </section>

      {/* Credentials */}
      <section
        aria-labelledby="credentials-heading"
        className="bg-beige-light/50 py-16 sm:py-20 lg:py-24"
      >
        <div className="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <SectionHeading
            eyebrow="تخصص‌ها و مدارک"
            title="هر آنچه در مسیر ساخته‌ام"
            className="mb-12"
          />
          <div className="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            {CREDENTIALS.map((c) => (
              <article
                key={c.title}
                className="flex flex-col gap-3 rounded-2xl border border-border bg-background p-6"
              >
                <span className="flex size-11 items-center justify-center rounded-xl bg-navy text-gold">
                  <c.icon className="size-5" aria-hidden="true" />
                </span>
                <h3 className="font-bold text-lg text-navy leading-snug">
                  {c.title}
                </h3>
                <p className="text-sm leading-7 text-soft-black/70">
                  {c.description}
                </p>
              </article>
            ))}
          </div>
        </div>
      </section>

      {/* Therapeutic approach */}
      <section
        aria-labelledby="approach-heading"
        className="py-16 sm:py-20 lg:py-24"
      >
        <div className="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <div className="grid gap-10 lg:grid-cols-[1fr_1.3fr] lg:gap-16">
            <SectionHeading
              align="start"
              eyebrow="رویکرد درمانی من"
              title="بینش بدون عمل، و عمل بدون بینش، هر دو ناقص‌اند"
            />
            <div className="flex flex-col gap-5">
              {APPROACH_POINTS.map((p) => (
                <div
                  key={p.title}
                  className="flex gap-4 rounded-2xl border border-border bg-beige-light/40 p-5"
                >
                  <span className="flex size-10 shrink-0 items-center justify-center rounded-full bg-gold/15 text-gold-dark">
                    <p.icon className="size-5" aria-hidden="true" />
                  </span>
                  <div className="flex flex-col gap-1.5">
                    <h3 className="font-bold text-navy">{p.title}</h3>
                    <p className="text-sm leading-7 text-soft-black/70">
                      {p.description}
                    </p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* Group therapy feature */}
      <section
        aria-labelledby="group-heading"
        className="bg-navy text-beige py-16 sm:py-20 lg:py-24"
      >
        <div className="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
          <div className="relative overflow-hidden rounded-3xl border border-beige/15 bg-navy-light/40 p-8 sm:p-12 lg:p-16">
            <div
              aria-hidden="true"
              className="pointer-events-none absolute -right-20 -top-16 h-64 w-64 rounded-full bg-gold/15 blur-3xl"
            />
            <div className="relative flex flex-col items-center gap-6 text-center">
              <span className="flex size-14 items-center justify-center rounded-2xl bg-gold text-navy">
                <Users className="size-7" aria-hidden="true" />
              </span>
              <div className="flex flex-col gap-3">
                <span className="text-xs font-medium uppercase tracking-[0.18em] text-gold-light">
                  ۱۳۹۷ تاکنون
                </span>
                <h2 className="font-bold text-2xl text-beige sm:text-3xl lg:text-4xl">
                  هفت سال در گروه‌درمانی روانکاوی
                </h2>
                <p className="mx-auto max-w-2xl text-sm leading-8 text-beige/80 sm:text-base sm:leading-9">
                  عضویت پایدار در یک گروه روانکاوی فعال، مهم‌ترین شکل‌دهنده
                  نگاه من به روان انسان بوده است. در گروه، انسان‌ها نه به‌عنوان
                  «تشخیص»، بلکه به‌عنوان کل روایت‌شان دیده می‌شوند؛ این نگاه،
                  اکنون پایه‌ی کار فردی من با مراجعین است.
                </p>
              </div>
              <div className="mt-2 flex flex-wrap items-center justify-center gap-x-8 gap-y-3 text-sm">
                <div className="flex flex-col items-center gap-0.5">
                  <span className="font-bold text-3xl text-gold">۷</span>
                  <span className="text-xs text-beige/60">سال عضویت پایدار</span>
                </div>
                <span
                  aria-hidden="true"
                  className="hidden h-10 w-px bg-beige/15 sm:block"
                />
                <div className="flex flex-col items-center gap-0.5">
                  <span className="font-bold text-3xl text-gold">۲۰+</span>
                  <span className="text-xs text-beige/60">مراجع فردی سالانه</span>
                </div>
                <span
                  aria-hidden="true"
                  className="hidden h-10 w-px bg-beige/15 sm:block"
                />
                <div className="flex flex-col items-center gap-0.5">
                  <span className="font-bold text-3xl text-gold">۳</span>
                  <span className="text-xs text-beige/60">مکتب درمانی ترکیبی</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Who I work with */}
      <section
        aria-labelledby="who-heading"
        className="py-16 sm:py-20 lg:py-24"
      >
        <div className="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <SectionHeading
            eyebrow="با چه کسانی کار می‌کنم؟"
            title="دو گروه اصلی مراجعین من"
            className="mb-12"
          />

          <div className="grid grid-cols-1 gap-6 lg:grid-cols-2">
            {AUDIENCES.map((aud) => (
              <article
                key={aud.title}
                className="group relative flex flex-col gap-4 overflow-hidden rounded-3xl border border-border bg-background p-8 transition-all duration-300 hover:border-gold/40 hover:shadow-lg"
              >
                <div
                  aria-hidden="true"
                  className="pointer-events-none absolute -left-16 -top-16 h-48 w-48 rounded-full bg-gold/10 blur-3xl transition-opacity duration-300 group-hover:bg-gold/20"
                />
                <div className="relative flex flex-col gap-4">
                  <span className="flex size-12 items-center justify-center rounded-2xl bg-navy text-gold">
                    <aud.icon className="size-6" aria-hidden="true" />
                  </span>
                  <h3 className="font-bold text-xl text-navy leading-snug">
                    {aud.title}
                  </h3>
                  <p className="text-sm leading-8 text-soft-black/75">
                    {aud.description}
                  </p>
                  <ul className="mt-1 flex flex-wrap gap-2">
                    {aud.tags.map((tag) => (
                      <li
                        key={tag}
                        className="rounded-full border border-border bg-beige-light/60 px-3 py-1 text-xs text-navy/80"
                      >
                        {tag}
                      </li>
                    ))}
                  </ul>
                </div>
              </article>
            ))}
          </div>

          <div className="mt-10 flex flex-col items-center gap-4 sm:flex-row sm:justify-center">
            <Button asChild size="lg">
              <Link href="/booking">
                رزرو جلسه
                <ArrowLeft className="size-4" aria-hidden="true" />
              </Link>
            </Button>
            <Button asChild size="lg" variant="outline">
              <Link href="/services">دیدن خدمات</Link>
            </Button>
          </div>
        </div>
      </section>

      <CtaSection
        title="اگر یکی از این دو گروه باشی، خوشحال می‌شوم با هم حرف بزنیم"
        description="اگر ۳۰ تا ۴۰ ساله و در حال کشمکش با موفقیت درونی هستی، یا مهاجر ایرانی و دلتنگ زبان مادری، یک جلسه اولیه می‌تواند بگوید آیا این مسیر برای تو درست است."
        buttonLabel="رزرو تماس اولیه"
      />
    </>
  );
}

/* -------------------------------------------------------------------------- */
/*                                Data                                        */
/* -------------------------------------------------------------------------- */

const CREDENTIALS = [
  {
    title: "کارشناسی ارشد روان‌شناسی بالینی",
    description:
      "تحصیلات آکادمیک تخصصی در ارزیابی، تشخیص و روان‌درمانی مبتنی بر شواهد.",
    icon: GraduationCap,
  },
  {
    title: "عضویت گروه روانکاوی (۱۳۹۷ تاکنون)",
    description:
      "هفت سال عضویت پایدار و فعال در یک گروه روانکاوی، با نظارت بالینی مستمر.",
    icon: Users,
  },
  {
    title: "طرحواره‌درمانی",
    description:
      "آموزش و کاربرد بالینی مدل طرحواره‌درمانی برای شناسایی و تغییر الگوهای کهن.",
    icon: Layers,
  },
  {
    title: "درمان شناختی-رفتاری (CBT)",
    description:
      "کاربرد ابزارهای CBT برای مدیریت اضطراب، افسردگی و الگوهای فکری ناکارآمد.",
    icon: Lightbulb,
  },
  {
    title: "مشاوره آنلاین مهاجرین",
    description:
      "تجربه تخصصی کار با ایرانیان مقیم خارج در زبان مادری و در فضای ویدیویی امن.",
    icon: Globe,
  },
  {
    title: "تعهد به اخلاق حرفه‌ای",
    description:
      "رعایت کامل اصول محرمانگی، رازداری و کدهای اخلاقی روان‌درمانی در تمام جلسات.",
    icon: ShieldCheck,
  },
] as const;

const APPROACH_POINTS = [
  {
    title: "از ریشه، نه از روی علائم",
    description:
      "کار از ریشه‌ها شروع می‌شود، نه از نشانه‌ها. علائم فقط نشانه‌گر هستند؛ آنچه مهم است، فهم چرایی است.",
    icon: Brain,
  },
  {
    title: "ترکیب سه مکتب",
    description:
      "روانکاوی برای فهم، طرحواره برای الگو، CBT برای گام. هرکدام در جای خود، نه به‌جای دیگری.",
    icon: Compass,
  },
  {
    title: "تمرکز بر بزرگسالان موفق",
    description:
      "تخصص ویژه روی بزرگسالانی که از بیرون موفق‌اند ولی درون در حال کشمکش‌اند؛ نیازهای متفاوتی دارند.",
    icon: Target,
  },
  {
    title: "زبان مادری برای مهاجرین",
    description:
      "کار با مهاجرین ایرانی در زبان فارسی؛ زبانی که در آن، ریشه‌های روانت هنوز زنده‌اند.",
    icon: HeartHandshake,
  },
] as const;

const AUDIENCES = [
  {
    title: "بزرگسالان ۳۰ تا ۴۰ ساله موفق",
    description:
      "کسانی که از بیرون به آن‌ها نگاه می‌کنی و فکر می‌کنی همه چیز دارند — شغل خوب، مسیر روشن، روابط درست — اما درون خسته‌اند، بی‌معنا حس می‌کنند یا گیر کرده‌اند. اغلب فرسودگی موفقیت، بحران هویت میانی یا احساس غریبگی در میان موفقیت‌هایشان را تجربه می‌کنند.",
    icon: Target,
    tags: ["مدیران", "کارآفرینان", "روان‌شناسان", "صاحبان شغل‌های خلاق"],
  },
  {
    title: "مهاجرین ایرانی",
    description:
      "ایرانیانی که در خارج از کشور زندگی می‌کنند و می‌خواهند درباره هویت دوتایی، دلتنگی، غریبگی در میان آشنایان، و بازسازی ریشه‌ها در زبان دوم حرف بزنند. کار در زبان مادری، چون روانت فقط در یکی از زبان‌هایت خانه دارد.",
    icon: Globe,
    tags: ["برلین", "تورنتو", "لندن", "آمستردام", "هر کجای دیگر"],
  },
] as const;
