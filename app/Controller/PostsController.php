<?php

App::uses('AppController', 'Controller');

/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $layout = 'admin/admin';

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Post->recursive = 0;
        
        $this->set('posts', $this->Paginator->paginate());
        $this->set('title_for_layout', 'Danh sách bài viết');
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid post'));
        }
        $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
        $this->set('post', $this->Post->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Post->create();
            $this->request->data['Post']['alias'] = $this->Common->vnit_change_title($this->request->data['Post']['title']);
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Lưu thành công 1 bài viết mới', 'flash_success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
            }
        }
        $fields = array(
            'Category.id',
            'Category.name',
            'Category.parent_id',
        );
        $conditions['And'] = array('Category.is_active' => 1, 'Category.parent_id' => null);
        $this->Post->Category->unbindModel(array('hasMany' => array('Post')));
        $categories = $this->Post->Category->find('all', array('fields' => $fields, 'conditions' => $conditions));
        $this->set(compact('categories'));
        $this->set('title_for_layout', 'Thêm bài viết');
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid video'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Post->id = $id;
            $this->request->data['Post']['alias'] = $this->Common->vnit_change_title($this->request->data['Post']['title']);
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Lưu thành công 1 bài viết mới', 'flash_success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
            }
        } else {
            $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
            $this->request->data = $this->Post->find('first', $options);
        }
        $fields = array(
            'Category.id',
            'Category.name',
            'Category.parent_id',
        );
        $conditions['And'] = array('Category.is_active' => 1, 'Category.parent_id' => null);
        $this->Post->Category->unbindModel(array('hasMany' => array('Post')));
        $categories = $this->Post->Category->find('all', array('fields' => $fields, 'conditions' => $conditions));
        $this->set(compact('categories'));
        $this->set('title_for_layout', 'Chỉnh sửa bài viết');
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->Post->id = $id;
        if (!$this->Post->exists()) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Post->delete()) {
            $this->Session->setFlash('Xóa thành công', 'flash_success');
        } else {
            $this->Session->setFlash('Đã có lỗi xảy ra, vui lòng thử lại', 'flash_error');
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function posts($id) {
        $this->loadModel('Category');
        $category = $this->Category->read(null, $id);
        $this->layout = 'frontend/detailArticle';
        $conditions['AND'] = array('Post.is_active' => 1, 'Post.category_id' => $id);
        $this->paginate = array(
            'limit' => 10,
            'conditions' => $conditions,
            'order' => array(
                'Post.modified' => 'DESC'
            ),
        );
        $current_menu_id = $category['Category']['parent_id'] == null ? $category['Category']['id'] : $category['Category']['parent_id'];
        $posts = $this->paginate();
        $this->set('posts', $posts);
        $this->set('title_for_layout', $category['Category']['name']);
        $this->set('current_menu_id', $current_menu_id);
    }
     /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->layout = 'frontend/detailArticle';
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid category'));
        }
        $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
        $article =  $this->Post->find('first', $options);
        $current_menu_id = $article['Post']['category_id'];
        $conditions['AND'] = array('Post.is_active' => 1, 'Post.category_id' => $article['Post']['category_id'],'Post.' . $this->Post->primaryKey.' !=' => $id);
        $this->paginate = array(
            'limit' => 5,
            'conditions' => $conditions,
            'order' => array(
                'Post.modified' => 'DESC'
            ),
        );
        $otherArticle = $this->paginate();
        $this->set(compact('article','otherArticle','current_menu_id'));
    }
    /**
     * Get the most Recent post
     *
     * @param int $limit The number of comments you want
     * @return Array
     * */
    public function recent($limit = 7) {
        if (!empty($this->request->params['requested'])) {
            $this->recursive = 1;
            $posts = array();
            $recent = $this->Post->find('all', array('limit' => $limit, 'order' => 'Post.modified DESC'));
            array_push($posts, $recent);
            $viewMost = $this->Post->find('all', array('limit' => $limit, 'order' => 'Post.view_count DESC'));
//			$this->log($viewMost, 'debug');
            array_push($posts, $viewMost);
            return $recent;
        }
    }

}
