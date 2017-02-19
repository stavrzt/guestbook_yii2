<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

    $form = ActiveForm::begin([
    'id' => 'users-messages-data2',
    'options' => ['class' => 'form-horizontal'],
    ]) ?>

<?= $form->field($model, 'guest_name')->textInput()?>
<?= $form->field($model, 'guest_email')->input('email') ?>
<?= $form->field($model, 'message')->textarea()?>

<?=$form->field($model, 'mycaptcha')->widget(Captcha::classname(), [
    'captchaAction'=>'/site/captcha',
    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div>{error}</div>',
    ]); /*?>

<?= $form->field($model, 'reCaptcha')->widget(
    \himiklab\yii2\recaptcha\ReCaptcha::className(),
    ['siteKey' => '6LeEHxYUAAAAADgyueHc2okWxIUZLWZ6tteqPFJ5']
)*/ ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end() ?>