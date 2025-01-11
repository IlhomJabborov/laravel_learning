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
### Ma'lumotlar bazasini o'rnatish :
```
php artisan migrate
```
### Ushbu loyihani ishlatish :
```
php artisan serve
```
#### Brauzeringizda **http://localhost:8000** manziliga kiring.
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
