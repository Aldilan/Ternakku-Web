<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;

class DashboardControllerWeb extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $finances = Finance::all();
        $financesToday = Finance::where('created_at', 'like', '%' . date("Y-m-d") . '%')->get();
        $financesTodayCount = count($financesToday);
        $financesCount = count($finances);

        $incomeToday = 0;
        $outcomeToday = 0;
        $incomeTotal = 0;
        $outcomeTotal = 0;
        $governmentTax = 0;

        if ($financesCount != 0) {
            for ($i = 0; $i < $financesCount; $i++) {
                $incomeTotal += $finances[$i]['income'];
                $outcomeTotal += $finances[$i]['outcome'];
            }
        }
        if ($financesTodayCount != 0) {
            for ($i = 0; $i < $financesTodayCount; $i++) {
                $incomeToday += $financesToday[$i]['income'];
                $outcomeToday += $financesToday[$i]['outcome'];
            }
        }

        return view('welcome', ['incomeTotal' => $incomeTotal, 'outcomeTotal' => $outcomeTotal, 'incomeToday' => $incomeToday, 'outcomeToday' => $outcomeToday, 'governmentTax' => $governmentTax]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
