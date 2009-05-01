<style type="text/css">
 * {font-family:courier new;}
</style>
<?

include "text-table.php";

$table[1]['id']       = '1';
$table[1]['make']     = 'Citroen';
$table[1]['model']    = 'Saxo';
$table[1]['version']  = '1.4 West Coast';

$table[2]['id']          = '2';
$table[2]['make']     = 'Honda';
$table[2]['model']    = 'Civic';
$table[2]['version']  = '1.6 VTi';

$table[3]['id']          = '3';
$table[3]['make']     = 'BMW';
$table[3]['model']    = '3 Series';
$table[3]['version']  = '328 Ci';

echo 'This function takes an array like this:<br /><pre>';

var_dump($table);

echo '</pre>And converts it into a text table like this:<br /><pre>';

echo draw_text_table ($table);

echo '</pre>Handy for command line output!';
?>