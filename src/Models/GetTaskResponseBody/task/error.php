<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetTaskResponseBody\task;

use AlibabaCloud\Tea\Model;

class error extends Model
{
    /**
     * @example OperationFailure.OperationFailed
     *
     * @var string
     */
    public $code;

    /**
     * @example {
     * "requestId": "123****",
     * }
     * @var string
     */
    public $message;
    protected $_name = [
        'code'    => 'code',
        'message' => 'message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return error
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
