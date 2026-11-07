<div dir="rtl" align="right">

# پرامپت ۰۶ — پرامپت‌های آمادهٔ ابزارهای تولید موشن گرافیک

> مجموعهٔ پرامپت‌های آماده برای ابزارهای تولید ویدیوی AI (Runway، Pika، Kling، Sora). این پرامپت‌ها به زبان انگلیسی نوشته شده‌اند چون این ابزارها با انگلیسی بهترین نتیجه را می‌دهند. توضیحات بالای هر قالب فارسی است.

---

## راهنمای استفاده

این فایل شامل **۶ قالب موشن گرافیک** برند مریم قابل است (مطابق `motion-graphics/motion-templates.md`). برای هر قالب، **۲ نمونهٔ پرامپت کامل** انگلیسی آماده شده — مجموعاً **۱۲ پرامپت**.

هر پرامپت شامل این فیلدهاست:
- **Scene description** — چه می‌بینیم
- **Camera** — حرکت/زاویهٔ دوربین
- **Lighting** — نورپردازی
- **Palette** — پالت رنگی (همیشه از پالت برند)
- **Motion style** — سبک و سرعت حرکت
- **Duration** — مدت زمان

**کد رنگ برند** (در همهٔ پرامپت‌ها ثابت):
- Navy `#1B2845` (۶۰٪ غالب)
- Beige `#E8DCC8` (۳۰٪)
- Gold `#C9A87C` (تأکید، حداکثر ۱۵٪)
- Charcoal `#0F1722` / `#2A2A2A` برای متن

> **نکتهٔ مهم**: ابزارهای AI در تولید متن فارسی ضعیف‌اند. در این پرامپت‌ها، متن را به‌صورت placeholder می‌گذاریم تا بعد از تولید ویدیو، متن فارسی را در After Effects یا Canva روی ویدیو قرار دهی. پرامپت فقط فضای بصری و حرکت را می‌سازد.

---

## قالب ۱ — نقل قول متحرک (Animated Quote)

> **توضیح فارسی**: پس‌زمینهٔ سرمه‌ای ساکن، نقل‌قولی خط‌به‌خط با fade-in ملایم ظاهر می‌شود. سبک Minimal Typography. مناسب ستون ۲ (موفقیت و فرسودگی). مدت: ۱۵ ثانیه. متن فارسی بعداً در After Effects اضافه می‌شود؛ ویدیوی AI فقط فضای ساکن و آرام را می‌سازد.

### نمونهٔ پرامپت ۱.الف — نقل قول سکوتِ موفقیت

```
Scene: A single deep navy blue (#1B2845) solid background, perfectly still and empty. No objects, no movement in the frame — only vast empty space. A very thin, barely visible horizontal gold (#C9A87C) line slowly draws itself across the lower third of the frame over 3 seconds, then fades. The entire frame breathes with absolute stillness, evoking silence and depth. Subtle film grain. No text in frame.

Camera: Completely static, locked-off shot. No camera movement at all. No zoom, no pan, no push-in. The stillness IS the message.

Lighting: Even, soft, flat lighting. No shadows, no highlights, no light source visible. A faint warm glow emanating from the bottom edge, as if light is rising gently from below — barely perceptible.

Palette: Background navy #1B2845. Single accent line gold #C9A87C. No other colors. Charcoal #2A2A2A for any UI elements. High-quality, muted, calm.

Motion style: Extremely slow, meditative. The gold line draws in with ease-in-out over 3 seconds, holds for 4 seconds, then fades to nothing over 2 seconds. Everything else is static. 30% slower than typical social media motion. No abrupt changes. Ambient, contemplative pace.

Duration: 15 seconds. 9:16 vertical aspect ratio for Reels/Stories, plus a 1:1 square version.

Mood: Silence after achievement. The stillness of reaching a goal and feeling empty. Contemplative, melancholic, profound.
```

### نمونهٔ پرامپت ۱.ب — نقل قول کافی‌بودن

