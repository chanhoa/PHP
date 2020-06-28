
<?php
$anon_class_obj = new class{
    public $greeting = 'hello';
    public $Id = 754;
    const SETT = 'some configuration';
    public function getValue()
    {
        return 'some returned value';
    }
    public function getValueWithArg($str1)
    {
        return 'returned value is'.$str1;
    }
};
echo '<br>';
echo $anon_class_obj->greeting."<br>";
echo $anon_class_obj->Id."<br>";
echo $anon_class_obj::SETT.'<br>';
echo $anon_class_obj->getValue()."<br>";
echo $anon_class_obj->getValueWithArg('Aptech')."<br><br>";
?>