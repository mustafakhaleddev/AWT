<?php
use mkhdev\AWT\AWTClass;
return [
    /*
    |---------------------------------------------------------------------
    | @awt(string)
    |---------------------------------------------------------------------
    */
    'awt' => function ($expression, $locale = null) {
        return  "<?php echo awtTrans($expression, $locale) ?>";
    }
];
