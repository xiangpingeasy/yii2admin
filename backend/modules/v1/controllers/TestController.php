<?php

namespace backend\modules\v1\controllers;

use yii\web\Controller;

/**
 * Default controller for the `v1` module
 */
class TestController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        echo 'test1';
//        return $this->render('index');
    }
}
