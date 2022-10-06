<?php

namespace App\Models;

use App\Services\ModelService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;
use Spatie\Permission\Exceptions\RoleAlreadyExists;
use Spatie\Permission\Guard;
use Spatie\Permission\Models\Role as SpatieRole;

/**
 * Class Role
 *
 * @package App\Models
 * @author
 */
class Role extends SpatieRole
{
    use HasFactory;


    /**
     * default database connection
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * Role constructor.
     *
     * @param  array  $attributes
     */
    public function __construct(array $attributes = [])
    {

    }
}
