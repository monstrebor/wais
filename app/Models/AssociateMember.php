<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssociateMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
        'email',
        'first_name',
        'middle_name',
        'last_name',
        'present_address',
        'contact_number',
        'date_of_birth',
        'gender',
        'valid_id_type',
        'valid_id_number',
        'occupation',
        'monthly_income',
        'civil_status',
        'spouse_name',
        'number_of_children',
        'name_of_dependents',
        'birthday_of_dependents'
    ];
}
