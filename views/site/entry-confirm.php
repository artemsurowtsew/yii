<?php

use yii\helpers\Html;

$this->title = 'Підтвердження даних';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-entry-confirm">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Ви ввели наступну інформацію:</p>

    <ul>
        <li><strong><?= Html::encode($model->getAttributeLabel('name')) ?>:</strong> <?= Html::encode($model->name) ?></li>
        <li><strong><?= Html::encode($model->getAttributeLabel('email')) ?>:</strong> <?= Html::encode($model->email) ?></li>
    </ul>
</div>
