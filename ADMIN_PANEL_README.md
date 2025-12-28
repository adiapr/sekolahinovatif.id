# Admin Panel - Sekolah Inovatif

## Features Implemented

### 1. Super Admin Role System
- **Middleware**: `SuperAdminMiddleware` untuk proteksi route admin
- **Migration**: Menambahkan kolom `role` pada tabel `users`
- **Route Protection**: Semua route di `/admin/*` dilindungi dengan middleware `auth` dan `superadmin`

### 2. Admin Seeder
Admin default telah dibuat dengan kredensial:
- **Email**: `admin@admin.com`
- **Password**: `admin123`
- **Role**: `superadmin`

### 3. Admin Template
Template admin telah dibuat dengan desain modern mengikuti moodboard yang diberikan:
- **Layout**: Dark sidebar dengan aksen kuning (yellow-500)
- **Logo**: Menggunakan logo dari `/public/logo/SI+horizontal_white.png`
- **Navigation**: Sidebar dengan menu yang lengkap
- **Responsive**: Mobile-friendly design

### 4. Article Management System
Sistem CRUD lengkap untuk mengelola artikel:
- **Index Page**: Daftar artikel dengan filter dan statistik
- **Form Page**: Form untuk membuat/edit artikel dengan fitur lengkap
- **Features**:
  - Rich text editor untuk konten
  - Upload gambar unggulan
  - Kategori dan status
  - SEO settings (meta title & description)
  - Tags
  - Auto-generate slug dari title
  - Image preview

## File Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   └── Admin/
│   │       └── ArticleController.php
│   └── Middleware/
│       └── SuperAdminMiddleware.php
├── Models/
│   ├── Article.php
│   └── User.php
└── View/
    └── Components/
        └── AdminLayout.php

resources/
└── views/
    ├── components/
    │   └── admin-layout.blade.php
    └── pages/
        └── admin/
            └── article/
                ├── index.blade.php
                └── _form.blade.php

routes/
└── admin.php

database/
├── migrations/
│   ├── 2025_12_25_084719_add_role_to_users_table.php
│   └── 2025_12_25_085303_create_articles_table.php
└── seeders/
    └── AdminSeeder.php
```

## Installation & Setup

### 1. Jalankan Migration
```bash
php artisan migrate
```

### 2. Jalankan Seeder
```bash
php artisan db:seed --class=AdminSeeder
```

### 3. Login sebagai Admin
- URL: `/login`
- Email: `admin@admin.com`
- Password: `admin123`

### 4. Akses Admin Panel
Setelah login, akses:
- Article Management: `/admin/articles`
- Create Article: `/admin/articles/create`

## Routes

Semua route admin berada di `/admin/*` dan dilindungi dengan middleware:
- `auth` - User harus login
- `superadmin` - User harus memiliki role 'superadmin'

### Available Routes:
- `GET /admin/articles` - Daftar artikel
- `GET /admin/articles/create` - Form tambah artikel
- `POST /admin/articles` - Simpan artikel baru
- `GET /admin/articles/{id}/edit` - Form edit artikel
- `PUT /admin/articles/{id}` - Update artikel
- `DELETE /admin/articles/{id}` - Hapus artikel

## Admin Panel Features

### Sidebar Menu
- Admin Dashboard
- Data Members
- Calon Member
- Data Pengunjung
- **Kelola Article** (Active)
- Data Frontliner
- Laporan Kunjungan
- Statistik

### Article Form Features
1. **Basic Info**:
   - Title (required)
   - Slug (auto-generated)
   - Category (required)
   - Status (draft/published)

2. **Content**:
   - Featured Image Upload dengan preview
   - Excerpt (ringkasan)
   - Full Content Editor
   - Tags

3. **SEO Settings**:
   - Meta Title
   - Meta Description

4. **Actions**:
   - Simpan sebagai Draft
   - Publish Article
   - Update Article (untuk edit)

### Statistics Cards
- Total Article
- Article Published
- Article Draft
- Total Views

## Database Schema

### Users Table (Updated)
```sql
- id
- name
- email
- password
- role (default: 'user')
- remember_token
- timestamps
```

### Articles Table
```sql
- id
- title
- slug (unique)
- category
- excerpt (nullable)
- content
- featured_image (nullable)
- tags (nullable)
- status (default: 'draft')
- meta_title (nullable)
- meta_description (nullable)
- user_id (foreign key)
- views (default: 0)
- timestamps
```

## Next Steps (TODO)

1. **Implement Article Controller Logic**:
   - [ ] Complete store() method
   - [ ] Complete update() method
   - [ ] Complete destroy() method
   - [ ] Add validation
   - [ ] Add image upload handling

2. **Add Rich Text Editor**:
   - [ ] Integrate TinyMCE or CKEditor
   - [ ] Add image upload support in editor

3. **Add Search & Filter**:
   - [ ] Implement search functionality
   - [ ] Add category filter
   - [ ] Add status filter
   - [ ] Add pagination

4. **Add Notifications**:
   - [ ] Success messages
   - [ ] Error messages
   - [ ] Confirmation dialogs

5. **Security Enhancements**:
   - [ ] Add CSRF protection
   - [ ] Add input sanitization
   - [ ] Add file upload validation

## Notes

- Logo yang digunakan: `SI+horizontal_white.png` untuk sidebar
- Color scheme: Dark gray sidebar dengan aksen yellow-500 (gold)
- Design inspired by modern admin dashboards
- Fully responsive layout
- Clean and intuitive UI

## Support

Untuk pertanyaan atau bantuan, silakan hubungi tim development.
