<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{

    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'stock'  => $model->getNews(),
            'title' => 'News archive',
        ];

        return view('templates/header', $data)
        .view('templates/nav')
		. view('news/overview');
		//. view('templates/footer');
    }

    public function view($slug = null)
    {
        $model = model(NewsModel::class);

        $data['stock'] = $model->getNews($slug);
      
	if (empty($data['stock'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
        }


        $data['title'] = $data['stock']['title'];

        return view('templates/header', $data)
                 . view('news/view')
 		 . view('templates/footer');
    
    }
    
    public function contact()
    {


        $model = model(ContactModel::class);
        if ($this->request->getMethod() === 'post' && $this->validate([
            'name'=>'required',
            'email' => 'required|valid_email',
            'phone'  => 'required|min_length[10]|max_length[10]',
        ])) 
        {
            $model->insert([
                'name'    => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone'  => $this->request->getPost('phone'),
                'msg'  => $this->request->getPost('msg'),
               
            ]);
           

            return view('templates/header')
            . view('pages/home')
            . view('templates/footer');
        }
        
        return view('templates/header',['title' => ''])
            .view('templates/nav')
            . view('news/contact')
            . view('templates/footer');
    }

    public function create()
    {
        $model = model(UserModel::class);
        $result=$model->where('id',$this->request->getVar('id'))->first();
        
        if ($this->request->getMethod() === 'post' && $this->validate([
            'id'=>'required',
            'title' => 'required|min_length[3]|max_length[255]',
            'body'  => 'required',
        ])) 
        {
            if($result==null){
            $model->insert([
                'id'    => $this->request->getPost('id'),
                'title' => $this->request->getPost('title'),
                'slug'  => $this->request->getPost('title'),
                'body'  => $this->request->getPost('body'),
               
            ]);
           

            return view('templates/header')
            . view('pages/home')
            . view('templates/footer');
        }
        else{
            return view('templates/header',['title' => 'user already exist'])
            . view('news/create')
            . view('templates/footer');
        }
        }

        return view('templates/header',['title' => ''])
        .view('templates/nav')
            . view('news/create')
            . view('templates/footer');
    }
    public function login()
    {
       $model = model(UserModel::class);
       $mel = model(NewsModel::class);

       $data = [
           'stock'  => $mel->getNews(),
           'title' => 'News archive',
       ];
      // $result1=$model->where('id',$this->request->getVar('id'))->first();
        $result=$model->where('title',$this->request->getVar('title'))->first();
        //print_r($result);
        if($result!=null )
        {
            if($result['body']==$this->request->getVar('body') )
            {
                if($result['id']==$this->request->getVar('id'))
                {
                return view('templates/header', ['title' => 'enter valid id'])
                . view('news/add')
                . view('news/crud',$data)
		    ;
                }
                else
                {
                    return view('templates/header', ['title' => 'enter valid id'])
                    
                . view('news/login');
                }
            }
            else{
                return view('templates/header', ['title' => 'enter valid password'])
               
                . view('news/login');
                
            }
        }
       
        return view('templates/header',['title' => ''])
        .view('templates/nav')
                    . view('news/login');
                    
    }
        public function add()
    {
        $model = model(NewsModel::class);
       // $mel = model(NewsModel::class);
        
       $data = [
           'stock'  => $model->getNews(),
           'title' => 'News archive',
       ];
        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body'  => 'required',
        ])) {
            
            $model->save([
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', true),
                'body'  => $this->request->getPost('body'),
               
            ]);

            return view('templates/header', ['title' => 'Create a news item'])
            . view('news/add')
            .view('news/crud',$data)
            ;
        }

        return view('templates/header', ['title' => 'Create a news item'])
            . view('news/add')
            .view('news/crud',$data);
    }
    public function delete()
    {
      
        $model = model(NewsModel::class);
        $data = [
            'stock'  => $model->getNews(),
            'title' => 'News archive',
        ];
        if ($this->request->getMethod() === 'post' && $this->validate([
            'id'  => 'required',
        ])){
           $model->delete(
            [
                'id'=> $this->request->getPost('id')
            ]
           );
           return view('templates/header')
           . view('news/delete')
           .view('news/crud',$data)
           ;
        }

        return view('templates/header', ['title' => 'enter valid id'])
            . view('news/delete')
            .view('news/crud',$data);
          
    }
    public function update()
    {
        $model = model(NewsModel::class);
       // $mel = model(NewsModel::class);

       $data = [
           'stock'  => $model->getNews(),
           'title' => 'News archive',
       ];
       $result=$model->where('id',$this->request->getVar('id'))->first();
        
        if (empty($data)) {
             throw DataException::forEmptyDataset($type);
        }
        else
        {
        if ($this->request->getMethod() === 'post' && $this->validate([
            'id'=>'required',
            'title' => 'required|min_length[3]|max_length[255]',
            'body'  => 'required',
        ]))
         {
            $id=$this->request->getPost('id');
            $des=$this->request->getPost('body');
            if($result!=null)
            {
                if($result['id']==$this->request->getPost('id'))
                {
                    $model->save([
                        'id'=>$this->request->getPost('id'),
                        'title' => $this->request->getPost('title'),
                        'slug'  => url_title($this->request->getPost('title'), '-', true),
                        'body'  => $this->request->getPost('body'),
                       
                    ]);
                }
            }
            else{
                return view('templates/header', ['title' => 'enter valid id'])
            . view('news/update')
            .view('news/crud',$data);
           
            }
        }
    }

        return view('templates/header', ['title' => ''])
            . view('news/update')
            .view('news/crud',$data)
            ;
    }
    
}




