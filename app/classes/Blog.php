<?php

namespace App\classes;

class Blog
{
    protected $title;
    protected $authorName;
    protected $description;
    protected $image;
    protected $imageName;
    protected $imageDirectory;
    protected $fileName;
    protected $file;
    protected $data;
    protected $array;
    protected $array1;
    protected $array2;

    public function __construct($post=null)
    {
//        echo '<pre>';
//        print_r($post);
//        print_r($_FILES);

        if ($post)
        {
            $this->title = $post['title'];
            $this->authorName = $post['author_name'];
            $this->description = $post['description'];
        }
    }
    public function index()
    {
        $this->image = $this->imageUpload();

        $this->fileName = 'db.txt';
        $this->file = fopen('db.txt','a');
        $this->data = "$this->title,$this->authorName,$this->description,$this->image$";
        fwrite($this->file, $this->data);
        fclose($this->file);
        return 'Data Saved Successfully';
    }
    protected function imageUpload()
    {
        $this->imageName = $_FILES['image']['name'];
        $this->imageDirectory = 'assets/img/upload/'.$this->imageName;
        move_uploaded_file($_FILES['image']['tmp_name'],$this->imageDirectory);
        return $this->imageDirectory;
    }
    public function getAllBlogs()
    {
        $this->fileName = 'db.txt';
        $this->data = file_get_contents($this->fileName);
        $this->array = explode('$',$this->data);
        foreach ($this->array as $key => $value)
        {
            $this->array1 = explode(',', $value);

            if ($this->array1[0])
            {
                $this->array2[$key]['title'] = $this->array1[0];
                $this->array2[$key]['author'] = $this->array1[1];
                $this->array2[$key]['description'] = $this->array1[2];
                $this->array2[$key]['image'] = $this->array1[3];
            }
        }
        return $this->array2;
    }

}