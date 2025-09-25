<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Serializer\Annotation\Groups;

#[ApiResource()]
#[Groups(['book:read'])]
class Author extends Model
{
    protected $fillable = [
        'name'
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
