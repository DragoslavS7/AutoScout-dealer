<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$sr = isset( $sr[ 'eventMessage' ] ) ? $sr[ 'eventMessage' ] : $sr;
?>


<html>
<head><title>Auftraggeber (Firma)</title></head>
<body>

<div style="padding: 10px;font: inherit;font-size: 1rem;line-height: 1.4;vertical-align: baseline;">
    <p>Sehr geehrte Damen und Herren,</p>
    <p>Sie haben soeben Ihre Kontaktdaten geändert bzw. ergänzt.</p>
    <p>Bitte bestätigen Sie die Änderungen, um den Auftrag abzuschließen.
    </p>
</div>

<!-- Section 1 --->
<?php if( ! empty($evtData['box1'])  || $sr['box1'] !== $evtData['box1']) : ?>
<table style="text-align:center;font-family:Verdana,sans-serif; width:100%;margin-bottom: 25px;">
    <?php if( $evtData['box1'] === TRUE ) : ?>
    <tr>
        <td colspan="2" style="font: inherit;font-size: 1.25rem;line-height: 1.4;vertical-align: baseline;">
            <h5 style="text-align: left;padding-left:5px;">Übersicht der aktualisierten Kontaktdaten:</h5>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="line-height: 1.4;font-size: 1rem;vertical-align: baseline;font:inherit;margin-bottom: 15px;">
            <p style="text-align: left;font-size: 1rem;padding-left:5px;margin-bottom: 15px;">Hauptadresse</p>
        </td>
    </tr>
    <?php if(! empty($evtData["hauptadresseFirmenname"])/* && $sr["hauptadresseFirmenname"] !== $evtData["hauptadresseFirmenname"]*/)  : ?>
    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;line-height: 1.4;vertical-align: baseline;">
            <p>Firmenname:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;line-height: 1.4;vertical-align: baseline;">
            <p style="">
                <?php echo $evtData["hauptadresseFirmenname"];  ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["hauptadresseFirmenzusatz"])/* && $sr["hauptadresseFirmenzusatz"] !== $evtData["hauptadresseFirmenzusatz"]*/) : ?>
    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;line-height: 1.4;vertical-align: baseline;font:inherit";>
            <p>Firmenzusatz:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;line-height: 1.4;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["hauptadresseFirmenzusatz"]; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["hauptadresseStraße"])/* && $sr["hauptadresseStraße"] !== $evtData["hauptadresseStraße"]*/ && ! empty($evtData["hauptadresseHausnummer"])/* && $sr["hauptadresseHausnummer"] !== $evtData["hauptadresseHausnummer"]*/) : ?>
    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Straße,Hausnummer:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["hauptadresseStraße"].','.$evtData["hauptadresseHausnummer"]; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["hauptadressePostleitzahl"])/* && $sr["hauptadressePostleitzahl"] !== $evtData["hauptadressePostleitzahl"]*/ && ! empty($evtData["hauptadresseOrt"]) /*&& $sr["hauptadresseOrt"] !== $evtData["hauptadresseOrt"]*/) : ?>
    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Postleitzahl,Ort:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["hauptadressePostleitzahl"].','.$evtData["hauptadresseOrt"]; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["UploadedImage"]) && $sr["UploadedImage"] !== $evtData["UploadedImage"]) : ?>
    <tr style="padding:15px;font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Hochgeladenes Dokument:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p>
                <?php echo $evtData["UploadedImage"]; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php endif; ?>
</table>
<?php endif; ?>




