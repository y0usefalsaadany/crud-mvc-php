<?php

/*
*************************
*
*@ view home page
*
*************************
*/
class homeController{
    public function index(){
        $db = new Database();
        $data['data'] = $db->select('users');
        view::load('users/index',$data);
    }

    public function add(){
            if (isset($_POST['send'])){
                $db = new Database();
                $name = $_POST['name'];
                $email = $_POST['email'];
                $data['data']= $db->insert('users',$name,$email);
                view::load('users/add',$data);
            }else {
                view::load('users/add');
            }
    }

    public function delete($id){
            $db = new Database();
            $data['data']= $db->delete('users',$id);
            view::load('users/delete');
    }

    public function edit($id){
        if (isset($_POST['send'])){
            $db = new Database();
            $name = $_POST['name'];
            $email = $_POST['email'];
            $data['data']= $db->update('users',$name,$email,$id);
            view::load('users/edit',$data);
        }else {
            view::load('users/edit');
        }
    }
}
