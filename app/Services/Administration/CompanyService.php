<?php

namespace App\Services\Administration;
use App\Models\Company;
use App\Models\CompanyAttachment;

class CompanyService
{
    public function getCompany()
    {
        return Company::with('attachments')->select('id', 'name', 'email' , 'website')->get();
    }

    public function CreateCompany($data)
    {

        $company = Company::create([
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'website' => $data['website'],
                    ]);

        CompanyAttachment::create([
            'company_id' => $company->id,
            'logo'       => $data['logo'], 
        ]);

        return $company;

    }
}
