
  <?php $this->load->view('_header');?>  
	<div class="title"><?php echo $trend[0]->title; ?></div>
	<div class="news-details">
		<div class="news-details-title"><?php echo $trend[0]->title; ?></div>
    <div class="news-author"><span>发布时间：<?php echo $trend[0]->excute_time; ?></span></div>
		<div class="news-wrap">
    <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" >
      <param name="movie" value="<?php echo "http://www.gzqx.gov.cn".$trend[0]->body; ?>" />
      <param name="quality" value="high" />
      <param name="wmode" value="transparent" />
      <param name="swfversion" value="11.0.0.0" />
      <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
      <param name="expressinstall" value="http://www.gzqx.gov.cn/templets/gzqx/Scripts/expressInstall.swf" />
      <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 --> 
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="<?php echo "http://www.gzqx.gov.cn".$trend[0]->body; ?>" width="100%" height="800">
        <!--<![endif]-->
        <param name="quality" value="high" /> 
        <param name="wmode" value="transparent" />
        <param name="swfversion" value="11.0.0.0" />
        <param name="expressinstall" value="http://www.gzqx.gov.cn/templets/gzqx/Scripts/expressInstall.swf" />
        <!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
        <div>
          <h4>此页面上的内容需要较新版本的 Adobe Flash Player。</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取 Adobe Flash Player" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object>
      <p class="forecat-author">贵州省气象台</p>
		</div>
	</div><!-- details -->

  <?php $this->load->view('_footer');?>  
