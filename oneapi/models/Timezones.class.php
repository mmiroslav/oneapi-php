<?php namespace Infobip\OneAPI;

class Timezones extends AbstractObject {

    public $timezones;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register(
        'Timezones',
        new ObjectArrayConversionRule('Timezone', 'timeZones')
);
