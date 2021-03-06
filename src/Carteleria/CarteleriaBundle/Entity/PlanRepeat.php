<?php

namespace Carteleria\CarteleriaBundle\Entity;

/**
 * PlanRepeat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Carteleria\carteleriaBundle\Entity\PlanRepeatRepository")
 * @ORM\Table(name="plan_repeat")
 */
class PlanRepeat
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $startTime = '0';

    /**
     * @var integer
     */
    private $endTime = '0';

    /**
     * @var integer
     */
    private $repType = '0';

    /**
     * @var integer
     */
    private $endDate = '0';

    /**
     * @var string
     */
    private $repOpt = '';

    /**
     * @var integer
     */
    private $roomId = '1';

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
     */
    private $type = 'E';

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $repNumWeeks;

    /**
     * @var boolean
     */
    private $private = '0';

    /**
     * @var integer
     */
    private $reminded;


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
     * @return PlanRepeat
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return integer
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param integer $endTime
     *
     * @return PlanRepeat
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
     * Set repType
     *
     * @param integer $repType
     *
     * @return PlanRepeat
     */
    public function setRepType($repType)
    {
        $this->repType = $repType;

        return $this;
    }

    /**
     * Get repType
     *
     * @return integer
     */
    public function getRepType()
    {
        return $this->repType;
    }

    /**
     * Set endDate
     *
     * @param integer $endDate
     *
     * @return PlanRepeat
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return integer
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set repOpt
     *
     * @param string $repOpt
     *
     * @return PlanRepeat
     */
    public function setRepOpt($repOpt)
    {
        $this->repOpt = $repOpt;

        return $this;
    }

    /**
     * Get repOpt
     *
     * @return string
     */
    public function getRepOpt()
    {
        return $this->repOpt;
    }

    /**
     * Set roomId
     *
     * @param integer $roomId
     *
     * @return PlanRepeat
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
     * @return PlanRepeat
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
     * @return PlanRepeat
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
     * @return PlanRepeat
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
     * @return PlanRepeat
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
     * @return PlanRepeat
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
     * Set repNumWeeks
     *
     * @param integer $repNumWeeks
     *
     * @return PlanRepeat
     */
    public function setRepNumWeeks($repNumWeeks)
    {
        $this->repNumWeeks = $repNumWeeks;

        return $this;
    }

    /**
     * Get repNumWeeks
     *
     * @return integer
     */
    public function getRepNumWeeks()
    {
        return $this->repNumWeeks;
    }

    /**
     * Set private
     *
     * @param boolean $private
     *
     * @return PlanRepeat
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
     * Set reminded
     *
     * @param integer $reminded
     *
     * @return PlanRepeat
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
}
