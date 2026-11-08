"""
موشن گرافیک نسخه ۳ — «۴ الگوی ناخودآگاه در روابط»
با Manim + شبکه ۱۰۰ آدمک + ۴ کارت

مدت انیمیشن: ۶۴ ثانیه (هماهنگ با صدا)
"""

from manim import *
import arabic_reshaper
import json
import os

# ============================================================
# تنظیمات
# ============================================================
OUTPUT_DIR = "/home/z/my-project/download/motion-v3"
WORD_TIMING_PATH = os.path.join(OUTPUT_DIR, "audio", "word_timing.json")

# پالت برند
NAVY = "#1B2845"
BEIGE = "#E8DCC8"
GOLD = "#C9A87C"
DARK_RED = "#8B3A4A"

# رنگ‌های هر بخش
COLOR_1 = "#9B59B6"  # بنفش
COLOR_2 = "#1ABC9C"  # فیروزه‌ای
COLOR_3 = "#27AE60"  # سبز
COLOR_4 = "#E67E22"  # نارنجی

FONT_PATH = "/home/z/my-project/fonts/Vazirmatn-Bold.ttf"
FONT_REGULAR = "/home/z/my-project/fonts/Vazirmatn-Regular.ttf"

def fa(text):
    return arabic_reshaper.reshape(text)

# ============================================================
# صحنه اصلی — با تایمینگ هماهنگ با صدا
# ============================================================

