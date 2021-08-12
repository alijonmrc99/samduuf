<?php


namespace App\Repository\Eloquent;


use App\Models\Post;

class PostRepository extends BaseRepository
{
    const NEWS_INDEX = 1;
    const AD_INDEX = 2;
    const ACTIVE_POST = 1;
    protected $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }

    public function model(){
        return $this->model;
    }

    public function getAll()
    {
        return $this->model->get();
    }

    public function create($attributes){
        return $this->model->create($attributes);
    }

    public function findById($id){
        return $this->model->findOrFail($id);
    }

    public function findBySlug($slug)
    {
        return $this->model->where('slug',$slug)->firstOrFail();
    }

    public function getLatestFiveNews(){
        return $this->model
            ->where('type',self::NEWS_INDEX)
            ->where('is_active',self::ACTIVE_POST)
            ->orderBy('date','desc')->limit(5)
            ->get();
    }


    public function getLatestFiveAd(){
        return $this->model
            ->where('type',self::AD_INDEX)
            ->where('is_active',self::ACTIVE_POST)
            ->orderBy('date','desc')
            ->limit(5)
            ->get();
    }
}
