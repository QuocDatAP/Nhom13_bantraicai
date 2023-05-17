<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as ModelsRole;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Casts\Attribute;
>>>>>>> create_role
=======
use Illuminate\Database\Eloquent\Casts\Attribute;
>>>>>>> crud_user

class Role extends ModelsRole
{
    use HasFactory;

    protected $fillable = [
        'name',
        'display_name',
<<<<<<< HEAD
<<<<<<< HEAD
        'group'
    ];
=======
        'group',
        'guard_name'
    ];

>>>>>>> create_role
=======
        'group',
        'guard_name'
    ];

>>>>>>> crud_user
}
