<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Documentation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }
        h1, h2 {
            color: #333;
        }
        code {
            background-color: #f4f4f4;
            padding: 5px;
            border-radius: 5px;
            display: block;
            margin-bottom: 10px;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            overflow: auto;
        }
        .endpoint {
            margin-bottom: 30px;
        }
        .example {
            margin-top: 10px;
            padding: 10px;
            background: #eef;
            border-left: 4px solid #00f;
        }
    </style>
</head>
<body>
    <h1>API Dokumentatsiya</h1>

    <div class="endpoint">
        <h2>1. Foydalanuvchini ro'yxatdan o'tkazish</h2>
        <p><strong>Murojat uchun manzil:</strong> <code>POST /api/register</code></p>
        <p><strong>Tavsif:</strong> Yangi foydalanuvchi hisobini yaratadi.</p>
        <p><strong>Request Parametrlar:</strong></p>
        <ul>
            <li><code>name</code> (string, required) - Foydalanuvchining to'liq ismi.</li>
            <li><code>email</code> (string, required) - Foydalanuvchining elektron pochta manzili.</li>
            <li><code>password</code> (string, required) - Foydalanuvchi paroli.</li>
            <li><code>password_confirmation</code> (string, required) - Parolni tasdiqlash.</li>
        </ul>
        <p><strong>Misol Request:</strong></p>
        <pre>
POST /api/register
Content-Type: application/json

{
    "name": "Ilhom Jabborov",
    "email": "ilhom@example.com",
    "password": "parol123",
    "password_confirmation": "parol123"
}
        </pre>
        <p><strong>Misol Response:</strong></p>
        <pre>
{
    "success": true,
    "message": "Ro'yhatdan o'tish muvaffaqiyatli!",
    "user": {
        "id": 1,
        "name": "Ilhom Jabborov",
        "email": "ilhom@example.com"
    }
}
        </pre>
    </div>

    <div class="endpoint">
        <h2>2. Foydalanuvchini tizimga kiritish (Login)</h2>
        <p><strong>Murojat uchun manzil:</strong> <code>POST /api/login</code></p>
        <p><strong>Tavsif:</strong> Logs in an existing user.</p>
        <p><strong>Request Parametrlar:</strong></p>
        <ul>
            <li><code>email</code> (string, required) - Foydalanuvchining elektron pochta manzili.</li>
            <li><code>password</code> (string, required) - Foydalanuvchi paroli.</li>
        </ul>
        <p><strong>Misol Request:</strong></p>
        <pre>
POST /api/login
Content-Type: application/json

{
    "email": "ilhom@example.com",
    "password": "parol123"
}
        </pre>
        <p><strong>Misol Response:</strong></p>
        <pre>
{
    "message": "Tizimga muvaffaqiyatli kirdingiz!"
}
        </pre>
    </div>

    <div class="endpoint">
        <h2>3. Barcha foydalanuvchilarni olish</h2>
        <p><strong>Murojat uchun manzil:</strong> <code>GET /api/users</code></p>
        <p><strong>Tavsif:</strong> Retrieves a list of all registered users.</p>
        <p><strong>Misol Request:</strong></p>
        <pre>
GET api/users
        </pre>
        <p><strong>Misol Response:</strong></p>
        <pre>
[
    {
        "id": 1,
        "name": "Ilhom Jabborov",
        "email": "ilhom@example.com",
        "created_at": "2025-01-01T12:00:00.000000Z",
        "updated_at": "2025-01-01T12:00:00.000000Z"
    },
    {
        "id": 2,
        "name": "Jane Smith",
        "email": "jane@example.com",
        "created_at": "2025-01-02T12:00:00.000000Z",
        "updated_at": "2025-01-02T12:00:00.000000Z"
    }
]
        </pre>
    </div>
</body>
</html>
