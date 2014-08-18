<?php
    $popup   = (isset($popup))  ?$popup  :"";
    $info    = (isset($info))   ?$info   :"";
    $alert   = (isset($alert))  ?$alert  :"";
    $success = (isset($success))?$success:"";
    $erro    = (isset($erro))   ?$erro   :"";
?><div id='messages'>
    <div id='erro'    class='container-msg erro'><a href="#" class="close">×</a><div class="content-msg"><?php echo $erro; ?></div></div>
    <div id='success' class='container-msg success'><a href="#" class="close">×</a><div class="content-msg"><?php echo $success; ?></div></div>
    <div id='alert'   class='container-msg alert'><a href="#" class="close">×</a><div class="content-msg"><?php echo $alert; ?></div></div>
    <div id='info'    class='container-msg info'><a href="#" class="close">×</a><div class="content-msg"><?php echo $info; ?></div></div>
    <div id='popup'   class='popup'><a href="#" class="close">×</a><div class="content-msg"><?php echo $popup; ?></div></div>
</div>
<?php 
//$this->Html->LoadJs('jqwatch');
$this->Html->LoadJs('lib/notificacao/messages');
//$this->Html->LoadJqueryFunction('message_erro("fooo");');

?>