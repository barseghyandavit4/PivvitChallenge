<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    //

    public function store(Request $request){

        $this->validate($request, [
            'customerName' => 'required|max:255',
            'offeringID' => 'required|integer',
            'quantity' => 'required|integer'
        ]);

        $model = new Purchase();

        $model->customerName = $request->input('customerName');
        $model->offeringID = $request->input('offeringID');
        $model->quantity = $request->input('quantity');

        $model->save();

        return $this->redirectTo(route('/'));
    }
}
