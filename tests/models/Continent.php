<?php

namespace Hoai\Translatable\Test\Model;

use Hoai\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * A test class that has no required properties.
 */
class Continent extends Eloquent
{
    use Translatable;

    public $translatedAttributes = ['name'];
}
