<?php

namespace App\Models;

use App\Models\Traits\PaginateTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory, PaginateTrait;

    protected $fillable = ['name', 'status'];
}
