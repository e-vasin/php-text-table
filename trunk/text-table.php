<?

/*
//////////////////////////////////////////////////////
// FUNCTION: draw_text_table ($table)
// Accepts an array ($table) and returns a text table
// Array must be of the form:

$table[1]['id']       = '1';

$table[1]['make']     = 'Citroen';
$table[1]['model']    = 'Saxo';
$table[1]['version']  = '1.4 West Coast';

$table[2]['id']       = '2';
$table[2]['make']     = 'Honda';
$table[2]['model']    = 'Civic';
$table[2]['version']  = '1.6 VTi';

$table[3]['id']       = '3';

$table[3]['make']     = 'BMW';
$table[3]['model']    = '3 Series';
$table[3]['version']  = '328 Ci';

//////////////////////////////////////////////////////
*/

function draw_text_table ($table) {
    
    // Work out max lengths of each cell

    foreach ($table AS $row) {
        $cell_count = 0;
        foreach ($row AS $key=>$cell) {
            $cell_length = strlen($cell);

            $cell_count++;
            if (!isset($cell_lengths[$key]) || $cell_length > $cell_lengths[$key]) $cell_lengths[$key] = $cell_length;

        }    
    }

    // Build header bar

    $bar = '+';
    $header = '|';
    $i=0;

    foreach ($cell_lengths AS $fieldname => $length) {
        $i++;
        $bar .= str_pad('', $length+2, '-')."+";

        $name = $i.") ".$fieldname;
        if (strlen($name) > $length) {
            // crop long headings

            $name = substr($name, 0, $length-1);
        }
        $header .= ' '.str_pad($name, $length, ' ', STR_PAD_RIGHT) . " |";

    }

    $output = '';

    $output .= $bar."\n";
    $output .= $header."\n";

    $output .= $bar."\n";

    // Draw rows

    foreach ($table AS $row) {
        $output .= "|";

        foreach ($row AS $key=>$cell) {
            $output .= ' '.str_pad($cell, $cell_lengths[$key], ' ', STR_PAD_RIGHT) . " |";

        }
        $output .= "\n";
    }

    $output .= $bar."\n";

    return $output;

}
?>