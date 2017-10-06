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
    protected  $uid;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $birthday;

    /**
     * @var int
     */
    protected $age;

    /**
     * @var int
     */
    protected $height;

    /**
     * @var string
     */
    protected $nationality;

    /**
     * @var string
     */
    protected $position;

    /**
     * @var string
     */
    protected $club;

    /**
     * @var string
     */
    protected $contract;

    /**
     * @var int
     */
    protected $transferFee;



    /**
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

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
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
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
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param string $country
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * @param string $club
     */
    public function setClub($club)
    {
        $this->club = $club;
    }

    /**
     * @return string
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * @param string $contract
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
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