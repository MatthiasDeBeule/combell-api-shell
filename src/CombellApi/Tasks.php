<?php

namespace CombellApi;

use CombellApi\Execute;
use App\Models\User;

class Tasks 
{
    public function __construct(
        private array $data = [],
        private User $user = new User)
    {}

    public function GetRecord()
    {
        $Execute = new Execute(
            method: 'getOne',
            data: $this->data,
            user: $this->user
        );

        return $Execute->executeRequest();
    }

    public function GetAllRecords()
    {
        $Execute = new Execute(
            method: 'getAll',
            data: $this->data,
            user: $this->user
        );
        return $Execute->executeRequest();
    }

    public function CreateRecord()
    {
        $Execute = new Execute(
            method: 'post', 
            data: $this->data, 
            user: $this->user
        );
        
        return $Execute->executeRequest();
    }

    public function DeleteRecord()
    {
        $Execute = new Execute(
            method: 'delete',
            data: $this->data,
            user: $this->user
        );

        return $Execute->executeRequest();
    }

    public function GetAllUsers()
    {
        $Execute = new Execute(
            method: 'getAll',
            data: $this->data,
            user: $this->user,
            endPoint: 'users'
        );

        return $Execute->executeRequest();
    }

    public function CreateUser()
    {
        $Execute = new Execute(
            method: 'post',
            data: $this->data,
            endPoint: 'users'
        );

        return $Execute->executeRequest();
    }
}