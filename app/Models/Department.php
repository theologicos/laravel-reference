<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

// Add columns that can be filled in forms here
#[Fillable('name', 'code', 'description')]
class Department extends Model {}