```
Scene: A calm beige (#E8DCC8) background, soft and warm like aged paper, completely still. In the center, an empty space. Slowly, a single soft circle of warm light appears in the dead center, very subtle — like sunlight passing through a window onto a wall — then gently fades. Nothing else. The frame invites the eye to rest in the emptiness. Subtle texture, like fine grain or paper. No objects, no people, no text.

Camera: Locked off, perfectly static. No movement. A meditative, unmoving frame. The stillness communicates "enough."

Lighting: Soft natural window light from the upper left, diffused, warm. A faint pool of light in the center that breathes in and out very slowly (over 6 seconds), as if the room itself is inhaling and exhaling. Gentle, never harsh.

Palette: Background beige #E8DCC8. Center light pool warm gold #C9A87C at very low opacity (under 15%). Navy #1B2845 invisible at edges. Muted, earthy, serene.

Motion style: Minimal. The light pool slowly intensifies over 5 seconds, holds for 3 seconds, then slowly fades over 5 seconds. ease-in-out throughout. The pace is unhurried, like a long exhale. 30% slower than typical.

Duration: 15 seconds. 9:16 vertical and 1:1 square.

Mood: "Being is enough." Rest, permission, quiet warmth. The frame itself feels like a safe place to pause.
```

---

## قالب ۲ — الگوی تکراری (Repetitive Pattern)

> **توضیح فارسی**: یک خط بژ از سمت راست وارد می‌شود، مسیری منحنی می‌سازد، دایرهٔ ناقص می‌سازد و تکرار می‌شود. در تکرار سوم، خط طلایی می‌شود و می‌شکند. سبک Abstract Geometry. مناسب ستون ۱ (الگوهای ناخودآگاه). مدت: ۳۰ ثانیه.

### نمونهٔ پرامپت ۲.الف — الگوی انتخاب تکراری شریک

```
Scene: A deep navy (#1B2845) solid background. A single thin beige (#E8DCC8) line, like a thread of light, enters from the right edge and slowly traces a curved path in the center of the frame — it curves around and almost forms a complete circle but stops just short, leaving a gap. The line holds, then dissolves. A new beige line enters from the same right edge and traces the EXACT same curved path — the same incomplete circle, the same gap. It holds, dissolves. A third line enters, again the same path — but this time, halfway through, the line turns gold (#C9A87C) and breaks: it abandons the curved path and shoots straight upward off the top of the frame. The gold line lingers as a faint vertical trace, then fades. Pure abstract geometry, no recognizable objects.

Camera: Static, locked-off, straight-on. No camera movement. The motion is all within the frame, in the line itself.

Lighting: The beige line glows softly, as if lit from within — a faint self-illumination. The gold line glows slightly brighter when it appears. Background navy stays matte and flat. No external light source.

Palette: Background navy #1B2845. Line beige #E8DCC8 for the first two repetitions. Third repetition line gold #C9A87C when the pattern breaks. No other colors.

Motion style: The line draws itself slowly, ease-in-out, taking about 6 seconds per full path. Each repetition identical in timing and path. On the third, at the midpoint, the line transitions to gold over 0.5 seconds and deviates upward — faster, but still smooth, not sudden. The break feels like a release, not a violence. 30% slower than typical social motion.

Duration: 30 seconds. 9:16 vertical.

Mood: Repetition recognized and finally broken. The pattern seen, then escaped. Quiet revelation.
```

### نمونهٔ پرامپت ۲.ب — خودخرابی در لحظهٔ موفقیت

```
Scene: Deep navy (#1B2845) background. A thin beige (#E8DCC8) line slowly rises from the bottom center of the frame, climbing vertically upward in a straight, steady path — ascending like progress, like a rising line on a graph. It rises about two-thirds up the frame. Then, at the same point each time, it sharply curves back downward and returns to the bottom — a hooked, self-defeating shape, like a line climbing and then sabotaging itself. The full hooked shape holds, then fades. A second beige line repeats the exact same climb-and-fall. A third line begins the climb — this time it reaches the same danger point, hesitates (a tiny shimmer), then continues straight up, turning gold (#C9A87C), and exits the top of the frame without falling. The gold trace lingers, then fades. Abstract, geometric, no objects.

Camera: Locked off, static, straight-on. All motion is the line moving within the frame.

Lighting: Line self-illuminates with a soft glow. Background flat and matte. When the third line turns gold, its glow intensifies gently — a warm recognition.

Palette: Background navy #1B2845. Beige line #E8DCC8 for climbs. Gold #C9A87C for the final unbroken ascent. No other colors.

Motion style: Slow, deliberate. The climb takes 5 seconds (ease-in, slowing as it nears the danger point). The fall takes 2 seconds (ease-out). Each repetition identical. On the third, a 1.5-second pause at the danger point — a held breath — before continuing upward, slightly faster. Meditative pace throughout.

Duration: 30 seconds. 9:16 vertical.

Mood: Self-sabotage recognized and, finally, not enacted. The moment of choosing to keep climbing. Quiet triumph without celebration.
```

