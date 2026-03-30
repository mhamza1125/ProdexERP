# ProdexERP 🧠

[![Laravel Version](https://img.shields.io/badge/Laravel-10.10-brightgreen)](https://laravel.com) 
[![PHP Version](https://img.shields.io/badge/PHP-8.2-brightgreen)](https://www.php.net/) 
[![License](https://img.shields.io/badge/License-MIT-blue)](LICENSE)

**ProdexERP** is a **stage-based Production Management ERP system** built with **Laravel 10** and **PHP 8.2+**.  
It is designed to **manage multi-stage production workflows**, track stock, labor, and finance, and provide a fully normalized ERP solution.

---

## 🌟 Key Features

- Manage products and raw materials (products can act as materials)  
- Define reusable production stages (Cutting, Stitching, Finishing, etc.)  
- Stage-wise Bill of Materials (BOM) per product  
- Process Travel Card (PTC) for tracking production jobs  
- Stage assignments and labor tracking  
- Unified transactions system for stock, purchases, sales, payments, and wages  
- Stage-wise inventory tracking  
- Purchase and sales management  
- Financial tracking (cash, bank, payments, wages, receipts)  

---

## 🛠️ Technology Stack

- **Backend:** Laravel 10.10  
- **PHP Version:** 8.2+  
- **Frontend:** Blade + Vite  
- **Database:** MySQL / MariaDB  

---

## ⚙️ Architecture & Concepts

- Stage-based production workflow with PTC  
- Fully normalized database design  
- Unified transactions table for stock, labor, payments, and orders  
- Multi-stage production with products usable as materials  
- Stage-wise BOM and labor tracking  
- Scalable ERP architecture  

---

## 🗂️ Core Tables

- **Metadata:** `head_types`, `heads`  
- **Masters:** `items`, `people`, `payment_accounts`  
- **Production Setup:** `production_stages`, `product_stage_map`, `stage_materials`  
- **Production Execution (PTC):** `ptc_headers`, `ptc_stage_lines`, `ptc_stage_assignments`  
- **Transactions & Stock:** `transactions` (optional `stage_stock`)  
- **Purchase & Sales:** `orders`, `order_lines`  

---

## 📄 License

This project is licensed under the **MIT License**. See the [LICENSE](LICENSE) file for details.

---

## 📫 Contact

- Email: `mhamza1125@gmail.com`  
- LinkedIn: [linkedin.com/in/mhamza1125](https://www.linkedin.com/in/mhamza1125/)  
