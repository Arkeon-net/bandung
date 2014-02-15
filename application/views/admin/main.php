<?php $this->load->view('admin/header'); ?>
<div id="content">
    <div class="inner">
        <div class="topcolumn">
            <div class="logo"></div>
            <ul  id="shortcut">
                <li> <a href="<?php echo base_url('admin/dashboard'); ?>" title="Back To home"> <img src="<?php echo base_url('static/admin'); ?>/images/icon/shortcut/home.png" alt="home"/><strong>Home</strong> </a> </li>
                <li> <a href="#" title="Website Graph"> <img src="<?php echo base_url('static/admin'); ?>/images/icon/shortcut/graph.png" alt="graph"/><strong>Graph</strong> </a> </li>
                <li> <a href="#" title="Setting" > <img src="<?php echo base_url('static/admin'); ?>/images/icon/shortcut/setting.png" alt="setting" /><strong>Setting</strong></a> </li> 
                <li> <a href="#" title="Messages"> <img src="<?php echo base_url('static/admin'); ?>/images/icon/shortcut/mail.png" alt="messages" /><strong>Message</strong></a><div class="notification" >10</div></li>
            </ul>
        </div>
        <div class="clear"></div>
        <?php $this->load->view('admin/'.$content); ?>
    <?php $this->load->view('admin/footer'); ?>
