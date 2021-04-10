<?php

namespace App\Application\Entity;

/**
 * Status
 */
class Status
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
     * @var string|null
     */
    private $name;

    /**
     * @var \App\Application\Entity\Status
     */
    private $parent;


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
     * @return Status
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
     * @return Status
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
     * Set name.
     *
     * @param string|null $name
     *
     * @return Status
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set parent.
     *
     * @param \App\Application\Entity\Status|null $parent
     *
     * @return Status
     */
    public function setParent(\App\Application\Entity\Status $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent.
     *
     * @return \App\Application\Entity\Status|null
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $car;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->car = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add car.
     *
     * @param \App\Application\Entity\Car $car
     *
     * @return Status
     */
    public function addCar(\App\Application\Entity\Car $car)
    {
        $this->car[] = $car;

        return $this;
    }

    /**
     * Remove car.
     *
     * @param \App\Application\Entity\Car $car
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCar(\App\Application\Entity\Car $car)
    {
        return $this->car->removeElement($car);
    }

    /**
     * Get car.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCar()
    {
        return $this->car;
    }
}
