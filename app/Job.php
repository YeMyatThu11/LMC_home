<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;
class Job extends Model
{
    use HasTrixRichText;
    
    protected $guarded = [];
}
