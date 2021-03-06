<?php
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$session = Yii::$app->session;
$string = Yii::$app->security->generateRandomString(32);
$session->set('token-wizard', $string );


$this->title = Yii::$app->id;

$form = ActiveForm::begin([
	'id' => 'wizard-form',
	// 'enableAjaxValidation' => true,
	// 'enableClientValidation' => false,
	'layout' => 'horizontal',
	'fieldConfig' => [
		'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n{error}\n<div class=\"col-lg-8\">{error}</div>",
		'labelOptions' => ['class' => 'col-lg-12 control-label'],
	],

]);

include ('_js.php');


?>

<div class="wallet-generate">
	<div class="body-content">
		<div class="card bg-primary no-b order">
			<div class="card-header">
				<h3 class="text-warning"><?php echo Yii::t('app','Restore your seed');?></h3>
			</div>
		  <div class="card-body bg-primary">
		      <div class="form-group">

  				<p class="text-light"><?php echo Yii::t('app','Insert your seed to restore the wallet.');?></p>
		      </div>

		      <div class="form-group">
		          <?= $form->field($formModel, 'seed')->textarea([
		              'rows' => 6, 'cols' => 50,
									'class' => 'no-copypaste form-control text-lowercase',
									'style'=>"font-weight:bold; font-size:larger;"]) ?>
				  <div class="invalid-feedback alert alert-danger" id="seed-error" ></div>
		      </div>

			  <?= $form->field($formModel, 'address')->hiddenInput()->label(false) ?>

		  </div>

	    <div class="container">
	      <div class="float-left">
					<a href="<?php echo Url::to(['/wizard/index','token' => $string]) ?>" />
					<button type="button" class="btn btn-secondary btn-md" >
  					<i class="fa fa-backward"></i> <?php echo Yii::t('app','back');?>
  				</button>
				</a>
	      </div>
	      <div class="float-right">
					<?= Html::Button('<i class="fa fa-thumbs-up"></i> '.Yii::t('app','Confirm'), [
		            'class' => 'btn btn-success btn-md seed-submit',
		            //'data-method' => 'post',
		            // 'data-pjax' => 1
		            // 'data-confirm' => 'Are you sure?'
		        ]);
		      ?>
	      </div>
	    </div>
			<div class="form-divider"></div>
		</div>
	</div>
</div>



<?php ActiveForm::end(); ?>
