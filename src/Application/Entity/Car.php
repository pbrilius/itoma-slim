<?php

namespace App\Application\Entity;

/**
 * Car
 */
class Car
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
    private $carNumber;

    /**
     * @var \DateTime
     */
    private $yearMade;

    /**
     * @var string
     */
    private $model;

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
     * @return Car
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
     * @return Car
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
     * Set carNumber.
     *
     * @param string|null $carNumber
     *
     * @return Car
     */
    public function setCarNumber($carNumber = null)
    {
        $this->carNumber = $carNumber;

        return $this;
    }

    /**
     * Get carNumber.
     *
     * @return string|null
     */
    public function getCarNumber()
    {
        return $this->carNumber;
    }

    /**
     * Set yearMade.
     *
     * @param \DateTime $yearMade
     *
     * @return Car
     */
    public function setYearMade($yearMade)
    {
        $this->yearMade = $yearMade;

        return $this;
    }

    /**
     * Get yearMade.
     *
     * @return \DateTime
     */
    public function getYearMade()
    {
        return $this->yearMade;
    }

    /**
     * Set model.
     *
     * @param string $model
     *
     * @return Car
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model.
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $status;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->status = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add status.
     *
     * @param \App\Application\Entity\Status $status
     *
     * @return Car
     */
    public function addStatus(\App\Application\Entity\Status $status)
    {
        $this->status[] = $status;

        return $this;
    }

    /**
     * Remove status.
     *
     * @param \App\Application\Entity\Status $status
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeStatus(\App\Application\Entity\Status $status)
    {
        return $this->status->removeElement($status);
    }

    /**
     * Get status.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStatus()
    {
        return $this->status;
    }
}
