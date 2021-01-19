<?php

namespace App\Http\Controllers;

use App\Models\Telephone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view
        $telephones = Telephone::with('brand', 'telephoneModel')->orderByDesc('id')->get();
        return view('index.index', [
            'title' => 'Telephones',
            'telephones' => $telephones
        ]);
    }
}
