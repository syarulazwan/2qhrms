<?php

namespace App\Http\Controllers\Administration\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Administration\CompanyService;
Use App\Http\Requests\Administration\Company\CompanyRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
                'email' => $company->email ?? '-',
                'website' => $company->website ?? '-',

                'logo' => $company->attachments && $company->attachments->logo
                        ? '<img src="' . asset('storage/' . $company->attachments->logo) . '" width="100" height="100">'
                        : '-',
                        
                'action' => '
                    <button class="btn btn-sm btn-primary editCompanyBtn" data-id="' . $company->id . '">
                        Edit
                    </button>
                    <button class="btn btn-sm btn-danger deleteCompanyBtn" data-id="' . $company->id . '">
                        Delete
                    </button>'
            ];
        }


        return response()->json([
            'data' => $data
        ]);
    }

    public function store(CompanyRequest $request)
    {
        $data = $request->validated();

        DB::beginTransaction();

        try {

            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logoPath = $logo->store('logos', 'public');
                $data['logo'] = $logoPath;
            }

            $create = $this->CompanyService->CreateCompany($data);

            DB::commit();

            return response()->json(['message' => 'Company created successfully!'], 200);
        } catch (\Exception $e) {
            DB::rollback();

            if (!empty($logoPath) && \Storage::disk('public')->exists($logoPath)) {
                \Storage::disk('public')->delete($logoPath);
            }

            Log::error('Company creation failed: ' . $e->getMessage());

            return response()->json(['message' => 'Company creation failed.'], 500);
        }
    }



}
