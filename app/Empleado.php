<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //Configuraciones basicas
    protected $table = "employee";
    protected $primaryKey = "EmployeeId";
    public $timestamps = false;
}
