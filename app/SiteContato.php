<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;



class SiteContato extends Model
{
    use softDeletes;
    protected $table = 'site_contatos';
}
