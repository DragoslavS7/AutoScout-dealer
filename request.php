<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ( file_exists( '../misc/meinautoCred.php' ) ) include_once '../misc/meinautoCred.php';
else if ( file_exists( '../../misc/meinautoCred.php' ) ) include_once '../../misc/meinautoCred.php';
else if ( file_exists('misc/meinautoCred.php') ) include_once 'misc/meinautoCred.php';

function authorize( $cid ) {

    if ( empty( $_SESSION ) ) session_start();

    $id = json_decode( json_encode( $_SESSION[ 'user' ] ), TRUE );
    $id = $id[ 'obj' ][ 'id' ];

    return $cid == $id;
}
function apiRequest($postData, $url = "http://meinauto.autoscout24.de/api/eventstore") {

    $authToken = ESAuthToken;
    // Setup cURL
    $curl = curl_init($url);
    // Set cURL options
    curl_setopt_array($curl,
        array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $authToken,
                'Content-Type: application/json; charset=utf-8',
                'Origin: https://services.autoscout24.de'
            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        )
    );
    // Send the request
    $response = curl_exec($curl);
    $responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    // Check for errors
    if ($response === FALSE) {
        die(curl_error($curl));
    }

    // Close request
    curl_close($curl);

    // Decode and return response
    return $responseCode;
}

