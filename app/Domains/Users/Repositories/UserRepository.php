<?php
namespace App\Domains\Models\Users\Repositories;


use App\Core\Repositories\BaseRepository;
use App\Domains\Users\User;

class UserRepository extends BaseRepository
{

    public function __construct()
    {
        $this->model = User::class;
    }

}