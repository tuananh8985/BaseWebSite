<?php

App::uses('AppHelper', 'View/Helper');

/**

 * Description of ProductController

 * @author : Trung Tong

 * @since Oct 19, 2012

 */

class ProductController extends AppController
{

    public $name = 'Product';

    public $uses = array('Catproduct', 'Product', 'Email', 'Shoutbox', 'Comment');

    public function index($id = null)
    {
        //    $this->layout='forum';
        $typeName = $this->Catproduct->read(null, $id);

        $this->set('title_for_layout', $typeName['Catproduct']['name']);
        $this->set('keywords_for_layout', $typeName['Catproduct']['meta_key']);
        $this->set('description_for_layout', $typeName['Catproduct']['meta_des']);
        $this->set('typeName', $typeName);

        $parmenu = $this->Catproduct->find('list', array(
            'conditions' => array(
                'Catproduct.parent_id' => $id,
                'Catproduct.status' => 1,
            ),
        ));

        $mang = array();
        $i = 0;
        $mang[$i++] = $id;
        foreach ($parmenu as $key => $value) {
            $mang[$i++] = $key;
        }

        if ($id != null) {
            // list all product
            $this->paginate = array(
                'conditions' => array(
                    'Product.status' => 1,
                    'Product.cat_id' => $mang,
                ),
                'order' => 'Product.id DESC, Product.modified DESC',
                'limit' => '20',
            );
        } else {

            $this->paginate = array(

                'conditions' => array(
                    'Product.status' => 1,
                ),
                'order' => 'Product.id DESC, Product.modified DESC',
                'limit' => '20',
            );
        }
        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);
    }

    public function detail($id = null)
    {
        //$this->layout='forum';
        $detailNews = $this->Product->findById($id);
        $this->set('detailNews', $detailNews);

        $this->set('title_for_layout', $detailNews['Product']['name']);
        $this->set('keywords_for_layout', $detailNews['Product']['meta_key']);
        $this->set('description_for_layout', $detailNews['Product']['meta_des']);

        $typeName = $this->Catproduct->read(null, $detailNews['Product']['cat_id']);

        $this->set('typeName', $typeName);

        // list all product

        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,

                'Product.cat_id' => $detailNews['Product']['cat_id'],

                'Product.id <>' => $id,

            ),

            'order' => 'Product.pos DESC, Product.modified DESC',

            'limit' => '6',

        );

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }

    public function listproduct()
    {

        // list all product

        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,

            ),

            'order' => 'Product.pos DESC, Product.modified DESC',

            'limit' => '6',

        );

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

    }
    public function catproduct($cat_id = null)
    {
        $cat = $this->Catproduct->find('all', array('conditions' => array('Catproduct.status' => 1, 'Catproduct.parent_id' => $cat_id)));
        $this->set('cat', $cat);

    }

    public function search()
    {

        $keyword = '';

        if (isset($_POST['txtsearch'])) {

            $keyword = $_POST['txtsearch'];
            $this->Session->write('txtsearch', $keyword);

        } elseif ($this->Session->check('keyword')) {$keyword = $this->Session->read('txtsearch');}

        $this->set('keyword', $keyword);

        // list all product

        $count = $this->Product->find('count', array(

            'conditions' => array(

                'Product.status' => 1,

                'Product.name LIKE' => '%' . $keyword . '%',
            )));
        $this->set('count', $count);

        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,

                'Product.name LIKE' => '%' . $keyword . '%',

            ),

            'order' => 'Product.pos DESC, Product.modified DESC',

            'limit' => '9',

        );

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

        $this->Session->write('url', 'tim-kiem.html');

    }

}