$evtData = array(
    'sellId' => isset( $_POST[ 'sellId' ] ) ? $_POST[ 'sellId' ] : '',
    'Confirmed' => FALSE,
    'CustomerId' => isset( $_POST[ 'CustomerId' ] ) ? $_POST[ 'CustomerId' ] : '',

    'box1' => isset( $_POST[ 'box1' ] ) ? $_POST[ 'box1' ] === TRUE || $_POST[ 'box1' ] === 'true' : FALSE,
    'hauptadresseFirmenname' => isset( $_POST[ 'hauptadresseFirmenname' ] ) ? $_POST[ 'hauptadresseFirmenname' ] : '',
    'hauptadresseFirmenzusatz' => isset( $_POST[ 'hauptadresseFirmenzusatz' ] ) ? $_POST[ 'hauptadresseFirmenzusatz' ] : '',
    'hauptadresseStraße' => isset( $_POST[ 'hauptadresseStraße' ] ) ? $_POST[ 'hauptadresseStraße' ] : '',
    'hauptadresseHausnummer' => isset( $_POST[ 'hauptadresseHausnummer' ] ) ? $_POST[ 'hauptadresseHausnummer' ] : '',
    'hauptadressePostleitzahl' => isset( $_POST[ 'hauptadressePostleitzahl' ] ) ? $_POST[ 'hauptadressePostleitzahl' ] : '',
    'hauptadresseOrt' => isset( $_POST[ 'hauptadresseOrt' ] ) ? $_POST[ 'hauptadresseOrt' ] : '',
    'box2' => isset( $_POST[ 'box2' ] ) ? $_POST[ 'box2' ] === TRUE || $_POST[ 'box2' ] === 'true' : FALSE,
    'rechnungsadresseWie' => isset( $_POST[ 'rechnungsadresseWie' ] ) ? $_POST[ 'rechnungsadresseWie' ] : '',
    'rechnungsadresseFirmenname' => isset( $_POST[ 'rechnungsadresseFirmenname' ] ) ? $_POST[ 'rechnungsadresseFirmenname' ] : '',
    'rechnungsadresseFirmenzusatz' => isset( $_POST[ 'rechnungsadresseFirmenzusatz' ] ) ? $_POST[ 'rechnungsadresseFirmenzusatz' ] : '',
    'rechnungsadresseStraße' => isset( $_POST[ 'rechnungsadresseStraße' ] ) ? $_POST[ 'rechnungsadresseStraße' ] : '',
    'rechnungsadresseHausnummer' => isset( $_POST[ 'rechnungsadresseHausnummer' ] ) ? $_POST[ 'rechnungsadresseHausnummer' ] : '',
    'rechnungsadressePostleitzahl' => isset( $_POST[ 'rechnungsadressePostleitzahl' ] ) ? $_POST[ 'rechnungsadressePostleitzahl' ] : '',
    'rechnungsadresseOrt' => isset( $_POST[ 'rechnungsadresseOrt' ] ) ? $_POST[ 'rechnungsadresseOrt' ] : '',
    'box3' => isset( $_POST[ 'box3' ] ) ? $_POST[ 'box3' ] === TRUE || $_POST[ 'box3' ] === 'true' : FALSE,
    'hauptansprechpartnerAnrede' => isset( $_POST[ 'hauptansprechpartnerAnrede' ] ) ? $_POST[ 'hauptansprechpartnerAnrede' ] : '',
    'hauptansprechpartnerVorname' => isset( $_POST[ 'hauptansprechpartnerVorname' ] ) ? $_POST[ 'hauptansprechpartnerVorname' ] : '',
    'hauptansprechpartnerNachname' => isset( $_POST[ 'hauptansprechpartnerNachname' ] ) ? $_POST[ 'hauptansprechpartnerNachname' ] : '',
    'hauptansprechpartnerPosition' => isset( $_POST[ 'hauptansprechpartnerPosition' ] ) ? $_POST[ 'hauptansprechpartnerPosition' ] : '',
    'hauptansprechpartnerTelefon' => isset( $_POST[ 'hauptansprechpartnerTelefon' ] ) ? $_POST[ 'hauptansprechpartnerTelefon' ] : '',
    'hauptansprechpartnerFax' => isset( $_POST[ 'hauptansprechpartnerFax' ] ) ? $_POST[ 'hauptansprechpartnerFax' ] : '',
    'hauptansprechpartnerMail' => isset( $_POST[ 'hauptansprechpartnerMail' ] ) ? $_POST[ 'hauptansprechpartnerMail' ] : '',
    'box4' => isset( $_POST[ 'box4' ] ) ? $_POST[ 'box4' ] === TRUE || $_POST[ 'box4' ] === 'true' : FALSE,
    'AnsprechpartnerPMail' => isset( $_POST[ 'AnsprechpartnerPMail' ] ) ? $_POST[ 'AnsprechpartnerPMail' ] : '',
    'AnsprechpartnerPPost' => isset( $_POST[ 'AnsprechpartnerPPost' ] ) ? $_POST[ 'AnsprechpartnerPPost' ] : '',
    'AnsprechpartnerAnrede' => isset( $_POST[ 'AnsprechpartnerAnrede' ] ) ? $_POST[ 'AnsprechpartnerAnrede' ] : '',
    'ansprechpartnerVorname' => isset( $_POST[ 'ansprechpartnerVorname' ] ) ? $_POST[ 'ansprechpartnerVorname' ] : '',
    'ansprechpartnerNachname' => isset( $_POST[ 'ansprechpartnerNachname' ] ) ? $_POST[ 'ansprechpartnerNachname' ] : '',
    'ansprechpartnerPosition' => isset( $_POST[ 'ansprechpartnerPosition' ] ) ? $_POST[ 'ansprechpartnerPosition' ] : '',
    'ansprechpartnerTelefon' => isset( $_POST[ 'ansprechpartnerTelefon' ] ) ? $_POST[ 'ansprechpartnerTelefon' ] : '',
    'ansprechpartnerFax' => isset( $_POST[ 'ansprechpartnerFax' ] ) ? $_POST[ 'ansprechpartnerFax' ] : '',
    'ansprechpartnerMail' => isset( $_POST[ 'ansprechpartnerMail' ] ) ? $_POST[ 'ansprechpartnerMail' ] : '',
    'box5' => isset( $_POST[ 'box5' ] ) ? $_POST[ 'box5' ] === TRUE || $_POST[ 'box5' ] === 'true' : FALSE,
    'onlineFirmenname' => isset( $_POST[ 'onlineFirmenname' ] ) ? $_POST[ 'onlineFirmenname' ] : '',
    'onlineFirmenzusatz' => isset( $_POST[ 'onlineFirmenzusatz' ] ) ? $_POST[ 'onlineFirmenzusatz' ] : '',
    'onlineStraße' => isset( $_POST[ 'onlineStraße' ] ) ? $_POST[ 'onlineStraße' ] : '',
    'onlineHausnummer' => isset( $_POST[ 'onlineHausnummer' ] ) ? $_POST[ 'onlineHausnummer' ] : '',
    'onlinePostleitzahl' => isset( $_POST[ 'onlinePostleitzahl' ] ) ? $_POST[ 'onlinePostleitzahl' ] : '',
    'onlineOrt' => isset( $_POST[ 'onlineOrt' ] ) ? $_POST[ 'onlineOrt' ] : '',
    'onlineHomepageadresse' => isset( $_POST[ 'onlineHomepageadresse' ] ) ? $_POST[ 'onlineHomepageadresse' ] : '',
    'box6' => isset( $_POST[ 'box6' ] ) ? $_POST[ 'box6' ] === TRUE || $_POST[ 'box6' ] === 'true' : FALSE,
    'OnlinePersonAnrede' => isset( $_POST[ 'OnlinePersonAnrede' ] ) ? $_POST[ 'OnlinePersonAnrede' ] : '',
    'OnlinePersonVorname' => isset( $_POST[ 'OnlinePersonVorname' ] ) ? $_POST[ 'OnlinePersonVorname' ] : '',
    'OnlinePersonNachname' => isset( $_POST[ 'OnlinePersonNachname' ] ) ? $_POST[ 'OnlinePersonNachname' ] : '',
    'OnlinePersonPosition' => isset( $_POST[ 'OnlinePersonPosition' ] ) ? $_POST[ 'OnlinePersonPosition' ] : '',
    'OnlinePersonTelefon1' => isset( $_POST[ 'OnlinePersonTelefon1' ] ) ? $_POST[ 'OnlinePersonTelefon1' ] : '',
    'OnlinePersonTelefon2' => isset( $_POST[ 'OnlinePersonTelefon2' ] ) ? $_POST[ 'OnlinePersonTelefon2' ] : '',
    'OnlinePersonTelefon3' => isset( $_POST[ 'OnlinePersonTelefon3' ] ) ? $_POST[ 'OnlinePersonTelefon3' ] : '',
    'OnlinePersonFax' => isset( $_POST[ 'OnlinePersonFax' ] ) ? $_POST[ 'OnlinePersonFax' ] : '',
    'OnlinePersonMail' => isset( $_POST[ 'OnlinePersonMail' ] ) ? $_POST[ 'OnlinePersonMail' ] : '',
    'box7' => isset( $_POST[ 'box7' ] ) ? $_POST[ 'box7' ] === TRUE || $_POST[ 'box7' ] === 'true' : FALSE,
    'InfoServiceHandynummer' => isset( $_POST[ 'InfoServiceHandynummer' ] ) ? $_POST[ 'InfoServiceHandynummer' ] : '',
    'UploadedImage' => isset( $_POST['uploaded-file'] ) ? $_POST['uploaded-file']  : 'image/default.png',
);

