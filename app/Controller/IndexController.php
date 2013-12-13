<?php

App::uses('AppController', 'Controller');

class IndexController extends AppController {
	public $layout = 'frontend/index';
	public $components = array('Paginator');
	public $uses = array('Usermgmt.User', 'Articlesss');

	/**
	 * index method
	 *
	 * @return void
	 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->loadModel('Category');
		$categories = $this->Category->find('list');
		$this->set('categories', $categories);
		$this->set('muas', $this->Category->mua);
	}

	public function index() {
		$this->layout = 'frontend/home';
		
	}

	public function search() {
		$this->layout = 'frontend/full';
		$typeSearch = $this->request->query('typesearch');
		if(empty($typeSearch)){
			$typeSearch = 'benh';
		}
		//var_dump($this->request->query);		exit();
		$result = array();
		$key = $this->request->query('key');
		switch ($typeSearch) {
			case 'thuoc':
				$this->loadModel('Thuoc');				
				$conds = array('Thuoc.ten_thuoc LIKE'=> '%'.$key.'%');
				$result = $this->Thuoc->find('all', array('conditions'=>$conds));
				break;
			case 'benh':
				$this->loadModel('Benh');
				$conds = array('Benh.ten_benh LIKE'=> '%'.$key.'%');
				$result = $this->Benh->find('all', array('conditions'=>$conds));
				break;
			case 'trieuChung':
				$this->loadModel('Benh');
				$conds = array('Benh.trieu_chung LIKE'=> '%'.$key.'%');
				$result = $this->Benh->find('all', array('conditions'=>$conds));
				break;
			default :
				$result = null;
		}
		$this->set(compact('result', 'typeSearch','key'));
	}

	public function gioithieu() {
		$this->layout = 'frontend/full';
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
//        $this->layout = 'frontend/detailArticle';
//        $this->loadModel('Post');
//        if (!$this->Post->exists($id)) {
//            throw new NotFoundException(__('Invalid category'));
//        }
//        $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
//        $article =  $this->Post->find('first', $options);
//        $current_menu_id = $article['Post']['category_id'];
//        $conditions['AND'] = array('Post.is_active' => 1, 'Post.category_id' => $article['Post']['category_id'],'Post.' . $this->Post->primaryKey.' !=' => $id);
////        $options = array('conditions' => $conditions,'order' =>array('Post.modified' => 'DESC'));
////        $otherArticle = $this->Post->find('all', $options);
//        $this->paginate = array(
//            'limit' => 5,
//            'conditions' => $conditions,
//            'order' => array(
//                'Post.modified' => 'DESC'
//            ),
//        );
//        $otherArticle = $this->paginate();
//        $this->set(compact('article','otherArticle','current_menu_id'));
	}

}

?>
