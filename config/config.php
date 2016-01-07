<?php

return array(
    /**
     *--------------------------------------------------------------------------
     * LocaleSwitcher Settings
     *--------------------------------------------------------------------------
     *
     * LocaleSwitcher is enabled by default.
     *
     */
    'enabled' => true,

    /**
     *--------------------------------------------------------------------------
     * LocaleSwitcher URL parameter key prefix
     *--------------------------------------------------------------------------
     *
     * Sometimes you want to set the URL parameter key to be used by LocaleSwitcher
     * to use to detect locale switching requests.
     * By default, it is : http://my-app.com/some/page/?locale=en
     *
     */
    'URL_param_key' => 'locale',

    /**
     *--------------------------------------------------------------------------
     * Enabled Locales
     *--------------------------------------------------------------------------
     *
     * Specify the locales you want to enable in your app.
     *
     */
    'enabled_locales' => [
        'en' => 'English',
        'fr' => 'Français',
    ],

);
