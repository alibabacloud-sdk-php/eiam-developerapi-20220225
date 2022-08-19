<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListOrganizationalUnitsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $organizationalUnitExternalId;

    /**
     * @var string
     */
    public $organizationalUnitId;

    /**
     * @var string
     */
    public $organizationalUnitName;

    /**
     * @var string
     */
    public $organizationalUnitSourceId;

    /**
     * @var string
     */
    public $organizationalUnitSourceType;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'                   => 'createTime',
        'description'                  => 'description',
        'instanceId'                   => 'instanceId',
        'organizationalUnitExternalId' => 'organizationalUnitExternalId',
        'organizationalUnitId'         => 'organizationalUnitId',
        'organizationalUnitName'       => 'organizationalUnitName',
        'organizationalUnitSourceId'   => 'organizationalUnitSourceId',
        'organizationalUnitSourceType' => 'organizationalUnitSourceType',
        'parentId'                     => 'parentId',
        'updateTime'                   => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->organizationalUnitExternalId) {
            $res['organizationalUnitExternalId'] = $this->organizationalUnitExternalId;
        }
        if (null !== $this->organizationalUnitId) {
            $res['organizationalUnitId'] = $this->organizationalUnitId;
        }
        if (null !== $this->organizationalUnitName) {
            $res['organizationalUnitName'] = $this->organizationalUnitName;
        }
        if (null !== $this->organizationalUnitSourceId) {
            $res['organizationalUnitSourceId'] = $this->organizationalUnitSourceId;
        }
        if (null !== $this->organizationalUnitSourceType) {
            $res['organizationalUnitSourceType'] = $this->organizationalUnitSourceType;
        }
        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['organizationalUnitExternalId'])) {
            $model->organizationalUnitExternalId = $map['organizationalUnitExternalId'];
        }
        if (isset($map['organizationalUnitId'])) {
            $model->organizationalUnitId = $map['organizationalUnitId'];
        }
        if (isset($map['organizationalUnitName'])) {
            $model->organizationalUnitName = $map['organizationalUnitName'];
        }
        if (isset($map['organizationalUnitSourceId'])) {
            $model->organizationalUnitSourceId = $map['organizationalUnitSourceId'];
        }
        if (isset($map['organizationalUnitSourceType'])) {
            $model->organizationalUnitSourceType = $map['organizationalUnitSourceType'];
        }
        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
