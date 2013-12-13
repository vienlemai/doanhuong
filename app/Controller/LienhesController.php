<?php

App::uses('AppController', 'Controller');

/**
 * Categories Controller
 *
 * @property Lienhe $Lienhe
 * @property PaginatorComponent $Paginator
 */
class LienhesController extends AppController {
	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');
	public $layout = 'admin/admin';
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->loadModel('Category');
		$categories = $this->Category->find('list');
		$this->set('categories', $categories);
		$this->set('muas',$this->Category->mua);
	}
	
	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		$this->layout = 'frontend/full';
		if ($this->request->is('post')) {
			$this->Lienhe->create();
			if ($this->Lienhe->save($this->request->data)) {
				$this->set('success',true);
			} else {
				$this->Session->setFlash("Lỗi, vui lòng thử lại");
			}
		}
	}

	public function admin_index() {
		$this->Lienhe->recursive = 0;
		$this->paginate = array('limit' => $this->limit);
		$lienhes = $this->Paginator->paginate();
		$this->set('lienhes', $lienhes);
		$this->set('title_for_layout', 'Liên hệ');
	}

	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		if (!$this->Lienhe->exists($id)) {
			throw new NotFoundException(__('Invalid Lien he'));
		}
		$this->request->data = $this->Lienhe->read(null,$id);
	}

	
	/**
	 * admin_delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null) {
		$this->Lienhe->id = $id;
		if (!$this->Lienhe->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lienhe->delete()) {
			$this->Session->setFlash('Xóa thành công', 'flash_success');
		} else {
			$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
		}
		return $this->redirect(array('action' => 'index'));
	}

}
