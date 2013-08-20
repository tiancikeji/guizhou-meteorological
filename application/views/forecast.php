
  <?php $this->load->view('_header');?>  
	<div class="search">
		<form action="/forecast" method="get">
			<input name="city" type="text" id="keyword" class="s-hot" size="10" value="<?php echo $city; ?>" />
			<input type="submit" value="搜索" />
		</form>
	</div><!-- search -->
<?php 
    foreach($three_days as $value){
    ?>
	<div class="title"><?php echo $city; ?> 未来三天天气预报</div>
	<div class="forecast-list">
		<table class="table-list2">
			<tbody>
				<tr>
					<td colspan="2">
						<div class="forecast-time"><?php echo date('Y-m-d',$value->fcdate); ?></div>
						<table class="table-list">
							<tr>
								<td class="s-pic2">
									<img class="a-pic2" src="/resources/images/<?php echo $value->weather1; ?>.png" />
								</td>
								<td class="s-info2">
									<?php echo $value->weather1; ?><br />
									<?php echo $value->temp1; ?><br />
									<?php echo $value->wind1; ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr class="odd">
					<td colspan="2">
						<div class="forecast-time"><?php echo date('Y-m-d',$value->fcdate+86400); ?></div>
						<table class="table-list">
							<tr>
								<td class="s-pic2">
									<img class="a-pic2" src="resources/images/<?php echo $value->weather2; ?>.png" />
								</td>
								<td class="s-info2">
									<?php echo $value->weather2; ?><br />
									<?php echo $value->temp2 ?><br />
									<?php echo $value->wind2; ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="forecast-time"><?php echo date('Y-m-d',$value->fcdate+172800); ?></div>
						<table class="table-list">
							<tr>
								<td class="s-pic2">
									<img class="a-pic2" src="resources/images/<?php echo $value->weather3; ?>.png" />
								</td>
								<td class="s-info2">
									<?php echo $value->weather3; ?><br />
									<?php echo $value->temp3 ?><br />
									<?php echo $value->wind3; ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</div><!-- list -->

      <?php } ?>
  <?php if ($city==="贵阳"){ ?>
	<div class="title"><?php echo $city; ?> 逐6小时精细化预报</div>
	<div class="forecast-list">
		<table class="table-list2">
			<tbody>
     <?php foreach($six_hours as $value){ ?>
				<tr>
					<td colspan="2">
						<div class="forecast-time">
						<?php 							
							$year=substr($value->time,0,4);
							$month=substr($value->time,4,2);
							$day=substr($value->time,6,2);
							$hour=substr($value->time,8,2);
							$time=mktime(8+substr($value->time,8,2),0,0,substr($value->time,4,2),substr($value->time,6,2),substr($value->time,0,4));
    						if($hour<"12" && $hour>="0"){
								$starttime = mktime((2+$value->period),0,0,$month,$day,$year);
								$endtime = $starttime + 6*3600;
								echo date("d",$starttime)."日".date("H:",$starttime)."00 ~ " . date("d",$endtime)."日".date("H:",$endtime)."00";
							}else{
    							$starttime = mktime((14+$value->period),0,0,$month,$day,$year);
								$endtime = $starttime + 6*3600;
								echo date("d",$starttime)."日".date("H:",$starttime)."00 ~ " . date("d",$endtime)."日".date("H:",$endtime)."00";
							}
						 ?>
                        </div>
						<table class="table-list">
							<tr>
								<td class="s-pic2">
									<img class="a-pic2" src="resources/images/<?php echo  $value->phenomena; ?>.png" />
								</td>
								<td class="s-info2">
								  <?php echo  $value->phenomena; ?><br />
									<?php echo $value->value_623; ?>℃-<?php echo $value->value_622; ?>℃<br />
									<?php echo $value->wind_direction.$value->wind_power; ?>级
								</td>
							</tr>
						</table>
					</td>
				</tr>
      <?php } ?>
			</tbody>
		</table>
	</div><!-- list -->
<?php } ?>

	<div class="title">天气趋势</div>
	<div class="alist">
		<a href="/forecast/details?title=全省24小时趋势预报">1.全省24小时趋势预报</a><br />
		<a href="/forecast/details?title=一周天气趋势">2.全省一周天气趋势预报</a><br />
		<a href="/forecast/details?title=上下班及晚间预报">3.上下班预报</a><br />
		<a href="/forecast/living">4.生活指数预报</a>
	</div><!-- list -->

	<div class="mod">
		<div class="title2">其他城市</div>
		<div class="cont link-city">
   <?php for($i=1; $i < sizeof($stations) ;$i++){ ?>
     <a href="/forecast?city=<?php echo $stations[$i]->stationname;?>"><?php echo $stations[$i]->stationname;?></a>
        <?php if(isset($stations[$i+1]) and $stations[$i+1]->areacode != $stations[$i]->areacode ){
        ?><br/>
        <?php } ?>
     <?php }?>

		</div>
	</div>
  <?php $this->load->view('_footer');?>  
