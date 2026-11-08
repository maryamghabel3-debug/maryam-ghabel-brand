import * as React from "react";
import { Slot } from "@radix-ui/react-slot";
import { cva, type VariantProps } from "class-variance-authority";

import { cn } from "@/lib/utils";

/**
 * Button — shadcn/ui-style component built on top of Radix Slot.
 *
 * Variants are tuned for the Maryam Ghabel brand palette:
 * - `gold`    : primary CTA (gold bg, navy text)
 * - `navy`    : secondary (navy bg, beige text)
 * - `outline` : bordered (gold border, navy text)
 * - `ghost`   : transparent (hover navy/5)
 */

const buttonVariants = cva(
  cn(
    "inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full",
    "font-medium text-sm transition-all duration-300",
    "focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-gold focus-visible:ring-offset-2 focus-visible:ring-offset-background",
    "disabled:pointer-events-none disabled:opacity-50",
    "[&_svg]:size-4 [&_svg]:shrink-0",
  ),
  {
    variants: {
      variant: {
        gold: "bg-gold text-navy shadow-sm hover:bg-gold-dark hover:shadow-md",
        navy: "bg-navy text-beige shadow-sm hover:bg-navy-dark hover:shadow-md",
        outline:
          "border border-gold/60 bg-transparent text-navy hover:bg-gold/10",
        ghost: "bg-transparent text-navy hover:bg-navy/5",
        link: "text-gold underline-offset-4 hover:underline",
      },
      size: {
        sm: "h-9 px-4 text-xs",
        md: "h-11 px-6 text-sm",
        lg: "h-12 px-8 text-base",
        icon: "size-11 p-0",
      },
    },
    defaultVariants: {
      variant: "gold",
      size: "md",
    },
  },
);

export interface ButtonProps
  extends React.ButtonHTMLAttributes<HTMLButtonElement>,
    VariantProps<typeof buttonVariants> {
  asChild?: boolean;
}

const Button = React.forwardRef<HTMLButtonElement, ButtonProps>(
  ({ className, variant, size, asChild = false, ...props }, ref) => {
    const Comp = asChild ? Slot : "button";
    return (
      <Comp
        ref={ref}
        className={cn(buttonVariants({ variant, size }), className)}
        {...props}
      />
    );
  },
);
Button.displayName = "Button";

export { Button, buttonVariants };
