<?php
namespace df\components\plugins;

use df\components\events\Event;
use df\interfaces\events\IEventRepository;
use extas\components\plugins\PluginInstallDefault;

/**
 * Class PluginInstallEvents
 *
 * @package df\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallEvents extends PluginInstallDefault
{
    protected $selfRepositoryClass = IEventRepository::class;
    protected $selfItemClass = Event::class;
    protected $selfUID = Event::FIELD__NAME;
    protected $selfSection = 'events';
    protected $selfName = 'event';
}
