<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

    $form = ActiveForm::begin([
    'id' => 'users-messages-data2',
        'layout' => 'horizontal',
    //'options' => ['class' => 'form-horizontal'],
    ]) ?>

<?= $form->field($model, 'guest_name')->textInput()?>
<?= $form->field($model, 'guest_email')->input('email') ?>
<?= $form->field($model, 'message')->textarea()?>

<?=$form->field($model, 'mycaptcha')->widget(Captcha::classname(), [
    'captchaAction'=>'default/captcha',
    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end() ?>