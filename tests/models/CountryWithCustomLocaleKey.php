<?php

namespace Hoai\Translatable\Test\Model;

use Hoai\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class CountryWithCustomLocaleKey extends Eloquent
{
    use Translatable;

    public $table = 'countries';
    public $translatedAttributes = ['name'];
    public $translationModel = 'Hoai\Translatable\Test\Model\CountryTranslation';

    /*
     * You can customize per model, which attribute will
     * be used to save the locale info into the database
     */
    public $localeKey = 'language_id';
}
