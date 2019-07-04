<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Counter';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success">
	<div class="box-header with-border">
		<h3 class="box-title">Choose <?= Html::encode($this->title) ?></h3>
	</div>
	<div class="box-body no-padding">
		<div class="row">
			<div class="col-md-12">
				<div class="pad">
					<div class="row">
						<div class="col-lg-4 col-xs-6">
							<!-- small box -->
							<div class="small-box bg-green">
								<div class="inner">
									<h3>Counter A</h3>
									<p>3 remaining</p>
								</div>
								<div class="icon">
									<i class="fa fa-check-square-o"></i>
								</div>
								<a href="<?= Url::to(['counter/detail']) ?>" class="small-box-footer">Use <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-4 col-xs-6">
							<!-- small box -->
							<div class="small-box bg-green">
								<div class="inner">
									<h3>Counter A</h3>
									<p>3 remaining</p>
								</div>
								<div class="icon">
									<i class="fa fa-check-square-o"></i>
								</div>
								<a href="<?= Url::to(['counter/detail']) ?>" class="small-box-footer">Use <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-4 col-xs-6">
							<!-- small box -->
							<div class="small-box bg-green">
								<div class="inner">
									<h3>Counter A</h3>
									<p>3 remaining</p>
								</div>
								<div class="icon">
									<i class="fa fa-check-square-o"></i>
								</div>
								<a href="<?= Url::to(['counter/detail']) ?>" class="small-box-footer">Use <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-4 col-xs-6">
							<!-- small box -->
							<div class="small-box bg-green">
								<div class="inner">
									<h3>Counter A</h3>
									<p>3 remaining</p>
								</div>
								<div class="icon">
									<i class="fa fa-check-square-o"></i>
								</div>
								<a href="<?= Url::to(['counter/detail']) ?>" class="small-box-footer">Use <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
