
{foreach from=$all_items item=i}
{literal}{{/literal}"{$i.talk_group_id}","{$i.area_id}","{$i.title}","{$i.title_en}","{$i.lon}","{$i.lat}","{$i.ar_image_name}","{$i.pin}","{$i.lon_min}","{$i.lat_min}","{$i.lon_max}","{$i.lat_max}","{*{$i.is_enabled}","{$i.is_removed}*}20150831"{literal}}{/literal},
{/foreach}