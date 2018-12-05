<?php
namespace mkhdev\AWT;
use Illuminate\Support\Facades\Blade;

class AWTClass
{

    /**
     * Register the blade.
     *
     * @param  array $directives
     * @return void
     */
    public static function register(array $directives)
    {
        collect($directives)->each(function ($item, $key) {
            Blade::directive($key, $item);
        });
    }

    /**
     * Open AWT Lang file
     *
     * @param $AwtFile
     * @return bool|resource
     */
    public static function openAwtLangFile($AwtFile, $locale)
    {
        if (!file_exists($AwtFile)) {
            $file = self::createAwtLangFile($AwtFile, $locale);

            return $file;
        }
        $file = file($AwtFile);
        return $file;
    }


    /**
     * Create AWT Lang File
     * @param $AwtFile
     * @return bool|resource
     */
    public static function createAwtLangFile($AwtFile, $locale)
    {
        if (!file_exists(resource_path('lang/' . $locale))) {
            mkdir(resource_path('lang/' . $locale), 0777, true);
        }
        $file = copy(__DIR__ . '/stubs/blank.stub', $AwtFile);
        return $file;
    }


    /**
     * Push The Word To AWT Array File
     *
     * @param $word
     * @param $translate
     * @param $AwtFile
     */
    public static function pushWord($word, $translate, $AwtFile)
    {
        $lines = array();
        foreach (file($AwtFile) as $line) {
            if (strpos($line, '#AWTLINEHELPER') !== false) {
                array_push($lines, '"' . $word. '"=>"' . $translate . '",');
                array_push($lines, "\n");

            }

            array_push($lines, $line);
        }
        file_put_contents($AwtFile, $lines);
    }

}