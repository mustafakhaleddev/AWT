<?php
use mkhdev\AWT\AWTClass;
return [
    /*
    |---------------------------------------------------------------------
    | @awt(string)
    |---------------------------------------------------------------------
    */
    'awt' => function ($expression) {
        return  "<?php echo awtTrans($expression) ?>";
    }
];