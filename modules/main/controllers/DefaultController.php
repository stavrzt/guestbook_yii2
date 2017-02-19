<?php

namespace app\modules\main\controllers;

use yii\web\Controller;
use Yii;
use app\modules\main\models\UsersMessagesData;


/**
 * Default controller for the `main` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new UsersMessagesData;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            //return $this->refresh();
            echo '<h1>NORMAL</h1>';
        }
        else{
            echo '<h1>BAD</h1>';
            echo var_dump($model->getErrors());
        }

        return $this->render('index');
    }
}
