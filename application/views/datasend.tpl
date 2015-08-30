<?xml version="1.0">
<all_items>
{foreach from=$all_items item=i}
    <item>
    <talk_group_id>{$i.talk_group_id}</talk_group_id>
    <area_id>{$i.area_id}</area_id>
    <message>{$i.title}</message>
    <message_en>{$i.title_en}</message_en>
    <lon>{$i.lon}</lon>
    <lat>{$i.lat}</lat>
    <ar_image_name>{$i.ar_image_name}</ar_image_name>
    <pin>{$i.pin}</pin>
    <lon_min>{$i.lon_min}</lon_min>
    <lat_min>{$i.lat_min}</lat_min>
    <lon_max>{$i.lon_max}</lon_max>
    <lat_max>{$i.lat_max}</lat_max>
    <is_enabled>{$i.is_enabled}</is_enabled>
    <is_removed>{$i.is_removed}</is_removed>
    </item>
{/foreach}
</all_items>