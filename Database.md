1. head_types

(head_type_id, head_type_name)

2. heads

(head_id, head_type_id, head_value)

3. Items
(item_id, item_code, item_name, item_type (fk), unit_id (fk), is_purchasable (boolean), is_manufacturable (boolean), is_sellable (boolean), can_be_used_as_material (boolean), description, created_at, updated_at)

4. Persons
(person_id, person_name, person_type, contact_info, created_at, updated_at)

5. production_stages

(stage_id, stage_name, created_at, updated_at)

6. product_stage_map

(map_id, product_id, stage_id, sequence_no, created_at, updated_at)

7. stage_materials

(stage_material_id, product_id, stage_id, material_item_id, qty_per_unit, mandatory, created_at, updated_at)

8. ptc_headers

(ptc_id, ptc_number, product_id, size, quantity, start_stage_id, end_stage_id, status, created_at, updated_at)

9. ptc_stage_lines

(ptc_stage_line_id, ptc_id, stage_id, sequence_no, issued_qty, received_qty, status, created_at, updated_at)

10. ptc_stage_assignments

(assignment_id, ptc_stage_line_id, person_id, assigned_qty, completed_qty, status, assigned_date, completion_date, created_at, updated_at)

11. transactions

(txn_id, txn_date, txn_type, reference_type, reference_id, item_id, quantity, amount, account_id, person_id, remarks, created_at, updated_at)

12. stage_stock (Optional but Recommended)

(stage_stock_id, product_id, stage_id, quantity, updated_at)

13. orders

(order_id, order_number, order_type, person_id, order_date, status, total_amount, created_at, updated_at)

14. order_lines

(order_line_id, order_id, item_id, quantity, unit_price, line_total, fulfilled_qty, created_at, updated_at)