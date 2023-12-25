<?php
namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public User $user;
    public function __construct(User $user)
    {
        parent::__constructor($user);
    }
}

?>