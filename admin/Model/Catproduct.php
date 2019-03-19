<?php

class Catproduct extends AppModel
{

    public $name = 'Catproduct';
    public $displayField = 'name';
    public $actsAs = array('Tree', 'Translate' => array('name' => 'nameTranslation', 'shortdes' => 'shortdesTranslation', 'content' => 'contentTranslation'));
    public $belongsTo = array(
        'ParentCat' => array(
            'className' => 'Catproduct',
            'foreignKey' => 'parent_id',
        ),
    );
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
        'name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Xin vui lòng điền thông tin',
                'allowEmpty' => false,
                'required' => true,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );
    public $hasMany = array(
        'Product' => array('className' => 'Product',
            'conditions' => array('Product.status' => 1),
            'order' => '',
            'limit' => '',
            'foreignKey' => 'cat_id',
            'dependent' => true,
            'exclusive' => false,
            'finderQuery' => '',
            'fields' => '',
            'offset' => '',
            'counterQuery' => '',
        ),
    );

}
