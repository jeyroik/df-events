<?php
namespace df\interfaces\events;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use extas\interfaces\parameters\IHasParameters;
use extas\interfaces\templates\IHasTemplate;

/**
 * Interface IEvent
 *
 * @package df\interfaces\events
 * @author jeyroik@gmail.com
 */
interface IEvent extends IItem, IHasName, IHasDescription, IHasParameters, IHasTemplate
{
    const SUBJECT = 'df.event';
}
