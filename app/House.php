<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'houses';
    protected $fillable = ['user_id', 'email', 'phone', 'contact', 'relationship', 'housename',
        'address', 'lease_term', 'rental', 'housetype', 'ping', 'house_age', 'deposit', 'pet', 'elevator', 'opened',
        'parking_spaces', 'house_limit', 'material', 'life_function',  'curfew', 'equipment', 'security_equipment', 'identity_requirements', 'balcony', 'others','click',
        'file1', 'file2', 'file3', 'file4', 'file5', 'file6','verify'];
}
