<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function construct()
    {
        $this->load->db();
    }
}


