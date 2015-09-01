<head>
    <meta http-equiv="Content-Type"     content="text/html; charset=<?php $this->LoadTags('charset');?>" />
    <meta name="author"                 content="<?php  $this->LoadTags('autor');?>" />
    <meta name="copyright"              content="@<?php $this->LoadTags('autor');?>" />
    <meta http-equiv="content-language" content="<?php  $this->LoadTags('language');?>" />
    <meta name="description"            content="<?php  $this->LoadTags('description');?>" />
    <meta name="keywords"               content="<?php  $this->LoadTags('keywords');?>" />
    <meta name="robots"                 content="<?php  $this->LoadTags('robots');?>" />
    <meta property='og:title'           content="<?php  $this->LoadTags('page_title');?>" />
    <meta property='og:description'     content="<?php  $this->LoadTags('description');?>" />
    <meta property='og:image'           content="<?php  $this->LoadTags('image');?>" />
    <?php echo $head;?>
    <link rel="shortcut icon" href="<?php $this->LoadTags('favicon');?>" type="image/x-icon" />
    <!-- Meta Tags Fim --> 

    <title><?php $this->LoadTags("page_title"); ?></title>
    <?php 
        $this->Html->Start(); 
        $this->Html->LoadCss(array('bootstrap', 'style', 'components/menus', 'jquery.autocomplete'), "", false);
    ?>
    
</head>
