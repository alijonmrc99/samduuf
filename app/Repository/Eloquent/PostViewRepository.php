<?php


namespace App\Repository\Eloquent;


use App\Models\PostView;

class PostViewRepository extends BaseRepository
{
    protected $model;

    public function __construct(PostView $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }

    public function add($attr)
    {
        return $this->model
            ->create($attr);
    }

    public function count($post_id)
    {
        return $this->model
            ->newQuery()
            ->where('post_id', $post_id)
            ->distinct(['ip'])
            ->count();
    }

    public function countByIds(array $post_ids)
    {
        return $this->model
            ->newQuery()
            ->whereIn('post_id', $post_ids)
            ->selectRaw('post_id, COUNT(Distinct session_id, ip, agent) as views')
            ->groupBy('post_id')->get();
    }
}
