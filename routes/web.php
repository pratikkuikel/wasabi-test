<?php

use Illuminate\Support\Facades\Route;
use App\Models\State;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return State::all();
    // $state =  State::where('mero->jay','lImQ')->first();
    // return $state;
    // $data = State::whereAbbr('CA')->first()->name;
    // return $data;
});
