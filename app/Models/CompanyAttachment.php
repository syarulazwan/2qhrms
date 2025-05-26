<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyAttachment extends Model
{
    use SoftDeletes;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
}
