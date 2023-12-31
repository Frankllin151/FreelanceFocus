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

class ResearchScamNearestNeighborsNeighbor extends \Google\Model
{
  /**
   * @var string
   */
  public $crowdingAttribute;
  public $distance;
  /**
   * @var string
   */
  public $docid;
  /**
   * @var ResearchScamGenericFeatureVector
   */
  public $gfv;
  protected $gfvType = ResearchScamGenericFeatureVector::class;
  protected $gfvDataType = '';
  /**
   * @var string
   */
  public $metadata;

  /**
   * @param string
   */
  public function setCrowdingAttribute($crowdingAttribute)
  {
    $this->crowdingAttribute = $crowdingAttribute;
  }
  /**
   * @return string
   */
  public function getCrowdingAttribute()
  {
    return $this->crowdingAttribute;
  }
  public function setDistance($distance)
  {
    $this->distance = $distance;
  }
  public function getDistance()
  {
    return $this->distance;
  }
  /**
   * @param string
   */
  public function setDocid($docid)
  {
    $this->docid = $docid;
  }
  /**
   * @return string
   */
  public function getDocid()
  {
    return $this->docid;
  }
  /**
   * @param ResearchScamGenericFeatureVector
   */
  public function setGfv(ResearchScamGenericFeatureVector $gfv)
  {
    $this->gfv = $gfv;
  }
  /**
   * @return ResearchScamGenericFeatureVector
   */
  public function getGfv()
  {
    return $this->gfv;
  }
  /**
   * @param string
   */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return string
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResearchScamNearestNeighborsNeighbor::class, 'Google_Service_Contentwarehouse_ResearchScamNearestNeighborsNeighbor');
