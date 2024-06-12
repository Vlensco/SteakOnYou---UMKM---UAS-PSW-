<?php

namespace App\Http\Controllers;
use App\Models\feedbackModel;

use Illuminate\Http\Request;

class SubmitController extends Controller
{
    public function submitreview(Request $request)
    {
        $submitreview = feedbackModel::create([
            "nama_feedback" => $request->full_name,
            "review_feedback" => $request->message,
            "bintang_feedback" => $request->star,
        ]);

        if ($submitreview) {
            return response([
                'status' => true,
                "message" => "Review Berhasil Dibuat",
            ], 200);
        } else {
            return response([
                'status' => false,
                "message" => "Review Gagal Dibuat",
            ], 200);
        }
    }
}
