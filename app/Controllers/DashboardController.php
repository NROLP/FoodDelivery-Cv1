<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DashboardModel;
use App\Models\OrderModel;

class DashboardController extends BaseController
{
    protected $DashboardModel, $OrderModel;

    public function __construct()
    {
        $this->DashboardModel = new DashboardModel();
        $this->OrderModel = new OrderModel();
    }

    public function viewDashboard()
    {
        $DashboardModel = new DashboardModel(); // FETCH AND DISPLAY TOTAL USERS IN THE DATABASE
        $data['countUsers'] = $DashboardModel->countUsers();

        $OrderModel = new OrderModel(); // FETCH AND DISPLAY TOTAL USERS IN THE DATABASE
        $data['countOrders'] = $OrderModel->countOrders();

        $OrderModel = new OrderModel(); // FETCH AND DISPLAY TOTAL PENDING ORDERS IN THE DATABASE
        $data['countPendingOrders'] = $OrderModel->countPendingOrders();

        $OrderModel = new OrderModel(); // FETCH AND DISPLAY TOTAL COMPLETE IN THE DATABASE
        $data['countDeliveredOrders'] = $OrderModel->countDeliveredOrders();

        $OrderModel = new OrderModel(); // FETCH AND DISPLAY TOTAL COMPLETE IN THE DATABASE
        $data['countRejectedOrders'] = $OrderModel->countRejectedOrders();

        return view('admin/dashboard', $data);
    }
}
