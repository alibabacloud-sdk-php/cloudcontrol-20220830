<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourceTypeResponseBody\resourceType\handlers;

use AlibabaCloud\Tea\Model;

class get extends Model
{
    /**
     * @var string[]
     */
    public $permissions;
    protected $_name = [
        'permissions' => 'permissions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissions) {
            $res['permissions'] = $this->permissions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return get
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['permissions'])) {
            if (!empty($map['permissions'])) {
                $model->permissions = $map['permissions'];
            }
        }

        return $model;
    }
}
