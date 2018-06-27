<?php
require_once 'includes/master.php';
require_once 'includes/settings.php';
require_once '../auth/loginCheck.php';
require_once '../includes/header.php';
require_once 'request.php';
?>
<a id="top"></a>


<div class="sc-content-container padding-sides-large padding-top-medium" id="dlr-form-content">
	<div class="sc-grid-row" id="title-container">
		<div class="sc-grid-col-12 cl-list-header margin-top-small margin-bottom-medium sc-text-center">
			<h1 class="sc-font">
				<span>Änderung der Kontaktdaten</span>
			</h1>
            <p class="sc-font-l">
                <span>Bitte wählen Sie aus, welche Kontaktdaten Sie ändern bzw. ergänzen möchten:</span>
            </p>
		</div>
	</div>
	<div class="sc-grid-row padding-bottom-small padding-sides-medium" id="form-content">
		<div class="dlr-form-wrap">
            <?php require_once 'parts/spinner.php' ?>
		</div>
	</div>
	<div class="sc-grid-row" id="message-section1">
		<div class="sc-grid-col-12 padding-medium padding-medium">
			<p class="sc-font-xxl" id="message-title1"></p>
			<p class="sc-font-l" id="message-desc1"></p>
		</div>
	</div>
</div>

<?php
require_once '../includes/footer.php';
?>