---

## قالب ۳ — قبل/بعد احساسی (Emotional Before/After)

> **توضیح فارسی**: صفحهٔ دو نیمهٔ عمودی. در ۱۵ ثانیهٔ اول سمت راست: کدر و سرد با کلمات تیره. در ۱۵ ثانیهٔ دوم سمت چپ: روشن‌تر و گرم با کلمات طلایی. انتقال با cross-dissolve آرام. سبک Abstract Geometry + Typography. مناسب ستون ۳ (درس‌های بالینی). مدت: ۳۰ ثانیه.

### نمونهٔ پرامپت ۳.الف — قبل/بعدِ فهم الگوی واکنش

```
Scene: A vertical split frame. LEFT half (seconds 0–15): a dark, muted navy (#1B2845) background, slightly desaturated and cold, with a faint haze. Three soft, dim charcoal-gray (#2A2A2A) shapes drift slowly — an amorphous, clenched, contracting cluster of shapes that pulse inward slightly, like tension held in the body. They feel tight, reactive, contracted. The shapes never settle. At second 15, a slow cross-dissolve begins. RIGHT half (seconds 15–30): the background warms to beige (#E8DCC8), soft and lit. The shapes transform into three open, calm, gently drifting forms — they expand outward, slow and unclenched, bathed in a faint warm gold (#C9A87C) glow along their edges. They settle into stillness. The transition is seamless and meditative. No text, no people, purely abstract emotional shapes.

Camera: Static, locked-off. No camera movement. The split is a clean vertical line down the center, which itself dissolves during the cross-dissolve at second 15.

Lighting: LEFT side: cold, flat, slightly shadowed — a gray-blue dimness, like an overcast room. RIGHT side: warm, soft, golden-hour-like glow from the upper right, gentle and inviting. The transition of light happens gradually through the dissolve.

Palette: LEFT — navy #1B2845 and charcoal #2A2A2A, desaturated, cold. RIGHT — beige #E8DCC8 with gold #C9A87C edge-glow on the shapes. The contrast between cold-navy and warm-beige IS the before/after.

Motion style: LEFT shapes: tight, pulsing inward, 30% slower than typical, tense micro-movements. RIGHT shapes: slow, expanding outward, drifting with long ease-in-out, eventually settling into near-stillness. The cross-dissolve at second 15 takes 2 full seconds — gradual, not abrupt. No hard cuts ever.

Duration: 30 seconds. 9:16 vertical.

Mood: Before — reaction, tension, contraction. After — pause, choice, release. The relief of a pattern finally seen. No judgment on the "before."
```

### نمونهٔ پرامپت ۳.ب — قبل/بعدِ شناخت فرسودگی

