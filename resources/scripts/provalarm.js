// JavaScript Document

function getScriptArgs(){ 
	var scripts=document.getElementsByTagName("script");
	script=scripts[scripts.length-1];
	src=script.src;
	reg=/(?:\?|&)(.*?)=(.*?)(?=&|$)/g; 
	var temp={};var res={}; 
	while((temp=reg.exec(src))!=null) res[temp[1]]=decodeURIComponent(temp[2]); 
	return res; 
}; 
var attrs=getScriptArgs();
var alarmareaid = attrs.areaid == undefined?'10101':attrs.areaid;
var alarmtype = attrs.alarmtype == undefined?'[0-9]{2}':attrs.alarmtype;
var alarmlevel = attrs.alarmlevel == undefined?'[0-9]{2}':attrs.alarmlevel;
var alarmcount = attrs.count == undefined?'100':attrs.count;
var alarmdivid = attrs.divid == undefined?'alarm-'+new Date().getTime():'alarm-'+attrs.divid;
document.write("<div class=\"alarm\" id="+alarmdivid+"></div>");
          $provid=alarmareaid.substr(3,2);
          $provnamearr=['北京','上海','天津','重庆','黑龙江','吉林','辽宁','内蒙古','河北','山西','陕西','山东','新疆','西藏','青海','甘肃','宁夏','河南','江苏','湖北','浙江','安徽','福建','江西','湖南','贵州','四川','广东','云南','广西','海南','香港','澳门','台湾'];
	 $provname=$provnamearr[parseInt($provid,10)-1];
	$yjlb=['台风','暴雨','暴雪','寒潮','大风','沙尘暴','高温','干旱','雷电','冰雹','霜冻','大雾','霾','道路结冰'];
	$gdlb=['寒冷','灰霾','雷雨大风','森林火险','降温','道路冰雪'];
	$yjyc=['蓝色','黄色','橙色','红色'];
	$gdyc=['白色'];
    $URL='http://product.weather.com.cn/alarm/grepalarm.php?areaid='+alarmareaid+'[0-9]{0,4}&type='+alarmtype+'&level='+alarmlevel+'&count='+alarmcount;	

$.ajax({
	type: "GET",
	url: $URL,
	dataType: "script",
	cache:false,
	async:false,
	success:function(){
		$appparent=$('#'+alarmdivid);
		$html = '';

		$('<h1><span>'+$provname+'预警中'+alarminfo.count+'个</span></h1>').appendTo($appparent);
		if(alarminfo.count==0){
			$('<div style="text-align:center; font-size:20px; margin-top:60px;">无预警信息</div>').appendTo($appparent);	
			$('#d_table').html('<center style="margin-top:200px"><h3>无预警信息</h3></center>'); 
		}else{
			$html +='<table cellspacing="2" cellpadding="0" bgcolor="#ffffff" width="100%"><tbody><tr><td valign="top" height="25" width="9%"><table height="30" cellspacing="0" cellpadding="0" bgcolor="#c2d0e7" width="100%"><tbody><tr><td valign="middle" align="center" class="alarm-cn">图例</td></tr></tbody></table></td><td valign="top" width="37%"><table height="30" cellspacing="0" cellpadding="0" bgcolor="#c2d0e7" width="100%"><tbody><tr><td valign="middle" align="center" class="alarm-cn">标准</td></tr></tbody></table></td><td valign="top" width="54%"><table height="30" cellspacing="0" cellpadding="0" bgcolor="#c2d0e7" width="100%"><tbody><tr><td valign="middle" align="center" class="alarm-cn">防御指南</td></tr></tbody></table></td></tr>';			
		}
		
		$.each(alarminfo.data,function(i,k){
			$filename=k[1];
			$pos=$filename.lastIndexOf('-');	
			$lb=$filename.substr($pos+1,2);
			$jb=$filename.substr($pos+3,2);
			
			$img = $typeid = $lb+$jb;
			
			$textlb=$yjlb[parseInt($lb,10) -1 ];
			$textyc=$yjyc[parseInt($jb,10) -1 ];
			if ($lb >90 || $jb > 90)$img ='0000';
			if ($lb >90) $textlb=$gdlb[parseInt($lb,10) - 91 ];
			if ($jb  >90) $textyc=$gdyc[parseInt($jb,10) - 91 ];
			
			$('<dl><dt><a target="_blank" href="http://www.weather.com.cn/alarm/newalarmcontent.shtml?file='+$filename+'"><img src="http://www.weather.com.cn/m2/i/alarm_s/'+$img+'.gif"></a></dt><dd><h2><a target="_blank" href="http://www.weather.com.cn/alarm/newalarmcontent.shtml?file='+$filename+'">'+k[0]+'气象台发布'+$textlb+$textyc+'预警</a></h2>状态：<b>预警中</b><a target="_blank" class="detail" href="http://www.weather.com.cn/alarm/newalarmcontent.shtml?file='+$filename+'">详情</a></dd></dl>').appendTo($appparent);
			
			if ($typeid != '0000')
		    {
				$.ajax({
					type: "GET",
					url:'http://www.weather.com.cn/data/alarminfo/'+$img+'.html',
					dataType: "script",
					cache:false,
					async:false,
					success:function(){
					  if (typeof (alarmfyzn) != 'undefined') {		
					  				
								$html +='<tr><td valign="top" height="73" bgcolor="#dfe8f9"><table height="96" cellspacing="6" cellpadding="0" bgcolor="#dfe8f9" width="100%"><tbody><tr><td valign="top" align="center"><img height="43" width="50" id="alarmimg" src="http://www.weather.com.cn/m2/i/about/alarmpic/'+$img+'.gif"/></td></tr></tbody></table></td>';
								$html +='<td valign="top" bgcolor="#dfe8f9"><table height="96" cellspacing="6" cellpadding="0" bgcolor="#dfe8f9" width="100%"><tbody><tr><td valign="top" class="alarm-cn" id="alarmbz">'+alarmfyzn[2]+'</td></tr></tbody></table></td>';
								$html +='<td valign="top" bgcolor="#dfe8f9"><table height="96" cellspacing="6" cellpadding="0" bgcolor="#dfe8f9" width="100%"><tbody><tr><td valign="top" id="alarmzn" class="alarm-cn">'+alarmfyzn[3]+'</td></tr></tbody></table></td></tr>';
					   }  
					   $('#d_table').append($html); 
					}					
			    });   
		   }			
		});
		
		$($appparent).append('<div class="signal_way"><a href="/alarminfo">预警信号及防御指南>></a></div>');
		//$('#d_table').html($html);
		
	}
});
