<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 28.09.2017
 * Time: 10:18
 */

namespace Exinit\BundesligaSimulator\Domain\Model;


use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Player extends AbstractEntity
{
    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var int
     */
    protected $age;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var int
     */
    protected $transferFee;



    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->firstName = $first_name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->lastName = $last_name;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return int
     */
    public function getTransferFee()
    {
        return $this->transferFee;
    }

    /**
     * @param int $transfer_fee
     */
    public function setTransferFee($transfer_fee)
    {
        $this->transfer_fee = $transfer_fee;
    }



}