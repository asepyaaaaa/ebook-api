<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\AuthController;

class AuthController extends Controller
{
    public function me(){
        return[
            'NIS'=> 3103120181,
            'Nama'=> 'Rafif Dian Axelingga',
            'Phone' => '08512346984',
            'Class'=> 'XII RPL 6'
        ];
    }
}
