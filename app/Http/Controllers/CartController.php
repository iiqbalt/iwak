<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;

use App\Authentication;

use Auth;

use Carbon\Carbon;

use Session;

use DB;

use File;

use Yajra\Datatables\Datatables;

use Response;

class CartController extends Controller
{
    public function countcart() {
       $cart = DB::table('cart')
                ->where("id_account", Auth::user()->id_account)
                ->count();

        return Response()->json($cart);
    }

    public function viewcart() {
      return view('checkout');
    }

    public function opencart() {
       $cart = DB::table('cart')
                ->join('produk', 'produk.id_produk', '=', 'cart.id_produk')
                ->leftjoin('imageproduk', 'imageproduk.id_produk', '=', 'produk.id_produk')
                ->where("cart.id_account", Auth::user()->id_account)
                ->groupby("cart.id_produk")
                ->get();

        return Response()->json($cart);
    }

    public function deletecart(Request $req) {
        DB::table('cart')
                ->where('id_cart', $req->id)
                ->delete();

        return Response()->json('sukses');
    }

    public function changetoko(Request $req) {
        DB::table('cart')
          ->where('id_account', Auth::user()->id_account)
          ->delete();

        DB::table("cart")
          ->insert([
            "id_produk" => $req->id,
            "id_account" => Auth::user()->id_account,
            "qty" => 1,
            "created_at" => Carbon::now('Asia/Jakarta'),
          ]);

        return Response()->json('sukses');
    }

    public function addcart(Request $req) {
      DB::beginTransaction();
      try {

        $cekcart = DB::table("cart")
                    ->join('produk', 'produk.id_produk', '=', 'cart.id_produk')
                    ->where("cart.id_account", Auth::user()->id_account)
                    ->first();

        $cekexist = DB::table("produk")
                      ->where("produk.id_produk", $req->id)
                      ->first();

        if ($cekcart != null && $cekexist != null) {
          if ($cekexist->id_account != $cekcart->id_account) {
            return response()->json(["status" => 7]);
          }
        }

        $cek = DB::table("cart")->join('produk', 'produk.id_produk', '=', 'cart.id_produk')->where("cart.id_account", Auth::user()->id_account)->where("produk.id_produk", $req->id)->first();

        if ($cek == null) {
          DB::table("cart")
            ->insert([
              "id_produk" => $req->id,
              "id_account" => Auth::user()->id_account,
              "qty" => 1,
              "created_at" => Carbon::now('Asia/Jakarta'),
            ]);

            DB::commit();
            return response()->json(["status" => 1]);
        } else {
          DB::table("cart")
            ->where("id_cart", $cek->id_cart)
            ->update([
              "qty" => (int)$cek->qty + 1,
              "created_at" => Carbon::now('Asia/Jakarta'),
            ]);

            DB::commit();
            return response()->json(["status" => 3]);
        }

      } catch (\Exception $e) {
        dd($e);
        DB::rollback();
        return response()->json(["status" => 4]);
      }

    }
}
