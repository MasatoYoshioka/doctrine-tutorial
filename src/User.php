<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="users")
 **/
class User
{

  /** 
   * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue 
   * @var int
   */
  protected $id;

  /** @ORM\Column(type="string") **/
  protected $name;

  public function getId()
  {
    return $this->id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  /**
   * @ORM\OneToMany(targetEntity="Bug",mappedBy="repoter")
   * @var Bug[] An ArrayCollection of Bug objects.
   */
  protected $reportedBugs = null;

  /**
   * @ORM\OneToMany(targetEntity="Bug",mappedBy="engineer")
   * @var Bug[] An ArrayCollection of Bug objects.
   */
  protected $assignedBugs = null;

  public function __construct()
  {
    $this->reportedBugs = new ArrayCollection;
    $this->assignedBugs = new ArrayCollection;
  }

  public function addReportedBug(Bug $bug)
  {
    $this->reportedBugs[] = $bug;
  }

  public function assignedToBug(Bug $bug)
  {
    $this->assignedBugs[] = $bug;
  }
}
