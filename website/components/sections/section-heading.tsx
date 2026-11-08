import { cn } from "@/lib/utils";

/**
 * SectionHeading — small reusable eyebrow + title + optional lead
 * used across all top-level pages.
 *
 * Layout is RTL-first; alignment defaults to center but can be start-aligned
 * for inline section openers.
 */
interface SectionHeadingProps {
  eyebrow?: string;
  title: string;
  lead?: string;
  align?: "center" | "start";
  className?: string;
  tone?: "navy" | "beige";
}

export function SectionHeading({
  eyebrow,
  title,
  lead,
  align = "center",
  className,
  tone = "navy",
}: SectionHeadingProps) {
  const isCenter = align === "center";
  return (
    <div
      className={cn(
        "flex flex-col gap-3",
        isCenter ? "items-center text-center" : "items-start text-right",
        className,
      )}
    >
      {eyebrow ? (
        <span
          className={cn(
            "inline-flex items-center gap-2 text-xs font-medium uppercase tracking-[0.18em]",
            tone === "navy" ? "text-gold-dark" : "text-gold-light",
          )}
        >
          <span
            aria-hidden="true"
            className={cn(
              "h-px w-6",
              tone === "navy" ? "bg-gold" : "bg-gold-light/60",
            )}
          />
          {eyebrow}
        </span>
      ) : null}

      <h2
        className={cn(
          "font-bold text-3xl leading-tight sm:text-4xl lg:text-[2.6rem]",
          tone === "navy" ? "text-navy" : "text-beige",
        )}
      >
        {title}
      </h2>

      {lead ? (
        <p
          className={cn(
            "max-w-2xl text-base leading-8 sm:text-lg",
            isCenter ? "mx-auto" : "",
            tone === "navy" ? "text-soft-black/70" : "text-beige/75",
          )}
        >
          {lead}
        </p>
      ) : null}
    </div>
  );
}
