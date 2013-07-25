
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
	<div class="title"><?php echo $city; ?>市 未来三天天气预报</div>
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
						<div class="forecast-time"><?php echo date('Y-m-d',$value->fcdate); ?></div>
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
						<div class="forecast-time"><?php echo date('Y-m-d',$value->fcdate); ?></div>
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
	<div class="title"><?php echo $city; ?>市 逐6小时精细化预报</div>
	<div class="forecast-list">
		<table class="table-list2">
			<tbody>
     <?php foreach($six_hours as $value){ ?>
				<tr>
					<td colspan="2">
						<div class="forecast-time"><?php echo date('Y-m-d H:i:s', $value->publish_time); ?></div>
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
      
     <?php foreach($stations as $value){ ?>
     <a href="/forecast?city=<?php echo $value->stationname;?>"><?php echo $value->stationname;?></a>
     <?php }?>
		</div>
	</div>

  <?php $this->load->view('_footer');?>  
