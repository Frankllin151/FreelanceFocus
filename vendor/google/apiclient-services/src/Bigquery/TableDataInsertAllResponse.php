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

namespace Google\Service\Bigquery;

class TableDataInsertAllResponse extends \Google\Collection
{
  protected $collection_key = 'insertErrors';
  /**
   * @var TableDataInsertAllResponseInsertErrors[]
   */
  public $insertErrors;
  protected $insertErrorsType = TableDataInsertAllResponseInsertErrors::class;
  protected $insertErrorsDataType = 'array';
  /**
   * @var string
   */
  public $kind;

  /**
   * @param TableDataInsertAllResponseInsertErrors[]
   */
  public function setInsertErrors($insertErrors)
  {
    $this->insertErrors = $insertErrors;
  }
  /**
   * @return TableDataInsertAllResponseInsertErrors[]
   */
  public function getInsertErrors()
  {
    return $this->insertErrors;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TableDataInsertAllResponse::class, 'Google_Service_Bigquery_TableDataInsertAllResponse');
