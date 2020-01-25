<?php
namespace df\components\plugins;

use df\components\events\templates\EventTemplate;
use df\interfaces\events\IEventTemplateRepository;
use extas\components\plugins\PluginInstallDefault;

/**
 * Class PluginInstallEventTemplates
 *
 * @package df\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallEventTemplates extends PluginInstallDefault
{
    protected $selfRepositoryClass = IEventTemplateRepository::class;
    protected $selfItemClass = EventTemplate::class;
    protected $selfUID = EventTemplate::FIELD__NAME;
    protected $selfSection = 'event_templates';
    protected $selfName = 'event template';
}