```
Scene: A vertical split frame. LEFT half (seconds 0–15): a deep navy (#1B2845) background. In the center, a single thin beige (#E8DCC8) line spins rapidly in a tight, small, repetitive circle — like a mind overthinking, a hamster wheel, a loop that never escapes. The circle is small and tight. The line moves with a nervous, repetitive energy, never resting. At second 15, a slow cross-dissolve. RIGHT half (seconds 15–30): the same line, now on a warm beige (#E8DCC8) background, has stopped circling. It lies horizontally, still, across the center of the frame — a single calm horizontal line, like a held breath finally exhaled. The line slowly fades to gold (#C9A87C) along its length and then gently dissolves into the warm background. Stillness. Pure abstract geometry.

Camera: Locked off, static. No movement. The split dissolves at second 15.

Lighting: LEFT: flat, cool, slightly dim — the dimness of overthinking late at night. RIGHT: warm, soft, a gentle glow from above, like morning light after a long night. The light itself transitions during the dissolve.

Palette: LEFT — navy #1B2845 background, beige #E8DCC8 spinning line, cool. RIGHT — beige #E8DCC8 background, the resting line fading from beige to gold #C9A87C, warm.

Motion style: LEFT line: fast, tight, repetitive circular motion — the ONLY fast motion allowed in this brand, and it represents anxiety, so it's purposeful. The circle is small. RIGHT line: completely still, then a slow fade to gold over 4 seconds, then a slow dissolve over 3 seconds. The contrast between the frantic loop and the final stillness IS the message. The cross-dissolve at second 15 takes 2.5 seconds.

Duration: 30 seconds. 9:16 vertical.

Mood: Before — the relentless spin of "must do more," burnout as a tight loop. After — the permission to stop, the line finally lying down. Rest as revelation.
```

---

## قالب ۴ — دایره الگوهای ناخودآگاه (Circle of Unconscious Patterns)

> **توضیح فارسی**: پس‌زمینهٔ بژ، یک دایرهٔ بزرگ سرمه‌ای در مرکز رسم می‌شود. پنج نقطه روی محیط یکی‌یکی هر ۸ ثانیه با رنگ طلایی روشن می‌شوند. در پایان همه با هم می‌درخشند. سبک Abstract Geometry + 2D. مناسب ستون ۱. مدت: ۶۰ ثانیه.

### نمونهٔ پرامپت ۴.الف — پنج الگوی ناخودآگاه در روابط

```
Scene: A warm beige (#E8DCC8) background, soft like fine paper. In the dead center, a large thin navy (#1B2845) circle slowly draws itself — the circumference line traces around over 3 seconds, completing a perfect circle. Five small navy dots sit evenly spaced around the circle's edge, dim at first. One by one, every 8 seconds, a dot lights up — transforming from dim navy to a warm glowing gold (#C9A87C), radiating a soft halo. Each dot, when it lights, sends a faint gold ripple outward along the circle's edge toward the next dot. After all five are lit (at ~43 seconds), all five glow together. At second 55, a single gold line traces the entire circumference, completing and unifying the circle in gold, then all softly pulses once and settles. No text, no people, pure sacred geometry. Symmetrical, centered, ceremonial.

Camera: Locked off, static, straight-on, perfectly centered on the circle. No camera movement whatsoever. Symmetry is sacred here.

Lighting: Soft, even, warm ambient light. The gold dots emit their own soft glow when they activate — a gentle radial light, like candles being lit one by one in a dark room. Background beige stays matte.

Palette: Background beige #E8DCC8. Circle outline navy #1B2845. Dots transition from dim navy to glowing gold #C9A87C. Final unifying line gold #C9A87C. Gold never exceeds 15% of the frame at any moment.

Motion style: Very slow, ceremonial. Circle draws over 3 seconds (ease-in-out). Each dot lights over 1.5 seconds with a soft fade-in glow, holds. Gold ripple travels between dots over 2 seconds. The final unifying line traces over 4 seconds. Everything 30% slower than typical. Each lighting feels like a quiet recognition. Meditative, reverent pace.

Duration: 60 seconds. 1:1 square (this template suits feed posts), plus a 16:9 version.

Mood: Five hidden patterns, one by one illuminated. The slow recognition that they form a single circle — a single unconscious system. Awe without alarm.
```

### نمونهٔ پرامپت ۴.ب — پنج چرخهٔ موفقیت و فرسودگی

