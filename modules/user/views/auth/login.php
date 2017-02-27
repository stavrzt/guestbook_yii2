<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$form = ActiveForm::begin([
    'id' => 'users',
    'options' => ['class' => 'form-horizontal'],
]) ?>

<?= $form->field($model, 'login')->textInput()?>
<?= $form->field($model, 'password')->passwordInput()?>

    <div class="form-group">
        <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
    </div>
    <a href="/user/signup">Registration</a>
<?php ActiveForm::end() ?>