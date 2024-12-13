<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Введення даних';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-entry" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px;">
    <h1 style="text-align: center;"><?= Html::encode($this->title) ?></h1>

    <p>Будь ласка, заповніть наступні поля:</p>

    <?php $form = ActiveForm::begin(['options' => ['class' => 'custom-form']]); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Введіть ваше ім\'я']) ?>

        <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Введіть вашу електронну пошту']) ?>

        <div class="form-group" style="text-align: center;">
            <?= Html::submitButton('Надіслати', ['class' => 'btn btn-success', 'style' => 'width: 100%;']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>
