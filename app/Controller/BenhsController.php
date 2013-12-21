<?php

App::uses('AppController', 'Controller');

/**
 * Benhs Controller
 *
 * @property Benh $Benh
 * @property PaginatorComponent $Paginator
 */
class BenhsController extends AppController {
	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');
	public $layout = 'admin/admin';

	/**
	 * index method
	 *
	 * @return void
	 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->set('muas', $this->Benh->mua);
	}

	public function index() {
		$this->layout = 'frontend/benh';
		$sub_title = '';
		if (!empty($this->request->query['mua'])) {
			$mua = $this->request->query['mua'];
			$conds = array('Benh.mua' => $mua);
			$sub_title = $this->Benh->mua[$mua];
		} else {
			$conds = null;
			$sub_title = 'Danh sách bệnh';
		}
		$this->paginate = array('conditions' => $conds);
		$this->Benh->recursive = 0;
		$this->set('sub_title', $sub_title);
		$this->set('benhs', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->layout = 'frontend/benh';
		if (!$this->Benh->exists($id)) {
			throw new NotFoundException(__('Invalid benh'));
		}
		$options = array('conditions' => array('Benh.' . $this->Benh->primaryKey => $id));
		$this->set('benh', $this->Benh->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Benh->create();
			if ($this->Benh->save($this->request->data)) {
				$this->Session->setFlash(__('The benh has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The benh could not be saved. Please, try again.'));
			}
		}
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this->Benh->exists($id)) {
			throw new NotFoundException(__('Invalid benh'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Benh->save($this->request->data)) {
				$this->Session->setFlash(__('The benh has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The benh could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Benh.' . $this->Benh->primaryKey => $id));
			$this->request->data = $this->Benh->find('first', $options);
		}
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this->Benh->id = $id;
		if (!$this->Benh->exists()) {
			throw new NotFoundException(__('Invalid benh'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Benh->delete()) {
			$this->Session->setFlash(__('The benh has been deleted.'));
		} else {
			$this->Session->setFlash(__('The benh could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$this->Benh->recursive = 0;
		$this->set('benhs', $this->Paginator->paginate());
		$this->set('mua', $this->Benh->mua);
	}

	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		if (!$this->Benh->exists($id)) {
			throw new NotFoundException(__('Invalid benh'));
		}
		$options = array('conditions' => array('Benh.' . $this->Benh->primaryKey => $id));
		$this->set('benh', $this->Benh->find('first', $options));
	}

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->request->data['Benh']['viewed'] = 0;
			$this->Benh->create();
			if ($this->Benh->save($this->request->data)) {
				$this->Session->setFlash('Lưu thành công', 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Lỗi hệ thống, vui lòng thử lại', 'flash_error');
			}
		}

		$this->set('title_for_layout', 'Nhập bệnh');
		$this->set('mua', $this->Benh->mua);
	}

	/**
	 * admin_edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		if (!$this->Benh->exists($id)) {
			throw new NotFoundException(__('Invalid benh'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Benh->id = $id;
			if ($this->Benh->save($this->request->data)) {
				$this->Session->setFlash('Lưu thành công', 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Lỗi hệ thống, vui lòng thử lại', 'flash_error');
			}
		} else {
			$options = array('conditions' => array('Benh.' . $this->Benh->primaryKey => $id));
			$this->request->data = $this->Benh->find('first', $options);
			$this->set('title_for_layout', 'Sửa bệnh');
			$this->set('mua', $this->Benh->mua);
		}
	}

	/**
	 * admin_delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null) {
		$this->Benh->id = $id;
		if (!$this->Benh->exists()) {
			throw new NotFoundException(__('Invalid benh'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Benh->delete()) {
			$this->Session->setFlash(__('The benh has been deleted.'));
		} else {
			$this->Session->setFlash(__('The benh could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
