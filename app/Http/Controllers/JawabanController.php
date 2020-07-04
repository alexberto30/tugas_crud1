<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Jawaban;

class JawabanController extends Controller
{
    public function index(Pertanyaan $pertanyaan)
    {
        $data['pertanyaan'] = $pertanyaan;
        return view('jawaban.index', $data);
    }

    public function store(Pertanyaan $pertanyaan)
    {
    	$jawaban = Jawaban::create(request()->except('_token'));

    	return back()->with('success', 'Jawaban Berhasil Ditambahkan');
    }
}
