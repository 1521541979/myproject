<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--

<div class="col-left col-1 left-memu">
        	<h5 class="title"><img src="<?php echo IMG_PATH;?>icon/m_1.png" width="15" height="15" /> <?php echo L('manage_center');?></h5>
            <ul>
             连接到报名页面 
       	    <li <?php if(ROUTE_A=="publish") { ?> class="on"<?php } ?>><a href=""><img src="<?php echo IMG_PATH;?>icon/m_2.png" width="14" height="15" /> <?php echo L('online_publish');?></a></li>
       	      
       	    <li <?php if(ROUTE_A=="publish") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=content&a=publish"><img src="<?php echo IMG_PATH;?>icon/m_2.png" width="14" height="15" /> <?php echo L('online_publish');?></a></li>
            
            <li <?php if(ROUTE_A=="published") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=content&a=published"><img src="<?php echo IMG_PATH;?>icon/m_3.png" width="14" height="16" /> <?php echo L('published_content');?></a></li>
            </ul>
            
            -->
            
            
            <!-- 财务管理
            <?php if(module_exists('pay')) { ?>
<h6 class="title"><?php echo L('financial_management');?></h6>
            <ul>
            	<li<?php if(ROUTE_A=="pay" && ROUTE_C=="deposit") { ?> class="on"<?php } ?>><a href="index.php?m=pay&c=deposit&a=pay"><img src="<?php echo IMG_PATH;?>icon/m_4.png" width="15" height="16" /> <?php echo L('online_charge');?></a></li>
                <li<?php if(ROUTE_A!="pay" && ROUTE_C=="deposit") { ?> class="on"<?php } ?>><a href="index.php?m=pay&c=deposit&a=init"><img src="<?php echo IMG_PATH;?>icon/m_8.png" width="16" height="16" /> <?php echo L('pay_log');?></a></li>
                <li<?php if(ROUTE_A!="pay" && ROUTE_C=="spend_list") { ?> class="on"<?php } ?>><a href="index.php?m=pay&c=spend_list&a=init"><img src="<?php echo IMG_PATH;?>icon/table-information.png" width="16" height="16" /> <?php echo L('cost_log');?></a></li>
				<li<?php if(ROUTE_A=="change_credit") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=change_credit"><img src="<?php echo IMG_PATH;?>icon/coins_add.png" width="16" height="16" /> <?php echo L('credit_change');?></a></li>
      </ul>
       -->
       <!-- 短消息
      <?php } ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"message\" data=\"op=message&tag_md5=6148979e8152595f69c4eb2d2a5ebab7&action=check_new\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">缂栬緫</a>";}$message_tag = pc_base::load_app_class("message_tag", "message");if (method_exists($message_tag, 'check_new')) {$data = $message_tag->check_new(array('limit'=>'20',));}?>
<?php $new_arr = $data;?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      <h6 class="title"><?php echo L('message');?></h6>
          <ul>
           	  <li<?php if(ROUTE_A=="send") { ?> class="on"<?php } ?>><a href="index.php?m=message&c=index&a=send"><img src="<?php echo IMG_PATH;?>icon/m_9.png" width="16" height="14" /> <?php echo L('send_message');?></a></li>
           	  <li<?php if(ROUTE_A=="inbox") { ?> class="on"<?php } ?>><a href="index.php?m=message&c=index&a=inbox"><img src="<?php echo IMG_PATH;?>icon/m_11.png" width="16" height="16" /> <?php echo L('input_box');?><?php if($new_arr['new_count'] >0) { ?><font color=red>(<?php echo $new_arr['new_count'];?>)</font><?php } ?></a></li>
              <li<?php if(ROUTE_A=="outbox") { ?> class="on"<?php } ?>><a href="index.php?m=message&c=index&a=outbox"><img src="<?php echo IMG_PATH;?>icon/m_10.png" width="16" height="16" /> <?php echo L('output_box');?></a></li>
			   <li<?php if(ROUTE_A=="group") { ?> class="on"<?php } ?>><a href="index.php?m=message&c=index&a=group"><img src="<?php echo IMG_PATH;?>icon/lightbulb.png" width="16" height="16" /> <?php echo L('system_message');?><?php if($new_arr['new_group_count'] >0) { ?><font color=red>(<?php echo $new_arr['new_group_count'];?>)</font><?php } ?></a></li>
          </ul>
           -->
           <!--
      <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
</div>
-->
<!-- 另外加的 -->


	<div class="col-left col-1 left-memu" ">
        	<h5 class="title"><?php echo L('account_manage');?></h5>
            <ul>
            <li <?php if(ROUTE_A=="publish") { ?> class="on"<?php } ?>><a href=""><img src="<?php echo IMG_PATH;?>icon/m_2.png" width="14" height="15" /> <?php echo L('online_publish');?></a></li>
       	    
                <li<?php if(ROUTE_A=="account_manage_info") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=account_manage_info&t=1"><img src="<?php echo IMG_PATH;?>icon/user_edit.png" width="16" /> <?php echo L('modify').L('memberinfo');?></a></li>
                <li<?php if(ROUTE_A=="account_manage_avatar") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=account_manage_avatar&t=1"><img src="<?php echo IMG_PATH;?>icon/vcard.png" width="16" /> <?php echo L('modify').L('avatar');?></a></li>
				<?php if(!empty($memberinfo['encrypt'])) { ?>
				<li<?php if(ROUTE_A=="account_manage_password") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=account_manage_password&t=1"><img src="<?php echo IMG_PATH;?>icon/icon_key.gif" width="16" height="16" /> <?php echo L('modify').L('email');?>/<?php echo L('password');?></a></li>
				<?php } ?>
				<!-- 
				<li<?php if(ROUTE_A=="account_manage_upgrade") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=account_manage_upgrade&t=1"><img src="<?php echo IMG_PATH;?>icon/Upload.png" />&nbsp;&nbsp;<?php echo L('member').L('allowupgrade');?></a></li>
				<li<?php if(ROUTE_A=="account_change_mobile") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=account_change_mobile&t=1"><img src="<?php echo IMG_PATH;?>icon/mobile_phone.png" /> <?php echo L('change_mobile');?></a></li>
            -->
           </ul>
        <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
    </div>