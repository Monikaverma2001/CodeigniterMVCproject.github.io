<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        // ...
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }

    public function adds(){
        return view('add_student');
    }
 
    public function saves() {
        $studentModel = new StudentModel();
        $data = [];
        $data['name'] = $this->request->getVar('name');
        $data['class'] = $this->request->getVar('class');
        $data['mark'] = $this->request->getVar('mark');
        $data['gender'] = $this->request->getVar('gender');
        $studentModel->insert($data);
        return $this->response->redirect(site_url('/'));
    }

    public function edits($id = ''){
        $studentModel = new StudentModel();
        $data['students'] = $studentModel->where('id', $id)->first();
        return view('edit_student', $data);
    }
    public function updates(){
        $studentModel = new StudentModel();
        $id = $this->request->getVar('id');
        $data = [];
        $data['name'] = $this->request->getVar('name');
        $data['class'] = $this->request->getVar('class');
        $data['mark'] = $this->request->getVar('mark');
        $data['gender'] = $this->request->getVar('gender');
        $studentModel->update($id, $data);
        return $this->response->redirect(site_url('/'));
    }
    

    public function deletes($id = ''){
        $studentModel = new StudentModel();
        $data['students'] = $studentModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/'));
    } 
    
}
