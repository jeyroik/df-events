<?php
namespace df\components\events;

use df\interfaces\events\IEventRepository;
use extas\components\repositories\Repository;

/**
 * Class EventRepository
 *
 * @package df\components\events
 * @author jeyroik@gmail.com
 */
class EventRepository extends Repository implements IEventRepository
{
    protected $itemClass = Event::class;
    protected $idAs = '';
    protected $pk = Event::FIELD__NAME;
    protected $name = 'events';
    protected $scope = 'df';
}
