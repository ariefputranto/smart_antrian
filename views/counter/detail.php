<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Counter A';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCss("
	.btn-circle {
	    border-radius: 50%;
	    text-align: center;
	}
	.btn-circle.btn-lg {
	    font-size: 50px;
	    width: 100px;
	    height: 100px;
	}
	.btn-circle.btn-center {
		margin: auto;
	}
	.counter-number {
	    font-size: 100px;
	    font-weight: bold;
	    color: #00a65a;
	}
");
?>
<div class="row">
	<div class="col-lg-6 col-lg-offset-3">
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title"><?= Html::encode($this->title) ?></h3>
				<div class="pull-right">
					<span>3 left remaining</span>
				</div>
			</div>
			<div class="box-body no-padding">
				<div class="row">
					<div class="col-md-12">
						<div class="pad">
							<div class="counter-number text-center">A11</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<div class="row">
					<div class="col-lg-6">
						<button type="button" class="btn btn-primary btn-circle btn-lg btn-center btn-block">
							<span class="fa fa-repeat"></span>
						</button>
					</div>
					<div class="col-lg-6">
						<button type="button" class="btn btn-success btn-circle btn-lg btn-center btn-block">
							<span class="fa fa-arrow-right"></span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
