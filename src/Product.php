<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity @ORM\Table(name="products")
 **/
class Product
{
  /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
  protected $id;

  /** @ORM\Column(type="string") **/
  protected $name;

  /**
   * getId 
   * 
   * @access public
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * getName 
   * 
   * @access public
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * setName 
   * 
   * @param mixed $name 
   * @access public
   * @return void
   */
  public function setName($name)
  {
    $this->name = $name;
  }
}
