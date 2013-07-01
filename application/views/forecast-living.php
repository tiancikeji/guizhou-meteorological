
  <?php $this->load->view('_header');?>  
  <div class="title">贵阳 生活指数</div>
  <div class="living content">
    <table class="table-list">
      <tbody>
  <?php foreach($living as $value){?>
        <tr>
          <td class="s-pic3"><img class="a-pic3" src="/resources/images/living.png" alt="紫外线" /></td>
          <td class="s-info3">
              <?php echo $value->live_name; ?>强度：<strong class="green"><?php echo $value->index_description; ?></strong><br />建议：<?php echo $value->description; ?>
          </td>
        </tr>
  <?php } ?>
      </tbody>
    </table>
  </div><!-- content -->

  <?php $this->load->view('_footer');?>  
