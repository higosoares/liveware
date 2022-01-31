<?php

namespace App\Models;

use App\Presenters\ContactPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Contact extends Model
{
    use HasFactory;
    use PresentableTrait;

    protected $presenter = ContactPresenter::class;

    protected $fillable = [
        'name',
        'email',
        'message',
        'ddd',
        'phone'
    ];
}
