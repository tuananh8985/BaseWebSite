<?php

class Setting extends AppModel
{

    public $name = 'Setting';
    public $displayField = 'name';
    public $actsAs = array('Translate' => array('name' => 'nameTranslation', 'address' => 'addressTranslation', 'contactinfo' => 'contactinfoTranslation'));

}
