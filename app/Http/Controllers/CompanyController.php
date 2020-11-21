<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function hello(){

        $c = Company::create(['name'=>'abc com', 'phone'=>'123-12-2233']);
    }
}
