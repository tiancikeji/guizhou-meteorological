
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
									温度：25℃<br />
									雨量：19.1mm<br />
									风向：西南风<br />
									风速：3m/s<br />
									气压：XXmpa<br />
									湿度：XX%<br />
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
			<a href="#">贵阳市</a><a href="#">遵义市</a><a href="#">安顺市</a><a href="#">六盘水市</a><a href="#">毕节市</a><a href="#">铜仁市</a><a href="#">凯里市</a><a href="#">都匀市</a><a href="#">兴义市</a>                        
		</div>
	</div>

  <?php $this->load->view('_footer');?>  
