

<?php
$today = getdate();

// print_r( $today['hours'] );

if ($today['hours'] >= 12 && $today['hours'] <= 18  ) {
    # code...
    echo 'BOA TARDE';
}

if ($today['hours'] >18 && $today['hours'] <= 24) {
    # code...
    echo 'BOA NOITE';
}

if ($today['hours'] >= 1&& $today['hours'] <= 12) {
    # code...
    echo 'BOM DIA';
}