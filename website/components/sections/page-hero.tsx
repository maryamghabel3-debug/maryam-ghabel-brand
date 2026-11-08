import { cn } from "@/lib/utils";

/**
 * PageHero — compact hero band used at the top of interior pages
 * (services, about, booking, contact). Two tone variants:
 *   - `navy` : navy background with beige text (default)
 *   - `beige`: beige background with navy text
 */
interface PageHeroProps {
  eyebrow?: string;
  title: string;
  description?: string;
  tone?: "navy" | "beige";
  className?: string;
  children?: React.ReactNode;
}

export function PageHero({
  eyebrow,
  title,
  description,
  tone = "navy",
  className,
  children,
}: PageHeroProps) {
  const isNavy = tone === "navy";
  return (
    <section
      className={cn(
        "relative isolate overflow-hidden",
        isNavy ? "bg-navy text-beige" : "bg-beige-light text-navy",
        className,
      )}
    >
      {/* Decorative accents */}
      <div
        aria-hidden="true"
        className={cn(
          "pointer-events-none absolute -right-24 -top-16 h-72 w-72 rounded-full blur-3xl",
          isNavy ? "bg-gold/15" : "bg-gold/20",
        )}
      />
      <div
        aria-hidden="true"
        className="pointer-events-none absolute -bottom-20 -left-20 h-64 w-64 rounded-full blur-3xl bg-navy/5"
      />

      <div className="relative mx-auto max-w-5xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8 lg:py-24">
        <div className="flex flex-col items-center text-center">
          {eyebrow ? (
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
              {eyebrow}
            </span>
          ) : null}

          <h1
            className={cn(
              "mt-4 font-bold text-3xl leading-tight sm:text-4xl lg:text-5xl",
              isNavy ? "text-beige" : "text-navy",
            )}
          >
            {title}
          </h1>

          {description ? (
            <p
              className={cn(
                "mt-5 max-w-2xl text-base leading-8 sm:text-lg",
                isNavy ? "text-beige/80" : "text-soft-black/70",
              )}
            >
              {description}
            </p>
          ) : null}

          {children ? <div className="mt-8 w-full">{children}</div> : null}
        </div>
      </div>

      {/* Soft fade into next section */}
      <div
        aria-hidden="true"
        className={cn(
          "absolute inset-x-0 bottom-0 h-12",
          isNavy
            ? "bg-gradient-to-b from-transparent to-background"
            : "bg-gradient-to-b from-transparent to-background",
        )}
      />
    </section>
  );
}
