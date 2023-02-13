<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Employees;

class report extends Model
{
    protected $table = 'reports';

    public function employee()
    {
        return $this->belongsTo(Employees::class);
    }
}