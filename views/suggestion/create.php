<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Suggestion $model */

$this->title = Yii::t('app', 'Create Suggestion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Suggestions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suggestion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
