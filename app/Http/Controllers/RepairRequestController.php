<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\RepairRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepairRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $repairRequests = RepairRequest::whereHas('car', function ($query) {
            $query->where('user_id', Auth::id());
        })->with('car')->get();
        return view('repair_requests.index', compact('repairRequests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = Car::all();
        return view('repair_requests.create', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = $request->validate([
            'problem_description' => ['required', 'string', 'max:255'],
            'status'              => ['required', 'string', 'max:255'],
            'repair_date'         => ['nullable', 'date'], 
            'car_id'              => ['required', 'exists:cars,id'],
        ]);

        $date['user_id'] = Auth::id();
        RepairRequest::create($date);
        return redirect()->route('repair_requests.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(RepairRequest $repairRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RepairRequest $repairRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RepairRequest $repairRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RepairRequest $repairRequest)
    {
        //
    }
}
