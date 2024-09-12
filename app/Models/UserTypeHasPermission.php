<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTypeHasPermission extends Model
{
    use HasFactory;

    protected $table = 'usertype_has_permission';

    protected $fillable = [
        'usertype_id',
        'permission_type_id'
    ];
}
