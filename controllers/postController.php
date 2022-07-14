<?php

    class postController extends Controller{
        public function login()
        {
            # code...
            echo 'Login here';
        }

        public function show(){
            $this->loadModel('post');
            echo $this->postModel->name;

            $post = $this->database->getSingle(4);
            echo $post;

            $post = [
                'title' => 'Day la tieu de',
                'content' => 'Day la noi dung',
            ];
            $this->loadView('postDetail',$post);
        }
    }
?>