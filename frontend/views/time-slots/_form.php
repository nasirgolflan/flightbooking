<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Flight;

/* @var $this yii\web\View */
/* @var $model frontend\models\TimeSlots */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="time-slots-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'flight_id')->textInput() ?>
    <?= $form->field($model, 'flight_id')
        ->dropDownList( ArrayHelper::map(Flight::find()->where(['>', 'seats',0])->all(), 'id', 'name'),['prompt'=>'--Select Flight--'])
        ->label('FlightName'); ?>

    <?php // $form->field($model, 'time_slot')->textInput() ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css" integrity="sha512-bYPO5jmStZ9WI2602V2zaivdAnbAhtfzmxnEGh9RwtlI00I9s8ulGe4oBa5XxiC6tCITJH/QG70jswBhbLkxPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?= $form->field($model, 'time_slot')->textInput(['id'=>'demo']) ?>

    <script>
$('#demo').datetimepicker({
inline:true,
});
</script>


    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
