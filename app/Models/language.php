<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class language extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name'];

    public function articleTranslations()
    {
        return $this->hasMany(ArticleTranslations::class);
    }


}
