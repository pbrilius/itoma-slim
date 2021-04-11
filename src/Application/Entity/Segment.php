<?php

namespace App\Application\Entity;


/**
 * Segment
 */
class Segment
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
     * @return Segment
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
     * @return Segment
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
     * @return Segment
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
}
