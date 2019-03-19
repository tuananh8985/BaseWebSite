<?php

class Image extends AppModel
{

    public $name = 'Image';
    public $displayField = 'name';

    public $actsAs = array('Translate' => array('name' => 'nameTranslation', 'shortdes' => 'shortdesTranslation', 'content' => 'contentTranslation'));
    public $validate = array(
        'id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'title' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Xin vui lòng di?n thông tin',
                'allowEmpty' => false,
                'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'catNew_id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Xin vui lòng di?n thông tin',
                'allowEmpty' => false,
                'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );
    public $belongsTo = array(
        'Listimage' => array(
            'className' => 'Listimage',
            'foreignKey' => 'cat_id',
        ),
    );

}
