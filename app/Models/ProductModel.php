<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['product_class', 'product_name'];

    // Verileri product_class'e göre gruplamak için bir metot
    public function getProductsByClass()
    {
        $builder = $this->db->table($this->table);
        $builder->select('product_class, product_name');
        $builder->orderBy('product_class', 'ASC');
        $query = $builder->get();

        $products = [];

        // Verileri product_class'e göre gruplayın
        foreach ($query->getResultArray() as $row) {
            $products[$row['product_class']][] = $row['product_name'];
        }

        return $products;
    }
}
