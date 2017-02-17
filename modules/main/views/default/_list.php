<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="news-item">
    <p style="text-align: right"><?= Html::encode($model->date_added) ?></p>
    <h2><?= Html::encode($model->guest_email) ?> | <?= Html::encode($model->guest_name) ?></h2>
    <p><?= Html::encode($model->message) ?></p>
</div>