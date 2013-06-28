
  <?php $this->load->view('_header');?>  
	<div class="search">
		<form action="">
			<input name="keyword" type="text" id="keyword" class="s-hot" size="10" value="贵阳" />
			<input type="submit" value="搜索" />
		</form>
	</div><!-- search -->
<?php 
    foreach($three_days as $value){
    ?>
	<div class="title">贵阳市 未来三天天气预报</div>
	<div class="forecast-list">
		<table class="table-list2">
			<tbody>
				<tr>
					<td colspan="2">
						<div class="forecast-time"><?php echo date('Y-m-d',$value->fcdate); ?></div>
						<table class="table-list">
							<tr>
								<td class="s-pic2">
									<img class="a-pic2" src="resources/images/forecast.png" alt="晴" />
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
									<img class="a-pic2" src="resources/images/forecast.png" alt="晴" />
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
									<img class="a-pic2" src="resources/images/forecast.png" alt="晴" />
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
	<div class="title">贵阳 逐6小时精细化预报</div>
	<div class="forecast-list">
		<table class="table-list2">
			<tbody>
				<tr>
					<td colspan="2">
						<div class="forecast-time">03日08:00~03日14:00</div>
						<table class="table-list">
							<tr>
								<td class="s-pic2">
									<img class="a-pic2" src="resources/images/forecast.png" alt="晴" />
								</td>
								<td class="s-info2">
									晴<br />
									28℃ ~ 16℃<br />
									北风转东北风小于3级
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr class="odd">
					<td colspan="2">
						<div class="forecast-time">03日14:00~03日20:00</div>
						<table class="table-list">
							<tr>
								<td class="s-pic2">
									<img class="a-pic2" src="resources/images/forecast.png" alt="晴" />
								</td>
								<td class="s-info2">
									晴<br />
									28℃ ~ 16℃<br />
									北风转东北风小于3级
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="forecast-time">03日20:00~04日02:00</div>
						<table class="table-list">
							<tr>
								<td class="s-pic2">
									<img class="a-pic2" src="resources/images/forecast.png" alt="晴" />
								</td>
								<td class="s-info2">
									晴<br />
									28℃ ~ 16℃<br />
									北风转东北风小于3级
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr class="odd">
					<td colspan="2">
						<div class="forecast-time">04日02:00~04日08:00</div>
						<table class="table-list">
							<tr>
								<td class="s-pic2">
									<img class="a-pic2" src="resources/images/forecast.png" alt="晴" />
								</td>
								<td class="s-info2">
									晴<br />
									28℃ ~ 16℃<br />
									北风转东北风小于3级
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</div><!-- list -->

	<div class="title">天气趋势</div>
	<div class="alist">
		<a href="/forecast/details">1.全省24小时趋势预报</a><br />
		<a href="/forecast/details">2.全省一周天气趋势预报</a><br />
		<a href="/forecast/details">3.上下班预报</a><br />
		<a href="/forecast/living">4.生活指数预报</a>
	</div><!-- list -->

	<div class="mod">
		<div class="title2">其他城市</div>
		<div class="cont link-city">
			<a href="#">贵阳市</a><a href="#">遵义市</a><a href="#">安顺市</a><a href="#">六盘水市</a><a href="#">毕节市</a><a href="#">铜仁市</a><a href="#">凯里市</a><a href="#">都匀市</a><a href="#">兴义市</a>                        
		</div>
	</div>

  <?php $this->load->view('_footer');?>  
