<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

function get_error( $act, $error, $errno, $url = FALSE ) {

	$error = array(
		'act'   => $act,
		'error' => $error,
		'errno' => $errno,
	);

	if ( $url ) $error[ 'url' ] = $url;

	return $error;
}
function get_es_index( $url = 'eladiv001:9200/newcaroffers/events_archive/_search', $s = FALSE ) {

	$s    = $s ? 's' : '';
	$host = gethostname();
	$env  = substr( $host, 0, 3 ) !== 'lap' ? 'd' : 'l';

	return 'http' . $s . '://' . $env . $url;
}
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
function get_res( $url, $act, $hdr = FALSE, $post = FALSE, $cred = FALSE, $nodec = FALSE ) {

	$curl     = curl_init();
	$response = get_curl( $curl, $url, $hdr, $post, $cred );
	$result   = FALSE === $response
		? get_error( $act, curl_error( $curl ), curl_errno( $curl ), $url )
		: ( $nodec ? $response : json_decode( $response, TRUE ) );

	curl_close( $curl );

	return $result;
}

function read_by_id( $id ) {

	require_once '../misc/newserviceseventstore.php';

	$url = "https://newservices-eventstore-api.a.autoscout24.com/getbytypeid/dealerformdata/$id";
	$crd = NewServicesEventStoreUsername . ":" . NewServicesEventStorePassword;
	$hdr = array(
		'Username: ' . NewServicesEventStoreUsername,
		'Password: ' . NewServicesEventStorePassword,
		'Content-Type: application/json; charset=utf-8',
		'Origin: https://services.autoscout24.de',
	);

	return get_res( $url, 'read_by_id', $hdr, FALSE, $crd, TRUE );
}

$cid = empty( $_GET[ 'cid' ] ) ? FALSE : $_GET[ 'cid' ];

if ( $cid ) $res = read_by_id( $cid );
else $res = json_encode( get_error( 'get_id', 'No ID parameter.', 400 ) );

if ( empty( $_GET[ 'echo' ] ) ) :
	?>
	<script>var log = <?php echo $res ?>;
		console.log( log );
	</script>
	<?php
else :
	header( 'Content-Type: application/json' );

	echo $res;
endif;