$default = array(
    'box1' => false,
    'hauptadresseFirmenname' =>  '',
    'hauptadresseFirmenzusatz' => '',
    'hauptadresseStraße' =>  '',
    'hauptadresseHausnummer' => '',
    'hauptadressePostleitzahl' => '',
    'hauptadresseOrt' =>  '',
    'box2' => false,
    'rechnungsadresseWie' =>  '',
    'rechnungsadresseFirmenname' => '',
    'rechnungsadresseFirmenzusatz' =>  '',
    'rechnungsadresseStraße' => '',
    'rechnungsadresseHausnummer' =>  '',
    'rechnungsadressePostleitzahl' =>  '',
    'rechnungsadresseOrt' =>'',
    'box3' => false,
    'hauptansprechpartnerAnrede' =>  '',
    'hauptansprechpartnerVorname' => '',
    'hauptansprechpartnerNachname' => '',
    'hauptansprechpartnerPosition' => '',
    'hauptansprechpartnerTelefon' =>  '',
    'hauptansprechpartnerFax' => '',
    'hauptansprechpartnerMail' => '',
    'box4' => false,
    'AnsprechpartnerPMail' => '',
    'AnsprechpartnerPPost' => '',
    'AnsprechpartnerAnrede' => '',
    'ansprechpartnerVorname' => '',
    'ansprechpartnerNachname' => '',
    'ansprechpartnerPosition' =>  '',
    'ansprechpartnerTelefon' => '',
    'ansprechpartnerFax' => '',
    'ansprechpartnerMail' => '',
    'box5' => false ,
    'onlineFirmenname' => '',
    'onlineFirmenzusatz' =>  '',
    'onlineStraße' => '',
    'onlineHausnummer' => '',
    'onlinePostleitzahl' => '',
    'onlineOrt' => '',
    'onlineHomepageadresse' => '',
    'box6' => false,
    'OnlinePersonAnrede' => '',
    'OnlinePersonVorname' =>  '',
    'OnlinePersonNachname' => '',
    'OnlinePersonPosition' =>  '',
    'OnlinePersonTelefon' =>  '',
    'OnlinePersonTelefon2' =>  '',
    'OnlinePersonTelefon3' => '',
    'OnlinePersonFax' => '',
    'OnlinePersonMail' => '',
    'box7' => false,
    'InfoServiceHandynummer' =>  '',
    'UploadedImage' =>  'image/default.png',
);

