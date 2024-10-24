<?php
namespace App\Traits;

use Psr\Log\LogLevel;
use App\Events\BaseEvent;
use App\Services\QueryService;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Contracts\Service\Attribute\Required;

trait DatabaseAwareTrait{
    use LoggerAwareTrait;
    
    private QueryService $queryService;

    #[Required]
    public function setEventDispatcher(QueryService $queryService)
    {
        $this->queryService = $queryService;
    }   

}
