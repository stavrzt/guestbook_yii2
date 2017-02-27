<?php

use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use app\modules\main\models\UsersMessagesData;

$dataProvider = new ActiveDataProvider([
'query' => UsersMessagesData::find(),
'pagination' => [
    'pageSize' => 10,
    'validatePage' => false,
],
]);

echo ListView::widget([
'dataProvider' => $dataProvider,
'itemView' => '_list',
]);
?>

<?php

if(Yii::$app->user->isGuest)
{
   echo '<br><h3>Login to adding comments!</h3>';
}
else{
    echo $this->render('_form', [
        'model' => $model,
    ]) ;
}

?>