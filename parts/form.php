<?php
 $sr = isset( $sr['eventMessage'] ) ? $sr['eventMessage'] : $sr;
 ?>

<form id="dealer-form" name="dealer-form" method="post" action="">

  <div id="main-address">
        <div class="sc-grid-col-12 collapse-section padding-bottom-xsmall padding-sides-small">
            <div class="sc-grid-col-10">Hauptadresse*</div>
            <div class="sc-grid-col-2"> <a class="change" id="box1" name="box1"> [ändern] </a></div>
        </div>
        <div class="chackbox1 sc-hidden" id="main-address-form">
            <div class="sc-grid-col-6 padding-bottom-small">
                    <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-6 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent">Firmenname</span>
                        <input type="text" id="hauptadresseFirmenname" name="hauptadresseFirmenname" class="sc-input"  value="<?php echo isset($evtData['hauptadresseFirmenname'])?$evtData['hauptadresseFirmenname']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-6 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent">Firmenzusatz</span>
                        <input type="text" id="hauptadresseFirmenzusatz" name="hauptadresseFirmenzusatz" class="sc-input"  value="<?php echo isset($evtData['hauptadresseFirmenzusatz'])?$evtData['hauptadresseFirmenzusatz']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-8 sc-grid-col-s-12 sc-grid-col-m-8 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent">Straße</span>
                        <input type="text" id="hauptadresseStraße" name="hauptadresseStraße" class="sc-input"  value="<?php echo isset($evtData['hauptadresseStraße'])?$evtData['hauptadresseStraße']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-4 sc-grid-col-s-12 sc-grid-col-m-4 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent">Hausnummer</span>
                      <input type="text" id="hauptadresseHausnummer" name="hauptadresseHausnummer" class="sc-input"  value="<?php echo isset($evtData['hauptadresseHausnummer'])?$evtData['hauptadresseHausnummer']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-4 sc-grid-col-s-12 sc-grid-col-m-4 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent">Postleitzahl</span>
                      <input type="text" id="hauptadressePostleitzahl" name="hauptadressePostleitzahl" class="sc-input" value="<?php echo isset($evtData['hauptadressePostleitzahl'])?$evtData['hauptadressePostleitzahl']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-8 sc-grid-col-s-12 sc-grid-col-m-8 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent">Ort</span>
                      <input type="text" id="hauptadresseOrt" name="hauptadresseOrt" class="sc-input"  value="<?php echo isset($evtData['hauptadresseOrt'])?$evtData['hauptadresseOrt']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-12 sc-font-s">
                          <p>*Ladungsfähige Anschrift der Firma</p>
            
                    </div>
              </div>
            <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 img">
                  <div class="delete">
                      <section class="margin-bottom-xsmall center-text padding-top-small padding-bottom-small sc-absolute-center" id="img-sec">

                          <a class="sc-font-l" id="user-image-upload">
                              <?php if($sr['UploadedImage'] || $sr['UploadedImage'] === $evtData['UploadedImage']) : ?>
                              <div class=" sc-absolute-center" id="user-image">
                                  <img src="<?php echo $sr['UploadedImage']; ?>" width="80" height="58" id="user-image-prev" name="user-image-prev">
                              </div>
                              <?php endif; ?>
                              <div class="padding-top-small sc-absolute-center">
                                 <p>*Bei der Änderung Ihrer Hauptadresse benötigen wir einen amtlichen Nachweis der neuen Adresse. Bitte laden Sie den neuen Handelsregisterauszug oder die Gewerbeummeldung hoch.
                              </div>
                          </a>

                          <input class="sc-hidden" name="image-upload" id="image-upload" accept="image/*" type="file">
                          <input type="hidden" name="uploaded-file" id="uploaded-file" value="">

                      </section>
                  </div>
              </div>
            </div>
      </div>

