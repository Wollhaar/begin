<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 12.10.2017
 * Time: 17:51
 */

namespace Exinit\BundesligaSimulator\Domain\Model;


class Coach
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $club;

    /**
     * @var int
     */
    protected $age;

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



}