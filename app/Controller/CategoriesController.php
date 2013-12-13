<?php

App::uses('AppController', 'Controller');

/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class CategoriesController extends AppController {
	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');
	public $layout = 'admin/admin';

	public function admin_index() {
		$this->Category->recursive = 1;
		$this->paginate = array('limit' => $this->limit);
		$categories = $this->Paginator->paginate();
		$this->set('categories', $categories);
		$this->set('title_for_layout', 'Danh mục');
	}

	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
		$this->set('category', $this->Category->find('first', $options));
	}

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Category->create();
			$this->request->data['Category']['alias'] = $this->Common->vnit_change_title($this->request->data['Category']['name']);
			//debug($this->request->data); exit();
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash('Lưu thành công', 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		}
		$parentCategories = $this->Category->ParentCategory->find('list');
		//debug($parentCategories); exit ();
		$this->set(compact('parentCategories'));
		$this->set('title_for_layout', 'Thêm danh mục');
	}

	/**
	 * admin_edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Category->id = $id;
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash('Lưu thành công', 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
			$this->request->data = $this->Category->find('first', $options);
		}
		$parentCategories = $this->Category->ParentCategory->find('list');
		$this->set(compact('parentCategories'));
		$this->set('title_for_layout', 'Sửa danh mục');
	}

	/**
	 * admin_delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Category->delete()) {
			$this->Session->setFlash('Xóa thành công', 'flash_success');
		} else {
			$this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function makeActive($id, $status) {
		$this->Category->id = $id;
		$this->Category->saveField('is_active', $status);
		$this->redirect('/admin/danh-muc');
	}

	public function getMainMenu() {
		$conditions['AND'] = array('Category.id !=' => 1, 'Category.is_active' => 1);
		$menus = $this->Category->find('all', array('conditions' => $conditions));
		return $menus;
	}

	public function firstMenuItem() {

		$this->Category->unbindModel(array('hasMany' => array('Post', 'ChildCategory')));
		$menu = $this->Category->read('name', 1);
		$this->loadModel('Post');
		$posts = $this->Post->find('all', array('fields' => array('Post.id', 'Post.title', 'Post.alias'), 'conditions' => array('Post.category_id' => 1)));
		$menu['posts'] = $posts;
		return $menu;
	}

}
