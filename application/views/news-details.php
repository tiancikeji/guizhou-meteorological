
  <?php $this->load->view('_header');?>  
	<div class="news-details">
		<div class="news-details-title"><?php echo ($query[0]->title);?></div>
		<div class="news-author"><span>时间：<?php echo ($query[0]->title);?></span></div>
		<div class="news-wrap">
			<div class="news-pic"><img src="http://www.gzqx.gov.cn/<?php echo ($query[0]->litpic);?>" alt="新闻图片" /></div>
			<p><?php echo ($query[0]->body);?></p>
		</div>
	</div><!-- details -->

  <?php $this->load->view('_footer');?>  
