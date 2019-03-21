<?php
class HomeController extends AppController
{
    public function beforeFilter()
    {
        parent::beforeFilter();
        // $this->layout = 'frontend';
    }

    public $uses = array(
        'Product', 'News', 'Post',
    );
    public function index()
    {
        $this->paginate = array('limit' => 6, 'order' => 'product.id ');

        $sanpham = $this->paginate('Product');

        $this->set('sanpham', $sanpham);

        $gt = $this->Post->find('all', array('conditions' => array(
            'Post.display' => 1,
        )));

        $this->set('gt', $gt);
    }

    public function gioithieu()
    {
        $gt = $this->Post->find('all', array('conditions' => array(
            'Post.display' => 1,
        )));

        $this->set('gt', $gt);
    }
}
