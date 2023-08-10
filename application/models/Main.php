<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

    public function SetProduct($data)
    {
        $product_category = !empty($data['product_category']) ? $data['product_category'] : NULL;
        $product_title = !empty($data['product_title']) ? $data['product_title'] : NULL;
        $product_price = !empty($data['product_price']) ? $data['product_price'] : NULL;
        $product_description = !empty($data['product_description']) ? $data['product_description'] : NULL;
        try {
            $request = $this->db->query("INSERT INTO products (id, category_id, title, price, description, sort, created_at, updated_at, deleted_at)
                                VALUES (NULL,'$product_category', '$product_title' , '$product_price', '$product_description', NULL, CURRENT_TIMESTAMP, NULL, NULL)");
        } catch (\PDOException $e) {
            echo "Ошибка:" . $e->getMessage();
        }
    }

    public function GetProduct()
    {
        return $this->db->row("SELECT * FROM products");
    }

    public function GetFakeDeletedProduct()
    {
        return $this->db->row("SELECT * FROM products WHERE deleted_at IS NOT NULL");
    }

    public function GetNotFakeDeletedProduct()
    {
        return $this->db->row("SELECT * FROM products WHERE deleted_at IS NULL");
    }

    public function UpdateProduct($data)
    {
        $this->db->query("UPDATE products SET category_id = " . $data['product_category'] . ", title = '" . $data['product_title'] . "', price = " . $data['product_price'] . ", description = '" . $data['product_description'] . "', updated_at = CURRENT_TIMESTAMP, deleted_at = NULL WHERE products.id = " . $data['product_id']);
    }

    public function DeleteProduct($product_id)
    {
        $this->db->query("DELETE FROM products WHERE products.id = " . $product_id['id']);
    }

    public function FakeDeleteProduct($data)
    {
        $this->db->query("UPDATE products SET deleted_at = CURRENT_TIMESTAMP WHERE products.id = " . $data['id']);
    }

    public function SearchProduct($data)
    {
        return $this->db->row("SELECT * FROM products WHERE title LIKE '%" . $data["product_search"] . "%' OR price LIKE '%" . $data["product_search"] . "%' OR description LIKE '%" . $data["product_search"] . "%'");
    }

    public function SortProduct($data)
    {
        $sort = $data['sort'];
        $field = $data['field'];
        return $this->db->row("SELECT * FROM products ORDER BY $field $sort");
    }
}
