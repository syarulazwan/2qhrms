<?php

namespace App\Http\Controllers\Administration\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Administration\CompanyService;

class CompanyController extends Controller
{
    public function __construct(CompanyService $CompanyService)
    {
        $this->CompanyService = $CompanyService;
    }

     public function index(){
        return view('admin/pages/administration/organization/company/company');
    }

    public function ajaxcompany()
    {
        $companyList = $this->CompanyService->getCompany();

        $data = [];
        $counter = 1;

        foreach ($companyList as $company) {
            $data[] = [
                'no' => $counter++,
                'name' => $company->name ?? '-',
                'filename' => $company->attachments->filename ?? '-', 
            ];
        }

        return response()->json([
            'data' => $data
        ]);
    }
}
