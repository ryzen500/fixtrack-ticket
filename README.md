# 📌 FixTrack-Ticket

Aplikasi **FixTrack** adalah sistem pelaporan dan pelacakan tiket keluhan internal dalam organisasi. Tujuan utama dari aplikasi ini adalah untuk mempermudah karyawan dalam **melapor dan memantau masalah pekerjaan**, serta memfasilitasi tim support/teknis untuk **menyelesaikan keluhan secara terorganisir**.

---

## 🚀 Tech Stack

### 🧠 Backend
- [Laravel 12](https://laravel.com) (modular structure)
- PHP 8.2+
- PostgreSQL
- JWT Auth (via Laravel Sanctum atau tymon/jwt-auth)
- REST API (Swagger-ready)
- Microservices-ready architecture

### 📱 Mobile
- [Flutter](https://flutter.dev)
- HTTP-based API communication
- Modular design with Provider/Bloc (planned)

### 🛠️ Tools & Support
- Swagger/OpenAPI for API docs
- Docker (optional, dev environment)
- Postman for API testing
- Git & GitHub (CI/CD pipeline – planned)

---

## 🎯 Project Background

FixTrack-Ticket dirancang untuk memecahkan permasalahan pelaporan keluhan yang tersebar dan tidak terdokumentasi dengan baik dalam lingkungan kerja. Dengan aplikasi ini, setiap laporan terekam secara digital dan pengguna dapat memantau sejauh mana penyelesaian keluhan tersebut. 

Proyek ini ditujukan untuk:
- **Mempermudah proses pelaporan dan tindak lanjut keluhan kerja**
- **Menyediakan sistem notifikasi internal (tanpa Firebase)**
- **Mengelola lampiran/bukti keluhan**
- **Memberikan statistik keluhan dan kinerja penyelesaian masalah**

---

## 📦 Fitur Utama

| Fitur                       | Status        | Keterangan                                                         |
|----------------------------|---------------|--------------------------------------------------------------------|
| 🔐 Autentikasi JWT         | ✅ Selesai     | Register, login, logout, get current user                         |
| 📝 Ticket System           | ⏳ Dalam Proses| CRUD tiket keluhan, filter dan status                             |
| 💬 Komentar                | ✅ Selesai     | Tambah, ubah, hapus komentar pada tiket                           |
| 📎 Lampiran                | ✅ Selesai     | Upload dan hapus lampiran (gambar/file)                           |
| 🔔 Notifikasi Internal     | ✅ Selesai     | Service sendiri untuk notifikasi, bukan via Firebase              |
| 📂 Master Kategori         | ✅ Selesai     | CRUD data kategori keluhan                                        |
| 👥 Role dan Permission     | 🔜 Belum       | Admin, teknisi, pengguna biasa                                    |
| 📊 Statistik & Dashboard   | 🔜 Belum       | Laporan keluhan mingguan/bulanan                                  |
| 📱 Aplikasi Mobile (Flutter)| 🔜 Belum       | Akan menyusul setelah backend stabil                              |

---

## 📌 Progress Saat Ini

### ✅ Sudah Dikerjakan
- Struktur modular Laravel 12
- Instalasi & setup JWT Auth
- Setup PostgreSQL
- CRUD kategori
- CRUD komentar
- Upload/hapus lampiran
- Service notifikasi internal
- Struktur routing modular

### ⏭️ Tahap Berikutnya
- Integrasi role & permission
- Manajemen tiket lebih kompleks (status, eskalasi)
- Statistik dan visualisasi dashboard
- Swagger dokumentasi API secara penuh
- Mulai implementasi aplikasi mobile Flutter

---

## 🛠️ Cara Menjalankan (dev)

```bash
# Clone repo
git clone https://github.com/your-org/fixtrack-ticket.git
cd fixtrack-ticket

# Install dependency
composer install

# Copy env & generate key
cp .env.example .env
php artisan key:generate

# Setup DB
php artisan migrate

# Jalankan server
php artisan serve
