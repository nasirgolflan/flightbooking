<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model frontend\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-form">

    <?php $form = ActiveForm::begin(); ?>

   

    <?php
//     ['prompt'=>'-Choose a Flight-',
//     'onchange'=>'
//       $.post( "'.Yii::$app->urlManager->createUrl('flight/lists&id=').'"+$(this).val(), function( data ) {
//         $( "select#title" ).html( data );
//       });
//   '

$dataCategory=ArrayHelper::map(\frontend\models\Flight::find()->asArray()->all(), 'id', 'name');

echo $form->field($model, 'flight_id')->dropDownList($dataCategory, 
         ['prompt'=>'-Choose a Flight-',
          'onchange'=>'
            $.post( "http://fbooking.local/index.php?r=flight/lists&id="+$(this).val(), function( data ) {
              $( "select#time_slots_is" ).html( data );
            });
        ']); 

        $dataPost = [];

    ?>

<?php
$customerList = ArrayHelper::map(\frontend\models\Customer::find()->asArray()->all(), 'id', 'name');

?>
    <?= $form->field($model, 'customer_id')->dropDownList($customerList, ['prompt'=>'-Choose a Customer-']) ?>

    <?= $form->field($model, 'time_slots_is')->dropDownList(
        $dataPost,           
        ['id'=>'time_slots_is']
    ) ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
