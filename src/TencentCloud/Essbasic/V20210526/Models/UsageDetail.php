<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用量明细
 *
 * @method string getProxyOrganizationOpenId() 获取渠道侧合作企业唯一标识
 * @method void setProxyOrganizationOpenId(string $ProxyOrganizationOpenId) 设置渠道侧合作企业唯一标识
 * @method integer getUsage() 获取消耗量
 * @method void setUsage(integer $Usage) 设置消耗量
 * @method string getDate() 获取日期，当需要汇总数据时日期为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置日期，当需要汇总数据时日期为空
注意：此字段可能返回 null，表示取不到有效值。
 */
class UsageDetail extends AbstractModel
{
    /**
     * @var string 渠道侧合作企业唯一标识
     */
    public $ProxyOrganizationOpenId;

    /**
     * @var integer 消耗量
     */
    public $Usage;

    /**
     * @var string 日期，当需要汇总数据时日期为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @param string $ProxyOrganizationOpenId 渠道侧合作企业唯一标识
     * @param integer $Usage 消耗量
     * @param string $Date 日期，当需要汇总数据时日期为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProxyOrganizationOpenId",$param) and $param["ProxyOrganizationOpenId"] !== null) {
            $this->ProxyOrganizationOpenId = $param["ProxyOrganizationOpenId"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
