<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 28.09.2017
 * Time: 10:38
 */
declare(strict_types=1);

namespace Exinit\BundesligaSimulator\Domain\Repository;


use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

class PlayerRepository extends Repository
{
    protected $defaultOrderings = [
        'transferFee' => QueryInterface::ORDER_DESCENDING,
        'lastName' => QueryInterface::ORDER_ASCENDING,
        'firstName' => QueryInterface::ORDER_ASCENDING,
        'country' => QueryInterface::ORDER_ASCENDING,
        'age' => QueryInterface::ORDER_ASCENDING,
    ];
}