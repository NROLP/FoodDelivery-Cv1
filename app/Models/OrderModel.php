<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user_orders';
    protected $primaryKey       = 'o_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['o_id', 'u_id', 'd_id', 'd_name', 'quantity', 'price', 'status', 'date', 'success-date', 'r_id'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function countOrders()
    {
        return $this->db->table('user_orders')->countAllResults();
    }

    public function countPendingOrders()
    {
        $builder = $this->db->table('user_orders');
        $builder->where('status', null);

        return $builder->countAllResults();
    }
    
    public function countDeliveredOrders() {
        $builder = $this->db->table('user_orders');
        $builder->where('status', 'closed');

        return $builder->countAllResults();
    }

    public function countRejectedOrders() {
        $builder = $this->db->table('user_orders');
        $builder->where('status', 'rejected');

        return $builder->countAllResults();
    }
    
}
