<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Carts::with('user', 'books')->get();

        return view('carts.index', compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cart = new Carts;
        // Lakukan validasi dan pengisian data sesuai kebutuhan
        // Misalnya:
        // $cart->user_id = $request->user_id;
        // $cart->save();

        return redirect()->route('carts.index')->with('success', 'Cart has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Lakukan validasi dan update data sesuai kebutuhan
        // Misalnya:
        // $cart->quantity = $request->quantity;
        // $cart->save();

        return redirect()->route('carts.index')->with('success', 'Cart has been updated.');
    }

    /**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $cart = Carts::findOrFail($id);
    $cart->delete();

    return redirect()->route('carts.index')->with('success', 'Cart has been deleted.');
}

}
