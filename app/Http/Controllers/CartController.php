<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo 'Hello';
        $quantity = (int) $request->input('quantity');
        echo $quantity;
        $id = Auth::id();
        // $existing = DB::select('select * from cart where user_id_key=?', [1]);
        $existing = DB::table('cart')
            ->select('item_name', 'item_quantity')
            ->where('user_id_key', $id)
            ->where('item_name', $request->id)
            ->get()
            ->toArray();

        $check = false;
        $pictures_array = [
            'Rayban2140' => 'https://glassesmart.pk/wp-content/uploads/2021/09/Tom-Ford-Ft-5608-Back-1-350x233.webp',
            'Prada2125' => 'https://glassesmart.pk/wp-content/uploads/2022/06/RB-2180-1-350x233.webp',
            'Aariz009' => 'https://glassesmart.pk/wp-content/uploads/2021/09/Tom-Ford-Ft-5608-Back-1-350x233.webp',
            'RaybanC1991' => 'https://glassesmart.pk/wp-content/uploads/2021/07/Porsche1983-1-350x233.webp',
            'GinzaGoldDiningArmchair' => 'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1580742487-resize.jpg?crop=1xw:1xh;center,top&resize=480:*',
            'RubikLuxuryDiningLounge' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/best-outdoor-chairs-1646349644.jpg?crop=0.505xw:1.00xh;0.236xw,0&resize=640:*',
            'EsterGoldVelvetChair' => 'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1647381285-5059413396021_1_640x640.jpg?crop=1xw:1.00xh;center,top&resize=768:*',
            'TulipPaddedDiningChair' => 'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1613647858-JeromeDeskChair.jpg?crop=0.910xw:0.910xh;0.0689xw,0.0833xh&resize=768:*',
            'BrownBoldStripedButtonShirt' => 'https://cdn.shopify.com/s/files/1/0646/2563/9639/collections/Red_Navy_Blue_Checkered_Shirt_Brumano_Pakistan_1.jpg?v=1667051158',
            'GreyTealBlueCheckeredShirt' => 'https://cdn.shopify.com/s/files/1/0646/2563/9639/products/Black-Blue-Viscose-Printed-Half-Sleeve-Shirt-Brumano-Pakistan-2_400x.jpg?v=1656324029',
            'PinkGreyCheckeredShirt' => 'https://cdn.shopify.com/s/files/1/0646/2563/9639/products/Dark-Maroon-Herringbone-Pattern-Formal-Shirt-Brumano-Pakistan-1-1_400x.jpg?v=1656323924',
            'BlueVibrantFloralPrintedShirt' => 'https://cdn.shopify.com/s/files/1/0646/2563/9639/products/Blue-Vibrant-Floral-Printed-Shirt-Brumano-Pakistan-1_400x.jpg?v=1656324092',
            'SVESTONLALA360' => 'https://ae01.alicdn.com/kf/H77cdd4f1b4d44afcb3b07b975066f3bdy/2020-Minimalist-Men-s-Fashion-Ultra-Thin-Watches-ple-Men-Business-Stainless-Steel-Mesh-Belt-Quartz.jpg',
            'SVESTONBOOMSTON' => 'https://static-01.daraz.pk/p/d49c09bd3cab5b4e6d9296de04beba20.jpg',
            'HERITAGE1921' => 'https://static-01.daraz.pk/p/e180816eb0b92bd5abf09b6fe3ae46cb.jpg',
            'AIRKING' => 'https://static-01.daraz.pk/p/6eeb712cd836b4343cb3503d35ec6e30.jpg',
        ];

        echo $pictures_array[$request->id];
        foreach ($existing as $item) {
            if ($item->item_name == $request->id) {
                $check = true;
                break;
            }
        }
        if (!$check) {
            $data = ['user_id_key' => $id, 'item_name' => $request->id, 'item_quantity' => $quantity, 'picture_link' => $pictures_array[$request->id]];
            DB::table('cart')->insert($data);
        } else {
            // $existing_item = DB::table('cart')
            //     ->select('item_quantity')
            //     ->where('user_id_key', $id)
            //     ->get();
            DB::update('update cart set item_quantity = ? where user_id_key = ? and item_name=?', [$existing[0]->item_quantity + $quantity, $id, $request->id]);
        }
        return redirect()->route('glasses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth::id();

        $quantity = DB::table('cart')
            ->select('item_quantity')
            ->where('user_id_key', $user_id)
            ->where('id', $id)
            ->get();

        // $quantity = DB::select('select item_quantity from cart where user_id_key=? and item_name=? ', [$user_id, $id]);
        echo $quantity[0]->item_quantity;
        DB::update('update cart set item_quantity = ? where user_id_key = ? and id=?', [$quantity[0]->item_quantity + 1, $user_id, $id]);
        return redirect()->route('cart.show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // {
        //     $user_id = Auth::id();
        //     DB::table('cart')
        //         ->where('user_id_key', $user_id)
        //         ->where('id', $id)
        //         ->delete();
        //     return redirect()->route('cart.show');

        $user_id = Auth::id();

        $quantity = DB::table('cart')
            ->select('item_quantity')
            ->where('user_id_key', $user_id)
            ->where('id', $id)
            ->get();

        // $quantity = DB::select('select item_quantity from cart where user_id_key=? and item_name=? ', [$user_id, $id]);
        echo $quantity[0]->item_quantity;
        DB::update('update cart set item_quantity = ? where user_id_key = ? and id=?', [$quantity[0]->item_quantity - 1, $user_id, $id]);
        return redirect()->route('cart.show');
    }
}
