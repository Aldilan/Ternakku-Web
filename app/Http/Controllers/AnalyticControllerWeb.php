<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;

class AnalyticControllerWeb extends Controller
{
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

        return view('modules.analytic.index', ['incomeTotal' => $incomeTotal, 'outcomeTotal' => $outcomeTotal, 'incomeToday' => $incomeToday, 'outcomeToday' => $outcomeToday, 'governmentTax' => $governmentTax]);
    }
}
