<?php

namespace Carteleria\CarteleriaBundle\Entity;

/**
 * PlanVariables
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Carteleria\carteleriaBundle\Entity\PlanVariablesRepository")
 * @ORM\Table(name="plan_variables")
 */
class PlanVariables
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $variableName;

    /**
     * @var string
     */
    private $variableContent;


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
     * Set variableName
     *
     * @param string $variableName
     *
     * @return PlanVariables
     */
    public function setVariableName($variableName)
    {
        $this->variableName = $variableName;

        return $this;
    }

    /**
     * Get variableName
     *
     * @return string
     */
    public function getVariableName()
    {
        return $this->variableName;
    }

    /**
     * Set variableContent
     *
     * @param string $variableContent
     *
     * @return PlanVariables
     */
    public function setVariableContent($variableContent)
    {
        $this->variableContent = $variableContent;

        return $this;
    }

    /**
     * Get variableContent
     *
     * @return string
     */
    public function getVariableContent()
    {
        return $this->variableContent;
    }
}