<!-- Section 2 -->
<?php if( ! empty($evtData['box2'])  || $sr['box2'] !== $evtData['box2']) : ?>
<table style="text-align:center;font-family:Verdana,sans-serif;width:100%;margin-bottom: 25px;">
    <?php if( $evtData['box2'] === TRUE ) : ?>
    <tr>
        <td colspan="2" style="font-size: 1rem;vertical-align: baseline;font:inherit;margin-bottom: 15px;">
            <p style="text-align: left;font-size: 1rem;padding-left:5px;margin-bottom: 15px;">Rechnungsadresse</p>
        </td>
    </tr>

    <?php if(! empty($evtData["rechnungsadresseWie"]) && $evtData["rechnungsadresseWie"] === 'hook'/* && $sr["rechnungsadresseWie"] !== $evtData["rechnungsadresseWie"]*/) : ?>
        <tr style="font: inherit;font-size: 1rem;">
            <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
                <p>Hauptadresse als Rechnungsadresse verwenden:</p>
            </td>
            <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
                <p style="">
                <div style="display: inline-block;width: 50px;height: 16px;">&#10004;</div>
                </p>
            </td>
        </tr>
    <?php endif; ?>

    <?php if(! empty($evtData["rechnungsadresseFirmenname"])/* && $sr["rechnungsadresseFirmenname"] !== $evtData["rechnungsadresseFirmenname"]*/) : ?>
    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Firmenname:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["rechnungsadresseFirmenname"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["rechnungsadresseFirmenzusatz"])/* && $sr["rechnungsadresseFirmenzusatz"] !== $evtData["rechnungsadresseFirmenzusatz"]*/) : ?>
    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Firmenzusatz:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["rechnungsadresseFirmenzusatz"]; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["rechnungsadresseStraße"])/* && $sr["rechnungsadresseStraße"] !== $evtData["rechnungsadresseStraße"]*/ && ! empty($evtData["rechnungsadresseHausnummer"])/* && $sr["rechnungsadresseHausnummer"] !== $evtData["rechnungsadresseHausnummer"]*/) : ?>
    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Straße,Hausnummer:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["rechnungsadresseStraße"].','.$evtData["rechnungsadresseHausnummer"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["rechnungsadressePostleitzahl"])/* && $sr["rechnungsadressePostleitzahl"] !== $evtData["rechnungsadressePostleitzahl"]*/ && ! empty($evtData["rechnungsadresseOrt"]) /*&& $sr["rechnungsadresseOrt"] !== $evtData["rechnungsadresseOrt"]*/): ?>

    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Postleitzahl,Ort:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["rechnungsadressePostleitzahl"].','.$evtData["rechnungsadresseOrt"]; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php endif; ?>
</table>
<?php endif; ?>





