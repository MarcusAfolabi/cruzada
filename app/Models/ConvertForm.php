<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConvertForm extends Model
{
    use HasFactory;
    protected $fillable = [
        "name","phone","country","address","prayer_request"];
        
}
