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

namespace Google\Service\ChromePolicy;

class GoogleChromePolicyV1ResolvedPolicy extends \Google\Model
{
  protected $sourceKeyType = GoogleChromePolicyV1PolicyTargetKey::class;
  protected $sourceKeyDataType = '';
  protected $targetKeyType = GoogleChromePolicyV1PolicyTargetKey::class;
  protected $targetKeyDataType = '';
  protected $valueType = GoogleChromePolicyV1PolicyValue::class;
  protected $valueDataType = '';

  /**
   * @param GoogleChromePolicyV1PolicyTargetKey
   */
  public function setSourceKey(GoogleChromePolicyV1PolicyTargetKey $sourceKey)
  {
    $this->sourceKey = $sourceKey;
  }
  /**
   * @return GoogleChromePolicyV1PolicyTargetKey
   */
  public function getSourceKey()
  {
    return $this->sourceKey;
  }
  /**
   * @param GoogleChromePolicyV1PolicyTargetKey
   */
  public function setTargetKey(GoogleChromePolicyV1PolicyTargetKey $targetKey)
  {
    $this->targetKey = $targetKey;
  }
  /**
   * @return GoogleChromePolicyV1PolicyTargetKey
   */
  public function getTargetKey()
  {
    return $this->targetKey;
  }
  /**
   * @param GoogleChromePolicyV1PolicyValue
   */
  public function setValue(GoogleChromePolicyV1PolicyValue $value)
  {
    $this->value = $value;
  }
  /**
   * @return GoogleChromePolicyV1PolicyValue
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromePolicyV1ResolvedPolicy::class, 'Google_Service_ChromePolicy_GoogleChromePolicyV1ResolvedPolicy');
