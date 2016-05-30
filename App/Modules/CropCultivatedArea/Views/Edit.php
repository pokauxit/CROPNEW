<?php

use System\Template\Template;
use App\Modules\Soil\Controllers\Soil;

$template = new Template();
$template->open();
$template->openMain($this->param(-2));
?>
<style type="text/css">
    #map_canvas { 
        width:100%;
        height:400px;
        margin:auto;
    }
</style>
<form class="col s12" action="" method="post">

    <div class="row">
        <div class="input-field col s12 m4">
            <select name="soil_id">
                <?php
                $Soil = new Soil();
                echo $Soil->getSoilAll($this->rowId->soil_id); // ส่ง ID ไป Selected
                ?>
            </select>
            <label for="soil_id">ชื่อดิน</label>
        </div>
        <div class="input-field col s12 m4">
            <label for="lat_map">ละติจูด</label>
            <input name="lat_map" id="lat_map" type="text" class="validate" required value="<?php echo $this->rowId->lat_map; ?>">
        </div>
        <div class="input-field col s12 m4">
            <label for="long_map">ลองติจูด</label>
            <input name="long_map" id="long_map" type="text" class="validate" required value="<?php echo $this->rowId->long_map; ?>">
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12 m6">
            <label for="area_detail">ข้อมูลพื้นที่</label>
            <input name="area_detail" type="text" class="validate" required value="<?php echo $this->rowId->area_detail; ?>">
        </div>
        <div class="input-field col s12 m6">
            <label for="soil_drainage">การระบายน้ำของดิน</label>
            <input name="soil_drainage" type="text" class="validate" required value="<?php echo $this->rowId->soil_drainage; ?>">
        </div>
    </div>
    <div align="center">
        <input name="crop_id" type="hidden" value="<?php echo ID; ?>">
        <button class="btn waves-effect green" type="submit" name="submit" id="btn-submit" value="ss"><i class="fa fa-save"></i> บันทึก </button>
        <button class="btn waves-effect light-green" type="reset" name="reset"   value="ss"><i class="fa fa-refresh"></i> เริ่มใหม่ </button>
        <button class="btn waves-effect orange" type="button" onclick="window.location.href = '<?php echo $this->route->backToModule() . '//' . $this->param(0); ?>'"><i class="fa fa-arrow-circle-left"></i> ย้อนกลับ </button>
        <a href='#map' class="modal-trigger2 btn waves-effect blue"><i class="fa fa-map-marker"></i> แผนที่ </a>
    </div>
    <p><br></p>
</form>
<div  id="map" class="modal">
    <div style="text-align: center;padding: 3px">คลิกลากเพื่อหาตำแหน่งจุดที่ต้องการ</div>
    <div id="map_canvas"></div>
</div>
<?php
$template->closeMain();
$template->close();
$lat = $this->rowId->lat_map;
$long = $this->rowId->long_map;
if (empty($lat)) {$lat = '13.746555203977014';}
if (empty($long)) {$long = '100.52919387817383';}
$zoom = '6';
?>
<script type="text/javascript">
    var map;
    var GGM;
    function initialize() {
        GGM = new Object(google.maps);
        var my_Latlng = new GGM.LatLng(<?php echo $lat; ?>,<?php echo $long; ?>);//กำหนดจุดเริ่มต้นของแผนที่
        var my_mapTypeId = GGM.MapTypeId.ROADMAP;
        var my_DivObj = $("#map_canvas")[0];
        var myOptions = {
            zoom: <?php echo $zoom; ?>, //กำหนดขนาดการ zoom
            center: my_Latlng,
            mapTypeId: my_mapTypeId //กำหนดรูปแบบแผนที่
        };
        map = new GGM.Map(my_DivObj, myOptions);
        var my_Marker = new GGM.Marker({//สร้างตัว marker
            position: my_Latlng,
            map: map,
            draggable: true, //กำหนดให้สามารถลากตัว marker นี้ได้
            title: "คลิกลากเพื่อหาตำแหน่งจุดที่ต้องการ!" //แสดง title เมื่อเอาเมาส์มาอยู่เหนือ
        });
        GGM.event.addListener(my_Marker, 'dragend', function () {
            var my_Point = my_Marker.getPosition();
            map.panTo(my_Point);
            $("#lat_map").val(my_Point.lat()).trigger('change');
            $("#long_map").val(my_Point.lng()).trigger('change');
        });
    }
    $(function () {
        $("<script/>", {
            "type": "text/javascript",
            src: "http://maps.google.com/maps/api/js?v=3&language=th&callback=initialize&key=AIzaSyBBAoS5dpDtHxDa4t-Yj0iXFuyhzFrK6yw"
        }).appendTo("body");

        $('.modal-trigger2').leanModal({
            ready: function () {
                initialize();
            }
        });
    });
</script>