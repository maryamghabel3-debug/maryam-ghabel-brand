import type { Metadata, Viewport } from "next";
import localFont from "next/font/local";

import "./globals.css";
import { SiteHeader } from "@/components/site-header";
import { SiteFooter } from "@/components/site-footer";

/**
 * Vazirmatn — Persian (Arabic-script) font, self-hosted.
 * Three weights (regular / medium / bold) loaded through a single
 * `localFont` instance so Tailwind's `font-medium` / `font-bold`
 * utilities resolve to the correct face.
 */
const vazirmatn = localFont({
  src: [
    {
      path: "../public/fonts/Vazirmatn-Regular.ttf",
      weight: "400",
      style: "normal",
    },
    {
      path: "../public/fonts/Vazirmatn-Medium.ttf",
      weight: "500",
      style: "normal",
    },
    {
      path: "../public/fonts/Vazirmatn-Bold.ttf",
      weight: "700",
      style: "normal",
    },
  ],
  variable: "--font-vazirmatn",
  display: "swap",
  preload: true,
  fallback: ["Tahoma", "Arial", "sans-serif"],
});

const siteUrl = "https://maryamghabel.ir";

export const metadata: Metadata = {
  metadataBase: new URL(siteUrl),
  title: {
    default: "مریم قابل | روان‌شناس بالینی",
    template: "%s | مریم قابل",
  },
  description:
    "مریم قابل، روان‌شناس بالینی متخصص در زمینه اضطراب، افسردگی، تروما و روابط. ارائه خدمات مشاوره فردی، زوج‌درمانی و روان‌درمانی مبتنی بر شواهد در یک فضای امن و محرمانه.",
  keywords: [
    "روان‌شناس بالینی",
    "مشاوره روان‌شناسی",
    "روان‌درمانی",
    "درمان اضطراب",
    "درمان افسردگی",
    "زوج‌درمانی",
    "مریم قابل",
    "maryamghabel",
  ],
  authors: [{ name: "مریم قابل" }],
  creator: "مریم قابل",
  publisher: "مریم قابل",
  alternates: {
    canonical: "/",
  },
  openGraph: {
    type: "website",
    locale: "fa_IR",
    url: siteUrl,
    siteName: "مریم قابل | روان‌شناس بالینی",
    title: "مریم قابل | روان‌شناس بالینی",
    description:
      "روان‌شناس بالینی متخصص در اضطراب، افسردگی، تروما و روابط. مشاوره فردی و زوج‌درمانی مبتنی بر شواهد.",
  },
  twitter: {
    card: "summary_large_image",
    title: "مریم قابل | روان‌شناس بالینی",
    description:
      "روان‌شناس بالینی متخصص در اضطراب، افسردگی، تروما و روابط.",
  },
  robots: {
    index: true,
    follow: true,
    googleBot: {
      index: true,
      follow: true,
      "max-image-preview": "large",
    },
  },
};

export const viewport: Viewport = {
  themeColor: "#1B2845",
  colorScheme: "light",
};

export default function RootLayout({ children }: LayoutProps<"/">) {
  return (
    <html
      lang="fa"
      dir="rtl"
      className={`${vazirmatn.variable} h-full antialiased`}
      suppressHydrationWarning
    >
      <body className="min-h-full bg-background text-foreground flex flex-col font-sans">
        <SiteHeader />
        <main className="flex-1">{children}</main>
        <SiteFooter />
      </body>
    </html>
  );
}
