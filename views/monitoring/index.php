<?php
use yii\helpers\Html;
use yii\web\View;
/* @var $this yii\web\View */

$this->title = 'Monitoring';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJs("
	var elem = document.getElementById('monitoring-element');
	$('#fullscreen').on('click', function(){    
		if (elem.requestFullscreen) {
			elem.requestFullscreen();
		} else if (elem.mozRequestFullScreen) { /* Firefox */
			elem.mozRequestFullScreen();
		} else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
			elem.webkitRequestFullscreen();
		} else if (elem.msRequestFullscreen) { /* IE/Edge */
			elem.msRequestFullscreen();
		}
	});
", View::POS_READY);

$this->registerCss("
	#monitoring-element:-webkit-full-screen {
		background: #d4e4ff;
		padding: 30px;
	}
	#monitoring-element:-moz-full-screen {
		background: #d4e4ff;
		padding: 30px;
	}
	#monitoring-element:-ms-fullscreen {
		background: #d4e4ff;
		padding: 30px;
	}
	#monitoring-element:fullscreen {
		background: #d4e4ff;
		padding: 30px;
	}
	.info-box-number {
		font-size: 30px;
	}
");
?>
<div id="monitoring-element">
	<h1><?= Html::encode($this->title) ?></h1>

	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-user-circle-o"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Counter A</span>
					<span class="info-box-number">A1</span>
					<span class="info-box-text">3 remaining</span>
				</div>
			<!-- /.info-box-content -->
			</div>
		<!-- /.info-box -->
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-user-circle-o"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Counter A</span>
					<span class="info-box-number">A1</span>
					<span class="info-box-text">3 remaining</span>
				</div>
			<!-- /.info-box-content -->
			</div>
		<!-- /.info-box -->
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-user-circle-o"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Counter A</span>
					<span class="info-box-number">A1</span>
					<span class="info-box-text">3 remaining</span>
				</div>
			<!-- /.info-box-content -->
			</div>
		<!-- /.info-box -->
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-user-circle-o"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Counter A</span>
					<span class="info-box-number">A1</span>
					<span class="info-box-text">3 remaining</span>
				</div>
			<!-- /.info-box-content -->
			</div>
		<!-- /.info-box -->
		</div>
	</div>
</div>

<div class="fix-bottom">
	<button id="fullscreen" title="Enter Fullscreen" type="button" class="btn btn-xs btn-success">
		<span class="fa fa-expand"></span>
	</button>
</div>
