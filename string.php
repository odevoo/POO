<?php 

/**
* Definition de la classe string
*
* 
*/
class string 
{   
    private $string = '';
    
    function __construct($string)
    {
        $this->string = $string;
    }
    public function bold() {
        return "<b>".$this->string."</b>";
    } 
    public function italic() {
        return "<i>".$this->string."</i>";
    } 
    public function underline() {
        return "<u>".$this->string."</u>";
    } 
    public function upperCase() {
        return strtoupper($this->string);
    } 
    public function encapsulate($param) {
        return '<p>'.$param.'</p>';
    }
}

$string = new string('bastien');

echo $string->encapsulate($string->upperCase());
echo $string->encapsulate($string->underline());
echo $string->encapsulate($string->italic());
echo $string->encapsulate($string->bold());