```
Scene: A beige (#E8DCC8) background. In the center, a large thin navy (#1B2845) circle is drawn slowly. Around its edge, five navy dots. But this time, the dots are connected by faint, dim navy lines forming a pentagram-like star inside the circle (five lines connecting each dot to the others) — representing how the patterns interconnect. One by one, every 8 seconds, each dot lights gold (#C9A87C), and the two lines emanating from it also warm to a faint gold. As each dot activates, the internal star becomes slightly more visible. By the time all five are lit, the full star inside the circle glows softly gold — revealing a hidden structure that was invisible at the start. At second 55, all pulses once together. The structure was always there; it just needed light. Abstract, geometric, no people.

Camera: Locked off, perfectly centered, static. No movement. The revelation is in the lighting, not the camera.

Lighting: Warm, even ambient. Each gold dot emits a soft radial glow. As the star lines warm, they emit a faint light too. Background stays matte. The interconnecting structure emerges through accumulated light.

Palette: Background beige #E8DCC8. Circle and dots and star lines navy #1B2845 initially. Dots and their connecting lines transition to gold #C9A87C as they activate. Gold stays under 15% of frame.

Motion style: Slow, ceremonial, identical to template 4A. Each dot fades to gold over 1.5 seconds. Connecting lines warm gradually over 3 seconds as their endpoints activate. The final unified pulse at second 55 is a single soft brightness increase over 2 seconds, then back to resting glow. Meditative pace.

Duration: 60 seconds. 1:1 square and 16:9.

Mood: The hidden architecture of burnout and success-anxiety, revealed slowly. The realization that these five cycles are not separate — they are one interconnected system. Recognition, not condemnation.
```

---

## قالب ۵ — یک جمله در روز (Sentence of the Day)

> **توضیح فارسی**: پس‌زمینهٔ سرمه‌ای کاملاً ساکن، یک جمله با فونت بزرگ در مرکز، کلمات یکی‌یکی ظاهر می‌شوند. سبک Minimal Typography. مناسب ستون ۴ (بازتاب شخصی). مدت: ۱۵ ثانیه. متن فارسی بعداً اضافه می‌شود؛ ویدیوی AI فقط فضای ساکن را می‌سازد.

### نمونهٔ پرامپت ۵.الف — جملهٔ بودن کافی است

```
Scene: A single deep navy (#1B2845) solid background, perfectly still, empty, vast. Nothing in the frame except color and stillness. After 2 seconds, a single very faint warm spot of light, like sunlight through a distant window, slowly appears in the upper-left corner — barely visible, a soft warm glow that breathes in over 4 seconds, holds for 5 seconds, then slowly fades over 4 seconds. That is the entire video. The stillness is the content. No objects, no movement, no people, no text. A frame that asks the viewer to rest in it. Subtle film grain for texture.

Camera: Completely static. Locked off. No movement at all. No zoom, no pan. The stillness IS the message. This is a meditative frame.

Lighting: Flat, even base. The single warm light spot in the upper-left is the only light event — extremely subtle, like remembering a window. Warm, soft, never bright. It feels like a memory of light, not a real light.

Palette: Background navy #1B2845. The light spot warm gold #C9A87C at very low opacity (under 10%). Nothing else. Muted, profound.

Motion style: Minimal. The light spot fades in over 4 seconds (ease-in-out), holds at low intensity for 5 seconds, fades out over 4 seconds. Nothing else moves. 30% slower than typical. The pace is a long, slow breath. The frame invites stillness.

Duration: 15 seconds. 9:16 vertical and 1:1 square.

Mood: "Being is enough." A daily reminder delivered as pure stillness. Rest, permission, quietude. The frame itself is the comfort.
```

### نمونهٔ پرامپت ۵.ب — جملهٔ مکث کردن

