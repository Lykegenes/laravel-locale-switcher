<?php

namespace Lykegenes\LocaleSwitcher\Drivers;

use Illuminate\Http\Request;

class RequestDriver extends BaseDriver
{
    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const DEFAULT_KEY = 'locale';

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function has($key = self::DEFAULT_KEY)
    {
        return $this->request->has($key);
    }

    public function get($key = self::DEFAULT_KEY, $default = null)
    {
        return $this->request->get($key, $default);
    }
}
