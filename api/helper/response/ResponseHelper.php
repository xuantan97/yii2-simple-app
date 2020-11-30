<?php

namespace api\helper\response;

use BadMethodCallException;
use yii\base\BaseObject;
use yii\data\DataProviderInterface;
use yii\rest\Serializer;

class ResponseHelper extends BaseObject
{
    public $status;
    public $data = null;
    public $error = null;
    public $message = null;
    public $ok_status = null;

    public function build()
    {
        if ($this->status == ApiConstant::STATUS_OK) {
            if ($this->data instanceof DataProviderInterface) {
                $serializer = new Serializer(['collectionEnvelope' => 'items']);
                $this->data = $serializer->serialize($this->data);
            }
            return [
                'result' => ResultHelper::build($this->ok_status, $this->data, $this->error, $this->message),
                'error' => null, 'message' => null,
                'data' => null,
                'status' => ApiConstant::STATUS_OK
            ];
        } else if ($this->status == ApiConstant::STATUS_FAIL) {
            return [
                'result' => null,
                'status' => $this->status,
                'error' => $this->error,
                'message' => $this->message
            ];
        }
        throw new BadMethodCallException();
    }

    public function error()
    {
        if ($this->status != ApiConstant::STATUS_OK) {
            return [
                'result' => null,
                'status' => ApiConstant::STATUS_FAIL,
                'error' => $this->error,
                'message' => $this->message
            ];
        } else {
            throw new BadMethodCallException();
        }
    }
}