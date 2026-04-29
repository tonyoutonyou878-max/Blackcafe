<!-- ============================================
     BLACK CAFE POS - README
     Complete Documentation
     ============================================ -->

<div align="center">

# ☕ Black Cafe POS

### AI-Powered Cafe Management & Point of Sale System

![Version](https://img.shields.io/badge/Version-1.0.0-gold?style=for-the-badge)
![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![Python](https://img.shields.io/badge/Python-3.10+-3776AB?style=for-the-badge&logo=python&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

<br>

**A complete web-based cafe management solution designed to automate daily operations**
**including order management, billing, inventory tracking, AI-powered analytics & reporting.**

**Built especially for small cafés in Peshawar, Pakistan 🇵🇰**

<br>

[Features](#-features) •
[Installation](#-installation) •
[Usage](#-usage) •
[AI Engine](#-ai-engine) •
[API Docs](#-api-documentation) •
[Screenshots](#-screenshots) •
[Contributing](#-contributing)

</div>

---

## 📋 Table of Contents

- [About the Project](#-about-the-project)
- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [System Architecture](#-system-architecture)
- [Prerequisites](#-prerequisites)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Usage](#-usage)
- [User Roles](#-user-roles)
- [AI Engine](#-ai-engine)
- [API Documentation](#-api-documentation)
- [Database Schema](#-database-schema)
- [Project Structure](#-project-structure)
- [Screenshots](#-screenshots)
- [Troubleshooting](#-troubleshooting)
- [Future Enhancements](#-future-enhancements)
- [Contributing](#-contributing)
- [License](#-license)
- [Contact](#-contact)

---

## 📖 About the Project

**Black Cafe POS** is a modern, dark-themed, AI-powered Point of Sale system built for café environments. It replaces manual order systems, improves service speed, provides real-time sales tracking, and manages inventory efficiently.

### Why Black Cafe POS?

| Problem | Solution |
|---------|----------|
| 📝 Manual order taking → errors & delays | ⚡ Digital POS with instant order creation |
| 💰 No sales tracking | 📊 Real-time reports & AI analytics |
| 📦 Stock runs out unexpectedly | 🤖 AI predicts demand & auto-alerts |
| 🧾 Handwritten bills | 🖨️ Auto-generated receipts |
| 🍳 Kitchen miscommunication | 📺 Kitchen Display System (KDS) |
| 📱 No digital menu | 📲 QR Code ordering for customers |

---

## ✨ Features

### Core POS Features
- ✅ **Order Management** — Create, edit, track dine-in & takeaway orders
- ✅ **POS Terminal** — Touch-friendly interface with large buttons
- ✅ **Menu Management** — Full CRUD with categories & images
- ✅ **Billing System** — Auto-calculate totals, discounts, generate receipts
- ✅ **Table Management** — Track table availability & assign orders
- ✅ **Inventory Tracking** — Monitor stock, low-stock alerts
- ✅ **Sales Reports** — Daily, weekly, monthly with charts
- ✅ **Kitchen Display (KDS)** — Real-time order queue for kitchen staff
- ✅ **QR Code Ordering** — Customers scan QR to view menu & order

### 🤖 AI-Powered Features
- 🧠 **Demand Forecasting** — Predict tomorrow's item demand
- 📈 **Sales Prediction** — Forecast daily/weekly revenue
- 📦 **Smart Inventory** — Auto-reorder suggestions when stock is low
- ⏰ **Peak Hour Prediction** — Know busy hours before they happen
- 🎯 **Menu Optimization** — Identify star items vs. underperformers
- 👤 **Customer Behavior AI** — Analyze order patterns & combos

### Security & UX
- 🔐 **Role-Based Access Control (RBAC)** — Admin, Cashier, Waiter, Kitchen
- 🔒 **Password Encryption** — bcrypt hashing
- 🛡️ **SQL Injection Protection** — PDO prepared statements
- 🌙 **Dark Theme** — Eye-friendly gold/amber accent design
- 📱 **Responsive Design** — Works on desktop, tablet & mobile
- ⚡ **Fast Performance** — Responds within 2 seconds

---

## 🛠️ Tech Stack

### Frontend
| Technology | Purpose |
|-----------|---------|
| HTML5 | Structure |
| CSS3 | Styling |
| Bootstrap 5.3 | Responsive UI framework |
| JavaScript (ES6+) | Client-side logic |
| Chart.js 4.x | Data visualization |
| Bootstrap Icons | Icon library |
| Google Fonts (Inter) | Typography |

### Backend
| Technology | Purpose |
|-----------|---------|
| PHP 8.x | Server-side logic & CRUD |
| PDO (MySQL) | Database abstraction |
| Sessions | Authentication state |
| cURL | AI engine communication |

### Database
| Technology | Purpose |
|-----------|---------|
| MySQL 8.0 | Relational database |
| XAMPP | Local development server |
| phpMyAdmin | Database administration |

### AI Engine
| Technology | Purpose |
|-----------|---------|
| Python 3.10+ | AI/ML processing |
| Flask / FastAPI | REST API server |
| scikit-learn | Machine learning models |
| pandas | Data manipulation |
| NumPy | Numerical computing |
| Facebook Prophet | Time-series forecasting |
| matplotlib | Visualization |

---

## 🏗️ System Architecture