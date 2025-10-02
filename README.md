# 📘 Tutor Laravel CRUD Karyawan

## 1️⃣ Setup Project Laravel

**Buat project Laravel baru:**
```bash
composer create-project laravel/laravel karyawan
```

**Masuk ke folder project:**
```bash
cd karyawan
```

**Buka di VS Code (opsional):**
```bash
code .
```

**Jalankan server lokal:**
```bash
php artisan serve
```

Buka browser ke **http://127.0.0.1:8000** untuk memastikan project berhasil jalan.

---

## 2️⃣ Membuat Migration, Model, Controller, Seeder, dan Factory

- **Migration** → buat tabel karyawan  
  ```bash
  php artisan make:migration create_karyawan_table
  ```

- **Controller** → buat `KaryawanController`  
  ```bash
  php artisan make:controller KaryawanController
  ```

- **Model** → buat model `Karyawan`  
  ```bash
  php artisan make:model Karyawan
  ```

- **Seeder** → buat `KaryawanSeeder`  
  ```bash
  php artisan make:seed KaryawanSeeder
  ```

- **Factory** → buat `KaryawanFactory` dan hubungkan ke model  
  ```bash
  php artisan make:factory --model=Karyawan
  ```

💡 **Catatan:** Factory dipakai di seeder untuk generate data dummy otomatis.

---

## 3️⃣ Database Setup

1. Buat database baru di MySQL, misalnya **karyawandb**.
2. Sesuaikan file **.env**:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=karyawandb
   DB_USERNAME=root
   DB_PASSWORD=
   ```

3. Jalankan migration:
   ```bash
   php artisan migrate
   ```

4. Jalankan seeder:
   ```bash
   php artisan db:seed --class=KaryawanSeeder
   ```

💡 **Tips:** Kalau database belum ada, Laravel bisa menanyakan apakah ingin dibuat otomatis → pilih **yes**.

---

## 4️⃣ Membuat Routes

Tambahkan resource route untuk CRUD:

```php
Route::resource('karyawan', KaryawanController::class);
```

Ini otomatis membuat route untuk:  
`index`, `create`, `store`, `edit`, `update`, `destroy`.

🔗 Pastikan link di blade sesuai nama resource route, contoh:  
```php
route('karyawan.index')
```

---

## 5️⃣ Membuat Blade Views

Buat view sederhana di folder **resources/views**:

- `home.blade.php` → daftar karyawan + tombol tambah/edit/hapus
- `create-karyawan.blade.php` → form tambah karyawan
- `edit-karyawan.blade.php` → form edit karyawan

Bisa langsung pakai **HTML sederhana** tanpa layout.

---

## 6️⃣ Keterangan CRUD di Controller

- **index** → tampilkan semua data karyawan.  
- **create** → tampilkan form tambah.  
- **store** → simpan data baru ke database.  
- **edit** → ambil data tertentu untuk diedit.  
- **update** → simpan perubahan data.  
- **destroy** → hapus data.  

💡 **Tips:**  
- Gunakan `$fillable` di model supaya **mass assignment aman**.  
- Tambahkan **validasi form** di controller untuk keamanan data.

---

## 7️⃣ Terminal Summary

- Setup project Laravel → `composer create-project`  
- Jalankan server → `php artisan serve`  
- Migration → `php artisan make:migration`  
- Controller → `php artisan make:controller`  
- Model → `php artisan make:model`  
- Seeder → `php artisan make:seed`  
- Factory → `php artisan make:factory --model=Karyawan`  
- Migrasi database → `php artisan migrate`  
- Isi data → `php artisan db:seed --class=KaryawanSeeder`  

---

## 📌 Catatan Akhir

File ini merupakan tutorial singkat **CRUD Karyawan di Laravel**.  
Gunakan langkah-langkah ini untuk membangun project Laravel dari awal. 🚀

