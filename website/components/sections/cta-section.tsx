import Link from "next/link";
import { ArrowLeft } from "lucide-react";

import { Button } from "@/components/ui/button";
import { cn } from "@/lib/utils";

/**
 * CtaSection — final call-to-action band used at the bottom of every
 * top-level page. Two tone variants:
 *   - `navy` : navy band on beige background (default)
 *   - `beige`: beige band on navy background (used inside dark sections)
 */
interface CtaSectionProps {
  title: string;
  description?: string;
  buttonLabel?: string;
  buttonHref?: string;
  tone?: "navy" | "beige";
  className?: string;
}

export function CtaSection({
  title,
  description,
  buttonLabel = "رزرو جلسه",
  buttonHref = "/booking",
  tone = "navy",
  className,
}: CtaSectionProps) {
  const isNavy = tone === "navy";
  return (
    <section className={cn("py-16 sm:py-20 lg:py-24", className)}>
      <div className="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
        <div
          className={cn(
            "relative overflow-hidden rounded-3xl px-6 py-12 text-center sm:px-12 sm:py-16 lg:px-16 lg:py-20",
            isNavy
              ? "bg-navy text-beige"
              : "bg-beige-light text-navy ring-1 ring-gold/20",
          )}
        >
          {/* Decorative soft glow */}
          <div
            aria-hidden="true"
            className={cn(
              "pointer-events-none absolute -top-24 right-1/3 h-64 w-64 rounded-full blur-3xl",
              isNavy
                ? "bg-gold/15"
                : "bg-gold/20",
            )}
          />
          <div
            aria-hidden="true"
            className="pointer-events-none absolute -bottom-20 left-1/4 h-48 w-48 rounded-full bg-gold/10 blur-3xl"
          />

          <div className="relative flex flex-col items-center gap-5">
            <span
              className={cn(
                "inline-flex items-center gap-2 text-xs font-medium uppercase tracking-[0.18em]",
                isNavy ? "text-gold-light" : "text-gold-dark",
              )}
            >
              <span
                aria-hidden="true"
                className={cn(
                  "h-px w-8",
                  isNavy ? "bg-gold-light/60" : "bg-gold",
                )}
              />
              قدم بعدی
              <span
                aria-hidden="true"
                className={cn(
                  "h-px w-8",
                  isNavy ? "bg-gold-light/60" : "bg-gold",
                )}
              />
            </span>

            <h2
              className={cn(
                "max-w-2xl font-bold text-2xl leading-tight sm:text-3xl lg:text-4xl",
                isNavy ? "text-beige" : "text-navy",
              )}
            >
              {title}
            </h2>

            {description ? (
              <p
                className={cn(
                  "max-w-xl text-sm leading-7 sm:text-base",
                  isNavy ? "text-beige/75" : "text-soft-black/70",
                )}
              >
                {description}
              </p>
            ) : null}

            <div className="mt-2 flex flex-wrap items-center justify-center gap-3">
              <Button asChild size="lg">
                <Link href={buttonHref}>
                  {buttonLabel}
                  <ArrowLeft className="size-4" aria-hidden="true" />
                </Link>
              </Button>
              {buttonHref !== "/contact" ? (
                <Button
                  asChild
                  size="lg"
                  variant={isNavy ? "outline" : "ghost"}
                  className={
                    isNavy
                      ? "border-beige/40 bg-transparent text-beige hover:bg-beige/10"
                      : undefined
                  }
                >
                  <Link href="/contact">سؤال دارم</Link>
                </Button>
              ) : null}
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
