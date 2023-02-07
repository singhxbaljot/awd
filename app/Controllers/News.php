<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

// This is our news controller
class News extends BaseController
{

    // Lists all news items
    public function index()
    {
        // instantiate our model (i.e. we "grab" our model)
        $model = model(NewsModel::class);

        // we call the models getNews function
        $data = [
            'news' => $model->getNews(),
            // here, we get our news items from model
            'title' => 'News archive', // and a title for the page
        ];

        //print_r($data['news']); 


        // Loads views , passing our data object
        return view('templates/header', $data)
            . view('news/index')
            . view('templates/footer');
    }

    // Lists ONE news item, based on its slug
    public function view($slug = null)
    {

        // Grab our model
        $model = model(NewsModel::class);

        // Load SINGLE news item from model, passing in its slug (id)
        $data['news'] = $model->getNews($slug);

        // Deal with case where slug does not exist
        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        // Also specify title
        $data['title'] = $data['news']['title'];


        // Load our view, and pass in data object
        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
    }

    // this function is for the creation of news articles
    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (!$this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create a news item'])
                . view('news/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['title', 'body']);

        // Checks whether the submitted data passed the validation rules.
        if (
            !$this->validateData($post, [
                'title' => 'required|max_length[255]|min_length[3]',
                'body' => 'required|max_length[5000]|min_length[10]',
            ])
        ) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Create a news item'])
                . view('news/create')
                . view('templates/footer');
        }


        // grab our model, for database access
        $model = model(NewsModel::class);

        $model->save([
            'title' => $post['title'],
            'slug' => url_title($post['title'], '-', true),
            'body' => $post['body'],
        ]);

        // return view('templates/header', ['title' => 'Create a news item'])
        //     . view('news/success')
        //     . view('templates/footer');
        // redirect to home page instead of success page
        return redirect()->to('news/');
        
    }
}