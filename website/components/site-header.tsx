"use client";

import * as React from "react";
import Link from "next/link";
import { MenuIcon } from "lucide-react";

import { cn } from "@/lib/utils";
import { Button } from "@/components/ui/button";
import {
  Sheet,
  SheetClose,
  SheetContent,
  SheetHeader,
  SheetTitle,
  SheetTrigger,
} from "@/components/ui/sheet";

/**
 * Primary navigation items.
 * `route` maps to a future App-Router page; the homepage `/` exists today.
 */
const NAV_ITEMS: ReadonlyArray<{ label: string; href: string }> = [
  { label: "خانه", href: "/" },
  { label: "خدمات", href: "/services" },
  { label: "درباره من", href: "/about" },
  { label: "رزرو جلسه", href: "/booking" },
  { label: "تماس", href: "/contact" },
];

/**
 * SiteHeader — sticky top navigation for the Maryam Ghabel brand.
 *
 * - Desktop (md+): full nav on a translucent beige/cream bar with a
 *   gold "رزرو جلسه" CTA on the leading edge.
 * - Mobile (< md): hamburger button opens a right-anchored Sheet with
 *   the same nav items + CTA.
 *
 * Background becomes solid beige after scrolling past 8px to keep the
 * navigation legible over long content sections.
 */
export function SiteHeader() {
  const [scrolled, setScrolled] = React.useState(false);
  const [mobileOpen, setMobileOpen] = React.useState(false);

  React.useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 8);
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
    return () => window.removeEventListener("scroll", onScroll);
  }, []);

  return (
    <header
      className={cn(
        "sticky top-0 z-40 w-full border-b transition-all duration-300",
        scrolled
          ? "border-border/80 bg-beige-light/90 backdrop-blur-md shadow-sm"
          : "border-transparent bg-beige-light/60 backdrop-blur-sm",
      )}
    >
      <div className="mx-auto flex h-16 max-w-7xl items-center justify-between gap-4 px-4 sm:px-6 lg:px-8">
        {/* Brand logo (right side in RTL) */}
        <Link
          href="/"
          className="group flex flex-col items-start leading-tight"
          aria-label="مریم قابل — صفحه اصلی"
        >
          <span className="font-bold text-xl text-navy tracking-tight transition-colors group-hover:text-navy-light sm:text-2xl">
            مریم قابل
          </span>
          <span className="text-[0.7rem] text-gold-dark sm:text-xs">
            روان‌شناس بالینی
          </span>
        </Link>

        {/* Desktop navigation (center) */}
        <nav
          aria-label="ناوبری اصلی"
          className="hidden items-center gap-1 lg:flex"
        >
          {NAV_ITEMS.map((item) => (
            <Link
              key={item.href}
              href={item.href}
              className="relative rounded-full px-4 py-2 text-sm font-medium text-navy/80 transition-colors hover:text-navy"
            >
              {item.label}
            </Link>
          ))}
        </nav>

        {/* Desktop CTA + mobile trigger (left side in RTL) */}
        <div className="flex items-center gap-2">
          <Button asChild size="sm" className="hidden sm:inline-flex">
            <Link href="/booking">رزرو جلسه</Link>
          </Button>

          {/* Mobile hamburger */}
          <Sheet open={mobileOpen} onOpenChange={setMobileOpen}>
            <SheetTrigger asChild>
              <Button
                variant="ghost"
                size="icon"
                className="lg:hidden"
                aria-label="باز کردن منو"
              >
                <MenuIcon className="size-5" aria-hidden="true" />
              </Button>
            </SheetTrigger>
            <SheetContent side="right" className="lg:hidden">
              <SheetHeader>
                <SheetTitle>منوی مریم قابل</SheetTitle>
                <p className="text-sm text-navy/70">روان‌شناس بالینی</p>
              </SheetHeader>

              <nav
                aria-label="ناوبری موبایل"
                className="flex flex-col gap-1 px-4"
              >
                {NAV_ITEMS.map((item) => (
                  <SheetClose asChild key={item.href}>
                    <Link
                      href={item.href}
                      className="rounded-xl px-4 py-3 text-base font-medium text-navy transition-colors hover:bg-navy/5 hover:text-navy-dark focus:bg-navy/5 focus:outline-none"
                    >
                      {item.label}
                    </Link>
                  </SheetClose>
                ))}
              </nav>

              <div className="mt-auto px-4 pb-6">
                <SheetClose asChild>
                  <Button asChild size="md" className="w-full">
                    <Link href="/booking">رزرو جلسه</Link>
                  </Button>
                </SheetClose>
              </div>
            </SheetContent>
          </Sheet>
        </div>
      </div>
    </header>
  );
}
