<?php
namespace api\helper\response;


use yii\base\BaseObject;

/**
 * Class EnumResponse
 * @package api\helper\response
 */
class EnumResponse extends BaseObject
{
    const STATUS_OK = 'OK';
    const STATUS_FAIL = 'FAIL';
    const STATUS_INVALID_METHOD = "INVALID_METHOD";
    const STATUS_MISSING_PARAMS = "MISSING_PARAMS";
}