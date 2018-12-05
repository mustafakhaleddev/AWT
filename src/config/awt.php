<?php

return [
    /*
     * Enable/Disable Google Translate.
     * if true it will translate the words and push it to the lang file.
     * if false it will only push the words to the lang file.
     */
    "allow_google_translate" => true,


    /*
     * Use application current locale for translation
     * if false it will use the package default locale.
     */
    'use_app_locale' => true,


    /*
     * default locale for translation if you did not use app locale
     */
    'default_locale' => 'en'

];