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

class OcrPhotoBoundingBox extends \Google\Model
{
  /**
   * @var float
   */
  public $angle;
  /**
   * @var OcrPhotoCurvedBoundingBox
   */
  public $curvedBox;
  protected $curvedBoxType = OcrPhotoCurvedBoundingBox::class;
  protected $curvedBoxDataType = '';
  /**
   * @var int
   */
  public $height;
  /**
   * @var int
   */
  public $left;
  /**
   * @var int
   */
  public $top;
  /**
   * @var int
   */
  public $width;

  /**
   * @param float
   */
  public function setAngle($angle)
  {
    $this->angle = $angle;
  }
  /**
   * @return float
   */
  public function getAngle()
  {
    return $this->angle;
  }
  /**
   * @param OcrPhotoCurvedBoundingBox
   */
  public function setCurvedBox(OcrPhotoCurvedBoundingBox $curvedBox)
  {
    $this->curvedBox = $curvedBox;
  }
  /**
   * @return OcrPhotoCurvedBoundingBox
   */
  public function getCurvedBox()
  {
    return $this->curvedBox;
  }
  /**
   * @param int
   */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /**
   * @return int
   */
  public function getHeight()
  {
    return $this->height;
  }
  /**
   * @param int
   */
  public function setLeft($left)
  {
    $this->left = $left;
  }
  /**
   * @return int
   */
  public function getLeft()
  {
    return $this->left;
  }
  /**
   * @param int
   */
  public function setTop($top)
  {
    $this->top = $top;
  }
  /**
   * @return int
   */
  public function getTop()
  {
    return $this->top;
  }
  /**
   * @param int
   */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /**
   * @return int
   */
  public function getWidth()
  {
    return $this->width;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OcrPhotoBoundingBox::class, 'Google_Service_Contentwarehouse_OcrPhotoBoundingBox');
