<?php
namespace App\Repositories\Post;

use App\Repositories\EloquentRepository;
use App\User;

class PostEloquentRepository extends EloquentRepository implements PostRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }
}