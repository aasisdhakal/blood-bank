<?php

namespace App\Models;

use App\Concerns\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory, Filterable;
    
    protected $fillable = ['name', 'age', 'sex', 'blood_group', 'location', 'phone'];
    
    public function scopeSearch($q, $param)
    {
        $query = $q->where('name', 'like', '%' . $param . '%');
        
        return $query;
    }
}
