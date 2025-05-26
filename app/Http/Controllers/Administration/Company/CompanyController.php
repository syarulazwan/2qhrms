<?php

namespace App\Http\Controllers\Administration\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Administration\CompanyService;
Use App\Http\Requests\Administration\Company\CompanyRequest;
Use App\Http\Requests\Administration\Company\UpdateCompanyRequest;
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

    public function single($id = null)
    {
        $company = $this->CompanyService->getById($id);
        if (!$company) {
            return response()->json(['error' => 'Company not found'], 404);
        }
        return response()->json($company);
    }


    public function update(UpdateCompanyRequest $request, $id)
    {
        $data = $request->validated();

        DB::beginTransaction();

        try {

            if ($request->hasFile('logo_update')) {
                $logo = $request->file('logo_update');
                $logoPath = $logo->store('logos', 'public');
                $data['logo_update'] = $logoPath;
            }

            $create = $this->CompanyService->updateCompany($data,$id);

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

    public function delete($id = null)
    {
        $deleted = $this->CompanyService->delete($id);

        if (!$deleted) {
            return response()->json(['error' => 'Company not found'], 404);
        }

        return response()->json(['message' => 'Company deleted successfully.']);
    }





}
