<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 27.09.2017
 * Time: 18:31
 */
declare(strict_types = 1);

namespace Exinit\BundesligaSimulator\Domain\Repository;


use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

class ClubRepository extends Repository
{
    protected $defaultOrderings = [
        'numberOfFans' => QueryInterface::ORDER_DESCENDING,
        'name' => QueryInterface::ORDER_ASCENDING,
        ];
}