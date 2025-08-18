<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class collectioManagerController extends Controller
{
    public function payDay2()
    {
        return view('collectionManager.paydayCollectionPending2');
    }
    public function payDay()
    {
        return view('collectionManager.paydayCollectionPending');
    }
    public function payDayHold()
    {
        return view('collectionManager.paydayCollectionHolding');
    }
}
