<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['subject', 'mail', 'remarks']; 
}
