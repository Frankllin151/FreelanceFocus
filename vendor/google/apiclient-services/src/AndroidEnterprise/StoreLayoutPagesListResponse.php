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

namespace Google\Service\AndroidEnterprise;

class StoreLayoutPagesListResponse extends \Google\Collection
{
  protected $collection_key = 'page';
  /**
   * @var StorePage[]
   */
  public $page;
  protected $pageType = StorePage::class;
  protected $pageDataType = 'array';

  /**
   * @param StorePage[]
   */
  public function setPage($page)
  {
    $this->page = $page;
  }
  /**
   * @return StorePage[]
   */
  public function getPage()
  {
    return $this->page;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StoreLayoutPagesListResponse::class, 'Google_Service_AndroidEnterprise_StoreLayoutPagesListResponse');
