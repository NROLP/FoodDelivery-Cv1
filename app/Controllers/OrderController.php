<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class OrderController extends BaseController
{
    protected $OrderModel;

    public function __construct()
    {
        $this->OrderModel = new OrderModel(); // USED CODE!!!
    }
}
