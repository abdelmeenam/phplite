<?php

namespace App\Midlewares;

class admin
{
    public function handle()
    {
        if (1 !== 1) {
            die('test');
        }
    }
}