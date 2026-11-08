import * as React from "react";

/**
 * Brand icon set — simple inline SVGs for social platforms whose
 * logos aren't included in lucide-react v1.x. Each icon inherits the
 * current color via `currentColor` and respects `className` sizing.
 */

type IconProps = React.SVGProps<SVGSVGElement>;

export function InstagramIcon(props: IconProps) {
  return (
    <svg
      viewBox="0 0 24 24"
      fill="none"
      stroke="currentColor"
      strokeWidth={1.8}
      strokeLinecap="round"
      strokeLinejoin="round"
      aria-hidden="true"
      {...props}
    >
      <rect x="3" y="3" width="18" height="18" rx="5" ry="5" />
      <circle cx="12" cy="12" r="4" />
      <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" />
    </svg>
  );
}

export function LinkedInIcon(props: IconProps) {
  return (
    <svg
      viewBox="0 0 24 24"
      fill="none"
      stroke="currentColor"
      strokeWidth={1.8}
      strokeLinecap="round"
      strokeLinejoin="round"
      aria-hidden="true"
      {...props}
    >
      <rect x="3" y="3" width="18" height="18" rx="3" ry="3" />
      <path d="M8 10v7" />
      <path d="M8 7v.01" />
      <path d="M12 17v-4a2 2 0 0 1 4 0v4" />
      <path d="M12 17v-7" />
    </svg>
  );
}

/**
 * TelegramIcon — simplified paper-plane glyph that reads as the
 * Telegram logo. Inherits `currentColor`.
 */
export function TelegramIcon(props: IconProps) {
  return (
    <svg
      viewBox="0 0 24 24"
      fill="currentColor"
      aria-hidden="true"
      {...props}
    >
      <path d="M21.94 4.27a1.2 1.2 0 0 0-1.27-.18L3.6 11.05c-1.07.43-1.06 1.97.02 2.38l4.18 1.59 1.62 5.13c.27.86 1.34 1.12 1.97.48l2.31-2.22 4.27 3.13c.71.52 1.72.13 1.9-.74l3.07-14.7a1.18 1.18 0 0 0-.27-1.06zM9.7 14.43l8.5-5.86c.18-.12.37.1.23.26l-6.97 6.34a1.2 1.2 0 0 0-.37.78l-.18 1.78-.74-2.28a.6.6 0 0 1 .07-.5z" />
    </svg>
  );
}

/**
 * WhatsAppIcon — stylized speech bubble with the WhatsApp handset.
 * Inherits `currentColor`.
 */
export function WhatsAppIcon(props: IconProps) {
  return (
    <svg
      viewBox="0 0 24 24"
      fill="currentColor"
      aria-hidden="true"
      {...props}
    >
      <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38a9.9 9.9 0 0 0 4.79 1.22h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm5.8 14.16c-.25.7-1.45 1.34-2 1.42-.51.08-1.17.11-1.88-.12-.43-.14-.99-.32-1.7-.63-2.98-1.29-4.93-4.3-5.08-4.5-.15-.2-1.22-1.62-1.22-3.1 0-1.47.77-2.2 1.05-2.5.27-.3.6-.37.8-.37.2 0 .4 0 .57.01.18.01.43-.07.67.51.25.59.85 2.04.92 2.19.07.15.12.32.02.52-.1.2-.15.32-.3.5-.15.18-.31.4-.45.53-.15.15-.3.31-.13.6.17.3.76 1.26 1.64 2.04 1.13 1.01 2.08 1.32 2.38 1.47.3.15.47.13.64-.08.17-.2.74-.86.94-1.16.2-.3.4-.25.67-.15.27.1 1.7.8 1.99.95.3.15.5.22.57.35.07.13.07.74-.18 1.44z" />
    </svg>
  );
}