```
Scene: A beige (#E8DCC8) background, soft and warm, like aged linen, completely still and empty. In the center, a single horizontal gold (#C9A87C) line, very thin, slowly draws itself from left to right over 5 seconds — like a slow exhale made visible, like the horizon line of a calm sea. Once complete, the line holds for 5 seconds, perfectly still. Then it slowly fades from the center outward — dissolving from its middle toward both ends — over 4 seconds, leaving the empty warm frame. Nothing else. No objects, no people, no text. The single line is the whole event. Subtle paper-grain texture.

Camera: Locked off, static, perfectly centered. No camera movement. The line is the only motion, and it is in the frame, not the camera.

Lighting: Soft, warm, even, flat. The gold line glows faintly from within, as if lit by its own quiet warmth. Background beige stays matte and calm. No external light source, no shadows.

Palette: Background beige #E8DCC8. Single line gold #C9A87C, kept thin and low-opacity (under 15% of frame). Charcoal #2A2A2A if any UI. Warm, earthy, minimal.

Motion style: Slow and meditative. Line draws left-to-right over 5 seconds (ease-in-out). Holds still for 5 seconds. Dissolves center-outward over 4 seconds. The dissolving-from-the-middle is meaningful — a pause that releases tension from its core. 30% slower than typical social motion. Each phase is a breath.

Duration: 15 seconds. 9:16 vertical and 1:1 square.

Mood: "Pause." The daily permission to stop. The line as a horizon of rest, then its gentle dissolution into warmth. Calm, unburdened, brief.
```

---

## قالب ۶ — داستان بالینی (Clinical Story)

> **توضیح فارسی**: تصاویر ۲D مسطح با رنگ‌های پالت. صحنه‌ها یکی‌یکی آرام ظاهر و ناپدید می‌شوند: صندلی، پنجره، فنجان چای، دو دست، در نیمه‌باز. انسان‌ها فقط سیلیوئت. سبک 2D Illustration. مناسب ستون ۳ (درس‌های بالینی). مدت: ۶۰ ثانیه.

### نمونهٔ پرامپت ۶.الف — مراجعی که همیشه موافق است

```
Scene: A sequence of flat 2D illustrated scenes, each appearing and disappearing slowly with cross-dissolve transitions. Each scene is minimal, with only one or two objects, in the brand palette. Scene 1 (0–10s): A single empty wooden chair, seen from a slight side angle, in a softly lit room with a beige (#E8DCC8) wall. A window on the left lets in pale morning light. The chair is empty. Still. Scene 2 (10–20s): The same chair, now with the silhouette of a person seated — featureless, faceless, a simple dark navy (#1B2845) silhouette. On a small side table, a cup of tea, steam rising very slowly. Scene 3 (20–30s): Close on the silhouette's hands — flat, simple, resting calmly on the lap. The hands do not move. A long, held stillness. Scene 4 (30–40s): A door, slightly ajar, navy (#1B2845), warm light spilling through the gap from the other side — gold (#C9A87C). The door does not open further. The light just glows. Scene 5 (40–50s): Back to the empty chair. The silhouette is gone. The tea cup remains, steam still rising slowly. The room is quiet. Scene 6 (50–60s): Just the window, light, empty wall. Slow fade to beige. All scenes flat 2D illustration style, no gradients, no realism, simple shapes, hand-drawn feeling.

Camera: Mostly static, locked-off, with very slow, barely perceptible push-ins (over 8 seconds, barely noticeable). The camera moves as slowly as a held breath. No quick moves. Each scene is a still painting that barely lives.

Lighting: Soft, natural morning light from the left window in every scene. Warm, diffused, never harsh. The door light in scene 4 is gold and warm, the only "dramatic" light — gentle. Light feels lived-in, quiet, real.

Palette: Walls and background beige #E8DCC8. Silhouette and chair navy #1B2845. Door and warm light accents gold #C9A87C. Tea cup and small objects in muted earthy tones. No saturated colors. All within the brand palette. Gold stays under 15%.

Motion style: Extremely slow. Steam rises over 5 seconds per wisp. The silhouette never animates beyond almost-imperceptible breathing. Light shifts over 8 seconds. Cross-dissolve transitions take 2 seconds each. 30% slower than typical. Each scene is a held moment. No fast movement anywhere.

Duration: 60 seconds. 9:16 vertical (primary), with a 16:9 version for YouTube.

Mood: A clinical story of someone who "always agrees" — told through still objects. The empty chair, the held hands, the door that never fully opens. Melancholy, tenderness, the weight of unspoken things. Based on generalized clinical patterns, not a real client.
```

### نمونهٔ پرامپت ۶.ب — گریه‌ای که درمان می‌کند

