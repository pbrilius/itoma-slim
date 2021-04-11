<?php

namespace App\Application\Entity;

/**
 * User
 */
class User
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
    private $email;

    /**
     * @var \App\Application\Entity\Segment
     */
    private $segment;

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
     * @return User
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
     * @return User
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
     * Set email.
     *
     * @param string|null $email
     *
     * @return User
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set segment.
     *
     * @param \App\Application\Entity\Segment|null $segment
     *
     * @return User
     */
    public function setSegment(\App\Application\Entity\Segment $segment = null)
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * Get segment.
     *
     * @return \App\Application\Entity\Segment|null
     */
    public function getSegment()
    {
        return $this->segment;
    }
}
