<div id="rodape-faixa" class="faixa" style="padding-top: 10px;">
    <span style="padding-left: 10px"><?php echo SITE_SLOGAN; ?></span>
</div>
<div id="rodape-info">
    <?php if(SITE_EMAIL    != ""){?><span class="rodape-destaque">Email: </span><?php echo SITE_EMAIL; ?><?php }?>
    <?php if(SITE_TELEFONE != ""){?><span class="rodape-destaque">Telefone: </span><?php echo SITE_TELEFONE; ?><?php }?>
    <?php if(SITE_ENDERECO != ""){?><span class="rodape-destaque">Unidade Física: </span><?php echo SITE_ENDERECO; ?><?php }?>
</div>
<?php require_once './analytics.php';?>