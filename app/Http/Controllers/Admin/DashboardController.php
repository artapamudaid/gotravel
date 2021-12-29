<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Transaction;
use App\TravelPackage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $requiest)
    {
        return view(
            'pages.admin.dashboard',
            [
                'travel_packages' => TravelPackage::count(),
                'transactions' => Transaction::count(),
                'transactions_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
                'transactions_success' => Transaction::where('transaction_status', 'SUCCESS')->count(),
            ]
        );
    }
}
