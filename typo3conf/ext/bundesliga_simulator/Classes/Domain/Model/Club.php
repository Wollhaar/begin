<?php
declare(strict_types=1);

namespace Exinit\BundesligaSimulator\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Daniel Ablass <d.ablass@exinit.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Club extends AbstractEntity
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $foundingYear;

    /**
     * @var string
     */
    protected $stadiumName;

    /**
     * @var int
     */
    protected $stadiumCapacity;

    /**
     * @var int
     */
    protected $totalMarketValue;

    /**
     * @var int
     */
    protected $numberOfFans;



    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getFoundingYear()
    {
        return $this->foundingYear;
    }

    /**
     * @param int $foundingYear
     */
    public function setFoundingYear($foundingYear)
    {
        $this->foundingYear = $foundingYear;
    }

    /**
     * @return string
     */
    public function getStadiumName()
    {
        return $this->stadiumName;
    }

    /**
     * @param string $stadiumName
     */
    public function setStadiumName($stadiumName)
    {
        $this->stadiumName = $stadiumName;
    }

    /**
     * @return int
     */
    public function getStadiumCapacity()
    {
        return $this->stadiumCapacity;
    }

    /**
     * @param int $stadiumCapacity
     */
    public function setStadiumCapacity($stadiumCapacity)
    {
        $this->stadiumCapacity = $stadiumCapacity;
    }

    /**
     * @return int
     */
    public function getTotalMarketValue()
    {
        return $this->totalMarketValue;
    }

    /**
     * @param int $totalMarketValue
     */
    public function setTotalMarketValue($totalMarketValue)
    {
        $this->totalMarketValue = $totalMarketValue;
    }

    /**
     * @return int
     */
    public function getNumberOfFans()
    {
        return $this->numberOfFans;
    }

    /**
     * @param int $number
     */
    public function setNumberOfFans($number)
    {
        $this->numberOfFans = $number;
    }


}