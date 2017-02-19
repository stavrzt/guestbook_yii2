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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->refresh();
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }
}
