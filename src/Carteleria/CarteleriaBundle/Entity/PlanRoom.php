<?php

namespace Carteleria\CarteleriaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PlanRoom
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Carteleria\CarteleriaBundle\Entity\PlanRoomRepository")
 * @ORM\Table(name="plan_room")
 */
class PlanRoom
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
     */
    private $areaId = '0';

    /**
     * @var string
     */
    private $roomName = '';

    /**
     * @var string
     */
    private $sortKey = '';

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $capacity = '0';

    /**
     * @var string
     */
    private $roomAdminEmail;

    /**
     * @var string
     */
    private $customHtml;

    /**
     * @var float
     */
    private $mts;

    /**
     * @var string
     */
    private $level;

    /**
     * @ORM\OneToMany(targetEntity="Carteleria\CarteleriaBundle\Entity\PlanEntry" , mappedBy="room", cascade={"persist"})
     */

    private $entries;



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
     * Set areaId
     *
     * @param integer $areaId
     *
     * @return PlanRoom
     */
    public function setAreaId($areaId)
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * Get areaId
     *
     * @return integer
     */
    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * Set roomName
     *
     * @param string $roomName
     *
     * @return PlanRoom
     */
    public function setRoomName($roomName)
    {
        $this->roomName = $roomName;

        return $this;
    }

    /**
     * Get roomName
     *
     * @return string
     */
    public function getRoomName()
    {
        return $this->roomName;
    }

    /**
     * Set sortKey
     *
     * @param string $sortKey
     *
     * @return PlanRoom
     */
    public function setSortKey($sortKey)
    {
        $this->sortKey = $sortKey;

        return $this;
    }

    /**
     * Get sortKey
     *
     * @return string
     */
    public function getSortKey()
    {
        return $this->sortKey;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return PlanRoom
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
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return PlanRoom
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set roomAdminEmail
     *
     * @param string $roomAdminEmail
     *
     * @return PlanRoom
     */
    public function setRoomAdminEmail($roomAdminEmail)
    {
        $this->roomAdminEmail = $roomAdminEmail;

        return $this;
    }

    /**
     * Get roomAdminEmail
     *
     * @return string
     */
    public function getRoomAdminEmail()
    {
        return $this->roomAdminEmail;
    }

    /**
     * Set customHtml
     *
     * @param string $customHtml
     *
     * @return PlanRoom
     */
    public function setCustomHtml($customHtml)
    {
        $this->customHtml = $customHtml;

        return $this;
    }

    /**
     * Get customHtml
     *
     * @return string
     */
    public function getCustomHtml()
    {
        return $this->customHtml;
    }

    /**
     * Set mts
     *
     * @param float $mts
     *
     * @return PlanRoom
     */
    public function setMts($mts)
    {
        $this->mts = $mts;

        return $this;
    }

    /**
     * Get mts
     *
     * @return float
     */
    public function getMts()
    {
        return $this->mts;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return PlanRoom
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entries = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add entry
     *
     * @param \Carteleria\CarteleriaBundle\Entity\PlanEntry $entry
     *
     * @return PlanRoom
     */
    public function addEntry(\Carteleria\CarteleriaBundle\Entity\PlanEntry $entry)
    {
        $this->entries[] = $entry;

        return $this;
    }

    /**
     * Remove entry
     *
     * @param \Carteleria\CarteleriaBundle\Entity\PlanEntry $entry
     */
    public function removeEntry(\Carteleria\CarteleriaBundle\Entity\PlanEntry $entry)
    {
        $this->entries->removeElement($entry);
    }

    /**
     * Get entries
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEntries()
    {
        return $this->entries;
    }
}
