<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class StoreEntity extends Entity
{
    protected $attributes = [
        'name' => null,
        'address' => null,
    ];
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
}
