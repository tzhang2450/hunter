/**
 * Created by pro on 2018/5/10.
 */
var today = new Date();
var local_time = today.getFullYear() + '年';
local_time += today.getMonth()+1;
local_time += '月' + today.getDate() +'日 ';
var week_day = today.getDay();
switch (week_day) {
    case 0 : local_time += '星期日';break;
    case 1 : local_time += '星期一';break;
    case 2 : local_time += '星期二';break;
    case 3 : local_time += '星期三';break;
    case 4 : local_time += '星期四';break;
    case 5 : local_time += '星期五';break;
    case 6 : local_time += '星期六';break;
}
$('.today-time').text(local_time);
