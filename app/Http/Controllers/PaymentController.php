<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function skipPayment()
    {
        return redirect('/confirmation');
    }


}
