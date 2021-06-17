<?php
/*********************************************************************
    index.php

    Helpdesk landing page. Please customize it to fit your needs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
  require('client.inc.php');
  require_once INCLUDE_DIR . 'class.page.php';
?>


  <div class="header">
    <?php require_once(CLIENTINC_DIR.'header.inc.php'); ?>
  </div>

  <div class="landing">
    <?php
        if($cfg && ($page = $cfg->getLandingPage()))
            echo $page->getBodyWithImages();
        else
            echo  '<h1>'.__('Welcome Kronsmart Support Center').'</h1>';
        ?>
  </div>

  <div class="check-ticket">
    <?php
    $BUTTONS = isset($BUTTONS) ? $BUTTONS : true;
    ?>
    <a href="view.php" style="display:block" class="green button"><?php
        echo __('Check Ticket Status');?></a>
  </div>

  <div class="footer">
    <?php require(CLIENTINC_DIR.'footer.inc.php'); ?>
  </div>


</div>
