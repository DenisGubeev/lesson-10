<?php
interface SmartphoneInterface
{
    public function areYouRich();
}
class Smartphone extends Product implements SmartphoneInterface
{
    protected $color;
    protected $model;
}
?>
