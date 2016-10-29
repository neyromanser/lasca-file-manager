<?php

namespace Neyromanser\LascaFileManager;

use Illuminate\Support\Facades\Facade;

class LascaFileManagerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lasca-file-manager';
    }
}
