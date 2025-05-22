# 🌾 Farm_To_Farming

**Farm_To_Farming** is a Laravel-based web platform that connects landowners with unused land to farmers willing to relocate. Contracts ensure profit sharing, while experts and ML models help determine the best crops using soil data and 1–3 year climate forecasts.

---

## 🚀 Features

- Matchmaking between landowners and farmers  
- Digital contract generation with profit-sharing terms  
- Expert & ML-based crop recommendations  
- Soil, wind, and climate analysis for 1–3 years  
- Dashboard for crop prediction and performance

---

## 🛠️ Tech Stack

- **Backend:** PHP (Laravel Framework)  
- **Frontend:** Blade, HTML/CSS, Bootstrap  
- **Database:** MySQL  
- **ML Integration:** Python (via API) or external service  
- **APIs:** OpenWeather, Google Maps (optional)

---

## 🖼️ Demo Screens

### 🔍 Landowner & Farmer Matching  
![Demo 1](images/demo1.png)

### 📄 Contract Agreement Interface  
![Demo 2](images/demo2.png)

### 📈 Crop Recommendation Dashboard  
![Demo 3](images/demo3.png)

### 🌱 Soil & Climate Analysis  
![Demo 4](images/demo4.png)

---

## ⚙️ Installation

```bash
git clone https://github.com/your-username/Farm_To_Farming.git
cd Farm_To_Farming
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
