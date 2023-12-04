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

namespace Google\Service\Cloudchannel;

class GoogleCloudChannelV1alpha1RunReportJobResponse extends \Google\Model
{
  /**
   * @var GoogleCloudChannelV1alpha1ReportJob
   */
  public $reportJob;
  protected $reportJobType = GoogleCloudChannelV1alpha1ReportJob::class;
  protected $reportJobDataType = '';
  /**
   * @var GoogleCloudChannelV1alpha1ReportResultsMetadata
   */
  public $reportMetadata;
  protected $reportMetadataType = GoogleCloudChannelV1alpha1ReportResultsMetadata::class;
  protected $reportMetadataDataType = '';

  /**
   * @param GoogleCloudChannelV1alpha1ReportJob
   */
  public function setReportJob(GoogleCloudChannelV1alpha1ReportJob $reportJob)
  {
    $this->reportJob = $reportJob;
  }
  /**
   * @return GoogleCloudChannelV1alpha1ReportJob
   */
  public function getReportJob()
  {
    return $this->reportJob;
  }
  /**
   * @param GoogleCloudChannelV1alpha1ReportResultsMetadata
   */
  public function setReportMetadata(GoogleCloudChannelV1alpha1ReportResultsMetadata $reportMetadata)
  {
    $this->reportMetadata = $reportMetadata;
  }
  /**
   * @return GoogleCloudChannelV1alpha1ReportResultsMetadata
   */
  public function getReportMetadata()
  {
    return $this->reportMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudChannelV1alpha1RunReportJobResponse::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1RunReportJobResponse');
