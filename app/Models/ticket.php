<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ticket extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    // protected $table = '';

    public function category()
    {
        return $this->hasOne(category::class);
    }

    public function programer()
    {
        return $this->hasMany(programer::class);

    }
    protected function name(): Attribute
    {
    return Attribute::make(
    get: fn ($value) => strtoupper($value),
    set: fn ($value) => strtolower($value),
    );
    }
    
    
}
