<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BorrowRequest;
use App\Models\Trainee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function abort;
use function redirect;
use function view;

class RentRequestsController extends Controller {
    public function index() {
        $requests = BorrowRequest::all();
        return view('admin.RentRequests.rent_requests', ['requests' => $requests]);
    }
}
