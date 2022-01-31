<?php

namespace App\Presenters;

use App\Enum\ContactEnum;
use Laracasts\Presenter\Presenter;
use Illuminate\Support\Str;

class ContactPresenter extends Presenter
{
    public function nomeEstado()
    {
        return ContactEnum::estado($this->ddd);
    }
}
