<?
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 26.02.2017
 */
/* @var $this \yii\web\View */
/* @var \yii\web\User $model */
?>
<h1>Личные данные</h1>

<div class="row">
<div class="col-12 col-lg-6">

<?php $form = \skeeks\cms\backend\widgets\ActiveFormAjaxBackend::begin(); ?>

<?
\skeeks\cms\admin\assets\JqueryMaskInputAsset::register($this);
$id = \yii\helpers\Html::getInputId($model, 'phone');
$this->registerJs(<<<JS
$("#{$id}").mask("+7 999 999-99-99");
JS
);
?>

    <?= $form->field($model, 'first_name') ?>
    <?= $form->field($model, 'last_name') ?>
    <?= $form->field($model, 'patronymic') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'phone') ?>
    <?= $form->buttonsStandart($model) ?>
    <?= $form->errorSummary([$model]) ?>
<?php $form::end(); ?>
</div>
</div>
