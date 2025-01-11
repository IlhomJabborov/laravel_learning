# Laravel Loyihasi

[![Laravel Version](https://img.shields.io/badge/Laravel-8.x-orange.svg)](https://laravel.com/docs/8.x)
[![PHP Version](https://img.shields.io/badge/PHP-7.x|8.x-blue.svg)](https://www.php.net/)

## Loyihaning Maqsadi

Ushbu loyiha [Laravel](https://laravel.com/) frameworkidan foydalangan holda yaratilgan. Ushbu loyiha **[meni veb ilovalar fanidan mustaqil ishm]** (dastur,kirish va ro'yxatdan o'tishni blade va api orqali) taqdim etish uchun mo'ljallangan.

## Foydalanish Talablari

### Texnik Talablar:

- PHP >= 7.4
- Composer
- MySQL yoki boshqa SQL ma'lumotlar bazasi (men SQLite ishlatdim)
- Laravel 8.x

### Klonlash va O'rnatish

Loyihani GitHub-dan klonlash uchun quyidagi buyruqdan foydalaning:

```bash
https://github.com/IlhomJabborov/laravel_learning.git
```
### Ushbu direktoriyaga kirish:
```
cd laravel_learning
```
### composer yordamida kerakli bog'lanishlarni o'rnatish:
```
composer install
```
### .env faylini yaratish:
```
cp .env.example .env
```
* Ma'lumotlar bazasi konfiguratsiyasini .env faylida to'ldiring.
**Quyidagilarni sozlang:**
   - Ma'lumotlar bazasi ulanish ma'lumotlari:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=loyihangiz
     DB_USERNAME=root
     DB_PASSWORD=
     ```
### Ma'lumotlar bazasini o'rnatish :
```
php artisan migrate
```
### Ushbu loyihani ishlatish :
```
php artisan serve
```
#### Brauzeringizda **http://localhost:8000** manziliga kiring.

## API Endpointlari

### 1. **Ro'yxatdan o'tish**

**Endpoint:**
```http
POST /api/register
```

**So'rov sarlavhasi (Headers):**
```json
Content-Type: application/json
```

**So'rov tanasi (Body):**
```json
{
    "name": "Ilhom Jabborov",
    "email": "ilhom@example.com",
    "password": "parol123",
    "password_confirmation": "parol123"
}
```

**Javob:**
```json
{
    "success": true,
    "message": "Ro'yxatdan o'tish muvaffaqiyatli!",
    "user": {
        "id": 1,
        "name": "Ilhom Jabborov",
        "email": "ilhom@example.com"
    }
}
```

---

### 2. **Tizimga kirish**

**Endpoint:**
```http
POST /api/login
```

**So'rov sarlavhasi (Headers):**
```json
Content-Type: application/json
```

**So'rov tanasi (Body):**
```json
{
    "email": "ilhom@example.com",
    "password": "parol123"
}
```

**Javob:**
```json
{
    "message": "Tizimga muvaffaqiyatli kirdingiz!"
}
```

---

### 3. **Foydalanuvchilarni olish**

**Endpoint:**
```http
GET /users
```

**So'rov sarlavhasi (Headers):**
```json
Content-Type: application/json
```

**Javob:**
```json
[
    {
        "id": 1,
        "name": "Ilhom Jabborov",
        "email": "ilhom@example.com",
        "created_at": "2023-01-01T12:00:00.000000Z",
        "updated_at": "2023-01-01T12:00:00.000000Z"
    }
]
```

---

## Blade Interfeysi

Foydalanuvchi interfeysi Laravel Blade bilan yaratilgan bo'lib, quyidagi sahifalarni o'z ichiga oladi:

1. **Ro'yxatdan o'tish sahifasi**
2. **Tizimga kirish sahifasi**
3. **Foydalanuvchilar ro'yxati**

Blade fayllari `resources/views` papkasida joylashgan.

## Loyiha Tuzilishi
* app/ — Biznes mantiq va modellar.
* database/ — Migratsiyalar va funksiyalar.
* resources/ — Ko'rinishlar va dizayn.
* routes/ — Yo'llar.
* config/ — Loyihaning konfiguratsiya fayllari.
* public/ — Ochiq resurslar (CSS, JavaScript, rasm fayllari).

## Muallif
* Ilhom Jabborov

### 2024