//body
function HtmlBody($evtData, $sr)
{

    ob_start();

    if ( is_file( 'email.php' ) ) require_once 'email.php';

    return ob_get_clean();

}


function sendEmail( $subject, $htmlBody, $textBody, $email, $sellid ) {

    $postData = array(
        "Subject"     => $subject,
        "HtmlBody"    => $htmlBody,
        "TextBody"    => $textBody,
        "Email"       => $email,
        "Sellid"      => $sellid,
        "CompanyName" => 'testCompany',
    );

    $url  = "http://meinauto.autoscout24.de/mail/generic/dealer";
    $curl = curl_init( $url );

    curl_setopt_array( $curl,
        array(
            CURLOPT_POST           => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_POSTFIELDS     => json_encode( $postData ),
            CURLOPT_HTTPHEADER     => array(
                'Authorization: ' . ESAuthToken,
                'Content-Type: application/json; charset=utf-8',
                'Origin: https://services.autoscout24.de',
            ),
        )
    );

    $response = curl_exec( $curl );

    if ( $response === FALSE ) die( curl_error( $curl ) );

    curl_close( $curl );

    return json_decode( $response, TRUE );
}


function getApi(){

    $s_url = "http://meinauto.autoscout24.de/dp/rpc/GetCustomerEmail?customerId=" . $_POST['CustomerId'];
    $curl  = curl_init($s_url);

    curl_setopt_array( $curl,
        array(
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER     => array(
                'Authorization: ' . ESAuthToken,
                'Content-Type: application/json; charset=utf-8',
                'Origin: https://services.autoscout24.de',
            ),
        )
    );

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $curl_response = curl_exec($curl);

    if ($curl_response === false) {
        $info = curl_getinfo($curl);
        curl_close($curl);
        die('API Fehler. Additioanl info: ' . var_export($info));
    }



    curl_close($curl);

    $decoded = json_decode($curl_response, TRUE);

    return $decoded;
}

function get_curl1($c, $url, $hdr = FALSE ) {

    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
    if ( $hdr ) curl_setopt($c, CURLOPT_HTTPHEADER, $hdr );

    return curl_exec( $c );
}

function get_post( $url, $act, $data, $hdr = FALSE ) {

    $curl = curl_init();

    curl_setopt( $curl, CURLOPT_POST, 1 );
    curl_setopt( $curl, CURLOPT_POSTFIELDS, $data );

    $response = get_curl1( $curl, $url, $hdr );
    $result   = FALSE === $response ? array(
        'act'   => $act,
        'error' => curl_error( $curl ),
        'errno' => curl_errno( $curl ),
        'url'   => $url,
    ) : json_decode( $response, TRUE );

    curl_close( $curl );

    return $result;
}

/*
if ( ! empty( $_GET[ 'param' ] ) &&  $_GET[ 'param' ] == 'image' ) {

    $img  = $_FILES[ 'img' ];
    $file = fopen( $img[ 'tmp_name' ], 'r' );
    $data = array(
        'auth'          => '2903423423240827798789',
        'file_contents' => ( version_compare( PHP_VERSION, '5.5.0' ) >= 0 )
            ? new CURLFile( $img[ 'tmp_name' ], $img[ 'type' ] )
            : '@' . $img[ 'tmp_name' ] .
            ';filename=' . basename( $img[ 'name' ] ) .
            ';type=' . $img[ 'type' ],
    );
    $url  = 'http://imgapi.h2537721.stratoserver.net';
    $res  = get_post( $url, 'image_upload', $data );
    $file_content = $url.'/'.$res['success']['filename'];
    echo json_encode( $res );

}elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
    $file_content = $url.'/'.$res['success']['filename'];

    $err = array(
        'result' => false,
        'message' => 'No customerID',
    );
    $subject = 'Änderung der Kontaktdaten';

    $send = array(
        'dragoslav' => sendEmail($subject, $body, 'Text', 'gagipredojevic65@gmail.com', $_POST['SellId']),
        'nebojsa' => sendEmail($subject, $body, 'Text', 'nebojsa.jaric_ext@scout24.com',$_POST['SellId']),
        'customer' => empty($res2['email']) ? $err : sendEmail('Text', $body, 'Text', $res2['email'],$_POST['SellId']),
        'robert' => sendEmail($subject, $body, 'Text', 'robert.martignoni@scout24.com',$_POST['SellId']),
    );

    echo json_encode($send);
}
*/

