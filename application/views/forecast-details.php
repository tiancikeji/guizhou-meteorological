
  <?php $this->load->view('_header');?>  
  <div class="title"><?php echo $trend[0]->title; ?></div>
  <div class="news-details">
    <div class="news-details-title"><?php echo $trend[0]->title; ?></div>
    <div class="news-author"><span>发布时间：<?php echo date('Y-m-d H:i:s', $trend[0]->excute_time); ?></span></div>
    <div class="news-wrap">
      <iframe src="<?php echo "http://www.gzqx.gov.cn".$trend[0]->body; ?>" frameborder="0" width="100%" height="852" scrolling="no"></iframe>
      <p class="forecat-author">贵州省气象台</p>
    </div>
  </div><!-- details -->

  <?php $this->load->view('_footer');?>  
