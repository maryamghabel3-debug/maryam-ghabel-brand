import { clsx, type ClassValue } from "clsx";
import { twMerge } from "tailwind-merge";

/**
 * Merge Tailwind CSS classes safely.
 *
 * Combines `clsx` (conditional class names) with `tailwind-merge`
 * (resolves conflicting Tailwind utilities, keeping the last one).
 *
 * @example
 * cn("px-2 py-1", isActive && "bg-gold", "px-4") // -> "py-1 bg-gold px-4"
 */
export function cn(...inputs: ClassValue[]): string {
  return twMerge(clsx(inputs));
}
