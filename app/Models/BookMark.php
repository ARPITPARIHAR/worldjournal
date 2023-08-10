<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookMark extends Model
{
    protected $fillable = [
        'journal_title', 'issn', 'doi', 'web', 'count', 'publication_language', 'bookmark_date', 'image'
    ];
}
