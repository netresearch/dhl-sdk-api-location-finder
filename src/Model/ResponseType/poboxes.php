<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class poboxes
{

    /**
     * @var pobox $pobox
     */
    protected $pobox = null;

    /**
     * @param pobox $pobox
     */
    public function __construct($pobox)
    {
      $this->pobox = $pobox;
    }

    /**
     * @return pobox
     */
    public function getPobox()
    {
      return $this->pobox;
    }

    /**
     * @param pobox $pobox
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\poboxes
     */
    public function setPobox($pobox)
    {
      $this->pobox = $pobox;
      return $this;
    }

}
