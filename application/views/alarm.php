  <?php $this->load->view('_header');?>  
  <script type="text/javascript" charset="utf-8" >
    // JavaScript Document
// var attrs = getScriptArgs();
// var attrs;
var alarmareaid = '10126[\\d]{0,2}';
var alarmtype = '09' ;
var alarmlevel = '02';
var alarmcount = '8';
var alarmdivid = 'alarm-' + new Date().getTime();
$provid = alarmareaid.substr(3, 2);
$provnamearr = ['北京', '上海', '天津', '重庆', '黑龙江', '吉林', '辽宁', '内蒙古', '河北', '山西', '陕西', '山东', '新疆', '西藏', '青海', '甘肃', '宁夏', '河南', '江苏', '湖北', '浙江', '安徽', '福建', '江西', '湖南', '贵州', '四川', '广东', '云南', '广西', '海南', '香港', '澳门', '台湾'];
$provname = $provnamearr[parseInt($provid, 10) - 1];
$yjlb = ['台风', '暴雨', '暴雪', '寒潮', '大风', '沙尘暴', '高温', '干旱', '雷电', '冰雹', '霜冻', '大雾', '霾', '道路结冰'];
$gdlb = ['寒冷', '灰霾', '雷雨大风', '森林火险', '降温', '道路冰雪'];
$yjyc = ['蓝色', '黄色', '橙色', '红色'];
$gdyc = ['白色'];
$URL = 'http://product.weather.com.cn/alarm/grepalarm.php?areaid=' + alarmareaid + '&type=' + alarmtype + '&level=' + alarmlevel + '&count=' + alarmcount;

$.ajax({
  type: "GET",
  url: $URL,
  dataType: "script",
  cache: false,
  async: false,
  success: function() {
    $html = '';
    if(alarminfo.count == 0 ){
      $("#content").html("气象台暂时未发布预警");
    }else{
      $.each(alarminfo.data, function(i, k) {
        $filename = k[1];
        $pos = $filename.lastIndexOf('-');
        $lb = $filename.substr($pos + 1, 2);
        $jb = $filename.substr($pos + 3, 2);

        $img = $typeid = $lb + $jb;

        $textlb = $yjlb[parseInt($lb, 10) - 1];
        $textyc = $yjyc[parseInt($jb, 10) - 1];
        if ($lb > 90 || $jb > 90) $img = '0000';
        if ($lb > 90) $textlb = $gdlb[parseInt($lb, 10) - 91];
        if ($jb > 90) $textyc = $gdyc[parseInt($jb, 10) - 91];

        //$('<dl></dt><dd><h2><a target="_blank" href="http://www.weather.com.cn/alarm/newalarmcontent.shtml?file='+$filename+'">'+k[0]+'气象台发布'+$textlb+$textyc+'预警</a></h2></dd></dl>').appendTo($appparent);
        //$('#rolltxt2').append("<li style='width:300px; height:31px'><a target='_blank' href='http://www.weather.com.cn/alarm/newalarmcontent.shtml?file="+$filename+"'>"+k[0]+'气象台发布'+$textlb+$textyc+'预警'+"</a></li>");
        // $('#rolltxt2').append(");
        $("#content").append("<li style='width:300px; height:31px'>" + k[0] + "气象台发布" + $textlb + $textyc + "预警</li>");
        // alert(k[0]+'气象台发布'+$textlb+$textyc+'预警');      
      });

    }

  }
}); 

  </script>
	<div class="title">气象预警信息</div>
	<div id="content" class="content">
    <!--
		<table class="table-list">
			<tbody>
				<tr>
					<td class="s-pic"><a href="/alarm/details.html"><img class="a-pic" src="resources/images/alarm.png" alt="大风" /></a></td>
					<td class="s-info">
						<a href="/alarm/details">贵州省气象台发布大风蓝色预警</a><br />状态：<strong class="red">预警中</strong><br /><span class="time">2013-06-23 22:53:05</span>
					</td>
				</tr>
				<tr class="odd">
					<td class="s-pic"><a href="/alarm/details.html"><img class="a-pic" src="resources/images/alarm2.png" alt="暴雨" /></a></td>
					<td class="s-info">
						<a href="/alarm/details">贵州省气象台发布暴雨黄色预警</a><br />状态：<strong class="red">预警中</strong><br /><span class="time">2013-06-23 22:53:05</span>
					</td>
				</tr>
				<tr>
					<td class="s-pic"><a href="/alarm/details.html"><img class="a-pic" src="resources/images/alarm3.png" alt="暴雨" /></a></td>
					<td class="s-info">
						<a href="/alarm/details">贵州省气象台发布暴雨红色预警</a><br />状态：<strong class="red">预警中</strong><br /><span class="time">2013-06-23 22:53:05</span>
					</td>
				</tr>
				<tr class="odd">
					<td class="s-pic"><a href="/alarm/details.html"><img class="a-pic" src="resources/images/alarm4.png" alt="高温" /></a></td>
					<td class="s-info">
						<a href="/alarm/details">贵州省气象台发布高温黄色预警</a><br />状态：<strong class="red">预警中</strong><br /><span class="time">2013-06-23 22:53:05</span>
					</td>
				</tr>
				<tr>
					<td class="s-pic"><a href="/alarm/details"><img class="a-pic" src="resources/images/alarm.png" alt="大风" /></a></td>
					<td class="s-info">
						<a href="/alarm/details">贵州省气象台发布大风蓝色预警</a><br />状态：<strong class="red">预警中</strong><br /><span class="time">2013-06-23 22:53:05</span>
					</td>
				</tr>
			</tbody>
		</table>
    -->

	</div><!-- content -->

  <?php $this->load->view('_footer');?>  
