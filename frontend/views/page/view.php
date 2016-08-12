<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = $model->meta_title;
$this->registerMetaTag(['name' => 'description', 'content' => $model->meta_description]);
$this->params['breadcrumbs'][] = $model->title;
?>

<div class="page-container">
	<div class="single-portfolio-holder portfolio-type-1 alt-one clearfix description-set-left">
		<div class="details col-md-4">
			<div class="row">
				<div class="title section-title">
					<h1><?= Html::decode($model->title) ?></h1>
				</div>
				<div class="project-description">
					<div class="post-formatting">
						<?= Html::decode($model->content) ?>
					</div>
				</div>
				<div class="services row">
					<div class="checklist-entry col-sm-12 padding-bottom-50">
						<h3>Категории:</h3>
						<ul class="fa-ul category" >
							<?php if($category): ?>
								<?php foreach ($category as $key=>$group): ?>
									<li><i class="fa fa-li fa-angle-double-right"></i><a href="#" data-category="<?= $group->group ?>"><?= $group->group ?></a></li>
								<?php endforeach; ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7 col-md-offset-1 gallery-column-env">
			<div class="gallery">
				<div class="row nivo">
					<div class="col-xs-12">
							<?php if($data): ?>
								<input type="search" class="light-table-filter" data-table="order-table" placeholder="Поиск" style="width:100%;">
								<table class="order-table table">
								<?php foreach ($data as $item): ?>
									<tr data-item="<?= $item->group ?>">
										<td><img class = "img-responsive" src="/storage/img/products/<?= $item->image ?>" alt="<?= $item->name ?>"/></td>
										<td>
											<p><b><?= $item->name ?></b></p>
											<p><?= $item->data1 ?></p>
											<p><?= $item->data2 ?></p>
										</td>
									</tr>
								<?php endforeach; ?>
								</table>
							<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->registerJs("
    $(document).ready(function() {
        function toggle(e) {
            $('.table tr').each(function() {
				if( $(this).attr('data-item') == e ){
					//$(this).css('display', 'block');
					$(this).fadeIn();
				}else{
					//$(this).css('display', 'none');
					$(this).fadeOut();
				}
	        });
        }	
		$('.category li a').click(function(){
			var key = $(this).attr('data-category');
			toggle(key);
		});
	});
	(function(document) {
	'use strict';
	var LightTableFilter = (function(Arr) {
		var _input;
		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}
		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}
		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);
	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});
})(document);
", View::POS_END); ?>