<?php

App::uses('AppController', 'Controller');

/**
 * Thuocs Controller
 *
 * @property Thuoc $Thuoc
 * @property PaginatorComponent $Paginator
 */
class ThuocsController extends AppController {
	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');
	public $layout = 'admin/admin';

	public function beforeFilter() {
		parent::beforeFilter();
		$categories = $this->Thuoc->Category->find('list');
		$this->set('categories', $categories);
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->layout = 'frontend/thuoc';
		$sub_title = '';
		if (!empty($this->request->query['danhmuc'])) {
			$category_id = $this->request->query['danhmuc'];
			$conds = array('Thuoc.category_id' => $category_id);
			$category = $this->Thuoc->Category->read('name',$category_id);
			$sub_title = $category['Category']['name'];
		} else {
			$conds = null;
			$sub_title = 'Danh sách thuốc';
		}
		$this->paginate = array('conditions' => $conds);
		$this->Thuoc->recursive = 0;
		$this->set('sub_title',$sub_title);
		$this->set('thuocs', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->layout = 'frontend/thuoc';
		if (!$this->Thuoc->exists($id)) {
			throw new NotFoundException(__('Invalid thuoc'));
		}
		$this->Thuoc->id = $id;
		$this->Thuoc->updateAll(array('Thuoc.viewed' => 'Thuoc.viewed+1'), array('Thuoc.id' => $id));
		$options = array('conditions' => array('Thuoc.' . $this->Thuoc->primaryKey => $id));
		$this->set('thuoc', $this->Thuoc->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Thuoc->create();
			if ($this->Thuoc->save($this->request->data)) {
				$this->Session->setFlash(__('The thuoc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The thuoc could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Thuoc->Category->find('list');
		$this->set(compact('categories'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this->Thuoc->exists($id)) {
			throw new NotFoundException(__('Invalid thuoc'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Thuoc->save($this->request->data)) {
				$this->Session->setFlash(__('The thuoc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The thuoc could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Thuoc.' . $this->Thuoc->primaryKey => $id));
			$this->request->data = $this->Thuoc->find('first', $options);
		}
		$categories = $this->Thuoc->Category->find('list');
		$this->set(compact('categories'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this->Thuoc->id = $id;
		if (!$this->Thuoc->exists()) {
			throw new NotFoundException(__('Invalid thuoc'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Thuoc->delete()) {
			$this->Session->setFlash(__('The thuoc has been deleted.'));
		} else {
			$this->Session->setFlash(__('The thuoc could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$this->Thuoc->recursive = 0;
		$this->set('thuocs', $this->Paginator->paginate());
	}

	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		if (!$this->Thuoc->exists($id)) {
			throw new NotFoundException(__('Invalid thuoc'));
		}
		$options = array('conditions' => array('Thuoc.' . $this->Thuoc->primaryKey => $id));
		$this->set('thuoc', $this->Thuoc->find('first', $options));
	}

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->request->data['Thuoc']['viewed'] = 0;
			$this->Thuoc->create();
			if ($this->Thuoc->save($this->request->data)) {
				$this->Session->setFlash('Lưu thuốc thành công', 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Lỗi hệ thống, vui lòng thử lại', 'flash_error');
			}
		}
		$categories = $this->Thuoc->Category->find('list');
		$this->set(compact('categories'));
	}

	/**
	 * admin_edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		if (!$this->Thuoc->exists($id)) {
			throw new NotFoundException(__('Invalid thuoc'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Thuoc->id = $id;
			if ($this->Thuoc->save($this->request->data)) {
				$this->Session->setFlash('Lưu thuốc thành công', 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Lỗi hệ thống, vui lòng thử lại', 'flash_error');
			}
		} else {
			$options = array('conditions' => array('Thuoc.' . $this->Thuoc->primaryKey => $id));
			$this->request->data = $this->Thuoc->find('first', $options);
		}
		$categories = $this->Thuoc->Category->find('list');
		$this->set(compact('categories'));
	}

	/**
	 * admin_delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null) {
		$this->Thuoc->id = $id;
		if (!$this->Thuoc->exists()) {
			throw new NotFoundException(__('Invalid thuoc'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Thuoc->delete()) {
			$this->Session->setFlash(__('The thuoc has been deleted.'));
		} else {
			$this->Session->setFlash(__('The thuoc could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
