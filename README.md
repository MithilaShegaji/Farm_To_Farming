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
- **ML Integration:** Python (via API) or external service  (optional)
- **APIs:** OpenWeather, Google Maps (in future)

---

## 🖼️ Demo Screens
![Demo 1](images/demo1.jpg)

### 📄 About us
![Demo 2](images/demo2.jpg)

### 📈 Authentication
![Demo 3](images/demo3.jpg)

### 🌱 Registeration portal
![Demo 4](images/demo4.jpg)

### 📄Form for farmers
![Demo 5](images/demo5.jpg)

### 🔍 Landowner & Farmer Matching  
![Demo 6](images/demo6.jpg)

### 📄Form for landowner
![Demo 7](images/demo7.jpg)


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
