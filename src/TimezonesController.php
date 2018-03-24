<?php

namespace Mixtlisoft\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;


class TimezonesController extends Controller
{

    public function index($timezone = NULL)
    {
        Log::error("Ejecutando timezone...");
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
         return view('my_package_name::timezones', compact('current_time'));
        //return view('mixtlisoft.timezones.timezones', compact('current_time'));
    }

}

