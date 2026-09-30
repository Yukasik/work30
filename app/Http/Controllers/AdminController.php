<?php

namespace App\Http\Controllers;

use App\Models\RepairRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $repairRequests = RepairRequest::all();
        
        return view('admin.index', compact('repairRequests'));
    }
}

