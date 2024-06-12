<?php

namespace App\Http\Controllers;

use App\Models\feedbackModel;
use App\Models\menuModel;
use App\Models\promoModel;
use App\Models\reserveModel;
use App\Models\reviewModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $steak = menuModel::where("kategori", "Steak")->get();
        $snack = menuModel::where("kategori", "Snack & Additional")->get();
        $drink = menuModel::where("kategori", "Drink & Beverages")->get();
        $promo = promoModel::all();
        $feedback = feedbackModel::where("is_admin_validate", "1")->get();
        $menu = [
            "steak" => $steak,
            "snack" => $snack,
            "drink" => $drink,
            "promo" => $promo,
            "feedback" => $feedback
        ];

        return view("landingpage", $menu);
    }

    public function reservasi(Request $request)
    {

        // dd($request->date());
        $reservasi = reserveModel::create([
            "name" => $request->complete_name,
            "email" => $request->email_address,
            "date" => date('Y-m-d', strtotime($request->day)),
            "time" => $request->time,
            "total_guest" => $request->no_of_guest,
        ]);

        if ($reservasi) {
            return response([
                'status' => true,
                "message" => "Reservasi Berhasil Dibuat",
            ], 200);
        } else {
            return response([
                'status' => false,
                "message" => "Reservasi Gagal",
            ], 200);
        }
    }

    public function review()
    {
        return view("review");
    }
}
