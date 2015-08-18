<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-18 12:23:45
         compiled from "C:\xampp\htdocs\minavi\application\views\dataform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2733155d19bf7429d63-20553352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87fb46f8c81da9727aa184fc45397fb598060764' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minavi\\application\\views\\dataform.tpl',
      1 => 1439893421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2733155d19bf7429d63-20553352',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d19bf7485345_62902828',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d19bf7485345_62902828')) {function content_55d19bf7485345_62902828($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">Sidebar</li>
                    <li><a href="#">Link</a></li>
                </ul>
            </div><!--well -->
        </div><!--/span-->

        <form action="http://localhost/minavi/Dataaccept/index" method="post" class="form-horizontal" role="form">

            <div class="span9">
                <?php echo '<?php'; ?>
 echo validation_errors('title'); <?php echo '?>'; ?>

                
                <h3 class="page-title">
                    場所 <small>場所を選択</small>
                    <table class="form">
                        <!--                    <tr>
                                                <th>日時</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input class="sp_start_date" type="text" name="date" value="" />
                                                </td>
                                            </tr>-->
                        <tr>
                            <th>タイトル</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="title"></td>
                        </tr>

                        <tr>
                            <th>場所</th>
                        </tr>
                        <tr>
                            <td>
                                <div id="map" style="width:500px; height:500px" onload="mapInit();"></div>
                                
                                    <?php echo '<script'; ?>
>
                                        var map;
                                        var projection3857 = new OpenLayers.Projection("EPSG:3857");
                                        var projection4326 = new OpenLayers.Projection("EPSG:4326");
                                        var deflonlat = new OpenLayers.LonLat(139.6489569, 35.8574244).transform(projection4326, projection3857);
                                        var markers = new OpenLayers.Layer.Markers("Markers");
                                        var size = new OpenLayers.Size(34, 37);
                                        var offset = new OpenLayers.Pixel(-(size.w/2), -size.h);


                                        $(function mapInit(){

                                        map = new OpenLayers.Map({
                                        div: "map",
                                        projection: projection3857,
                                        displayProjection: projection4326
                                    });

                                    map.addLayer(new OpenLayers.Layer.XYZ("標準地図",
                                    "http://cyberjapandata.gsi.go.jp/xyz/std/${z}/${x}/${y}.png", {
                                    attribution: "<a href='http://portal.cyberjapan.jp/help/termsofuse.html'>国土地理院</a>",
                                    maxZoomLevel: 18
                                }));

                                map.setCenter(deflonlat, 10);
    
                                var marker = new OpenLayers.Marker(deflonlat);

                                markers.addMarker(marker);
                                map.addLayer(markers);

                                map.events.register('mouseup', map, onClick);
        
                                function onClick(evt) {
                                var lonlat = map.getLonLatFromViewPortPx(evt.xy);
                                lonlat.transform(projection3857, projection4326);
                                $("#lat").val(lonlat.lat);
                                $("#lon").val(lonlat.lon);

                                var opx = map.getLayerPxFromViewPortPx(evt.xy);
                                marker.map = map;
                                marker.moveTo(opx);
                            }
                        });
                                    <?php echo '</script'; ?>
