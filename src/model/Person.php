<?php


namespace EWC\model;


class Person
{

  use TCloneObjects;


  private $name;
  private $hight;
  private $eye_color;
  private $hobby;

  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param mixed $name
   * @return Person
   */
  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getHight()
  {
    return $this->hight;
  }

  /**
   * @param mixed $hight
   * @return Person
   */
  public function setHight($hight)
  {
    $this->hight = $hight;
    return $this;
  }

  /**
   * @return Color
   */
  public function getEyeColor()
  {
    return $this->eye_color;
  }

  /**
   * @param Color $eye_color
   * @return Person
   */
  public function setEyeColor(Color $eye_color)
  {
    $this->eye_color = $eye_color;
    return $this;
  }

  /**
   * @return array
   */
  public function getHobby()
  {
    return $this->hobby;
  }

  /**
   * @param array $hobby
   * @return Person
   */
  public function setHobby(array $hobby)
  {
    $this->hobby = $hobby;
    return $this;
  }



}