/** call api for event **/


if ( ! function_exists( 'get_error' ) ) {
    function get_error( $act, $error, $errno, $url = FALSE ) {

        $error = array(
            'act'   => $act,
            'error' => $error,
            'errno' => $errno,
        );

        if ( $url ) $error[ 'url' ] = $url;

        return $error;
    }
}

function get_es_index( $url = 'eladiv001:9200/newcaroffers/events_archive/_search', $s = FALSE ) {

    $s    = $s ? 's' : '';
    $host = gethostname();
    $env  = substr( $host, 0, 3 ) !== 'lap' ? 'd' : 'l';

    return 'http' . $s . '://' . $env . $url;
}

if ( ! function_exists( 'get_curl' ) ) {
    function get_curl( $c, $url, $hdr = FALSE, $post = FALSE, $cred = FALSE ) {

        if ( empty( $url ) ) $url = get_es_index();

        curl_setopt( $c, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $c, CURLOPT_URL, $url );
        curl_setopt( $c, CURLOPT_SSL_VERIFYPEER, 0 );
        curl_setopt( $c, CURLOPT_SSL_VERIFYHOST, 0 );
        if ( $cred ) curl_setopt( $c, CURLOPT_USERPWD, $cred );
        if ( $hdr ) curl_setopt($c, CURLOPT_HTTPHEADER, $hdr );
        if ( $post ) {
            curl_setopt( $c, CURLOPT_POST, 1 );
            curl_setopt( $c, CURLOPT_POSTFIELDS, $post );
        }

        return curl_exec( $c );
    }
}

if ( ! function_exists( 'get_res' ) ) {
    function get_res( $url, $act, $hdr = FALSE, $post = FALSE, $cred = FALSE, $nodec = FALSE ) {

        $curl     = curl_init();
        $response = get_curl( $curl, $url, $hdr, $post, $cred );
        $result   = FALSE === $response
            ? get_error( $act, curl_error( $curl ), curl_errno( $curl ), $url )
            : ( $nodec ? $response : json_decode( $response, TRUE ) );

        curl_close( $curl );

        return $result;
    }
}

function sort_by_date( $a, $b ) {

    $a = DateTime::createFromFormat('Y-m-d\TH:i:s.uZ'   , $a["eventTime"]);
    $a = $a->format('U.u');
    $a = floatval( $a );
    $b = DateTime::createFromFormat('Y-m-d\TH:i:s.uZ', $b["eventTime"]);
    $b = $b->format('U.u');
    $b = floatval( $b );

    if ($a == $b) {
        return 0;
    }

    return ($a < $b) ? 1 : -1;
}

function read_by_id( $id, $confirmed = FALSE ) {

    require_once '../misc/newserviceseventstore.php';

    $url = "https://newservices-eventstore-api.a.autoscout24.com/getbytypeid/dealerformdata/$id";
    $crd = NewServicesEventStoreUsername . ":" . NewServicesEventStorePassword;
    $hdr = array(
        'Username: ' . NewServicesEventStoreUsername,
        'Password: ' . NewServicesEventStorePassword,
        'Content-Type: application/json; charset=utf-8',
        'Origin: https://services.autoscout24.de',
    );

    $res = get_res( $url, 'read_by_id', $hdr, FALSE, $crd );

    if ( ! empty( $res ) && empty( $res[ 'errno' ] ) ) usort($res, 'sort_by_date');

    if ( $confirmed) {
        $temp = $res;
        $res  = array();

        foreach ( $temp as $r ) {
            $r = $r['eventMessage'];

            if (! empty( $r['Confirmed'] ) ){

                array_push( $res, $r );
            }


        }
    }

    return $res;
}


