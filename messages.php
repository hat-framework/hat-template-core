<?php
    $popup   = (isset($popup))  ?$popup  :"";
    $info    = (isset($info))   ?$info   :"";
    $alert   = (isset($alert))  ?$alert  :"";
    $success = (isset($success))?$success:"";
    $erro    = (isset($erro))   ?$erro   :"";
    function createMessageDiv($success, $class){
        if(is_array($success)){
            foreach($success as $s){
                if($s == ""){continue;}
                ?> 
                    <div class="alert alert-<?php echo $class; ?> fade in" role="alert">
                        <div class="content-msg"><?php echo $s; ?></div>
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                <?php 
            }
        }else{
            ?> 
                <div class="alert alert-<?php echo $class; ?> fade in <?php if($success === ""){echo "hidden";}?>" role="alert">
                    <div class="content-msg"><?php echo $success; ?></div>
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                </div>
            <?php 
        }
    }
?><div id='_messages_container'>
    <?php 
        createMessageDiv($success, 'success');
        createMessageDiv($info, 'info');
        createMessageDiv($alert, 'warning');
        createMessageDiv($erro, 'danger');
    ?>
</div><?php 
$this->Html->LoadJs('lib/notificacao/messages');
//$this->Html->LoadJqueryFunction('message_success("Uma falha aconteceu!");');