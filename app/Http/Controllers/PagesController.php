<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
class PagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function glasses()
    {
        $user = Auth::user();

        $array = [['glasses1' => 'rayban2140'], ['glasses2' => 'prada2125'], ['glasses3' => 'aariz009'], ['glasses4' => 'raybanc1991']];
        return view('pages.glasses')->with('array', $array);
    }

    public function chairs()
    {
        return view('pages.chairs');
    }

    public function shirts()
    {
        return view('pages.shirts');
    }

    public function watches()
    {
        return view('pages.watches');
    }

    
    public function cart()
    {
        $id = Auth::id();

        $items = DB::table('cart')
            ->select('*')
            ->where('user_id_key', $id)
            ->get();

        return view('pages.cart', with(['items' => $items]));
    }
}
