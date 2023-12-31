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

namespace Google\Service\AdMob;

class GenerateMediationReportRequest extends \Google\Model
{
  /**
   * @var MediationReportSpec
   */
  public $reportSpec;
  protected $reportSpecType = MediationReportSpec::class;
  protected $reportSpecDataType = '';

  /**
   * @param MediationReportSpec
   */
  public function setReportSpec(MediationReportSpec $reportSpec)
  {
    $this->reportSpec = $reportSpec;
  }
  /**
   * @return MediationReportSpec
   */
  public function getReportSpec()
  {
    return $this->reportSpec;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenerateMediationReportRequest::class, 'Google_Service_AdMob_GenerateMediationReportRequest');
