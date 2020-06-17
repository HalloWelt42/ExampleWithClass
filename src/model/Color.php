<?php


namespace EWC\model;


class Color
{
  private $r;
  private $g;
  private $b;

  /**
   * @return mixed
   */
  public function getR()
  {
    return $this->r;
  }

  /**
   * @param mixed $r
   * @return Color
   */
  public function setR($r)
  {
    $this->r = $r;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getG()
  {
    return $this->g;
  }

  /**
   * @param mixed $g
   * @return Color
   */
  public function setG($g)
  {
    $this->g = $g;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getB()
  {
    return $this->b;
  }

  /**
   * @param mixed $b
   * @return Color
   */
  public function setB($b)
  {
    $this->b = $b;
    return $this;
  }



}