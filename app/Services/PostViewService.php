<?php


namespace App\Services;


use App\Repository\Eloquent\PostViewRepository;

class PostViewService
{
    private $postViewRepository;

    public function __construct(PostViewRepository $postViewRepository)
    {
        $this->postViewRepository = $postViewRepository;
    }

    public function add($post_id)
    {
        if (!is_int($post_id)) {
            throw new \InvalidArgumentException();
        }
        $attr = [
            'post_id' => $post_id,
            'session_id' => session()->getId(),
            'ip' => request()->getClientIp(),
            'agent' => request()->userAgent()
        ];
        return $this->postViewRepository->add($attr);
    }

    public function countViews($post_id)
    {
        if (!is_int($post_id)) {
            throw new \InvalidArgumentException();
        }
        return $this->postViewRepository->count($post_id);
    }

    public function countByIds(array $post_ids, array $second_post_ids = null)
    {
        if ($second_post_ids){
            foreach ($second_post_ids as $item) {
                array_push($post_ids,$item);
            }
        }

        $post_views = $this->postViewRepository->countByIds($post_ids)->pluck('views', 'post_id')->toArray();

        foreach ($post_ids as $post_id){
            if (!array_key_exists($post_id,$post_views)){
                $post_views[$post_id] = 0;
            }
        }

        return $post_views;
    }

}
