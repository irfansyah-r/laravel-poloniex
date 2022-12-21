<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Htunlogic\Poloniex\Poloniex;

class PoloniexController extends Controller
{
    public function index()
    {
        $tickers = Poloniex::getTickers();
        $volume = Poloniex::getVolume();
        // dd($volume);
        return view('home', compact('tickers', 'volume'));
    }

    public function getOrderBook($symbol)
    {
        $tickers = Poloniex::getTickers();
        $volume = Poloniex::getVolume();
        $depth = Poloniex::getOrderBook($symbol);
        return view('home', compact('tickers', 'volume', 'depth', 'symbol'));
    }

    public function Volumes()
    {
        $test = Poloniex::getVolume();
        return view('Volumes', compact('test'));
    }
}
