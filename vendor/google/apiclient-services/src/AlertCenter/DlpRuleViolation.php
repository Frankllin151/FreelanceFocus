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

namespace Google\Service\AlertCenter;

class DlpRuleViolation extends \Google\Model
{
  /**
   * @var RuleViolationInfo
   */
  public $ruleViolationInfo;
  protected $ruleViolationInfoType = RuleViolationInfo::class;
  protected $ruleViolationInfoDataType = '';

  /**
   * @param RuleViolationInfo
   */
  public function setRuleViolationInfo(RuleViolationInfo $ruleViolationInfo)
  {
    $this->ruleViolationInfo = $ruleViolationInfo;
  }
  /**
   * @return RuleViolationInfo
   */
  public function getRuleViolationInfo()
  {
    return $this->ruleViolationInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DlpRuleViolation::class, 'Google_Service_AlertCenter_DlpRuleViolation');
