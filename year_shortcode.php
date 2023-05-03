<?php
// DISPLAY THE CURRENT YEAR
function display_year() {
    $year = date('Y');
    return $year;
}
add_shortcode('year', 'display_year');
?>
