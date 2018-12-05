<?php

if (!function_exists('awtTrans')) {

    /**
     * AWT translation helper function
     * @param $word
     * @param null $locale
     * @return string
     */
    function awtTrans($word, $locale = null)
    {


        //Set Locale for translator
        if ($locale == null)
        {
            if(config('awt.use_app_locale'))
            {
                $locale = App::getLocale();
            }else
            {
                $locale=config('awt.default_locale');
            }
        }


        $AwtFile = resource_path('lang/' . $locale . '/awt.php');
        if (file_exists($AwtFile)) {
            if (Lang::get('awt.' . $word,[],$locale,false)!='awt.' . $word) {
                return trans('awt.' . $word);
            }
        }

        try{
            $langFile = \mkhdev\AWT\AWTClass::openAwtLangFile($AwtFile, $locale);
            if ($langFile) {
                if(config('awt.allow_google_translate'))
                {
                    $translateClient = new \Stichoza\GoogleTranslate\TranslateClient();
                    $translatedWord = $translateClient->setSource(null)->setTarget($locale)->translate($word);

                }else
                {
                    $translatedWord=$word;
                }

                \mkhdev\AWT\AWTClass::pushWord($word, $translatedWord, $AwtFile);
                return $translatedWord;
            }

        }catch (Exception $e)
        {
            return $word;
        }

        return trans('awt.' . $word);
    }
}
