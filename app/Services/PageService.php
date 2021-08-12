<?php


namespace App\Services;


use App\Http\Requests\PageRequest;
use App\Repository\Eloquent\PageRepository;
use Illuminate\Http\Request;

class PageService
{
    private $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function store(PageRequest $request){
        return $this->pageRepository->store($request->all());
    }

    public function findByMenuId($menu_id){
        return $this->pageRepository->findByMenuId($menu_id);
    }

    public function findById($id){
        return $this->pageRepository->findById($id);
    }



    public function updateById($id,Request $request){
        return $this->pageRepository->findById($id)->update($request->all());
    }

    public function deleteById($id){
        return $this->pageRepository->findById($id)->delete();
    }


}
