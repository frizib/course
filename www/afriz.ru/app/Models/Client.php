<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'Клиенты';
    protected $primaryKey = 'Номер_договора';
}