if (!empty($_GET['param'])) {
    switch ($_GET['param']) {
        default:
            break;

        case 'init_page':

            $cid  = empty($_GET['cid']) ? FALSE : $_GET['cid'];
            $auth = authorize( $cid );
            $res  = array();
            $html = '';

            if ($auth) {
                $res = read_by_id($cid, TRUE);
                $sr = isset( $res[ 0 ] ) ? $res[ 0 ] : FALSE;

                if ( $sr ) {
                    ob_start();

                    if ( is_file( 'parts/form.php' ) ) require_once 'parts/form.php';


                    $html = ob_get_clean();
                }else {
                    ob_start();
                    if ( is_file( 'parts/form.php' ) ) require_once 'parts/form.php';
                    $html = ob_get_clean();
                }
            }

            $res = array(
                'data' => $res,
                'html' => $html,
                'auth' => $auth,
            );

            echo json_encode( $res );
            break;

        case 'image':

            $img = $_FILES['img'];
            $file = fopen($img['tmp_name'], 'r');
            $data = array(
                'auth' => '2903423423240827798789',
                'file_contents' => (version_compare(PHP_VERSION, '5.5.0') >= 0)
                    ? new CURLFile($img['tmp_name'], $img['type'])
                    : '@' . $img['tmp_name'] .
                    ';filename=' . basename($img['name']) .
                    ';type=' . $img['type'],
            );
            $url = 'http://imgapi.h2537721.stratoserver.net';
            $res = get_post($url, 'image_upload', $data);
            $file_content = $url . '/' . $res['success']['filename'];
            echo json_encode($res);
            break;

        case 'confirm':
            $cid = empty($_GET['id']) ? FALSE : $_GET['id'];
            $res = read_by_id($cid);
            $sr = isset($res[0]) ? $res[0] : FALSE;
            $res2 = read_by_id($cid, TRUE);
            $sr2 = isset($res2[0]) ? $res2[0] : $default;
            $subject = 'Änderung der Kontaktdaten';


            if ($sr[ 'eventMessage' ]['Confirmed'] !== TRUE) {

                $sr       = $sr ? $sr[ 'eventMessage' ] : FALSE;
                $sr[ 'Confirmed' ] = TRUE;
                //$sr2      = $sr ? $sr[ 'eventMessage' ] : FALSE;

                $postData = array(
                    'EventId' => $cid,
                    'EventType' => 'DealerFormData',
                    'EventMessage' => json_encode(
                        $sr
                    )
                );

                $body = HtmlBody( $sr,$sr2 );
                $res  = apiRequest( $postData );

                $res = array(
                    'autoscout24' => sendEmail($subject, $body, 'Text', 'as24-services@autoscout24.de', $sr['sellId']),
                    'robert'    => sendEmail($subject, $body, 'Text', 'robert.martignoni@scout24.com', $sr['sellId']),
                    'sema'    => sendEmail($subject, $body, 'Text', 'sema.kaya@scout24.com', $sr['sellId']),
                    'Dragoslav'    => sendEmail($subject, $body, 'Text', 'gagi.predojevic93@hotmail.com', $sr['sellId']),

                );
            } else {

                $res = get_error('Fehler!', 'Event already confirmed.', 400);
            }
            //echo json_encode($res);
            break;

        case 'submit':
            $res2 = getApi();
            $postData = array(
                'EventId' => isset( $_POST[ 'CustomerId' ] ) ? $_POST[ 'CustomerId' ] : '',
                'EventType' => 'DealerFormData',
                'EventMessage' => json_encode(
                    $evtData
                )
            );
            $sr = $evtData;
            foreach($evtData as $key=>$val){
                if($sr[$key] !== $val){
                    $valid = $val;
                    break;
                }
            }


            $res = apiRequest( $postData );
            $err = get_error('get_id', 'No ID parameter.', 400);

            $cid = empty($_POST['CustomerId']) ? FALSE : $_POST['CustomerId'];
            $subject = 'Bestätigung der Kontaktdaten';
            $res = read_by_id( $cid ,TRUE);
            $sr = isset($res[0]) && isset($res[0]) ? $res[0] : $default;

            $body = HtmlBody($evtData, $sr);

            $send = array(
                'sema'    => sendEmail($subject, $body, 'Text', 'sema.kaya@scout24.com', $_POST['sellId']),
                'dragoslav' => sendEmail($subject, $body, 'Text', 'gagi.predojevic93@hotmail.com', $_POST['sellId']),
                'customer'  => empty($res2['email']) ? $err : sendEmail('Text', $body, 'Text', $res2['email'], $_POST['sellId']),
                'robert'    => sendEmail($subject, $body, 'Text', 'robert.martignoni@scout24.com', $_POST['sellId']),
            );
            echo json_encode($send);
            break;
    }

}