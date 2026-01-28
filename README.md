# 🚀 PHP V2Ray API Manager

<p align="center">
  <b>A professional PHP backend project for managing V2Ray panels via HTTP APIs</b>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8%2B-blue">
  <img src="https://img.shields.io/badge/Architecture-Clean-success">
  <img src="https://img.shields.io/badge/Status-Active-brightgreen">
</p>

---

## 📌 Overview

**PHP V2Ray API Client** is a clean, extensible, and real-world PHP backend project designed to interact with V2Ray management panels  
(such as **x-ui**, **3x-ui**, or **Marzban**) through their HTTP APIs.

This project is **NOT a proxy or tunneling tool**.  
It focuses purely on **backend-side management, automation, and API communication**, making it suitable for professional backend use cases.

---

## 🎯 Project Goals

- ✅ Provide a real and executable PHP project  
- ✅ Follow clean architecture principles  
- ✅ Be easy to understand and extend  
- ✅ Serve as a reference template for similar projects  
- ✅ Suitable for GitHub portfolio and job applications  

---

## 🧠 How It Works (Concept)

PHP Application
│
▼
HTTP Client (cURL)
│
▼
V2Ray Panel API
(x-ui / marzban / 3x-ui)
│
▼
V2Ray Core


📌 **Important**
- PHP does NOT connect directly to V2Ray core  
- All operations are done through panel APIs  
- This keeps the project safe, legal, and professional  

---

### Why this structure?
- 🔹 Separation of concerns  
- 🔹 Easy testing and maintenance  
- 🔹 Scalable for future features  
- 🔹 Inspired by real-world backend systems  

---

## ⚙️ Configuration

Edit the V2Ray panel configuration file:

**`config/v2ray.php`**
```php
<?php

return [
    'base_url' => 'http://127.0.0.1:2053',
    'username' => 'admin',
    'password' => 'password',
];

$config = require 'config/v2ray.php';

$v2ray = new V2rayApiService($config);

// Login to panel
$v2ray->login();

// Check service status
echo $v2ray->status();



