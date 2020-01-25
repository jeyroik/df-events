<?php
namespace df\components\events\templates;

use df\interfaces\events\IEventTemplateRepository;
use extas\components\repositories\Repository;

/**
 * Class EventTemplateRepository
 *
 * @package df\components\events\templates
 * @author jeyroik@gmail.com
 */
class EventTemplateRepository extends Repository implements IEventTemplateRepository
{
    protected $scope = 'df';
    protected $name = 'event_templates';
    protected $pk = EventTemplate::FIELD__NAME;
    protected $idAs = '';
    protected $itemClass = EventTemplate::class;
}
