<?php

namespace Musonza\Groups\Models;

use Illuminate\Database\Eloquent\Model;
use Musonza\Groups\Groups;

class GroupEmails extends Model
{
    protected $fillable = [
        'id',
        'email',
        'group_id',
        'short_description',
        'image',
        'private',
        'extra_info',
        'settings',
        'conversation_id',
    ];

}