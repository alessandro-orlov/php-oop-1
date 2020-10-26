<?php

class Client extends User
{
    public $from;
    public $since;

    // Return Functions
    public function getClientFrom()
    {
        return $this->from;
    }

    public function getClientSince()
    {
        return $this->since;
    }
}
