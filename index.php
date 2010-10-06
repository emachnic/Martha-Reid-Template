<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
  <head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/style.css" type="text/css" />
  </head>
  <body>
    <header>
      <div id="insignia_div">
        <p>
          <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/udc_insignia.png" alt="UDC Insignia" />
        </p>
      </div>
      <div id="logo_div">
        <p>
          <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/top_martha_script.png" alt="Martha Reid" id="script" />
        </p>
        <p>
          <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/vignette_flag.png" alt="Martha Reid Vignette" id="vignette" />
        </p>
        <p id="header_udc">
          United Daughters of the Confederacy
        </p>
        <p id="header_state">
          Jacksonville, FL
        </p>
      </div>
      <div id="cotton_div">
        <p>
          <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/cotton_web.jpg" alt="Cotton Boll" />
        </p>
      </div>
      <div class="clear"></div>
    </header>
    <div id="content">
      <div id="sidebar">
        <jdoc:include type="modules" name="left" />
      </div>
      <div id="main_content">
        <jdoc:include type="component" />
      </div>
      <div class="clear"></div>
    </div>
    <footer>
      <div id="copy">
        Copyright &copy; <?php echo date("Y"); ?> Martha Reid Chapter 19 UDC
      </div>
    </footer>
  </body>
</html>
