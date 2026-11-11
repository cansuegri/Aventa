# 🏆 AVENTA SPOR KOMPLEKSİ

**"Gücünü Keşfet, Sınırlarını Aş!"**

**Öğrenci:** Cansu Eğri  
**Bölüm:** Bilgisayar Mühendisliği 4. Sınıf  
**Ders:** Düşük Kod Programlama (Low-Code Programming)  
**Teknoloji Yığını:** WordPress 6.x, PHP 8.2, MySQL / MariaDB, XAMPP, Vanilla ES6 JavaScript, Modern Responsive CSS3 (WCAG 2.1 AAA Uyumlu)  

---

## 📌 Proje Genel Bakışı

**AVENTA Spor Kompleksi**, modern spor tesislerinin ihtiyaç duyduğu tüm yönetim, kiralama, antrenörlük ve rezervasyon modüllerini tek bir çatı altında toplayan düşük kodlu (low-code) kapsamlı bir spor kulübü otomasyonudur.

Sistem; uluslararası federasyon standartlarında kapalı kortları, bireysel stüdyoları, alanında uzman antrenör kadrosunu, dinamik haftalık seans takvimini, çift randevuyu engelleyen akıllı rezervasyon motorunu ve gelişmiş erişilebilirlik araçlarını bütünleşik olarak sunar.

---

## ⚡ Temel Modüller ve Özellikler

### 1. Salonlar ve Saha Kiralama (Kortlar)
- **Kapalı Padel Kortu:** Panoramik cam cepheli, LED aydınlatmalı WPT standartlarında padel kortu (750 ₺/saat).
- **Kapalı Tenis Kortu:** Darbe emici 5 katmanlı akrilik hardcourt zeminli profesyonel tenis kortu (800 ₺/saat).
- **Kapalı Voleybol Sahası:** Uluslararası Gerflor Taraflex olimpik zeminli voleybol sahası (650 ₺/saat).
- **Kapalı Basketbol Arena:** FIBA onaylı masif akçaağaç parke ve profesyonel skorboardlu arena (850 ₺/saat).
- **Resmi Hakem Desteği:** İsteğe bağlı lisanslı resmi hakem ve masa hakemi talep opsiyonu.

### 2. Fitness Salonu ve Bireysel Stüdyolar
- **AVENTA Fitness & Performans Salonu:** Panoramik orman manzaralı, olimpik squat rack istasyonları ve Technogym kardiyo ekipmanları (600 ₺ / PT Seansı).
- **AVENTA Reformer Pilates Stüdyosu:** Son teknoloji Allegro-2 Reformer, Tower ve Cadillac istasyonları, aynalı stüdyo (550 ₺ / seans).
- **AVENTA Yoga & Meditasyon Stüdyosu:** Doğal ahşap zeminli, huzurlu zen ambiyansı ve ses çanakları ile meditasyon (400 ₺ / seans).

### 3. Uzman Antrenör Kadrosu & PT Eğitmenler
- **Burak Demir:** Baş Antrenör & Atlet Kondisyoneri (Marmara Üniv. BESYO, NSCA-CSCS, TVGFBF 3. Kademe).
- **Selin Aksoy:** Reformer Pilates & Klinik Postür Uzmanı (Hacettepe Üniv. FTR, BASI Pilates Master, PMA Certified).
- **Zeynep Yılmaz:** Master Yoga & Mindfulness Eğitmeni (Gazi Üniv. Spor Bilimleri, Yoga Alliance RYT-500).
- **Mehmet Can Kaya:** Kort Atletizmi & Çeviklik Koçu (Ege Üniv. Spor Bilimleri, TTF 2. Kademe, EXOS XPS).
- Her antrenörün profilinde akademik eğitimi, lisanslı sertifikaları, özgeçmişi, saatlik PT ücreti ve doğrudan takvim/rezervasyon butonu mevcuttur.

### 4. Haftalık Düzenli Seans & Ders Takvimi
- Pazartesi'den Pazar'a 7 gün, sabah, öğle ve akşam kuşaklarında 21 düzenli seans.
- **Çift Görünüm Modu:** Günlük Seans Akışı ve Haftalık Master Tablo görünümleri.
- **Filtreleme:** Bireysel PT, Grupsal Seanslar ve Eğitmene göre anlık interaktif filtreleme.

### 5. Tesis Olanakları
- **Ferah Soyunma Odaları & VIP Duşlar:** Şifreli akıllı dolaplar, özel duş kabinleri, fön ve kişisel bakım üniteleri.
- **AVENTA Cafe & Protein Bar:** Barista kahveleri, taze protein shakeler ve fit atıştırmalıklar.
- **Akıllı Yiyecek & İçecek Otomatları:** 7/24 temassız/QR ile anında ödemeli sağlıklı sporcu gıdaları ve elektrolit içecekler.
- **Güvenli Otopark & Vale:** 200 araç kapasiteli açık/kapalı otopark, elektrikli araç (AC/DC) şarj istasyonu ve ücretsiz vale desteği.

### 6. Üyelik İşlemleri & Paketler
- **Standart Kulüp Üyeliği (1.250 ₺/ay):** Tesis, duş, cafe, dolap ve otopark erişimi.
- **Pro Yaşam Üyeliği (2.500 ₺/ay):** Aylık 2 seans bireysel PT, sınırsız grup dersleri, %15 cafe indirimi ve InBody analizi.
- **VIP Sınırsız Üyelik (4.500 ₺/ay):** Özel VIP locası, haftalık bireysel PT, aylık 2 saat ücretsiz kort kiralama ve diyetisyen desteği.
- Online üye kayıt modalı ve profil üzerinden rezervasyon geçmişi takibi.

### 7. Online Rezervasyon ve Çakışma Önleme Koruma Sistemi (Double-Booking Prevention)
- **Katmanlı Doğrulama:** Aynı eğitmene/korta, aynı gün ve saatte mükerrer randevu verilmesini engelleyen benzersiz veritabanı kısıtı ve SQL seviyesinde eşzamanlılık (concurrency) kontrolü.
- **Canlı Slot Kilitleme:** Seçilen tarih ve antrenöre ait dolu saat dilimlerini arayüzde anında pasif (disabled) yapan dinamik frontend mekanizması.
- **Kullanıcı & Yönetici Ekranı:** Üyeler kendi randevularını profil modalında görebilir; yönetici (admin) ise tüm rezervasyonları arayabilir, filtreleyebilir ve ciro istatistiklerini izleyebilir.

### 8. WCAG 2.1 AAA Erişilebilirlik Konsolu
- Yazı Boyutu Büyütme / Küçültme (A- / A+)
- Yüksek Kontrast Modu (Sarı / Siyah renk paleti)
- Açık Mod (Light Mode) / Koyu Mod (Dark Mode)
- Okuma Çizgisi Rehberi (Reading Ruler)
- Bağlantıları Belirginleştirme (Highlight Links)
- Disleksi Dostu Yazı Tipi (OpenDyslexic)
- Animasyonları Durdurma (Reduce Motion)
- Ekran okuyucular için tam ARIA semantiği ve canlı durum rozeti.

---

## 🔑 Kurulum ve Sistem Bilgileri

- **Ana Sayfa:** `http://localhost/aventa/`
- **Yönetim Paneli (WP-Admin):** `http://localhost/aventa/wp-admin/`
- **Yönetici Hesabı:** `admin` *(Güvenlik nedeniyle şifre gizlenmiştir; proje teslim formu ve Sistem Kullanım Kitapçığı üzerinden iletilmektedir)*
- **Veritabanı Adı:** `aventa`
- **MySQL Kullanıcısı:** `root`
