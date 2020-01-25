<?php
namespace df\components\events;

use df\interfaces\events\IEvent;
use df\interfaces\events\IEventTemplateRepository;
use extas\components\Item;
use extas\components\parameters\THasParameters;
use extas\components\SystemContainer;
use extas\components\templates\THasTemplate;
use extas\components\THasDescription;
use extas\components\THasName;

/**
 * Class Event
 *
 * @package df\components\events
 * @author jeyroik@gmail.com
 */
class Event extends Item implements IEvent
{
    use THasName;
    use THasDescription;
    use THasParameters;
    use THasTemplate;

    /**
     * @return \extas\interfaces\repositories\IRepository|mixed
     */
    function getTemplateRepository()
    {
        return SystemContainer::getItem(IEventTemplateRepository::class);
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
