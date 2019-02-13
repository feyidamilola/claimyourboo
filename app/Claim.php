<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
            'your_username',
            'your_social_media',
            'relationship',
            'length',
            'personal_response',
            'partner_handle',
            'share',
            'result',
            'partner_social_media'
    ];
}
