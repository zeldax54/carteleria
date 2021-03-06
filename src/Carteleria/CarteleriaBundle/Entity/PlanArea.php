<?php

namespace Carteleria\CarteleriaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PlanArea
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Carteleria\carteleriaBundle\Entity\PlanAreaRepository")
 * @ORM\Table(name="plan_area")
 */
class PlanArea
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $areaName;

    /**
     * @var string
     */
    private $areaAdminEmail;

    /**
     * @var integer
     */
    private $resolution;

    /**
     * @var integer
     */
    private $defaultDuration;

    /**
     * @var integer
     */
    private $morningstarts;

    /**
     * @var integer
     */
    private $morningstartsMinutes;

    /**
     * @var integer
     */
    private $eveningends;

    /**
     * @var integer
     */
    private $eveningendsMinutes;

    /**
     * @var boolean
     */
    private $privateEnabled;

    /**
     * @var boolean
     */
    private $privateDefault;

    /**
     * @var boolean
     */
    private $privateMandatory;

    /**
     * @var string
     */
    private $privateOverride;

    /**
     * @var boolean
     */
    private $minBookAheadEnabled;

    /**
     * @var integer
     */
    private $minBookAheadSecs;

    /**
     * @var boolean
     */
    private $maxBookAheadEnabled;

    /**
     * @var integer
     */
    private $maxBookAheadSecs;

    /**
     * @var string
     */
    private $customHtml;

    /**
     * @var boolean
     */
    private $provisionalEnabled;

    /**
     * @var boolean
     */
    private $remindersEnabled;


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
     * Set areaName
     *
     * @param string $areaName
     *
     * @return PlanArea
     */
    public function setAreaName($areaName)
    {
        $this->areaName = $areaName;

        return $this;
    }

    /**
     * Get areaName
     *
     * @return string
     */
    public function getAreaName()
    {
        return $this->areaName;
    }

    /**
     * Set areaAdminEmail
     *
     * @param string $areaAdminEmail
     *
     * @return PlanArea
     */
    public function setAreaAdminEmail($areaAdminEmail)
    {
        $this->areaAdminEmail = $areaAdminEmail;

        return $this;
    }

    /**
     * Get areaAdminEmail
     *
     * @return string
     */
    public function getAreaAdminEmail()
    {
        return $this->areaAdminEmail;
    }

    /**
     * Set resolution
     *
     * @param integer $resolution
     *
     * @return PlanArea
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    /**
     * Get resolution
     *
     * @return integer
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Set defaultDuration
     *
     * @param integer $defaultDuration
     *
     * @return PlanArea
     */
    public function setDefaultDuration($defaultDuration)
    {
        $this->defaultDuration = $defaultDuration;

        return $this;
    }

    /**
     * Get defaultDuration
     *
     * @return integer
     */
    public function getDefaultDuration()
    {
        return $this->defaultDuration;
    }

    /**
     * Set morningstarts
     *
     * @param integer $morningstarts
     *
     * @return PlanArea
     */
    public function setMorningstarts($morningstarts)
    {
        $this->morningstarts = $morningstarts;

        return $this;
    }

    /**
     * Get morningstarts
     *
     * @return integer
     */
    public function getMorningstarts()
    {
        return $this->morningstarts;
    }

    /**
     * Set morningstartsMinutes
     *
     * @param integer $morningstartsMinutes
     *
     * @return PlanArea
     */
    public function setMorningstartsMinutes($morningstartsMinutes)
    {
        $this->morningstartsMinutes = $morningstartsMinutes;

        return $this;
    }

    /**
     * Get morningstartsMinutes
     *
     * @return integer
     */
    public function getMorningstartsMinutes()
    {
        return $this->morningstartsMinutes;
    }

    /**
     * Set eveningends
     *
     * @param integer $eveningends
     *
     * @return PlanArea
     */
    public function setEveningends($eveningends)
    {
        $this->eveningends = $eveningends;

        return $this;
    }

    /**
     * Get eveningends
     *
     * @return integer
     */
    public function getEveningends()
    {
        return $this->eveningends;
    }

    /**
     * Set eveningendsMinutes
     *
     * @param integer $eveningendsMinutes
     *
     * @return PlanArea
     */
    public function setEveningendsMinutes($eveningendsMinutes)
    {
        $this->eveningendsMinutes = $eveningendsMinutes;

        return $this;
    }

    /**
     * Get eveningendsMinutes
     *
     * @return integer
     */
    public function getEveningendsMinutes()
    {
        return $this->eveningendsMinutes;
    }

    /**
     * Set privateEnabled
     *
     * @param boolean $privateEnabled
     *
     * @return PlanArea
     */
    public function setPrivateEnabled($privateEnabled)
    {
        $this->privateEnabled = $privateEnabled;

        return $this;
    }

    /**
     * Get privateEnabled
     *
     * @return boolean
     */
    public function getPrivateEnabled()
    {
        return $this->privateEnabled;
    }

    /**
     * Set privateDefault
     *
     * @param boolean $privateDefault
     *
     * @return PlanArea
     */
    public function setPrivateDefault($privateDefault)
    {
        $this->privateDefault = $privateDefault;

        return $this;
    }

    /**
     * Get privateDefault
     *
     * @return boolean
     */
    public function getPrivateDefault()
    {
        return $this->privateDefault;
    }

    /**
     * Set privateMandatory
     *
     * @param boolean $privateMandatory
     *
     * @return PlanArea
     */
    public function setPrivateMandatory($privateMandatory)
    {
        $this->privateMandatory = $privateMandatory;

        return $this;
    }

    /**
     * Get privateMandatory
     *
     * @return boolean
     */
    public function getPrivateMandatory()
    {
        return $this->privateMandatory;
    }

    /**
     * Set privateOverride
     *
     * @param string $privateOverride
     *
     * @return PlanArea
     */
    public function setPrivateOverride($privateOverride)
    {
        $this->privateOverride = $privateOverride;

        return $this;
    }

    /**
     * Get privateOverride
     *
     * @return string
     */
    public function getPrivateOverride()
    {
        return $this->privateOverride;
    }

    /**
     * Set minBookAheadEnabled
     *
     * @param boolean $minBookAheadEnabled
     *
     * @return PlanArea
     */
    public function setMinBookAheadEnabled($minBookAheadEnabled)
    {
        $this->minBookAheadEnabled = $minBookAheadEnabled;

        return $this;
    }

    /**
     * Get minBookAheadEnabled
     *
     * @return boolean
     */
    public function getMinBookAheadEnabled()
    {
        return $this->minBookAheadEnabled;
    }

    /**
     * Set minBookAheadSecs
     *
     * @param integer $minBookAheadSecs
     *
     * @return PlanArea
     */
    public function setMinBookAheadSecs($minBookAheadSecs)
    {
        $this->minBookAheadSecs = $minBookAheadSecs;

        return $this;
    }

    /**
     * Get minBookAheadSecs
     *
     * @return integer
     */
    public function getMinBookAheadSecs()
    {
        return $this->minBookAheadSecs;
    }

    /**
     * Set maxBookAheadEnabled
     *
     * @param boolean $maxBookAheadEnabled
     *
     * @return PlanArea
     */
    public function setMaxBookAheadEnabled($maxBookAheadEnabled)
    {
        $this->maxBookAheadEnabled = $maxBookAheadEnabled;

        return $this;
    }

    /**
     * Get maxBookAheadEnabled
     *
     * @return boolean
     */
    public function getMaxBookAheadEnabled()
    {
        return $this->maxBookAheadEnabled;
    }

    /**
     * Set maxBookAheadSecs
     *
     * @param integer $maxBookAheadSecs
     *
     * @return PlanArea
     */
    public function setMaxBookAheadSecs($maxBookAheadSecs)
    {
        $this->maxBookAheadSecs = $maxBookAheadSecs;

        return $this;
    }

    /**
     * Get maxBookAheadSecs
     *
     * @return integer
     */
    public function getMaxBookAheadSecs()
    {
        return $this->maxBookAheadSecs;
    }

    /**
     * Set customHtml
     *
     * @param string $customHtml
     *
     * @return PlanArea
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
     * Set provisionalEnabled
     *
     * @param boolean $provisionalEnabled
     *
     * @return PlanArea
     */
    public function setProvisionalEnabled($provisionalEnabled)
    {
        $this->provisionalEnabled = $provisionalEnabled;

        return $this;
    }

    /**
     * Get provisionalEnabled
     *
     * @return boolean
     */
    public function getProvisionalEnabled()
    {
        return $this->provisionalEnabled;
    }

    /**
     * Set remindersEnabled
     *
     * @param boolean $remindersEnabled
     *
     * @return PlanArea
     */
    public function setRemindersEnabled($remindersEnabled)
    {
        $this->remindersEnabled = $remindersEnabled;

        return $this;
    }

    /**
     * Get remindersEnabled
     *
     * @return boolean
     */
    public function getRemindersEnabled()
    {
        return $this->remindersEnabled;
    }
}
