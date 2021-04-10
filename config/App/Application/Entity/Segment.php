<?php

namespace App\Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Segment
 *
 * @ORM\Table(name="segment")
 * @ORM\Entity
 */
class Segment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"comment"="primary key"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_time", type="datetime", nullable=true, options={"comment"="create time"})
     */
    private $createTime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="update_time", type="datetime", nullable=true, options={"comment"="update time"})
     */
    private $updateTime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true, options={"comment"="Label"})
     */
    private $name;


}
