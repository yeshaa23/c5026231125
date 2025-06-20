<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageCounterController extends Controller
{
public function show()
    {
        // increment
        DB::table('pagecounter')->where('id', 1)->increment('jumlah');

        //update
        $jumlah = DB::table('pagecounter')->where('id', 1)->value('jumlah');

        // view
        return view('pagecounter', ['jumlah' => $jumlah]);
    }
}

// // increment
//         $counter = DB::table('pagecounter')->where('ID', 1)->first();
//         $jumlahpengunjung = 0;

//         //update
//         if ($counter) {
//             $newjumlah = $counter->where('ID', 1)-> update(['jumlah'=> $newjumlah]);
//             $jumlahpengunjung = $newjumlah;
//         }

//         // view
//         return view('pagecounter', ['jumlah' => $jumlahpengunjung]);
