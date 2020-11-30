<?php

namespace api\controllers;

use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\ServerErrorHttpException;
use yii\web\UnauthorizedHttpException;

class SiteController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return "Your API server is working";
    }

    /**
     * @throws UnauthorizedHttpException
     */
    public function action401()
    {
        throw new UnauthorizedHttpException("Your request was made with invalid credentials.");
    }

    /**
     * @throws ForbiddenHttpException
     */
    public function action403()
    {
        throw new ForbiddenHttpException("Forbidden");
    }

    /**
     * @throws ServerErrorHttpException
     */
    public function action500()
    {
        throw new ServerErrorHttpException("Internal server error");
    }

    /**
     * @return string
     */
    public function actionTimeout()
    {
        sleep(15);
        return "Action timeout work correctly";
    }
}