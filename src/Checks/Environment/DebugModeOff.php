<?php

namespace Vistik\Checks\Environment;

class DebugModeOff extends CheckConfigSetting
{

    public function __construct()
    {
        parent::__construct('app.debug', false);
    }
}
