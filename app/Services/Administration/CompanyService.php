<?php

namespace App\Services\Administration;
use App\Models\Company;

class CompanyService
{
    public function getCompany()
    {
        return Company::with('attachments')->select('id', 'name')->get();
    }
}
