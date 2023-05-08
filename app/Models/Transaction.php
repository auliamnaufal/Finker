<?php

namespace App\Models;

use App\Models\Scopes\LoggedInUserScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'amount',
        'type',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    protected static function booted()
    {
        static::addGlobalScope(new LoggedInUserScope);
    }
}
