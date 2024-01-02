<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTranslations extends Model
{
    use HasFactory;
    protected $fillable = ['lang_id', 'title', 'description'];

    public function language()
    {
        return $this->belongsTo(language::class, 'lang_id');
    }
}
