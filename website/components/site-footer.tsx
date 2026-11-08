import Link from "next/link";
import { ClockIcon, MailIcon, MapPinIcon, PhoneIcon } from "lucide-react";

import { InstagramIcon, LinkedInIcon } from "@/components/icons";

/**
 * SiteFooter — three-column footer for the Maryam Ghabel brand.
 *
 * Layout:
 *   ┌──────────────────────────────────────────────┐
 *   │ About (right) · Quick links (middle) · Contact │
 *   │ Social icons row                               │
 *   │ Copyright (1405)                               │
 *   └──────────────────────────────────────────────┘
 *
 * Theme: navy background, beige text, gold accents.
 */

const QUICK_LINKS: ReadonlyArray<{ label: string; href: string }> = [
  { label: "خانه", href: "/" },
  { label: "خدمات", href: "/services" },
  { label: "درباره من", href: "/about" },
  { label: "رزرو جلسه", href: "/booking" },
  { label: "تماس", href: "/contact" },
];

const CONTACT_INFO: ReadonlyArray<{
  icon: React.ReactNode;
  label: string;
  value: string;
  href?: string;
}> = [
  {
    icon: <MapPinIcon className="size-4 shrink-0" aria-hidden="true" />,
    label: "آدرس",
    value: "تهران، خیابان ولیعصر",
  },
  {
    icon: <PhoneIcon className="size-4 shrink-0" aria-hidden="true" />,
    label: "تلفن",
    value: "۰۲۱-۱۲۳۴۵۶۷۸",
    href: "tel:+982112345678",
  },
  {
    icon: <MailIcon className="size-4 shrink-0" aria-hidden="true" />,
    label: "ایمیل",
    value: "info@maryamghabel.ir",
    href: "mailto:info@maryamghabel.ir",
  },
  {
    icon: <ClockIcon className="size-4 shrink-0" aria-hidden="true" />,
    label: "ساعت کاری",
    value: "شنبه تا چهارشنبه، ۹ تا ۱۸",
  },
];

const SOCIAL_LINKS: ReadonlyArray<{
  label: string;
  href: string;
  icon: React.ReactNode;
}> = [
  {
    label: "اینستاگرام",
    href: "https://instagram.com/maryamghabel",
    icon: <InstagramIcon className="size-5" />,
  },
  {
    label: "لینکدین",
    href: "https://linkedin.com/in/maryamghabel",
    icon: <LinkedInIcon className="size-5" />,
  },
  {
    label: "ایمیل",
    href: "mailto:info@maryamghabel.ir",
    icon: <MailIcon className="size-5" />,
  },
];

export function SiteFooter() {
  return (
    <footer className="bg-navy text-beige" aria-labelledby="footer-heading">
      <h2 id="footer-heading" className="sr-only">
        فوتر سایت
      </h2>

      <div className="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
        <div className="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
          {/* About column */}
          <section aria-labelledby="footer-about-heading">
            <h3
              id="footer-about-heading"
              className="font-bold text-lg text-beige mb-3"
            >
              مریم قابل
            </h3>
            <p className="text-sm leading-7 text-beige/75 max-w-sm">
              روان‌شناس بالینی متخصص در زمینه اضطراب، افسردگی، تروما و
              روابط. ارائه خدمات روان‌درمانی مبتنی بر شواهد در فضایی امن و
              محرمانه، همراه با احترام به تجربه و نیازهای منحصربه‌فرد هر فرد.
            </p>

            {/* Social icons */}
            <div className="mt-6 flex items-center gap-3">
              {SOCIAL_LINKS.map((social) => (
                <a
                  key={social.label}
                  href={social.href}
                  target={social.href.startsWith("http") ? "_blank" : undefined}
                  rel={
                    social.href.startsWith("http")
                      ? "noopener noreferrer"
                      : undefined
                  }
                  aria-label={social.label}
                  className="flex size-10 items-center justify-center rounded-full border border-beige/20 text-beige/80 transition-all duration-300 hover:border-gold hover:bg-gold hover:text-navy focus:outline-none focus:ring-2 focus:ring-gold focus:ring-offset-2 focus:ring-offset-navy"
                >
                  {social.icon}
                </a>
              ))}
            </div>
          </section>

          {/* Quick links column */}
          <section
            aria-labelledby="footer-links-heading"
            className="sm:justify-self-start lg:justify-self-center"
          >
            <h3
              id="footer-links-heading"
              className="font-bold text-lg text-beige mb-3"
            >
              دسترسی سریع
            </h3>
            <ul className="space-y-2.5">
              {QUICK_LINKS.map((link) => (
                <li key={link.href}>
                  <Link
                    href={link.href}
                    className="text-sm text-beige/75 transition-colors hover:text-gold"
                  >
                    {link.label}
                  </Link>
                </li>
              ))}
            </ul>
          </section>

          {/* Contact column */}
          <section aria-labelledby="footer-contact-heading">
            <h3
              id="footer-contact-heading"
              className="font-bold text-lg text-beige mb-3"
            >
              تماس
            </h3>
            <ul className="space-y-3">
              {CONTACT_INFO.map((info) => (
                <li
                  key={info.label}
                  className="flex items-start gap-3 text-sm text-beige/75"
                >
                  <span className="mt-0.5 flex size-7 items-center justify-center rounded-full bg-beige/10 text-gold">
                    {info.icon}
                  </span>
                  <span className="flex flex-col">
                    <span className="text-xs text-beige/50">{info.label}</span>
                    {info.href ? (
                      <a
                        href={info.href}
                        className="transition-colors hover:text-gold"
                        dir={info.href.startsWith("tel:") ? "ltr" : undefined}
                      >
                        {info.value}
                      </a>
                    ) : (
                      <span>{info.value}</span>
                    )}
                  </span>
                </li>
              ))}
            </ul>
          </section>
        </div>

        {/* Divider + copyright */}
        <div className="mt-12 border-t border-beige/15 pt-6">
          <div className="flex flex-col items-center justify-between gap-3 sm:flex-row">
            <p className="text-xs text-beige/60">
              © ۱۴۰۵ مریم قابل. تمامی حقوق محفوظ است.
            </p>
            <p className="text-xs text-beige/50">
              طراحی و توسعه با عشق برای سلامت روان
            </p>
          </div>
        </div>
      </div>
    </footer>
  );
}
