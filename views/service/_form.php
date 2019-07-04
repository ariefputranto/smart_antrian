<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model app\models\Service */
/* @var $form yii\widgets\ActiveForm */
// register assets
$this->registerJsFile('@web/js/leaflet.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/js/leaflet-search.src.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerCssFile('@web/css/leaflet.min.css', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerCssFile('@web/css/leaflet-search.min.css', ['depends' => [yii\web\JqueryAsset::className()]]);

$lat = $model->lat == null ? -7.281279 : $model->lat;
$lng = $model->lng == null ? 112.795736 : $model->lng;

$this->registerJs("
    function setLeafLatLong(lat, lng){
        $('#service-lat').val(lat);
        $('#service-lng').val(lng);
    }

    var map = L.map('map', {
        center : [".$lat.", ".$lng."],
        zoom: 14
    });
    setLeafLatLong(".$lat.", ".$lng.");

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors',
        maxZoom: 19,
    }).addTo(map);

    var marker = L.marker(map.getCenter()).addTo(map);

    map.on('move', function () {
        marker.setLatLng(map.getCenter());

        // update marker position
        var cnt = map.getCenter();
        var position = marker.getLatLng();
        lat = Number(position['lat']).toFixed(5);
        lng = Number(position['lng']).toFixed(5);
        // console.log(position);
        setLeafLatLong(lat, lng);
    });

    // Add search box to find location
    map.addControl( new L.Control.Search({
        url: 'https://nominatim.openstreetmap.org/search?format=json&q={s}',
        jsonpParam: 'json_callback',
        propertyName: 'display_name',
        propertyLoc: ['lat','lon'],
        marker: L.circleMarker([0,0],{radius:30}),
        autoCollapse: true,
        autoType: false,
        minLength: 2
    }) );
", View::POS_READY);
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lat')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'lng')->hiddenInput()->label(false) ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?> -->

    <!-- <?= $form->field($model, 'updated_at')->textInput() ?> -->
    <div class="form-group">
        <label class="control-label" for="service-map">Maps Location</label>
        <div id="map" style="height: 300px"></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
