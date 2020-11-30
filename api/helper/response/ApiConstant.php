<?php


namespace api\helper\response;


class ApiConstant
{
    /**
     * CONST:
     * SC: STATUS CODE
     * 200: Status OK
     * 204: No Content
     * 400: Bad Request(Missing Params,..)
     * 401: Unauthorized
     * 405: INVALID METHOD
     * 500: General error response, return if catch exception.
     */
    CONST SC_OK = 200;
    CONST SC_NO_RESULT = 204;
    CONST SC_BAD_REQUEST = 400;
    CONST SC_UNAUTHORIZED = 401;
    CONST SC_INVALID_METHOD = 405;
    CONST SC_EXCEPTION = 500;

    const STATUS_FAIL = 'FAIL';
    const STATUS_OK = 'OK';

    const STATUS_INVALID_METHOD = "INVALID_METHOD";
    const STATUS_MISSING_PARAMS = "MISSING_PARAMS";
    const STATUS_RESULT_NOT_FOUND = "RESULT_NOT_FOUND";
    const STATUS_INVALID_DATA = "INVALID_DATA";
    const STATUS_INTERNAL_SERVER_ERROR = "INTERNAL_SERVER_ERROR";
}