<?php

namespace Carteleria\CarteleriaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * PlanEntry
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Carteleria\CarteleriaBundle\Entity\PlanEntryRepository")
 * @ORM\Table(name="plan_entry")
 */
class PlanEntry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     * @ORM\Column(name="start_time", type="integer")
     */
    private $start_time = '0';

    /**
     * @var integer
     */
    private $endTime = '0';

    /**
     * @var integer
     */
    private $entryType = '0';

    /**
     * @var integer
     */
    private $repeatId = '0';

    /**
     * @ORM\ManyToOne(targetEntity="Carteleria\CarteleriaBundle\Entity\PlanRoom",inversedBy="entries", cascade={"persist"})
     */

    private $room;


    /**
     * @var \DateTime
     */
    private $timestamp = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $createBy = '';

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type = 'E';

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $private = '0';

    /**
     * @var boolean
     */
    private $status = '1';

    /**
     * @var integer
     */
    private $reminded;

    /**
     * @var string
     */
    private $ceco;

    /**
     * @var integer
     */
    private $cantAlum;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set startTime
     *
     * @param integer $startTime
     *
     * @return PlanEntry
     */
    public function setStartTime($startTime)
    {
        $this->start_time = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return integer
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Set endTime
     *
     * @param integer $endTime
     *
     * @return PlanEntry
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return integer
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set entryType
     *
     * @param integer $entryType
     *
     * @return PlanEntry
     */
    public function setEntryType($entryType)
    {
        $this->entryType = $entryType;

        return $this;
    }

    /**
     * Get entryType
     *
     * @return integer
     */
    public function getEntryType()
    {
        return $this->entryType;
    }

    /**
     * Set repeatId
     *
     * @param integer $repeatId
     *
     * @return PlanEntry
     */
    public function setRepeatId($repeatId)
    {
        $this->repeatId = $repeatId;

        return $this;
    }

    /**
     * Get repeatId
     *
     * @return integer
     */
    public function getRepeatId()
    {
        return $this->repeatId;
    }

    /**
     * Set roomId
     *
     * @param integer $roomId
     *
     * @return PlanEntry
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;

        return $this;
    }

    /**
     * Get roomId
     *
     * @return integer
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return PlanEntry
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set createBy
     *
     * @param string $createBy
     *
     * @return PlanEntry
     */
    public function setCreateBy($createBy)
    {
        $this->createBy = $createBy;

        return $this;
    }

    /**
     * Get createBy
     *
     * @return string
     */
    public function getCreateBy()
    {
        return $this->createBy;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PlanEntry
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return PlanEntry
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return PlanEntry
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set private
     *
     * @param boolean $private
     *
     * @return PlanEntry
     */
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }

    /**
     * Get private
     *
     * @return boolean
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return PlanEntry
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set reminded
     *
     * @param integer $reminded
     *
     * @return PlanEntry
     */
    public function setReminded($reminded)
    {
        $this->reminded = $reminded;

        return $this;
    }

    /**
     * Get reminded
     *
     * @return integer
     */
    public function getReminded()
    {
        return $this->reminded;
    }

    /**
     * Set ceco
     *
     * @param string $ceco
     *
     * @return PlanEntry
     */
    public function setCeco($ceco)
    {
        $this->ceco = $ceco;

        return $this;
    }

    /**
     * Get ceco
     *
     * @return string
     */
    public function getCeco()
    {
        return $this->ceco;
    }

    /**
     * Set cantAlum
     *
     * @param integer $cantAlum
     *
     * @return PlanEntry
     */
    public function setCantAlum($cantAlum)
    {
        $this->cantAlum = $cantAlum;

        return $this;
    }

    /**
     * Get cantAlum
     *
     * @return integer
     */
    public function getCantAlum()
    {
        return $this->cantAlum;
    }

    /**
     * Set palnroom
     *
     * @param \Carteleria\CarteleriaBundle\Entity\PlanRoom $palnroom
     *
     * @return PlanEntry
     */
    public function setPalnroom(\Carteleria\CarteleriaBundle\Entity\PlanRoom $palnroom = null)
    {
        $this->palnroom = $palnroom;

        return $this;
    }

    /**
     * Get palnroom
     *
     * @return \Carteleria\CarteleriaBundle\Entity\PlanRoom
     */
    public function getPalnroom()
    {
        return $this->palnroom;
    }

    /**
     * Set room
     *
     * @param \Carteleria\CarteleriaBundle\Entity\PlanRoom $room
     *
     * @return PlanEntry
     */
    public function setRoom(\Carteleria\CarteleriaBundle\Entity\PlanRoom $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \Carteleria\CarteleriaBundle\Entity\PlanRoom
     */
    public function getRoom()
    {
        return $this->room;
    }
}
