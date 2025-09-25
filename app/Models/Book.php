<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Serializer\Annotation\Groups;


#[ApiResource(normalizationContext: ['groups' => ['book:read']])]
#[ApiProperty(serialize: new Groups(['book:read']), property: 'title')]
#[ApiProperty(serialize: new Groups(['book:read']), property: 'description')]
#[ApiProperty(serialize: new Groups(['book:read']), property: 'author')]
class Book extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
