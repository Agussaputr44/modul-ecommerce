<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\USer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();

        return view('pages.user.index', compact('products'));
    }

    public function detail_product($id)
    {
        $product = Product::findOrFail($id);

        return view("pages.user.detail", compact('product'));
    }

    public function purchase($productId, $userId){
        $product = Product::findOrFail($productId);
        $user = User::findOrFail($userId);

        if($user->point >= $product->price){
            $totalPoints = $user->point - $product->price;

            $user->update([
                'point' => $totalPoints,
            ]);

            Alert::succes('Berhasil!', 'Produk berhasil dibeli');
            return redirect()->back();
        }else{
            Alert::error('Gagal!', 'Point anda tidak cukup');
            return redirect()->back();
        }
    }
}
