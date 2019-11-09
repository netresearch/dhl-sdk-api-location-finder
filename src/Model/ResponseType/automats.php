<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class automats
{

    /**
     * @var automatWS $automat
     */
    protected $automat = null;

    /**
     * @param automatWS $automat
     */
    public function __construct($automat)
    {
      $this->automat = $automat;
    }

    /**
     * @return automatWS
     */
    public function getAutomat()
    {
      return $this->automat;
    }

    /**
     * @param automatWS $automat
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automats
     */
    public function setAutomat($automat)
    {
      $this->automat = $automat;
      return $this;
    }

}
