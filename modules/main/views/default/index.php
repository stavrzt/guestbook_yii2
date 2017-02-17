<?php
use app\modules\main\models\UsersMessagesData;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

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
