<?php

namespace App\Http\Controllers;

use App\Models\Telephone;
use App\Models\Telephonemodel;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder;

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
    public function search(Request $request) {
        $searchQuery = $request->get('searchTextInput');
        $searchOption = $request->get('searchOption');
        if($searchOption == 'telephonemodel') {
            $searchResult = Telephone::with('brand', 'telephoneModel')->whereHas('telephoneModel',
                function ($query) use ($searchQuery){
                $query->where('name', 'LIKE', '%'.$searchQuery.'%');
            })->get();
        }
        elseif($searchOption == 'telephonebrand') {
            $searchResult = Telephone::with('brand', 'telephoneModel')->whereHas('brand',
                function ($query) use ($searchQuery){
                    $query->where('name', 'LIKE', '%'.$searchQuery.'%');
                })->get();
        }
        else {
            $searchResult = Telephone::with('brand', 'telephoneModel')->where
            ($searchOption, 'LIKE', '%'.$searchQuery.'%')->get();
        }
        return view('index.search', [
            'telephones' => $searchResult
        ]);
    }
}
