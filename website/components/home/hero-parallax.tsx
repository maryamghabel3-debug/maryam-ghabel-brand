"use client";

import * as React from "react";
import Link from "next/link";
import { ArrowLeft, Sparkles } from "lucide-react";

import { Button } from "@/components/ui/button";

/**
 * HeroParallax — homepage hero section with a subtle scroll-driven
 * parallax on the decorative background blobs.
 *
 * The hero itself is anchored on a navy gradient; only the gold accent
 * shapes drift on scroll. Reduced-motion users get a static composition.
 */
export function HeroParallax() {
  const [scrollY, setScrollY] = React.useState(0);

  React.useEffect(() => {
    if (
      typeof window !== "undefined" &&
      window.matchMedia("(prefers-reduced-motion: reduce)").matches
    ) {
      return;
    }
    let frame = 0;
    const onScroll = () => {
      cancelAnimationFrame(frame);
      frame = requestAnimationFrame(() => setScrollY(window.scrollY));
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    return () => {
      window.removeEventListener("scroll", onScroll);
      cancelAnimationFrame(frame);
    };
  }, []);

  const drift1 = Math.min(scrollY * 0.18, 120);
  const drift2 = Math.min(scrollY * 0.32, 200);

  return (
    <section
      aria-labelledby="hero-heading"
      className="relative isolate overflow-hidden bg-navy text-beige"
    >
      {/* Base gradient */}
      <div
        aria-hidden="true"
        className="absolute inset-0 -z-10 bg-gradient-to-b from-navy-dark via-navy to-navy-dark"
      />

      {/* Soft radial accent — top-right */}
      <div
        aria-hidden="true"
        className="pointer-events-none absolute -right-32 -top-24 h-[28rem] w-[28rem] rounded-full bg-gold/15 blur-3xl"
        style={{ transform: `translateY(${drift1 * -0.4}px)` }}
      />

      {/* Soft radial accent — bottom-left */}
      <div
        aria-hidden="true"
        className="pointer-events-none absolute -left-24 bottom-0 h-96 w-96 rounded-full bg-navy-light/40 blur-3xl"
        style={{ transform: `translateY(${drift2 * 0.5}px)` }}
      />

      {/* Faint dotted texture */}
      <div
        aria-hidden="true"
        className="pointer-events-none absolute inset-0 opacity-[0.06]"
        style={{
          backgroundImage:
            "radial-gradient(rgba(232,220,200,0.6) 1px, transparent 1px)",
          backgroundSize: "28px 28px",
        }}
      />

      <div className="mx-auto max-w-5xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8 lg:py-40">
        <div className="flex flex-col items-center text-center">
          <span className="inline-flex items-center gap-2 rounded-full border border-gold/30 bg-gold/10 px-4 py-1.5 text-xs font-medium text-gold-light">
            <Sparkles className="size-3.5" aria-hidden="true" />
            روان‌شناس بالینی · بزرگسالان موفق
          </span>

          <h1
            id="hero-heading"
            className="mt-8 font-bold text-4xl leading-[1.2] sm:text-5xl lg:text-[3.5rem] lg:leading-[1.25]"
          >
            روان‌شناسی{" "}
            <span className="text-gradient-gold">عمیق</span> برای بزرگسالان{" "}
            <span className="text-gradient-gold">موفق</span>
          </h1>

          <p className="mt-6 max-w-2xl text-base leading-8 text-beige/80 sm:text-lg sm:leading-9">
            فضایی امن برای کاوش در الگوهای ناخودآگاه، بازنگری طرحواره‌های قدیمی و
            بازگشت به خودی که زیر لایه‌های موفقیت پنهان شده. همراهی تخصصی برای
            کسانی که بیرون درست به‌نظر می‌رسد، اما درون هنوز خسته است.
          </p>

          <div className="mt-10 flex flex-col items-center gap-3 sm:flex-row">
            <Button asChild size="lg" className="w-full sm:w-auto">
              <Link href="/booking">
                رزرو جلسه
                <ArrowLeft className="size-4" aria-hidden="true" />
              </Link>
            </Button>
            <Button
              asChild
              size="lg"
              variant="outline"
              className="w-full border-beige/40 bg-transparent text-beige hover:bg-beige/10 sm:w-auto"
            >
              <Link href="/about">آشنای بیشتر</Link>
            </Button>
          </div>

          {/* Trust line */}
          <div className="mt-12 flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-xs text-beige/60">
            <span>۷ سال تجربه روانکاوی گروهی</span>
            <span aria-hidden="true" className="h-1 w-1 rounded-full bg-gold/50" />
            <span>مشاوره آنلاین مهاجرین</span>
            <span aria-hidden="true" className="h-1 w-1 rounded-full bg-gold/50" />
            <span>رویکرد ترکیبی روانکاوی · طرحواره · CBT</span>
          </div>
        </div>
      </div>

      {/* Bottom soft fade into next section */}
      <div
        aria-hidden="true"
        className="absolute inset-x-0 bottom-0 h-16 bg-gradient-to-b from-transparent to-background"
      />
    </section>
  );
}
