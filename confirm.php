<?php
$_GET[ 'param' ] = 'confirm';
require_once 'includes/master.php';
require_once 'includes/settings.php';
require_once '../includes/header.php';
require_once 'request.php';

?>


 <a id="top"></a>

 <div class="sc-content-container padding-sides-large padding-top-medium" id="dlr-form-content">
	<div class="sc-grid-row" id="title-container">

   <div class="sc-grid-col-12 padding-top-small padding-bottom-small padding-sides-small">
      <div class="padding-top-small padding-bottom-small padding-sides-small doi-notification" id="act-success">
        <p class="sc-font-bold">Die Änderungen Ihrer Kontaktdaten sind nun gespeichert.</p>
        <p>Wir helfen Ihnen gerne weiter. Sollten Sie noch Fragen haben, schicken Sie uns eine <a href="mailto:werkstattweb@autoscout24.de">E-Mail</a>.</p>
      </div>
      <div class="padding-top-small padding-bottom-small padding-sides-small doi-notification sc-hidden" id="act-error">
              <p class="sc-font-bold">Fehler aufgetreten. Wir konnten die Änderungen Ihrer Kontakdaten nicht speichern.</p>
        <p>Wir helfen Ihnen gerne weiter. Sollten Sie noch Fragen haben, schicken Sie uns eine <a href="mailto:werkstattweb@autoscout24.de">E-Mail</a>.</p>
      </div>
      <div class="sc-grid-col-12 padding-sides-small padding-top-medium padding-bottom-medium">
            <a href="https://myarea.autoscout24.de/dip/dealerinfomanager">Zurück zum Händlerprofil</a>
      </div>

    </div>
   </div>
 </div>

 <?php
 require_once '../includes/footer.php';
 ?>
