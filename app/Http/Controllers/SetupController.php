<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function setup(Request $request) {
        $request->validate([
            ''
        ]);
    }
}