class UnconsciousPatterns(Scene):
    def construct(self):
        # پس‌زمینه
        bg = Rectangle(width=16, height=9, fill_color=NAVY, fill_opacity=1, stroke_width=0)
        self.add(bg)
        
        # واترمارک
        watermark = Text("@maryam.ghabel", font=FONT_REGULAR, font_size=14, color="#5A6680")
        watermark.move_to([7, 4.2, 0])
        self.add(watermark)
        
        # ===== ساخت شبکه ۱۰۰ آدمک =====
        person_grid = VGroup()
        person_size = 0.18
        person_spacing = 0.28
        grid_width = 10 * person_spacing
        grid_start_x = -grid_width / 2 + person_spacing / 2
        grid_start_y = 1.5
        
        for row in range(10):
            for col in range(10):
                head = Circle(radius=person_size/2, color="#3A4A6B", fill_opacity=1, stroke_width=0)
                body = Rectangle(width=person_size*0.6, height=person_size*0.8, 
                                 color="#3A4A6B", fill_opacity=1, stroke_width=0)
                head.move_to([grid_start_x + col * person_spacing, 
                              grid_start_y + row * person_spacing + 0.12, 0])
                body.move_to([grid_start_x + col * person_spacing, 
                              grid_start_y + row * person_spacing - 0.05, 0])
                person_grid.add(VGroup(head, body))
        
        self.add(person_grid)
        
        # ===== ۴ کارت پایین =====
        card_width = 2.8
        card_height = 1.6
        card_y = -2.8
        card_spacing = 0.4
        total_cards_width = 4 * card_width + 3 * card_spacing
        card_start_x = -total_cards_width / 2 + card_width / 2
        
        cards = []
        card_numbers = ["۱", "۲", "۳", "۴"]
        card_colors = [COLOR_1, COLOR_2, COLOR_3, COLOR_4]
        
        for i in range(4):
            x = card_start_x + i * (card_width + card_spacing)
            card_frame = RoundedRectangle(
                width=card_width, height=card_height, corner_radius=0.15,
                color=card_colors[i], stroke_width=2,
                fill_color="#0F1828", fill_opacity=1
            )
            card_frame.move_to([x, card_y, 0])
            
            num_text = Text(card_numbers[i], font=FONT_PATH, font_size=28, color=card_colors[i])
            num_text.move_to([x, card_y + 0.5, 0])
            
            pct_text = Text(fa("٪۰"), font=FONT_PATH, font_size=36, color="#FFFFFF")
            pct_text.move_to([x, card_y - 0.1, 0])
            
            label_text = Text("", font=FONT_PATH, font_size=18, color=card_colors[i])
            label_text.move_to([x, card_y - 0.6, 0])
            
            card_group = VGroup(card_frame, num_text, pct_text, label_text)
            cards.append({
                "group": card_group,
                "frame": card_frame,
                "number": num_text,
                "percent": pct_text,
                "label": label_text,
                "x": x,
                "color": card_colors[i],
            })
            self.add(card_group)
        
        # عنوان و توضیحات
        title = Text(fa("۴ الگوی ناخودآگاه در روابط"), 
                     font=FONT_PATH, font_size=28, color=BEIGE)
        title.move_to([0, 3.8, 0])
        self.add(title)
        
        explanation = Text("", font=FONT_PATH, font_size=18, color="#8A9AB0")
        explanation.move_to([0, -4.2, 0])
        self.add(explanation)
        
        # ============================================================
        # مرحله ۱: قلاب (۰ تا ۵s) — شبکه خاموش → ۵ نفر نارنجی
        # ============================================================
        self.wait(2.0)  # تماشای شبکه خاموش + عنوان
        
        # ۵ آدمک آخر روشن می‌شن
        highlight_persons = VGroup()
        for i in range(5):
            person = person_grid[9 * 10 + (5 + i)]
            new_head = Circle(radius=person_size/2, color=COLOR_4, fill_opacity=1, stroke_width=0)
            new_body = Rectangle(width=person_size*0.6, height=person_size*0.8, 
                                 color=COLOR_4, fill_opacity=1, stroke_width=0)
            new_head.move_to(person[0].get_center())
            new_body.move_to(person[1].get_center())
            highlight_persons.add(VGroup(new_head, new_body))
        
        self.play(FadeIn(highlight_persons), run_time=1.5)
        
        # ============================================================
        # مرحله ۲: تشخیص (۵ تا ۸.۷s)
        # ============================================================
        new_title2 = Text(fa("چون سیم‌کشی روانشون فرق داره"), 
                          font=FONT_PATH, font_size=26, color=GOLD)
        new_title2.move_to([0, 3.8, 0])
        self.play(Transform(title, new_title2), run_time=1.0)
        self.wait(2.7)
        
        # ============================================================
        # مرحله ۳: شماره ۱ - در دسترس نیست (۸.۷ تا ۲۱.۸s ≈ ۱۳ ثانیه)
        # ============================================================
        group1 = VGroup()
        for i in range(45):
            row = i // 10
            col = i % 10
            person = person_grid[row * 10 + col]
            new_head = Circle(radius=person_size/2, color=COLOR_1, fill_opacity=1, stroke_width=0)
            new_body = Rectangle(width=person_size*0.6, height=person_size*0.8, 
                                 color=COLOR_1, fill_opacity=1, stroke_width=0)
            new_head.move_to(person[0].get_center())
            new_body.move_to(person[1].get_center())
            group1.add(VGroup(new_head, new_body))
        
        new_title3 = Text(fa("شماره ۱: عاشق کسی که در دسترس نیست"), 
                          font=FONT_PATH, font_size=24, color=COLOR_1)
        new_title3.move_to([0, 3.8, 0])
        self.play(Transform(title, new_title3), run_time=0.8)
        
        self.play(FadeIn(group1), run_time=1.5)
        
        # فعال‌سازی کارت ۱
        card1 = cards[0]
        new_pct = Text(fa("٪۴۵"), font=FONT_PATH, font_size=42, color=COLOR_1)
        new_pct.move_to([card1["x"], card_y - 0.1, 0])
        new_label = Text(fa("در دسترس نیست"), font=FONT_PATH, font_size=16, color=COLOR_1)
        new_label.move_to([card1["x"], card_y - 0.6, 0])
        new_frame = RoundedRectangle(
            width=card_width, height=card_height, corner_radius=0.15,
            color=COLOR_1, stroke_width=3, fill_color="#1F1530", fill_opacity=1
        )
        new_frame.move_to([card1["x"], card_y, 0])
        self.play(
            Transform(card1["frame"], new_frame),
            Transform(card1["percent"], new_pct),
            Transform(card1["label"], new_label),
            run_time=1.0
        )
        
        new_exp = Text(fa("عاشق نیستی، عاشق دوری"), 
                       font=FONT_PATH, font_size=18, color=BEIGE)
        new_exp.move_to([0, -4.2, 0])
        self.play(Transform(explanation, new_exp), run_time=0.8)
        self.wait(7.7)  # بقیه زمان شماره ۱
        
        # ============================================================
        # مرحله ۴: شماره ۲ - انتقاد (۲۱.۸ تا ۳۴.۲s ≈ ۱۲.۴ ثانیه)
        # ============================================================
        group2 = VGroup()
        for i in range(35):
            idx = 45 + i
            row = idx // 10
            col = idx % 10
            person = person_grid[row * 10 + col]
            new_head = Circle(radius=person_size/2, color=COLOR_2, fill_opacity=1, stroke_width=0)
            new_body = Rectangle(width=person_size*0.6, height=person_size*0.8, 
                                 color=COLOR_2, fill_opacity=1, stroke_width=0)
            new_head.move_to(person[0].get_center())
            new_body.move_to(person[1].get_center())
            group2.add(VGroup(new_head, new_body))
        
        new_title4 = Text(fa("شماره ۲: عاشق کسی که ازت انتقاد می‌کنه"), 
                          font=FONT_PATH, font_size=24, color=COLOR_2)
        new_title4.move_to([0, 3.8, 0])
        self.play(Transform(title, new_title4), run_time=0.8)
        
        self.play(FadeIn(group2), run_time=1.5)
        
        card2 = cards[1]
        new_pct2 = Text(fa("٪۳۵"), font=FONT_PATH, font_size=42, color=COLOR_2)
        new_pct2.move_to([card2["x"], card_y - 0.1, 0])
        new_label2 = Text(fa("انتقاد"), font=FONT_PATH, font_size=16, color=COLOR_2)
        new_label2.move_to([card2["x"], card_y - 0.6, 0])
        new_frame2 = RoundedRectangle(
            width=card_width, height=card_height, corner_radius=0.15,
            color=COLOR_2, stroke_width=3, fill_color="#0F2828", fill_opacity=1
        )
        new_frame2.move_to([card2["x"], card_y, 0])
        self.play(
            Transform(card2["frame"], new_frame2),
            Transform(card2["percent"], new_pct2),
            Transform(card2["label"], new_label2),
            run_time=1.0
        )
        
        new_exp2 = Text(fa("آشناتره با درد تا با محبت"), 
                        font=FONT_PATH, font_size=18, color=BEIGE)
        new_exp2.move_to([0, -4.2, 0])
        self.play(Transform(explanation, new_exp2), run_time=0.8)
        self.wait(7.3)
        
        # ============================================================
        # مرحله ۵: شماره ۳ - نجات (۳۴.۲ تا ۴۶.۸s ≈ ۱۲.۶ ثانیه)
        # ============================================================
        group3 = VGroup()
        for i in range(15):
            idx = 80 + i
            row = idx // 10
            col = idx % 10
            person = person_grid[row * 10 + col]
            new_head = Circle(radius=person_size/2, color=COLOR_3, fill_opacity=1, stroke_width=0)
            new_body = Rectangle(width=person_size*0.6, height=person_size*0.8, 
                                 color=COLOR_3, fill_opacity=1, stroke_width=0)
            new_head.move_to(person[0].get_center())
            new_body.move_to(person[1].get_center())
            group3.add(VGroup(new_head, new_body))
        
        new_title5 = Text(fa("شماره ۳: عاشق کسی که باید نجاتش بدی"), 
                          font=FONT_PATH, font_size=24, color=COLOR_3)
        new_title5.move_to([0, 3.8, 0])
        self.play(Transform(title, new_title5), run_time=0.8)
        
        self.play(FadeIn(group3), run_time=1.5)
        
        card3 = cards[2]
        new_pct3 = Text(fa("٪۱۵"), font=FONT_PATH, font_size=42, color=COLOR_3)
        new_pct3.move_to([card3["x"], card_y - 0.1, 0])
        new_label3 = Text(fa("نجات"), font=FONT_PATH, font_size=16, color=COLOR_3)
        new_label3.move_to([card3["x"], card_y - 0.6, 0])
        new_frame3 = RoundedRectangle(
            width=card_width, height=card_height, corner_radius=0.15,
            color=COLOR_3, stroke_width=3, fill_color="#0F2818", fill_opacity=1
        )
        new_frame3.move_to([card3["x"], card_y, 0])
        self.play(
            Transform(card3["frame"], new_frame3),
            Transform(card3["percent"], new_pct3),
            Transform(card3["label"], new_label3),
            run_time=1.0
        )
        
        new_exp3 = Text(fa("با هم غرق می‌شین، نه نجات"), 
                        font=FONT_PATH, font_size=18, color=BEIGE)
        new_exp3.move_to([0, -4.2, 0])
        self.play(Transform(explanation, new_exp3), run_time=0.8)
        self.wait(7.5)
        
        # ============================================================
        # مرحله ۶: شماره ۴ - مناسب (۴۶.۸ تا ۵۹.۱s ≈ ۱۲.۳ ثانیه)
        # ============================================================
        new_title6 = Text(fa("شماره ۴: عاشق کسی که واقعاً مناسبته"), 
                          font=FONT_PATH, font_size=24, color=COLOR_4)
        new_title6.move_to([0, 3.8, 0])
        self.play(Transform(title, new_title6), run_time=0.8)
        
        card4 = cards[3]
        new_pct4 = Text(fa("٪۵"), font=FONT_PATH, font_size=48, color=COLOR_4)
        new_pct4.move_to([card4["x"], card_y - 0.1, 0])
        new_label4 = Text(fa("مناسب"), font=FONT_PATH, font_size=16, color=COLOR_4)
        new_label4.move_to([card4["x"], card_y - 0.6, 0])
        new_frame4 = RoundedRectangle(
            width=card_width, height=card_height, corner_radius=0.15,
            color=COLOR_4, stroke_width=3, fill_color="#2A1A0F", fill_opacity=1
        )
        new_frame4.move_to([card4["x"], card_y, 0])
        self.play(
            Transform(card4["frame"], new_frame4),
            Transform(card4["percent"], new_pct4),
            Transform(card4["label"], new_label4),
            run_time=1.0
        )
        
        new_exp4 = Text(fa("الگو رو شکستی، خودت رو انتخاب کردی"), 
                        font=FONT_PATH, font_size=18, color=BEIGE)
        new_exp4.move_to([0, -4.2, 0])
        self.play(Transform(explanation, new_exp4), run_time=0.8)
        self.wait(8.7)
        
        # ============================================================
        # مرحله ۷: CTA (۵۹.۱ تا ۶۴s ≈ ۵ ثانیه)
        # ============================================================
        self.play(
            FadeOut(person_grid), FadeOut(group1), FadeOut(group2), 
            FadeOut(group3), FadeOut(highlight_persons),
            FadeOut(title), FadeOut(explanation),
            run_time=0.8
        )
        
        cta_title = Text(fa("الگوی قالب تو کدومه؟"), 
                         font=FONT_PATH, font_size=40, color=GOLD)
        cta_title.move_to([0, 1.5, 0])
        
        cta_sub = Text(fa("عددشو برام بنویس"), 
                       font=FONT_PATH, font_size=24, color=BEIGE)
        cta_sub.move_to([0, 0.5, 0])
        
        logo_main = Text(fa("مریم قابل"), font=FONT_PATH, font_size=36, color=GOLD)
        logo_main.move_to([0, -1.5, 0])
        logo_sub = Text(fa("روان\u200cشناس بالینی"), font=FONT_PATH, font_size=22, color=BEIGE)
        logo_sub.move_to([0, -2.2, 0])
        
        self.play(Write(cta_title), run_time=1.0)
        self.wait(0.3)
        self.play(FadeIn(cta_sub), run_time=0.8)
        self.wait(0.5)
        self.play(Write(logo_main), run_time=1.0)
        self.play(FadeIn(logo_sub), run_time=0.8)
        self.wait(2.5)
