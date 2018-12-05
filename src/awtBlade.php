<?php
return [
    /*
     * Register Awt Blade directive
     * you can use it in blade file
     * @awt("hello World")
     */
    'awt' => function ($expression) {
        return  "<?php echo awtTrans($expression) ?>";
    }
];