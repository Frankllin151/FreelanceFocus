<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Contentwarehouse;

class CompositeDocLiveExperimentInfoPerLiveExperimentInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $experimentId;
  /**
   * @var CompositeDoc
   */
  public $partialCdoc;
  protected $partialCdocType = CompositeDoc::class;
  protected $partialCdocDataType = '';

  /**
   * @param string
   */
  public function setExperimentId($experimentId)
  {
    $this->experimentId = $experimentId;
  }
  /**
   * @return string
   */
  public function getExperimentId()
  {
    return $this->experimentId;
  }
  /**
   * @param CompositeDoc
   */
  public function setPartialCdoc(CompositeDoc $partialCdoc)
  {
    $this->partialCdoc = $partialCdoc;
  }
  /**
   * @return CompositeDoc
   */
  public function getPartialCdoc()
  {
    return $this->partialCdoc;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompositeDocLiveExperimentInfoPerLiveExperimentInfo::class, 'Google_Service_Contentwarehouse_CompositeDocLiveExperimentInfoPerLiveExperimentInfo');
