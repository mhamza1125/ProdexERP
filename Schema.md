1. CREATE TABLE head_types (
    head_type_id INT PRIMARY KEY AUTO_INCREMENT,
    head_type_name VARCHAR(100) NOT NULL,
    description TEXT,
    status ENUM('active','inactive') DEFAULT 'active',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

2. CREATE TABLE heads (
    head_id INT PRIMARY KEY AUTO_INCREMENT,
    head_type_id INT NOT NULL,
    head_value VARCHAR(100) NOT NULL,
    status ENUM('active','inactive') DEFAULT 'active',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (head_type_id) REFERENCES head_types(head_type_id)
);

3. CREATE TABLE items (
    item_id INT PRIMARY KEY AUTO_INCREMENT,
    item_code VARCHAR(50) UNIQUE NOT NULL,
    item_name VARCHAR(150) NOT NULL,
    item_type ENUM('raw_material','finished_product','semi_finished_product') NOT NULL,
    unit_id INT NOT NULL,
    is_purchasable BOOLEAN DEFAULT FALSE,
    is_manufacturable BOOLEAN DEFAULT FALSE,
    is_sellable BOOLEAN DEFAULT FALSE,
    can_be_used_as_material BOOLEAN DEFAULT FALSE,
    status ENUM('active','inactive') DEFAULT 'active',
    description TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

4. CREATE TABLE persons (
    person_id INT PRIMARY KEY AUTO_INCREMENT,
    person_name VARCHAR(150) NOT NULL,
    person_type ENUM('customer','vendor','contractor','employee') NOT NULL,
    status BOOLEAN DEFAULT TRUE,
    contact_info JSON,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

5. CREATE TABLE production_stages (
    stage_id INT PRIMARY KEY AUTO_INCREMENT,
    stage_name VARCHAR(100) NOT NULL,
    status ENUM('active','inactive') DEFAULT 'active',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

6. CREATE TABLE product_stage_map (
    map_id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT NOT NULL,
    stage_id INT NOT NULL,
    sequence_no INT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE(product_id, stage_id),
    FOREIGN KEY (product_id) REFERENCES items(item_id),
    FOREIGN KEY (stage_id) REFERENCES production_stages(stage_id)
);

7. CREATE TABLE stage_materials (
    stage_material_id INT PRIMARY KEY AUTO_INCREMENT,
    map_id INT NOT NULL,
    material_item_id INT NOT NULL,
    qty_per_unit DECIMAL(12,3) NOT NULL,
    mandatory BOOLEAN DEFAULT TRUE,
    unit_id INT,
    notes TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (map_id) REFERENCES product_stage_map(map_id),
    FOREIGN KEY (material_item_id) REFERENCES items(item_id)
); 

8.  CREATE TABLE ptc_headers (
    ptc_id INT PRIMARY KEY AUTO_INCREMENT,
    ptc_number VARCHAR(50) UNIQUE NOT NULL,
    product_id INT NOT NULL,
    size VARCHAR(50),
    quantity INT NOT NULL,
    start_stage_id INT,
    end_stage_id INT,
    status ENUM('pending','in_progress','completed','cancelled') DEFAULT 'pending',
    priority ENUM('low','medium','high') DEFAULT 'medium',
    batch_number VARCHAR(50),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES items(item_id),
    FOREIGN KEY (start_stage_id) REFERENCES production_stages(stage_id),
    FOREIGN KEY (end_stage_id) REFERENCES production_stages(stage_id)
);

9. CREATE TABLE ptc_stage_lines (
    ptc_stage_line_id INT PRIMARY KEY AUTO_INCREMENT,
    ptc_id INT NOT NULL,
    stage_id INT NOT NULL,
    sequence_no INT NOT NULL,
    planned_qty INT,
    issued_qty INT DEFAULT 0,
    received_qty INT DEFAULT 0,
    status ENUM('pending','in_progress','completed') DEFAULT 'pending',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (ptc_id) REFERENCES ptc_headers(ptc_id),
    FOREIGN KEY (stage_id) REFERENCES production_stages(stage_id)
); 

10. CREATE TABLE ptc_stage_assignments (
    assignment_id INT PRIMARY KEY AUTO_INCREMENT,
    ptc_stage_line_id INT NOT NULL,
    person_id INT NOT NULL,
    role_id INT,
    assigned_qty INT NOT NULL,
    completed_qty INT DEFAULT 0,
    status ENUM('assigned','in_progress','completed') DEFAULT 'assigned',
    assigned_date DATETIME,
    completion_date DATETIME,
    remarks TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (ptc_stage_line_id) REFERENCES ptc_stage_lines(ptc_stage_line_id),
    FOREIGN KEY (person_id) REFERENCES persons(person_id)
);

11. CREATE TABLE transactions (
    txn_id INT PRIMARY KEY AUTO_INCREMENT,
    txn_date DATETIME NOT NULL,
    txn_type ENUM('stock_in','stock_out','purchase','sale','wage','adjustment') NOT NULL,
    reference_type ENUM('order','ptc','purchase','other'),
    reference_id INT,
    item_id INT NOT NULL,
    quantity DECIMAL(12,3) NOT NULL,
    amount DECIMAL(12,2),
    account_id INT,
    person_id INT,
    remarks TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (item_id) REFERENCES items(item_id)
);

12. CREATE TABLE stage_stock (
    stage_stock_id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT NOT NULL,
    stage_id INT NOT NULL,
    quantity DECIMAL(12,3) DEFAULT 0,
    reserved_qty DECIMAL(12,3) DEFAULT 0,
    last_updated_by INT,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES items(item_id),
    FOREIGN KEY (stage_id) REFERENCES production_stages(stage_id)
);

13. CREATE TABLE orders (
    order_id INT PRIMARY KEY AUTO_INCREMENT,
    order_number VARCHAR(50) UNIQUE NOT NULL,
    order_type ENUM('purchase','sale') NOT NULL,
    person_id INT NOT NULL,
    order_date DATETIME NOT NULL,
    status ENUM('pending','in_progress','completed','cancelled') DEFAULT 'pending',
    total_amount DECIMAL(12,2),
    due_date DATETIME,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (person_id) REFERENCES persons(person_id)
);

14. CREATE TABLE order_lines (
    order_line_id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT NOT NULL,
    item_id INT NOT NULL,
    quantity DECIMAL(12,3) NOT NULL,
    unit_price DECIMAL(12,2) NOT NULL,
    line_total DECIMAL(12,2) NOT NULL,
    fulfilled_qty DECIMAL(12,3) DEFAULT 0,
    status ENUM('pending','fulfilled','partially_fulfilled') DEFAULT 'pending',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(order_id),
    FOREIGN KEY (item_id) REFERENCES items(item_id)
);
