<?php



/**
 * Description of sample
 *
 * @author w1x
 */
class sample {
public $var = 'Sample Class test ';

public function sampleFunction($param){
    echo 'This is the sample function';
}

        
}
$egString = 'sample';
$eg = new $egString();
$eg->sampleFunction('');
echo '<br />';
echo "$egString <br />";
echo '$egString <br />';
