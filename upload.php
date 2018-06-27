<?php
if ( ! empty( $_GET[ 'p' ] ) ) {
    switch( $_GET[ 'p' ] ) {
    case 'image':
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

    echo json_encode( $res );
        break;

    case 'submit':
       sendEmail("HI", "<p>HIHIHI</p>", "HI");
        break;
    }
}