<div id="invoice-address">
        <div class="sc-grid-col-12 collapse-section padding-bottom-xsmall padding-sides-small">
          <div class="sc-grid-col-10">Rechnungsadresse*</div>
          <div class="sc-grid-col-2"><a class="change" id="box2" name="box2"> [ändern] </a></div>
        </div>
        <div class="chackbox2 sc-hidden">
                <div class="sc-grid-col-6 padding-bottom-small">
                    <div class="sc-grid-col-12 margin-bottom-small">
                      <input class="sc-input" type="radio" id="rechnungsadresseWie" name="rechnungsadresseWie" value="hook">
                      <label for="rechnungsadresseWie">Hauptadresse als Rechnungsadresse verwenden</label>
                    </div>
                    <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent">Firmenname</span>
                      <input type="text" id="rechnungsadresseFirmenname" name="rechnungsadresseFirmenname" class="sc-input" value="<?php echo isset($evtData['rechnungsadresseFirmenname'])?$evtData['rechnungsadresseFirmenname']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent">Firmenzusatz</span>
                      <input type="text" id="rechnungsadresseFirmenzusatz" name="rechnungsadresseFirmenzusatz" class="sc-input" value="<?php echo isset($evtData['rechnungsadresseFirmenzusatz'])?$evtData['rechnungsadresseFirmenzusatz']:''; ?>"/>
                    </div>
                <div class="sc-grid-col-8 sc-grid-col-s-12 sc-grid-col-m-8 sc-grid-col-xs-12 padding-bottom-xxs">
                  <span class="sc-font-s sc-block sc-font-silent">Straße</span>
                  <input type="text" id="rechnungsadresseStraße" name="rechnungsadresseStraße" class="sc-input" value="<?php echo isset($evtData['rechnungsadresseStraße'])?$evtData['rechnungsadresseStraße']:''; ?>"/>
                </div>
                <div class="sc-grid-col-4 sc-grid-col-s-12 sc-grid-col-m-4 sc-grid-col-xs-12 padding-bottom-xxs">
                  <span class="sc-font-s sc-block sc-font-silent">Hausnummer</span>
                  <input type="text" id="rechnungsadresseHausnummer" name="rechnungsadresseHausnummer" class="sc-input" value="<?php echo isset($evtData['rechnungsadresseHausnummer'])?$evtData['rechnungsadresseHausnummer']:''; ?>"/>
                </div>
                <div class="sc-grid-col-4 sc-grid-col-s-12 sc-grid-col-m-4 sc-grid-col-xs-12 padding-bottom-xxs">
                  <span class="sc-font-s sc-block sc-font-silent">Postleitzahl</span>
                  <input type="text" id="rechnungsadressePostleitzahl" name="rechnungsadressePostleitzahl" class="sc-input" value="<?php echo isset($evtData['rechnungsadressePostleitzahl'])?$evtData['rechnungsadressePostleitzahl']:''; ?>"/>
                </div>
                <div class="sc-grid-col-8 sc-grid-col-s-12 sc-grid-col-m-8 sc-grid-col-xs-12 padding-bottom-xxs">
                  <span class="sc-font-s sc-block sc-font-silent">Ort</span>
                  <input type="text" id="rechnungsadresseOrt" name="rechnungsadresseOrt" class="sc-input" value="<?php echo isset($evtData['rechnungsadresseOrt'])?$evtData['rechnungsadresseOrt']:''; ?>"/>
                </div>
                <div class="sc-grid-col-12 sc-font-s">
                      <p>*Diese Adresse wird ausschließlich für den Rechnungsversand verwendet.</p>
                </div>
            </div>
            <div class="sc-grid-col-6">&nbsp;</div>
        </div>
      </div>
      <div id="main-contact">
            <div class="sc-grid-col-12 collapse-section padding-bottom-xsmall padding-sides-small">
                <div class="sc-grid-col-10">Hauptansprechpartner AutoScout24</div>
                <div class="sc-grid-col-2"><a class="change" id="box3" name="box3"> [ändern] </a></div>
            </div>
            <div class="chackbox3 sc-hidden">
                <div class="sc-grid-col-6 padding-bottom-small">
                  <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-6">
                        <span class="sc-font-s sc-block sc-font-silent"> Rechnungsversand</span>
                        <div class="sc-grid-col-6 margin-bottom-small">
                            <input class="sc-input" type="radio" id="AnsprechpartnerPMail" name="AnsprechpartnerPMail" value="1">
                            <label for="AnsprechpartnerPMail">per E-Mail</label>
                        </div>
                        <div class="sc-grid-col-6 margin-bottom-small">
                            <input class="sc-input" type="radio" id="AnsprechpartnerPPost" name="AnsprechpartnerPMail" value="2">
                            <label for="AnsprechpartnerPPost">per Post</label>
                        </div>
                  </div>
                        <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-12 padding-bottom-xxs">
                          <span class="sc-font-s sc-block sc-font-silent"> Anrede</span>
                          <input type="text" id="hauptansprechpartnerAnrede" name="hauptansprechpartnerAnrede" class="sc-input" value="<?php echo isset($evtData['hauptansprechpartnerAnrede'])?$evtData['hauptansprechpartnerAnrede']:''; ?>"/>
                        </div>
                        <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                          <span class="sc-font-s sc-block sc-font-silent"> Vorname</span>
                          <input type="text" id="hauptansprechpartnerVorname" name="hauptansprechpartnerVorname" class="sc-input" value="<?php echo isset($evtData['hauptansprechpartnerVorname'])?$evtData['hauptansprechpartnerVorname']:''; ?>"/>
                        </div>
                        <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                          <span class="sc-font-s sc-block sc-font-silent"> Nachname</span>
                          <input type="text" id="hauptansprechpartnerNachname" name="hauptansprechpartnerNachname" class="sc-input" value="<?php echo isset($evtData['hauptansprechpartnerNachname'])?$evtData['hauptansprechpartnerNachname']:''; ?>"/>
                        </div>
                        <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-12 padding-bottom-xxs">
                          <span class="sc-font-s sc-block sc-font-silent"> Position</span>
                          <input type="text" id="hauptansprechpartnerPosition" name="hauptansprechpartnerPosition" class="sc-input" value="<?php echo isset($evtData['hauptansprechpartnerPosition'])?$evtData['hauptansprechpartnerPosition']:''; ?>"/>
                        </div>
                        <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                          <span class="sc-font-s sc-block sc-font-silent"> Telefon</span>
                          <input type="text" id="hauptansprechpartnerTelefon" name="hauptansprechpartnerTelefon" class="sc-input" value="<?php echo isset($evtData['hauptansprechpartnerTelefon'])?$evtData['hauptansprechpartnerTelefon']:''; ?>"/>
                        </div>
                        <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                          <span class="sc-font-s sc-block sc-font-silent"> Fax</span>
                          <input type="text" id="hauptansprechpartnerFax" name="hauptansprechpartnerFax" class="sc-input" value="<?php echo isset($evtData['hauptansprechpartnerFax'])?$evtData['hauptansprechpartnerFax']:''; ?>"/>
                        </div>
                        <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-12 padding-bottom-xxs">
                          <span class="sc-font-s sc-block sc-font-silent"> E-Mail</span>
                          <input type="text" id="hauptansprechpartnerMail" name="hauptansprechpartnerMail" class="sc-input" value="<?php echo isset($evtData['hauptansprechpartnerMail'])?$evtData['hauptansprechpartnerMail']:''; ?>"/>
                        </div>
                </div>
                <div class="sc-grid-col-6"></div>
            </div>
      </div>

    <div id="invoice-contact">
        <div class="sc-grid-col-12 collapse-section padding-bottom-xsmall padding-sides-small">
            <div class="sc-grid-col-10 ">Ansprechpartner Rechnung</div>
            <div class="sc-grid-col-2"><a class="change" id="box4" name="box4"> [ändern] </a></div>
        </div>
        <div class="chackbox4 sc-hidden">
              <div class="sc-grid-col-6 padding-bottom-small">
                    <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent"> Anrede</span>
                      <input type="text" id="AnsprechpartnerAnrede" name="AnsprechpartnerAnrede" class="sc-input" value="<?php echo isset($evtData['AnsprechpartnerAnrede'])?$evtData['AnsprechpartnerAnrede']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent"> Vorname</span>
                      <input type="text" id="ansprechpartnerVorname" name="ansprechpartnerVorname" class="sc-input" value="<?php echo isset($evtData['ansprechpartnerVorname'])?$evtData['ansprechpartnerVorname']:'' ?>"/>
                    </div>
                    <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent"> Nachname</span>
                      <input type="text" id="ansprechpartnerNachname" name="ansprechpartnerNachname" class="sc-input" value="<?php echo isset($evtData['ansprechpartnerNachname'])?$evtData['ansprechpartnerNachname']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent"> Position</span>
                      <input type="text" id="ansprechpartnerPosition" name="ansprechpartnerPosition" class="sc-input" value="<?php echo isset($evtData['ansprechpartnerPosition'])?$evtData['ansprechpartnerPosition']:''; ?>"/>
                    </div>
                <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                  <span class="sc-font-s sc-block sc-font-silent"> Telefon</span>
                  <input type="text" id="ansprechpartnerTelefon" name="ansprechpartnerTelefon" class="sc-input" value="<?php echo isset($evtData['ansprechpartnerTelefon'])?$evtData['ansprechpartnerTelefon']:''; ?>"/>
                </div>
                <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                  <span class="sc-font-s sc-block sc-font-silent"> Fax</span>
                  <input type="text" id="ansprechpartnerFax" name="ansprechpartnerFax" class="sc-input" value="<?php echo isset($evtData['ansprechpartnerFax'])?$evtData['ansprechpartnerFax']:''; ?>"/>
                </div>
                <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-12 padding-bottom-xxs">
                  <span class="sc-font-s sc-block sc-font-silent"> E-Mail</span>
                  <input type="text" id="ansprechpartnerMail" name="ansprechpartnerMail" class="sc-input" value="<?php echo isset($evtData['ansprechpartnerMail'])?$evtData['ansprechpartnerMail']:''; ?>"/>
                </div>
              </div>
              <div class="sc-grid-col-6">&nbsp;</div>
          </div>
    </div>


  <div id="online-address">
        <div class="sc-grid-col-12 collapse-section padding-bottom-xsmall padding-sides-small">
            <div class="sc-grid-col-10 ">Online Adresse*</div>
            <div class="sc-grid-col-2"><a class="change" id="box5" name="box5"> [ändern] </a></div>
        </div>
        <div class="chackbox5 sc-hidden">
              <div class="sc-grid-col-6 padding-bottom-small">
                  <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-12 padding-bottom-xxs">
                    <span class="sc-font-s sc-block sc-font-silent">Firmenname</span>
                    <input type="text" id="onlineFirmenname" name="onlineFirmenname" class="sc-input" value="<?php echo isset($evtData['onlineFirmenname'])?$evtData['onlineFirmenname']:''; ?>"/>
                  </div>
                  <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-12 padding-bottom-xxs">
                    <span class="sc-font-s sc-block sc-font-silent">Firmenzusatz</span>
                    <input type="text" id="onlineFirmenzusatz" name="onlineFirmenzusatz" class="sc-input" value="<?php echo isset($evtData['onlineFirmenzusatz'])?$evtData['onlineFirmenzusatz']:''; ?>"/>
                  </div>
                  <div class="sc-grid-col-8 sc-grid-col-s-12 sc-grid-col-m-8 sc-grid-col-xs-12 padding-bottom-xxs">
                    <span class="sc-font-s sc-block sc-font-silent">Straße</span>
                    <input type="text" id="onlineStraße" name="onlineStraße" class="sc-input" value="<?php echo isset($evtData['onlineStraße'])?$evtData['onlineStraße']:''; ?>"/>
                  </div>
                  <div class="sc-grid-col-4 sc-grid-col-s-12 sc-grid-col-m-4 sc-grid-col-xs-12 padding-bottom-xxs">
                    <span class="sc-font-s sc-block sc-font-silent">Hausnummer</span>
                    <input type="text" id="onlineHausnummer" name="onlineHausnummer" class="sc-input" value="<?php echo isset($evtData['onlineHausnummer'])?$evtData['onlineHausnummer']:''; ?>"/>
                  </div>
                  <div class="sc-grid-col-4 sc-grid-col-s-12 sc-grid-col-m-4 sc-grid-col-xs-12 padding-bottom-xxs">
                    <span class="sc-font-s sc-block sc-font-silent">Postleitzahl</span>
                    <input type="text" id="onlinePostleitzahl" name="onlinePostleitzahl" class="sc-input" value="<?php echo isset($evtData['onlinePostleitzahl'])?$evtData['onlinePostleitzahl']:''; ?>"/>
                  </div>
                  <div class="sc-grid-col-8 sc-grid-col-s-12 sc-grid-col-m-8 sc-grid-col-xs-12 padding-bottom-xxs">
                    <span class="sc-font-s sc-block sc-font-silent">Ort</span>
                    <input type="text" id="onlineOrt" name="onlineOrt" class="sc-input" value="<?php echo isset($evtData['onlineOrt'])?$evtData['onlineOrt']:''; ?>"/>
                  </div>
                  <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-12 padding-bottom-xxs">
                    <span class="sc-font-s sc-block sc-font-silent">Homepageadresse</span>
                    <input type="text" id="onlineHomepageadresse" name="onlineHomepageadresse" class="sc-input" value="<?php echo isset($evtData['onlineHomepageadresse'])?$evtData['onlineHomepageadresse']:''; ?>"/>
                  </div>
                  <div class="sc-grid-col-12 sc-font-s">
                        <p>*Diese Adresse ist für Kaufinteressenten online sichtbar.</p>
                  </div>
                </div>
            <div class="sc-grid-col-6">&nbsp;</div>
        </div>
  </div>


  <div id="online-contact">
        <div class="sc-grid-col-12 collapse-section padding-bottom-xsmall padding-sides-small">
            <div class="sc-grid-col-10">Ansprechpartner Online*</div>
            <div class="sc-grid-col-2"><a class="change" id="box6" name="box6"> [ändern] </a></div>
        </div>
        <div class="chackbox6 sc-hidden">
                <div class="sc-grid-col-6 padding-bottom-small">
                    <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent"> Anrede</span>
                      <input type="text" id="OnlinePersonAnrede" name="OnlinePersonAnrede" class="sc-input" value="<?php echo isset($evtData['OnlinePersonAnrede'])?$evtData['OnlinePersonAnrede']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent"> Vorname</span>
                      <input type="text" id="OnlinePersonVorname" name="OnlinePersonVorname" class="sc-input" value="<?php echo isset($evtData['OnlinePersonVorname'])?$evtData['OnlinePersonVorname']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent"> Nachname</span>
                      <input type="text" id="OnlinePersonNachname" name="OnlinePersonNachname" class="sc-input" value="<?php echo isset($evtData['OnlinePersonNachname'])?$evtData['OnlinePersonNachname']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent"> Position</span>
                      <input type="text" id="OnlinePersonPosition" name="OnlinePersonPosition" class="sc-input" value="<?php echo isset($evtData['OnlinePersonPosition'])?$evtData['OnlinePersonPosition']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent"> Telefon 1</span>
                      <input type="text" id="OnlinePersonTelefon1" name="OnlinePersonTelefon1" class="sc-input" value="<?php echo isset($evtData['OnlinePersonTelefon1'])?$evtData['OnlinePersonTelefon1']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent"> Telefon 2</span>
                      <input type="text" id="OnlinePersonTelefon2" name="OnlinePersonTelefon2" class="sc-input" value="<?php echo isset($evtData['OnlinePersonTelefon2'])?$evtData['OnlinePersonTelefon2']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent"> Telefon 3</span>
                      <input type="text" id="OnlinePersonTelefon3" name="OnlinePersonTelefon3" class="sc-input" value="<?php echo isset($evtData['OnlinePersonTelefon3'])?$evtData['OnlinePersonTelefon3']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent"> Fax</span>
                      <input type="text" id="OnlinePersonFax" name="OnlinePersonFax" class="sc-input" value="<?php echo isset($evtData['OnlinePersonFax'])?$evtData['OnlinePersonFax']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-12 sc-grid-col-s-12 sc-grid-col-m-12 sc-grid-col-xs-12 padding-bottom-xxs">
                      <span class="sc-font-s sc-block sc-font-silent"> E-Mail</span>
                      <input type="text" id="OnlinePersonMail" name="OnlinePersonMail" class="sc-input" value="<?php echo isset($evtData['OnlinePersonMail'])?$evtData['OnlinePersonMail']:''; ?>"/>
                    </div>
                    <div class="sc-grid-col-12 sc-font-s">
                          <p>*Nur 1 Person möglich</p>
                    </div>
                </div>
                <div class="sc-grid-col-6">&nbsp;</div>
        </div>
    </div>


    <div id="info-sms">
        <div class="sc-grid-col-12 collapse-section padding-bottom-xsmall padding-sides-small">
              <div class="sc-grid-col-10">Nummer für SMS Info Service</div>
              <div class="sc-grid-col-2"><a class="change" id="box7" name="box7"> [ändern] </a></div>
        </div>
        <div class="chackbox7 sc-hidden">
            <div class="sc-grid-col-12 padding-bottom-small">
                <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs">
                  <span class="sc-font-s sc-block sc-font-silent">Handynummer</span>
                  <input type="text" id="InfoServiceHandynummer" name="InfoServiceHandynummer" class="sc-input" value="<?php echo isset($evtData['InfoServiceHandynummer']) ?$evtData["InfoServiceHandynummer"]:''; ?>"/>
                </div>
                <div class="sc-grid-col-6 sc-grid-col-s-12 sc-grid-col-m-6 sc-grid-col-xs-12 padding-bottom-xxs sc-font-s">
                  <p>&nbsp;</p>
                  <p>Mit dem kostenlosen SMS Info Service erhalten Sie alle AutoScout24 E-Mail Anfragen von Interessenten zusätzlich direkt auf Ihr Handy.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="sc-grid-col-12 margin-top-medium" id="submit-button">
      <div class="sc-grid-col-4">&nbsp;</div>
      <div class="sc-grid-col-4 sc-grid-col-s-12 sc-grid-col-m-4 sc-grid-col-xs-12">
          <input type="submit" class="sc-btn-bob sc-btn-block" id="submit" name="submit" value="Änderungen sichern">
      </div>
      <div class="sc-grid-col-4">&nbsp;</div>
  </div>

</form>
