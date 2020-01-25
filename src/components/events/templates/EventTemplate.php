<?php
namespace df\components\events\templates;

use df\interfaces\events\templates\IEventTemplate;
use extas\components\Item;
use extas\components\parameters\THasParameters;
use extas\components\THasClass;
use extas\components\THasDescription;
use extas\components\THasName;

/**
 * Class EventTemplate
 *
 * @package df\components\events\templates
 * @author jeyroik@gmail.com
 */
class EventTemplate extends Item implements IEventTemplate
{
    use THasName;
    use THasDescription;
    use THasParameters;
    use THasClass;

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
