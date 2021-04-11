<?php

namespace App\Application\Entity;

/**
 * CarManagement
 */
class CarManagement
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime|null
     */
    private $createTime;

    /**
     * @var \DateTime|null
     */
    private $updateTime;

    /**
     * @var \DateTime
     */
    private $dateFrom;

    /**
     * @var \DateTime|null
     */
    private $dateTo;

    /**
     * @var \App\Application\Entity\Car
     */
    private $car;

    /**
     * @var \App\Application\Entity\User
     */
    private $user;

    /**
     * Pre-create hook
     * 
     * @return void
     */
    public function preCreate()
    {
        $this->setCreateTime(new \DateTime());
    }

    /**
     * Pre-update hook
     * 
     * @return void
     */
    public function preUpdate()
    {
        $this->setUpdateTime(new \DateTime());
    }


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createTime.
     *
     * @param \DateTime|null $createTime
     *
     * @return CarManagement
     */
    public function setCreateTime($createTime = null)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime.
     *
     * @return \DateTime|null
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set updateTime.
     *
     * @param \DateTime|null $updateTime
     *
     * @return CarManagement
     */
    public function setUpdateTime($updateTime = null)
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime.
     *
     * @return \DateTime|null
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Set dateFrom.
     *
     * @param \DateTime $dateFrom
     *
     * @return CarManagement
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom.
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo.
     *
     * @param \DateTime|null $dateTo
     *
     * @return CarManagement
     */
    public function setDateTo($dateTo = null)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get dateTo.
     *
     * @return \DateTime|null
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set car.
     *
     * @param \App\Application\Entity\Car|null $car
     *
     * @return CarManagement
     */
    public function setCar(\App\Application\Entity\Car $car = null)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get car.
     *
     * @return \App\Application\Entity\Car|null
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set user.
     *
     * @param \App\Application\Entity\User|null $user
     *
     * @return CarManagement
     */
    public function setUser(\App\Application\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \App\Application\Entity\User|null
     */
    public function getUser()
    {
        return $this->user;
    }
}