```
Scene: A sequence of flat 2D illustrated scenes, slow cross-dissolves between each. Minimal, brand palette. Scene 1 (0–10s): A window with pale morning light, beige (#E8DCC8) wall, an empty tissue box on a small wooden table. Still. Scene 2 (10–20s): The silhouette of a person, navy (#1B2845), seated, head slightly bowed. A single gold (#C9A87C) teardrop shape — stylized, geometric, not realistic — appears at the silhouette's cheek and slowly falls, very slowly, over 4 seconds, into an open hand below. The drop is the only motion. Scene 3 (20–30s): Close on the open hand. The teardrop lands and, on contact, gently ripples outward as concentric thin gold circles — like water disturbed by a single drop — expanding slowly across the frame, then fading. The ripple is warm, not sad. Scene 4 (30–40s): The silhouette, now sitting up slightly straighter. The chair. A window. Light has shifted — warmer now, more gold entering the room. The room feels lighter. Scene 5 (40–50s): The tissue box, now with one tissue pulled slightly out and resting — evidence of the release, not of sadness. Still. Scene 6 (50–60s): Just the window, now full of warm gold light. The empty frame. Slow fade to beige. All flat 2D illustration, simple, hand-drawn feeling.

Camera: Static, locked-off, with very slow imperceptible drift. Each scene is a held painting. No movement beyond the teardrop and the ripples. The stillness honors the moment.

Lighting: Begins pale and cool morning light (scene 1), gradually warming through the sequence — by scene 6 the light is full warm gold. The light shift IS the emotional arc: from the coolness of held grief to the warmth of release. Subtle, gradual, never sudden.

Palette: Walls beige #E8DCC8. Silhouette and chair navy #1B2845. Teardrop and ripples gold #C9A87C. Tissue box and objects in muted earthy tones. The gold grows in presence through the video but never exceeds 15% of any frame.

Motion style: Extremely slow. The teardrop falls over 4 seconds. Ripples expand over 6 seconds and fade over 3. The light warming is imperceptible from second to second but clear across the full minute. Cross-dissolves take 2.5 seconds. 30% slower than typical. Each moment is honored with stillness.

Duration: 60 seconds. 9:16 vertical, with a 16:9 version.

Mood: A cry that heals rather than saddens. The release of something long held. Warmth entering a room that was cold. Based on generalized clinical patterns — never a real client. Tender, redemptive, quiet.
```

---

## یادداشت نهایی برای استفادهٔ در ابزارهای AI

۱. **متن فارسی بعداً اضافه شود**: ابزارهای AI متن فارسی را خوب تولید نمی‌کنند. پرامپت‌های بالا فقط فضای بصری و حرکت را می‌سازند. متن فارسی (نقل‌قول‌ها، کلمات کلیدی، CTA) را بعد از تولید ویدیو در **After Effects** یا **Canva** روی ویدیو قرار بده.

۲. **نسبت تصویر**: هر پرامپت، دو نسخه بخواه — ۹:۱۶ (استوری/Reels) و ۱:۱ (فید). برای قالب‌های داستانی ۶۰ ثانیه‌ای، نسخهٔ ۱۶:۹ (یوتیوب) هم مفید است.

۳. **seed و سازگاری**: برای حفظ سبک در چند ویدیو، از یک seed ثابت استفاده کن و سبک‌پرامپت (style reference) را در Runway/Kling ذخیره کن.

۴. **بازبینی قانون طلایی**: هر ویدیو باید یک «چرا» را پاسخ دهد. اگر ویدیوی تولیدشده آموزشی یا لیست‌وار شد، آن را رد کن.

۵. **هشدار درمان**: ویدیوهای ستون ۳ (درس بالینی) باید در توضیحات پست هشدار «جایگزین درمان نیست» داشته باشند.

---

## نسخهٔ سند

- نسخه: **۱.۰**
- تاریخ: آذر ۱۴۰۵
- نگهدارنده: مریم قابل
- مرجع: [`../motion-graphics/motion-templates.md`](../motion-graphics/motion-templates.md)، [`../motion-graphics/motion-strategy.md`](../motion-graphics/motion-strategy.md)، [`../brand/BRAND-IDENTITY.md`](../brand/BRAND-IDENTITY.md)

</div>
