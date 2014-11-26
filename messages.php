<?php
    $popup   = (isset($popup))  ?$popup  :"";
    $info    = (isset($info))   ?$info   :"";
    $alert   = (isset($alert))  ?$alert  :"";
    $success = (isset($success))?$success:"";
    $erro    = (isset($erro))   ?$erro   :"";
?><div id='_messages_container'>
    <div class="alert alert-success fade in <?php if($success === ""){echo "hidden";}?>" role="alert"><div class="content-msg"><?php echo $success; ?></div><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>
    <div class="alert alert-info fade in    <?php if($info === "")   {echo "hidden";}?>" role="alert"><div class="content-msg"><?php echo $info;    ?></div><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>
    <div class="alert alert-warning fade in <?php if($alert === "")  {echo "hidden";}?>" role="alert"><div class="content-msg"><?php echo $alert;   ?></div><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>
    <div class="alert alert-danger  fade in <?php if($erro === "")   {echo "hidden";}?>" role="alert"><div class="content-msg"><?php echo $erro;    ?></div><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>
</div><?php 
$this->Html->LoadJs('lib/notificacao/messages');
//$this->Html->LoadJqueryFunction('message_success("Uma falha aconteceu!");');