<?php

use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use app\modules\main\models\UsersMessagesData;

$dataProvider = new ActiveDataProvider([
'query' => UsersMessagesData::find(),
'pagination' => [
    'pageSize' => 20,
    'validatePage' => false,
],
]);

echo ListView::widget([
'dataProvider' => $dataProvider,
'itemView' => '_list',
]);

$model = new UsersMessagesData;

?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>