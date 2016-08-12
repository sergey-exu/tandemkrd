<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Контакты';
$this->registerMetaTag(['name' => 'description', 'content' => 'Контакты, форма обратной связи, заказ упаковки']);
$this->params['breadcrumbs'][] = $this->title;
?>
	<div class="lab-row-container">
		<div class="container lab-vc-container">
			<div class="vc_row wpb_row vc_row-fluid vc_custom_1427330082983">
			    <div class="wpb_column vc_column_container vc_col-sm-4">
					<div class="wpb_wrapper wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeIn;">
						<div class="wpb_text_column wpb_content_element ">
							<div class="wpb_wrapper">
								<h3><?= Html::encode($this->title) ?></h3>
								<div class="row">
									<div class="col-lg-6">
										<p>Заявки&nbsp;отправляйте на e-mail ,<br> или по телефонам<br>
									<a href="mailto:info@laborator.co">test@test.ru</a></p>
								<p>&nbsp;</p>
									</div>
									<div class="col-lg-6">
										<p><strong>Телефоны:</strong></p>
								<p> <?=Html::decode(Yii::$app->settings->get('contact.mainphone'));?><br> +7(918)000-00-00
								</p>
									</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-8">
					<div class="wpb_wrapper wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
						<div class="lab-contact-form message-form ">
						     
				                    <?php $form = ActiveForm::begin([
				                    		'id' => 'contact-form',
				                    		'options' => ['class' => 'contact-form'],
				                    ]); ?>
				                    	<div class="form-group absolute">
				                    	<div class="placeholder"><label for="el_57a70edc09d9a_name">Имя:</label></div>
				                        <?= $form->field($model, 'name',['enableLabel' => false]) ?>
				                        </div>
				                        <div class="form-group absolute">
				                        <div class="placeholder"><label for="el_57a70edc09d9a_Email">Email:</label></div>	
				                        <?= $form->field($model, 'email',['enableLabel' => false]) ?>
				                        </div>
				                        <div class="form-group absolute">
				                        <div class="placeholder"><label for="el_57a70edc09d9a_subject">Тема:</label></div>	
				                        <?= $form->field($model, 'subject',['enableLabel' => false]) ?>
				                        </div>
				                        
				                        <div class="form-group">
										<div class="placeholder ver-two"><label for="el_57a70edc09d9a_message">Сообщение:</label></div>
				                        <?= $form->field($model, 'body',['enableLabel' => false])->textArea(['rows' => 6]) ?>
				                        </div>
				                       
				                    	
				                        <?= $form->field($model, 'verifyCode',['enableLabel' => false])->widget(Captcha::className(), [
				                            'template' => ' <div class="form-group absolute"><div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6"><div class="placeholder"><label for="el_57a70edc09d9a_name">Код:</label></div>{input}</div></div> </div>',
				                        ]) ?>
				                       
				                        <div class="form-group">
				                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
				                        </div>
				                    <?php ActiveForm::end(); ?>
	                		
				        </div>
					</div>
				</div>
			</div>
        </div>
    </div>
