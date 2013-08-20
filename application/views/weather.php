
  <?php $this->load->view('_header');?>  
	<div class="search">
		<form action="/weather" method="get">
			<input name="keyword" type="text" id="keyword" class="s-hot" size="10" value="<?php print_r($cityname[0]->stationname); ?>" />
			<input name="citycode" type="hidden" value="<?php echo ($citycode); ?>" />
			<input type="submit" value="搜索" />
		</form>
	</div><!-- search -->

	<div class="title"><?php print_r($cityname[0]->stationname); ?> 08时天气监测实况</div>
	<div class="forecast-details">
		<table class="table-list2">
			<tbody>
				<tr>
					<td colspan="2">
						<div class="forecast-time"><?php print_r($weather[0]->observtimes); ?>发布</div>
						<table class="table-list" >
							<tr>
								<td class="s-pic2">
									<img class="a-pic2" src="/resources/images/forecast.png"/>
								</td>
								<td class="s-info2" style="width:140px;">
                  温度：<?php echo $weather[0]->temp; ?>℃<br />
									雨量：<?php echo $weather[0]->rain; ?>mm<br />
									风向：<?php echo $windDirect; ?><br />
                </td>
                <td class="s-info2">
									风速：<?php echo $weather[0]->windv; ?>m/s<br />
									气压：<?php echo $weather[0]->press; ?>mpa<br />
									湿度：<?php echo $weather[0]->humidity; ?>%<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</div><!-- details -->

	<div class="mod">
		<div class="title2">其他城市</div>
		<div class="cont link-city">
     <?php for($i=1; $i < sizeof($stations) ;$i++){ ?>
      <a href="/weather?citycode=<?php echo $stations[$i]->stationcode;?>">
        <?php echo $stations[$i]->stationname;?></a>
        <?php if(isset($stations[$i+1]) and $stations[$i+1]->areacode != $stations[$i]->areacode ){
        ?><br/>
        <?php } ?>
     <?php }?>
		</div>
	</div>

  <?php $this->load->view('_footer');?>  
