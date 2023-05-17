<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as ModelsRole;
<<<<<<< HEAD
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
=======
use Illuminate\Database\Eloquent\Casts\Attribute;
>>>>>>> crud_product

class Role extends ModelsRole
{
    use HasFactory;

    protected $fillable = [
        'name',
        'display_name',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'group'
    ];
=======
=======
>>>>>>> crud_category
=======
>>>>>>> crud_product
        'group',
        'guard_name'
    ];

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> create_role
=======
        'group',
        'guard_name'
    ];

>>>>>>> crud_user
=======
>>>>>>> crud_category
=======
>>>>>>> crud_product
}
