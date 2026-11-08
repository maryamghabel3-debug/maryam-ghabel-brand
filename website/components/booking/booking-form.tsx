"use client";

import * as React from "react";
import { CheckCircle2, Loader2 } from "lucide-react";

import { Button } from "@/components/ui/button";
import { cn } from "@/lib/utils";

/**
 * BookingForm — front-end only booking request form.
 *
 * No server action is wired. On submit, the form's state is logged to
 * the console and a success alert is shown. All fields reset after.
 */
type Subject =
  | "روابط"
  | "فرسودگی شغلی"
  | "بحران هویت"
  | "مهاجرت"
  | "سایر";

type TimePref = "صبح" | "ظهر" | "عصر";

const SUBJECTS: ReadonlyArray<Subject> = [
  "روابط",
  "فرسودگی شغلی",
  "بحران هویت",
  "مهاجرت",
  "سایر",
];

const TIME_PREFS: ReadonlyArray<TimePref> = ["صبح", "ظهر", "عصر"];

interface FormState {
  name: string;
  phone: string;
  email: string;
  subject: Subject | "";
  message: string;
  timePref: TimePref | "";
}

const INITIAL_STATE: FormState = {
  name: "",
  phone: "",
  email: "",
  subject: "",
  message: "",
  timePref: "",
};

export function BookingForm() {
  const [state, setState] = React.useState<FormState>(INITIAL_STATE);
  const [status, setStatus] = React.useState<"idle" | "loading" | "done">(
    "idle",
  );

  const update =
    <K extends keyof FormState>(key: K) =>
    (
      e: React.ChangeEvent<
        HTMLInputElement | HTMLTextAreaElement | HTMLSelectElement
      >,
    ) => {
      setState((prev) => ({ ...prev, [key]: e.target.value as FormState[K] }));
    };

  const handleSubmit = (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    setStatus("loading");

    // Front-end only: log payload, simulate small delay for UX, then alert.
    console.log("[BookingForm] submit payload:", state);

    window.setTimeout(() => {
      setStatus("done");
      window.alert(
        "درخواست شما با موفقیت ثبت شد. حداکثر تا ۲۴ ساعت آینده برای تعیین زمان تماس اولیه با شما تماس گرفته خواهد شد.",
      );
      setState(INITIAL_STATE);
      setStatus("idle");
    }, 700);
  };

  const inputBaseClass =
    "w-full rounded-xl border border-border bg-background px-4 py-3 text-sm text-soft-black placeholder:text-muted-foreground transition-colors focus:border-gold focus:outline-none focus:ring-2 focus:ring-gold/30";

  const labelBaseClass =
    "mb-1.5 block text-sm font-medium text-navy";

  return (
    <form onSubmit={handleSubmit} className="grid grid-cols-1 gap-5 sm:grid-cols-2">
      {/* Name */}
      <div className="sm:col-span-1">
        <label htmlFor="bf-name" className={labelBaseClass}>
          نام و نام خانوادگی
        </label>
        <input
          id="bf-name"
          type="text"
          required
          autoComplete="name"
          value={state.name}
          onChange={update("name")}
          placeholder="مثلاً مریم رضایی"
          className={inputBaseClass}
        />
      </div>

      {/* Phone */}
      <div className="sm:col-span-1">
        <label htmlFor="bf-phone" className={labelBaseClass}>
          شماره تماس
        </label>
        <input
          id="bf-phone"
          type="tel"
          required
          inputMode="tel"
          autoComplete="tel"
          dir="ltr"
          value={state.phone}
          onChange={update("phone")}
          placeholder="0912 345 6789"
          className={cn(inputBaseClass, "text-right")}
        />
      </div>

      {/* Email (optional) */}
      <div className="sm:col-span-2">
        <label htmlFor="bf-email" className={labelBaseClass}>
          ایمیل <span className="text-muted-foreground font-normal">(اختیاری)</span>
        </label>
        <input
          id="bf-email"
          type="email"
          autoComplete="email"
          dir="ltr"
          value={state.email}
          onChange={update("email")}
          placeholder="email@example.com"
          className={cn(inputBaseClass, "text-right")}
        />
      </div>

      {/* Subject dropdown */}
      <div className="sm:col-span-1">
        <label htmlFor="bf-subject" className={labelBaseClass}>
          موضوع مورد نظر
        </label>
        <select
          id="bf-subject"
          required
          value={state.subject}
          onChange={update("subject")}
          className={cn(inputBaseClass, "appearance-none bg-beige-light/40")}
        >
          <option value="" disabled>
            یک موضوع را انتخاب کنید…
          </option>
          {SUBJECTS.map((s) => (
            <option key={s} value={s}>
              {s}
            </option>
          ))}
        </select>
      </div>

      {/* Time preference */}
      <div className="sm:col-span-1">
        <span className={labelBaseClass}>ترجیح زمان جلسه</span>
        <div
          role="radiogroup"
          aria-label="ترجیح زمان"
          className="grid grid-cols-3 gap-2"
        >
          {TIME_PREFS.map((pref) => {
            const active = state.timePref === pref;
            return (
              <label
                key={pref}
                className={cn(
                  "cursor-pointer rounded-xl border px-3 py-2.5 text-center text-sm transition-all",
                  active
                    ? "border-gold bg-gold/15 text-navy font-medium"
                    : "border-border bg-background text-navy/70 hover:border-gold/50 hover:text-navy",
                )}
              >
                <input
                  type="radio"
                  name="timePref"
                  value={pref}
                  checked={active}
                  onChange={update("timePref")}
                  required
                  className="sr-only"
                />
                {pref}
              </label>
            );
          })}
        </div>
      </div>

      {/* Message textarea */}
      <div className="sm:col-span-2">
        <label htmlFor="bf-message" className={labelBaseClass}>
          توضیح کوتاه
        </label>
        <textarea
          id="bf-message"
          rows={4}
          value={state.message}
          onChange={update("message")}
          placeholder="در چند خط بنویسید چه چیزی شما را به اینجا رسانده…"
          className={cn(inputBaseClass, "resize-none")}
        />
      </div>

      {/* Submit */}
      <div className="sm:col-span-2 mt-2 flex flex-col items-start gap-3 sm:flex-row sm:items-center">
        <Button
          type="submit"
          size="lg"
          disabled={status === "loading" || status === "done"}
          className="w-full sm:w-auto"
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
            "ارسال درخواست"
          )}
        </Button>
        <p className="text-xs text-muted-foreground">
          با ارسال این فرم، تنها یک درخواست اولیه ثبت می‌شود. جلسه پس از تماس
          تأییدی نهایی می‌شود.
        </p>
      </div>
    </form>
  );
}
