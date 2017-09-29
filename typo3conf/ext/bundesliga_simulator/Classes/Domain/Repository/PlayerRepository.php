<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 28.09.2017
 * Time: 10:38
 */
declare(strict_types=1);

namespace Exinit\BundesligaSimulator\Domain\Repository;


use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

class PlayerRepository extends Repository
{
    protected $defaultOrderings = [
        'last_name' => QueryInterface::ORDER_ASCENDING,
        'first_name' => QueryInterface::ORDER_ASCENDING,
        'country' => QueryInterface::ORDER_ASCENDING,
        'age' => QueryInterface::ORDER_ASCENDING,
        'transfer_fee' => QueryInterface::ORDER_ASCENDING,
    ];
}