<!-- Section 3 -->
<?php if( ! empty($evtData['box3'])  || $sr['box3'] !== $evtData['box3']) : ?>
<table style="text-align:center;font-family:Verdana,sans-serif;width:100%;margin-bottom: 25px;">
    <?php if( $evtData['box3'] === TRUE ) : ?>
    <tr>
        <td colspan="2" style="vertical-align: baseline;font-size: 1rem;font:inherit;margin-bottom: 15px;">
            <p style="text-align: left;font-size: 1rem;padding-left:5px;margin-bottom: 15px;">Hauptansprechpartner AutoScout24</p>
        </td>
    </tr>

        <?php if(! empty($evtData["AnsprechpartnerPMail"]) && $evtData["AnsprechpartnerPMail"] === '1'/*&& $sr["AnsprechpartnerPMail"] !== $evtData["AnsprechpartnerPMail"]*/) : ?>
            <tr style="font-size: 1rem;">
                <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
                    <p>per E-Mail:</p>
                </td>
                <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
                    <p style="">
                    <div style="display: inline-block;width: 50px;height: 16px;">&#10004;</div>
                    </p>
                </td>
            </tr>
        <?php endif; ?>
        <?php if(! empty($evtData["AnsprechpartnerPMail"]) && $evtData["AnsprechpartnerPMail"] === '2' /*&& $sr["AnsprechpartnerPPost"] !== $evtData["AnsprechpartnerPPost"]*/) : ?>
            <tr style="font-size: 1rem;">
                <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
                    <p>per Post:</p>
                </td>
                <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
                    <p style="">
                    <div style="display: inline-block;width: 50px;height: 16px;">&#10004;</div>
                    </p>
                </td>
            </tr>
        <?php endif; ?>

    <?php if(! empty($evtData["hauptansprechpartnerAnrede"]) /*&& $sr["hauptansprechpartnerAnrede"] !== $evtData["hauptansprechpartnerAnrede"]*/) : ?>
    <tr style="font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Anrede:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["hauptansprechpartnerAnrede"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["hauptansprechpartnerVorname"])/* && $sr["hauptansprechpartnerVorname"] !== $evtData["hauptansprechpartnerVorname"] */&& ! empty($evtData["hauptansprechpartnerNachname"]) /*&& $sr["hauptansprechpartnerNachname"] !== $evtData["hauptansprechpartnerNachname"]*/) : ?>
    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Vorname,Nachname:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["hauptansprechpartnerVorname"].','.$evtData["hauptansprechpartnerNachname"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>

    <?php if(! empty($evtData["hauptansprechpartnerPosition"]) /*&& $sr["hauptansprechpartnerPosition"] !== $evtData["hauptansprechpartnerPosition"]*/) : ?>

    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Position:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["hauptansprechpartnerPosition"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["hauptansprechpartnerTelefon"])/* && $sr["hauptansprechpartnerTelefon"] !== $evtData["hauptansprechpartnerTelefon"]*/ && ! empty($evtData["hauptansprechpartnerFax"]) /*&& $sr["hauptansprechpartnerFax"] !== $evtData["hauptansprechpartnerFax"]*/) : ?>
    <tr style="padding:15px;font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Telefon,Fax:</p>

        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p>
                <?php echo $evtData["hauptansprechpartnerTelefon"].','.$evtData["hauptansprechpartnerFax"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>

    <?php if(! empty($evtData["hauptansprechpartnerMail"])/* && $sr["hauptansprechpartnerMail"] !== $evtData["hauptansprechpartnerMail"]*/) : ?>
    <tr style="padding:15px;font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>E-Mail:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p>
                <?php echo $evtData["hauptansprechpartnerMail"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php endif; ?>
</table>
<?php endif; ?>



<!-- Section 4 -->
<?php if( ! empty($evtData['box4'])  || $sr['box4'] !== $evtData['box4']) : ?>
<table style="text-align:center;font-family:Verdana,sans-serif;width:100%;margin-bottom: 25px;">
    <?php if( $evtData['box4'] === TRUE ) : ?>
    <tr>
        <td colspan="2" style="vertical-align: baseline;font-size: 1rem;font:inherit;margin-bottom: 15px;">
            <p style="text-align: left;font-size: 1rem;padding-left:5px;margin-bottom: 15px;">Ansprechpartner Rechnung</p>
        </td>
    </tr>

    <?php if(! empty($evtData["AnsprechpartnerAnrede"]) /*&& $sr["AnsprechpartnerAnrede"] !== $evtData["AnsprechpartnerAnrede"]*/) : ?>
    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Anrede:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["AnsprechpartnerAnrede"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["ansprechpartnerVorname"]) /*&& $sr["ansprechpartnerVorname"] !== $evtData["ansprechpartnerVorname"]*/ && ! empty($evtData["ansprechpartnerNachname"]) /*&& $sr["ansprechpartnerNachname"] !== $evtData["ansprechpartnerNachname"]*/) : ?>

    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Vorname:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["ansprechpartnerVorname"].','.$evtData["ansprechpartnerNachname"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>

    <?php if(! empty($evtData["ansprechpartnerPosition"])/* && $sr["ansprechpartnerPosition"] !== $evtData["ansprechpartnerPosition"]*/) : ?>
    <tr style="padding:15px;font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Position:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p>
                <?php echo $evtData["ansprechpartnerPosition"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["ansprechpartnerTelefon"]) /*&& $sr["ansprechpartnerTelefon"] !== $evtData["ansprechpartnerTelefon"]*/ && ! empty($evtData["ansprechpartnerFax"]) /*&& $sr["ansprechpartnerFax"] !== $evtData["ansprechpartnerFax"]*/) : ?>
    <tr style="padding:15px;font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Telefon,Fax:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p>
                <?php echo $evtData["ansprechpartnerTelefon"].','.$evtData["ansprechpartnerFax"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>

    <?php if(! empty($evtData["ansprechpartnerMail"]) /*&& $sr["ansprechpartnerMail"] !== $evtData["ansprechpartnerMail"]*/) : ?>
    <tr style="padding:15px;font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>E-mail:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p>
                <?php echo $evtData["ansprechpartnerMail"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php endif; ?>
</table>
<?php endif; ?>






<!-- Section 5 --->
<?php if( ! empty($evtData['box5'])  || $sr['box5'] !== $evtData['box5']) : ?>
<table style="text-align:center;font-family:Verdana,sans-serif;width:100%;margin-bottom: 25px;">
    <?php if( $evtData['box5'] === TRUE ) : ?>
    <tr>
        <td colspan="2" style="vertical-align: baseline;font-size: 1rem;font:inherit;margin-bottom: 15px;">
            <p style="text-align: left;padding-left:5px;font-size: 1rem;margin-bottom: 15px;">Online Adresse</p>
        </td>
    </tr>
    <?php if(! empty($evtData["onlineFirmenname"]) /*&& $sr["onlineFirmenname"] !== $evtData["onlineFirmenname"]*/) : ?>
    <tr style="font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Firmenname:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["onlineFirmenname"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["onlineFirmenzusatz"]) /*&&  $sr["onlineFirmenzusatz"] !== $evtData["onlineFirmenzusatz"]*/) : ?>
    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Firmenzusatz:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["onlineFirmenzusatz"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["onlineStraße"])/* && $sr["onlineStraße"] !== $evtData["onlineStraße"] */&& ! empty($evtData["onlineHausnummer"])/* && $sr["onlineHausnummer"] !== $evtData["onlineHausnummer"]*/) : ?>
    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Straße,Hausnummer:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["onlineStraße"].','.$evtData["onlineHausnummer"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["onlinePostleitzahl"]) /*&& $sr["onlinePostleitzahl"] !== $evtData["onlinePostleitzahl"]*/ && ! empty($evtData["onlineOrt"]) /*&& $sr["onlineOrt"] !== $evtData["onlineOrt"]*/) : ?>
    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Postleitzahl,Ort:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["onlinePostleitzahl"].','.$evtData["onlineOrt"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["onlineHomepageadresse"]) /*&& $sr["onlineHomepageadresse"] !== $evtData["onlineHomepageadresse"]*/) : ?>
    <tr style="padding:15px;font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Homepageadresse:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p>
                <?php echo $evtData["onlineHomepageadresse"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php endif; ?>
</table>
<?php endif; ?>




<!-- Section 6 --->
<?php if( ! empty($evtData['box6'])  || $sr['box6'] !== $evtData['box6']) : ?>
<table style="text-align:center;font-family:Verdana,sans-serif;width:100%;margin-bottom: 25px;">
    <?php if( $evtData['box6'] === TRUE ) : ?>
    <tr>
        <td colspan="2" style="vertical-align: baseline;font-size: 1rem;font:inherit;margin-bottom: 15px;">
            <p style="text-align: left;font-size: 1rem;padding-left:5px;margin-bottom: 15px;">Ansprechpartner Online</p>
        </td>
    </tr>
    <?php if(! empty($evtData["OnlinePersonAnrede"]) /*&& $sr["OnlinePersonAnrede"] !== $evtData["OnlinePersonAnrede"]*/) : ?>
    <tr style="font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Anrede:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["OnlinePersonAnrede"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["OnlinePersonVorname"]) /*&& $sr["OnlinePersonVorname"] !== $evtData["OnlinePersonVorname"]*/ && ! empty($evtData["OnlinePersonNachname"]) /*&& $sr["OnlinePersonNachname"] !== $evtData["OnlinePersonNachname"]*/) : ?>
    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Vorname:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["OnlinePersonVorname"].','.  $evtData["OnlinePersonNachname"]; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>

    <?php if(! empty($evtData["OnlinePersonPosition"])/* && $sr["OnlinePersonPosition"] !== $evtData["OnlinePersonPosition"]*/) : ?>
    <tr style="font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Position:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["OnlinePersonPosition"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php if(! empty($evtData["OnlinePersonTelefon1"])/* && $sr["OnlinePersonTelefon1"] !== $evtData["OnlinePersonTelefon1"]*/ && ! empty($evtData["OnlinePersonTelefon2"]) /*&& $sr["OnlinePersonTelefon2"] !== $evtData["OnlinePersonTelefon2"]*/) : ?>
    <tr style="padding:15px;font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Telefon1,Telefon2:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p>
                <?php echo $evtData["OnlinePersonTelefon1"].','.$evtData["OnlinePersonTelefon2"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>

    <?php if(! empty($evtData["OnlinePersonTelefon3"])/* && $sr["OnlinePersonTelefon3"] !== $evtData["OnlinePersonTelefon3"]*/ && ! empty($evtData["OnlinePersonFax"]) /*&& $sr["OnlinePersonFax"] !== $evtData["OnlinePersonFax"]*/) : ?>
    <tr style="padding:15px;font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Telefon3,Fax:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p>
                <?php echo $evtData["OnlinePersonTelefon3"].','.$evtData["OnlinePersonFax"]; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>

    <?php if(! empty($evtData["OnlinePersonMail"]) /*&& $sr["OnlinePersonMail"] !== $evtData["OnlinePersonMail"]*/) : ?>
    <tr style="padding:15px;font: inherit;font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>E-Mail:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p>
                <?php echo $evtData["OnlinePersonMail"] ; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php endif; ?>
</table>
<?php endif; ?>




<!-- Section 7 --->

<?php if( ! empty($evtData['box7'])  || $sr['box7'] !== $evtData['box7']) : ?>
<table style="text-align:center;font-family:Verdana,sans-serif;width:100%;margin-bottom: 25px;">
    <?php if( $evtData['box7'] === TRUE ) : ?>
    <tr>
        <td colspan="2" style="vertical-align: baseline;font-size: 1rem;font:inherit;margin-bottom: 15px;">
            <p style="text-align: left;font-size: 1rem;padding-left:5px;margin-bottom: 15px;">Nummer für SMS Info Service</p>
        </td>
    </tr>
    <?php if(! empty($evtData["InfoServiceHandynummer"]) /*&& $sr["InfoServiceHandynummer"] !== $evtData["InfoServiceHandynummer"]*/)  :  ?>
    <tr style="font-size: 1rem;">
        <td style="text-align:left;padding-left: 5px;width:50%;vertical-align: baseline;font:inherit;">
            <p>Handynummer:</p>
        </td>
        <td style="padding-left: 35px;text-align: left;width:50%;vertical-align: baseline;font:inherit;">
            <p style="">
                <?php echo $evtData["InfoServiceHandynummer"]; ?>
            </p>
        </td>
    </tr>
    <?php endif; ?>
    <?php endif; ?>
</table>
<?php endif; ?>


<!-- Confirm -->
<?php if( $_GET[ 'param' ] !== 'confirm' ) : ?>
<div style="padding: 10px;font: inherit;font-size: 1rem;line-height: 1.4;vertical-align: baseline;">
    <p>Bestätigen Sie bitte Ihre Änderungen, indem Sie bitte hier klicken:</p>
</div>
<br>

        <p style="text-align:center;"><a
                    style="-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;background: #c6640d;color: #FFF;padding:10px 24px 10px 24px;text-decoration: none;font-weight:bolder;"
                    href="https://services.autoscout24.de/dealer-admin/confirm.php?param=confirm&id=<?php echo $evtData['CustomerId']; ?>" target="_blank"> Jetzt bestätigen </a></p>


<br>

<div style="padding: 10px;font: inherit;font-size: 1rem;line-height: 1.4;vertical-align: baseline;">
   <p>Mit freundlichen Grüßen</p>
   <p>Ihr AutoScout24-Team</p>

</div>
<?php endif; ?>

</body>
</html>
