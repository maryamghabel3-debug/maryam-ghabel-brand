"use client";

import * as React from "react";
import { CheckCircle2, Loader2 } from "lucide-react";

import { Button } from "@/components/ui/button";
import { cn } from "@/lib/utils";

/**
 * ContactForm — front-end only contact form. Submission is logged to
 * the console and a success alert is shown.
 */
interface FormState {
  name: string;
  email: string;
  message: string;
}

const INITIAL_STATE: FormState = { name: "", email: "", message: "" };

export function ContactForm() {
  const [state, setState] = React.useState<FormState>(INITIAL_STATE);
  const [status, setStatus] = React.useState<"idle" | "loading" | "done">(
    "idle",
  );

  const update =
    <K extends keyof FormState>(key: K) =>
    (
      e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>,
    ) => {
      setState((prev) => ({ ...prev, [key]: e.target.value }));
    };

  const handleSubmit = (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    setStatus("loading");
    console.log("[ContactForm] submit payload:", state);

    window.setTimeout(() => {
      setStatus("done");
      window.alert("پیام شما دریافت شد. پاسخ شما در نهایت از طریق ایمیل ارسال خواهد شد.");
      setState(INITIAL_STATE);
      setStatus("idle");
    }, 700);
  };

  const inputBaseClass =
    "w-full rounded-xl border border-border bg-background px-4 py-3 text-sm text-soft-black placeholder:text-muted-foreground transition-colors focus:border-gold focus:outline-none focus:ring-2 focus:ring-gold/30";
  const labelBaseClass = "mb-1.5 block text-sm font-medium text-navy";

  return (
    <form
      onSubmit={handleSubmit}
      className="grid grid-cols-1 gap-5 sm:grid-cols-2"
    >
      <div className="sm:col-span-1">
        <label htmlFor="cf-name" className={labelBaseClass}>
          نام
        </label>
        <input
          id="cf-name"
          type="text"
          required
          autoComplete="name"
          value={state.name}
          onChange={update("name")}
          placeholder="نام شما"
          className={inputBaseClass}
        />
      </div>

      <div className="sm:col-span-1">
        <label htmlFor="cf-email" className={labelBaseClass}>
          ایمیل
        </label>
        <input
          id="cf-email"
          type="email"
          required
          autoComplete="email"
          dir="ltr"
          value={state.email}
          onChange={update("email")}
          placeholder="email@example.com"
          className={cn(inputBaseClass, "text-right")}
        />
      </div>

      <div className="sm:col-span-2">
        <label htmlFor="cf-message" className={labelBaseClass}>
          پیام شما
        </label>
        <textarea
          id="cf-message"
          rows={5}
          required
          value={state.message}
          onChange={update("message")}
          placeholder="هر چیزی که دوست دارید بدانم را بنویسید…"
          className={cn(inputBaseClass, "resize-none")}
        />
      </div>

      <div className="sm:col-span-2">
        <Button
          type="submit"
          size="lg"
          disabled={status === "loading" || status === "done"}
        >
          {status === "loading" ? (
            <>
              <Loader2 className="size-4 animate-spin" aria-hidden="true" />
              در حال ارسال…
            </>
          ) : status === "done" ? (
            <>
              <CheckCircle2 className="size-4" aria-hidden="true" />
              ارسال شد
            </>
          ) : (
            "ارسال پیام"
          )}
        </Button>
      </div>
    </form>
  );
}
