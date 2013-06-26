
  <?php $this->load->view('_header');?>  
  <div class="content">
    <table class="table-list">
      <tbody>
<?php foreach($query as $value){
?>
        <tr>
          <td class="s-pic"><a href="/news/details/<?php echo $value->id;?>"><img class="a-pic" src="<?php echo $value->litpic;  ?>" alt="图片" /></a></td>
          <td class="s-info">
            <div class="news-title">
                <a href="/news/details/<?php echo $value->id;?>"><?php echo $value->title; ?></a>
            </div>
            <div class="news-date"><span class="time"><?php echo date('Y-m-d',$value->pubdate);?></span></div>
          </td>
        </tr>
<?php
}
?>
      </tbody>
    </table>
  </div><!-- list -->

  <?php $this->load->view('_footer');?>  
