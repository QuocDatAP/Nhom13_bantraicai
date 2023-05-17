<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as ModelsRole;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Casts\Attribute;
>>>>>>> create_role
=======
use Illuminate\Database\Eloquent\Casts\Attribute;
>>>>>>> crud_user
=======
use Illuminate\Database\Eloquent\Casts\Attribute;
>>>>>>> crud_category

class Role extends ModelsRole
{
    use HasFactory;

    protected $fillable = [
        'name',
        'display_name',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'group'
    ];
=======
=======
>>>>>>> crud_category
        'group',
        'guard_name'
    ];

<<<<<<< HEAD
>>>>>>> create_role
=======
        'group',
        'guard_name'
    ];

>>>>>>> crud_user
=======
>>>>>>> crud_category
}