>
                                
                                緯度：<input type="text" id="lon" name="lon">
                                経度：<input type="text" id="lat" name="lat">
                            </td>
                        </tr>
                    </table>
                    <select name="area_id">
                        <option value="0">場所を選択</option>
                        <option value="1">ニセコ町</option>
                        <option value="2">鎌倉市</option>
                        <option value="0">無</option>
                    </select>
                    <div class="file"><small>背景画像アップロード</small><input name="bg_file_name" type="file"></div>
                </h3>
                <hr>
                <h3 class="page-title">
                    セリフ入力
                    <div class="block-change"><i class="icon-th"></i></div>
                </h3>
                <div class="textarea">
                    <div>
                        <input type="text" name="event1" style="width: 70%;" maxlength="30">
                        <select name="image_file_name1">
                            <option selected>表情の種類を選択</option>
                            <option>笑顔</option>
                            <option>怒り</option>
                            <option>喜怒哀楽無退二</option>
                        </select>
                        <select name="image_position_type1">
                            <option value="1">左</option>
                            <option value="2">中央</option>
                            <option value="3">右</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" name="event2" style="width: 70%;" maxlength="30">
                        <select name="image_file_name2">
                            <option selected>表情の種類を選択</option>
                            <option>笑顔</option>
                            <option>怒り</option>
                            <option>喜怒哀楽無退二</option>
                        </select>
                        <select name="image_position_type2">
                            <option value="1">左</option>
                            <option value="2">中央</option>
                            <option value="3">右</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" name="event3" style="width: 70%;" maxlength="30">
                        <select name="image_file_name3">
                            <option selected>表情の種類を選択</option>
                            <option>笑顔</option>
                            <option>怒り</option>
                            <option>喜怒哀楽無退二</option>
                        </select>
                        <select name="image_position_type3">
                            <option value="1">左</option>
                            <option value="2">中央</option>
                            <option value="3">右</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" name="event4" style="width: 70%;" maxlength="30">
                        <select name="image_file_name4">
                            <option selected>表情の種類を選択</option>
                            <option>笑顔</option>
                            <option>怒り</option>
                            <option>喜怒哀楽無退二</option>
                        </select>
                        <select name="image_position_type4">
                            <option value="1">左</option>
                            <option value="2">中央</option>
                            <option value="3">右</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" name="event5" style="width: 70%;" maxlength="30">
                        <select name="image_file_name5">
                            <option selected>表情の種類を選択</option>
                            <option>笑顔</option>
                            <option>怒り</option>
                            <option>喜怒哀楽無退二</option>
                        </select>
                        <select name="image_position_type5">
                            <option value="1">左</option>
                            <option value="2">中央</option>
                            <option value="3">右</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" name="event6" style="width: 70%;" maxlength="30">
                        <select name="image_file_name6">
                            <option selected>表情の種類を選択</option>
                            <option>笑顔</option>
                            <option>怒り</option>
                            <option>喜怒哀楽無退二</option>
                        </select>
                        <select name="image_position_type6">
                            <option value="1">左</option>
                            <option value="2">中央</option>
                            <option value="3">右</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" name="event7" style="width: 70%;" maxlength="30">
                        <select name="image_file_name7">
                            <option selected>表情の種類を選択</option>
                            <option>笑顔</option>
                            <option>怒り</option>
                            <option>喜怒哀楽無退二</option>
                        </select>
                        <select name="image_position_type7">
                            <option value="1">左</option>
                            <option value="2">中央</option>
                            <option value="3">右</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" name="event8" style="width: 70%;" maxlength="30">
                        <select name="image_file_name8">
                            <option selected>表情の種類を選択</option>
                            <option>笑顔</option>
                            <option>怒り</option>
                            <option>喜怒哀楽無退二</option>
                        </select>
                        <select name="image_position_type8">
                            <option value="1">左</option>
                            <option value="2">中央</option>
                            <option value="3">右</option>
                        </select>
                    </div>
                </div>


                <hr>
                <p><label><input type="radio" name="select_flg" value="1" onclick="$('#select').show();">設問を加える</label></p>
                <p><label><input type="radio" name="select_flg" value="0" onclick="$('#select').hide();">設問を加えない</label></p>
                <div id="select" style="display: none;">
                    <h3 class="page-title">
                        設問を入力！
                        <div class="block-change"><i class="icon-th"></i></div>
                    </h3>
                    <div class="textarea">
                        <div>
                            設問
                            <input type="text" name="select_event" style="width: 70%;" maxlength="30">
                            <select name="select_image_file_name">
                                <option selected>表情の種類を選択</option>
                                <option>笑顔</option>
                                <option>怒り</option>
                                <option>喜怒哀楽無退二</option>
                            </select>
                            <select name="select_image_position_type">
                                <option value="1">左</option>
                                <option value="2">中央</option>
                                <option value="3">右</option>
                            </select>
                        </div>
                        <hr>
                        <div>
                            選択肢1
                            <input type="text" name="answer1" style="width: 70%;" maxlength="30">
                            <div id="answer_event1" style="padding-left: 20px;">
                                <h3 class="page-title">
                                    <small>回答１！</small>
                                    <div class="block-change"><i class="icon-th"></i></div>
                                </h3>
                                <div class="textarea">
                                    <div>
                                        <input type="text" name="answer1_event1" style="width: 70%;" maxlength="30">
                                        <select name="answer1_image_file_name1">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer1_image_position_type1">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer1_event2" style="width: 70%;" maxlength="30">
                                        <select name="answer1_image_file_name2">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer1_image_position_type2">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer1_event3" style="width: 70%;" maxlength="30">
                                        <select name="answer1_image_file_name3">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer1_image_position_type3">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer1_event4" style="width: 70%;" maxlength="30">
                                        <select name="answer1_image_file_name4">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer1_image_position_type4">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer1_event5" style="width: 70%;" maxlength="30">
                                        <select name="answer1_image_file_name5">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer1_image_position_type5">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            選択肢2
                            <input type="text" name="answer2" style="width: 70%;" maxlength="30">
                            <div id="answer_event1" style="padding-left: 20px;">
                                <h3 class="page-title">
                                    <small>回答１！</small>
                                    <div class="block-change"><i class="icon-th"></i></div>
                                </h3>
                                <div class="textarea">
                                    <div>
                                        <input type="text" name="answer2_event1" style="width: 70%;" maxlength="30">
                                        <select name="answer2_image_file_name1">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer2_image_position_type1">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer2_event2" style="width: 70%;" maxlength="30">
                                        <select name="answer2_image_file_name2">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer2_image_position_type2">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer2_event3" style="width: 70%;" maxlength="30">
                                        <select name="answer2_image_file_name3">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer2_image_position_type3">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer2_event4" style="width: 70%;" maxlength="30">
                                        <select name="answer2_image_file_name4">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer2_image_position_type4">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer2_event5" style="width: 70%;" maxlength="30">
                                        <select name="answer2_image_file_name5">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer2_image_position_type5">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            選択肢3<input type="text" name="answer3" style="width: 70%;" maxlength="30">
                            <div id="answer_event1" style="padding-left: 20px;">
                                <h3 class="page-title">
                                    <small>回答１！</small>
                                    <div class="block-change"><i class="icon-th"></i></div>
                                </h3>
                                <div class="textarea">
                                    <div>
                                        <input type="text" name="answer3_event1" style="width: 70%;" maxlength="30">
                                        <select name="answer3_image_file_name1">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer3_image_position_type1">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer3_event2" style="width: 70%;" maxlength="30">
                                        <select name="answer3_image_file_name2">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer3_image_position_type2">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer3_event3" style="width: 70%;" maxlength="30">
                                        <select name="answer3_image_file_name3">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer3_image_position_type3">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer3_event4" style="width: 70%;" maxlength="30">
                                        <select name="answer3_image_file_name4">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer3_image_position_type4">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer3_event5" style="width: 70%;" maxlength="30">
                                        <select name="answer3_image_file_name5">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer3_image_position_type5">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            選択肢4<input type="text" name="answer4" style="width: 70%;" maxlength="30">
                            <div id="answer_event1" style="padding-left: 20px;">
                                <h3 class="page-title">
                                    <small>回答１！</small>
                                    <div class="block-change"><i class="icon-th"></i></div>
                                </h3>
                                <div class="textarea">
                                    <div>
                                        <input type="text" name="answer4_event1" style="width: 70%;" maxlength="30">
                                        <select name="answer4_image_file_name1">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer4_image_position_type1">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer4_event2" style="width: 70%;" maxlength="30">
                                        <select name="answer4_image_file_name2">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer4_image_position_type2">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer4_event3" style="width: 70%;" maxlength="30">
                                        <select name="answer4_image_file_name3">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer4_image_position_type3">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer4_event4" style="width: 70%;" maxlength="30">
                                        <select name="answer4_image_file_name4">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer4_image_position_type4">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="answer4_event5" style="width: 70%;" maxlength="30">
                                        <select name="answer4_image_file_name5">
                                            <option selected>表情の種類を選択</option>
                                            <option>笑顔</option>
                                            <option>怒り</option>
                                            <option>喜怒哀楽無退二</option>
                                        </select>
                                        <select name="answer4_image_position_type5">
                                            <option value="1">左</option>
                                            <option value="2">中央</option>
                                            <option value="3">右</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <p><input type="submit" value="決定！" class="btn btn-primary btn-large"></p>
                
            </div><!--/span-->

        </form>

    </div><!--/row-->
    <hr>
</div><!--/.fluid-container-->

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
