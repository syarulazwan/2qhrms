<?php

namespace App\Http\Controllers\Administration\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
     public function index(){
        return view('admin/pages/administration/organization/company/company');
    }
}
