🧠 Project Overview – Production Management ERP
This system is a stage-based production ERP designed to:

🔹 1. Manage Products & Materials
You define items (products + raw materials)

A product can also act as a material in another product

Units, categories, roles, etc. come from reusable heads system

🔹 2. Define Production Flow (Stages)
Production is broken into reusable stages (Cutting, Stitching, Finishing, etc.)

Each product defines its own sequence of stages

🔹 3. Stage-wise BOM (Bill of Materials)
For each product + stage, you define:

What materials are required

Quantity per unit

Materials can be:

Raw materials

Other finished/semi-finished products ✅

🔹 4. PTC (Process Travel Card)
Represents a production job

Tracks:

Product being produced

Quantity

Stage-by-stage progress

Each stage:

Gets materials issued

Gets work assigned to people

Produces output → passed to next stage

🔹 5. Stage Assignments (Labor Tracking)
Each stage can be assigned to:

One or multiple employees/contractors

Tracks:

Who did what

How much work completed

🔹 6. Unified Transactions System
Single table handles:

Stock movement (issue/receive)

Purchases

Sales

Payments (cash/bank)

Wages / labor

👉 This avoids duplication and keeps system fully normalized

🔹 7. Inventory Tracking (Stage-wise)
Stock is tracked per:

Product

Stage

Example:

Product A → 50 units in Cutting

Product A → 20 units in Finishing

🔹 8. Purchase & Sales
Purchase raw materials or products

Sell finished goods

All stock and payments go through transactions table

🔹 9. Financial Tracking
Cash & bank accounts

Payments for:

Purchases

Salaries / wages

Contractor work

Customer receipts

🗂️ Final Tables List
Here is the complete required schema (clean & minimal):

🔹 1. Metadata Tables
head_types

heads

🔹 2. Core Masters
items

people

payment_accounts

🔹 3. Production Setup
production_stages

product_stage_map

stage_materials ✅ (Stage-wise BOM)

🔹 4. Production Execution (PTC)
ptc_headers

ptc_stage_lines

ptc_stage_assignments

🔹 5. Transactions & Stock
transactions ✅ (unified system)

stage_stock (optional but recommended for performance)

🔹 6. Purchase & Sales
orders

order_lines

✅ Total Tables
✔️ Core Required:
13 tables

head_types
heads
items
people
payment_accounts
production_stages
product_stage_map
stage_materials
ptc_headers
ptc_stage_lines
ptc_stage_assignments
transactions
orders
order_lines
➕ Optional (Recommended):
stage_stock
⚡ How Everything Connects (Simple Flow)
Define items + stages

Define product stages + stage materials

Create PTC

Assign people to stages

Issue materials → transactions

Receive output → transactions

Stock updates → stage_stock

Buy/Sell → orders + transactions

Payments → transactions + payment_accounts

🎯 Why This Design is Strong
✅ Fully normalized

✅ No duplicate tables for same logic

✅ Supports products as materials

✅ Handles multi-stage production

✅ Tracks labor + stock + finance in one system

✅ Scalable for real ERP use
