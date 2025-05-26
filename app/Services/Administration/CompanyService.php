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

     public function getById($id)
    {
        return Company::with('attachments')->find($id);
    }

    public function updateCompany($data, $id){

        $company = Company::with('attachments')->find($id);

        if (!$company) {
            return false; 
        }

        $company->update([
            'name' => $data['name_update'],
            'email' => $data['email_update'],
            'website' => $data['website_update'],
        ]);

        if (isset($data['logo_update'])) {
            $logoPath = $data['logo_update'];

            if ($company->attachments && $company->attachments->logo) {
                \Storage::disk('public')->delete($company->attachments->logo);
            }

            if ($company->attachments) {
                $company->attachments->update(['logo' => $logoPath]);
            } else {
                CompanyAttachment::create([
                    'company_id' => $company->id,
                    'logo' => $logoPath,
                ]);
            }
        }

        return $company;

    }

    public function delete($id)
    {
        $company = Company::with('attachments')->find($id);

        if (!$company) {
            return false;
        }

        // Delete related logo if exists
        if ($company->attachments && $company->attachments->logo) {
            \Storage::disk('public')->delete($company->attachments->logo);
        }

        // Delete attachments and company
        $company->attachments()->delete();
        $company->delete();

        return true;
    }


}
