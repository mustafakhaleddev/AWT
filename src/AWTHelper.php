<?php

if (!function_exists('awtTrans')) {

    /**
     * AWT Trans Helper
     *
     * @param $word
     * @param null $locale
     * @return array|\Illuminate\Contracts\Translation\Translator|null|string
     * @throws Exception
     */
    function awtTrans($word, $locale = null)
    {
        if ($locale == null) {
            $locale = App::getLocale();
        }
        $AwtFile = resource_path('lang/' . $locale . '/awt.php');
        if (file_exists($AwtFile)) {
            if (Lang::has('awt.' . str_replace(' ', '', strtolower($word)), $locale)) {
                $word = str_replace(' ', '', strtolower($word));
                return trans('awt.' . $word);
            }
        }
        $langFile = \mkhdev\AWT\AWTClass::openAwtLangFile($AwtFile, $locale);
        if ($langFile) {
            $tr = new \Stichoza\GoogleTranslate\TranslateClient();
            $wordT = $tr->setSource(null)->setTarget($locale)->translate($word);
            \mkhdev\AWT\AWTClass::pushWord($word, $wordT, $AwtFile);
            return $wordT;
        }
        $word = str_replace(' ', '', strtolower($word));
        return trans('awt.' . $word);
    }
}
