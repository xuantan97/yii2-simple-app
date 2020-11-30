<?php


namespace api\helper\response;


class ResultHelper
{
    public static function build($status = null, $data = null, $error = null, $message = null)
    {
        return [
            'status' => $status,
            'data' => $data,
            'error' => $error,
            'message' => $message
        ];
    }
}