<?php
namespace df\interfaces\events\templates;

use extas\interfaces\IHasClass;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use extas\interfaces\parameters\IHasParameters;

/**
 * Interface IEventTemplate
 *
 * @package df\interfaces\events\templates
 * @author jeyroik@gmail.com
 */
interface IEventTemplate extends IItem, IHasName, IHasDescription, IHasParameters, IHasClass
{
    const SUBJECT = 'df.event';
}
