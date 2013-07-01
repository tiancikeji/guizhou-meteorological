
  <?php $this->load->view('_header');?>  
	<div class="search">
		<form action="">
			<input name="keyword" type="text" id="keyword" class="s-hot" size="10" value="贵阳" />
			<input type="submit" value="搜索" />
		</form>
	</div><!-- search -->

	<div class="title">贵阳 08时天气监测实况</div>
	<div class="forecast-details">
		<table class="table-list2">
			<tbody>
				<tr>
					<td colspan="2">
						<div class="forecast-time">2013-06-03 08:00发布</div>
						<table class="table-list">
							<tr>
								<td class="s-pic2">
									<img class="a-pic2" src="resources/images/forecast.png" alt="晴" />
								</td>
								<td class="s-info2">
                  温度：<?php echo $weather[0]->temp; ?>℃<br />
									雨量：<?php echo $weather[0]->rain; ?>mm<br />
									风向：<?php echo $weather[0]->windd; ?><br />
									风速：<?php echo $weather[0]->temp; ?>m/s<br />
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
      <a href="http://localhost/weather?citycode=57816">贵阳市</a>
      <a href="http://localhost/weather?citycode=57713">遵义市</a>
      <a href="http://localhost/weather?citycode=57806">安顺市</a>
      <a href="http://localhost/weather?citycode=56693">六盘水市</a>
      <a href="http://localhost/weather?citycode=57707">毕节市</a>
      <a href="http://localhost/weather?citycode=57741">铜仁市</a>
      <a href="http://localhost/weather?citycode=57825">凯里市</a>
      <a href="http://localhost/weather?citycode=57827">都匀市</a>
      <a href="http://localhost/weather?citycode=57907">兴义市</a>
		</div>
	</div>

  <?php $this->load->view('_footer');?>  
