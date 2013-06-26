
  <?php $this->load->view('_header');?>  
	<div class="content">
		<table class="table-list">
			<tbody>
      <?php var_dump($query); ?>
				<tr>
					<td class="s-pic"><a href="/news/details"><img class="a-pic" src="resources/images/news.jpg" alt="图片" /></a></td>
					<td class="s-info">
						<div class="news-title"><a href="/news/details">毕节市委书记张吉勇在气象平台值班速记</a></div>
						<div class="news-date"><span class="time">2013-06-23 22:53:05</span></div>
					</td>
				</tr>
			</tbody>
		</table>
	</div><!-- list -->

  <?php $this->load->view('_footer');?>  
