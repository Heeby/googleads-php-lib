<?php

namespace Google\AdsApi\Dfp\v201511;

class AssetCreativeTemplateVariable extends \Google\AdsApi\Dfp\v201511\CreativeTemplateVariable
{

    /**
     * @var string $mimeTypes
     */
    protected $mimeTypes = null;

    /**
     * @param string $label
     * @param string $uniqueName
     * @param string $description
     * @param boolean $isRequired
     * @param string $mimeTypes
     */
    public function __construct($label = null, $uniqueName = null, $description = null, $isRequired = null, $mimeTypes = null)
    {
      parent::__construct($label, $uniqueName, $description, $isRequired);
      $this->mimeTypes = $mimeTypes;
    }

    /**
     * @return string
     */
    public function getMimeTypes()
    {
      return $this->mimeTypes;
    }

    /**
     * @param string $mimeTypes
     * @return \Google\AdsApi\Dfp\v201511\AssetCreativeTemplateVariable
     */
    public function setMimeTypes($mimeTypes)
    {
      $this->mimeTypes = $mimeTypes;
      return $this;
    }

}