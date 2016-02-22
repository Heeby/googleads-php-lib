<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class AdGroupCriterionLabelReturnValue extends \Google\AdsApi\AdWords\v201601\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterionLabel[] $value
     */
    protected $value = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\ApiError[] $partialFailureErrors
     */
    protected $partialFailureErrors = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterionLabel[] $value
     * @param \Google\AdsApi\AdWords\v201601\cm\ApiError[] $partialFailureErrors
     */
    public function __construct($ListReturnValueType = null, array $value = null, array $partialFailureErrors = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
      $this->partialFailureErrors = $partialFailureErrors;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterionLabel[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterionLabel[] $value
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterionLabelReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\ApiError[]
     */
    public function getPartialFailureErrors()
    {
      return $this->partialFailureErrors;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\ApiError[] $partialFailureErrors
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterionLabelReturnValue
     */
    public function setPartialFailureErrors(array $partialFailureErrors)
    {
      $this->partialFailureErrors = $partialFailureErrors;
      return $this;
    }

}