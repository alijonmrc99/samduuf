<?php


namespace App\Services;

use App\Repository\Eloquent\BannerRepository;
use Illuminate\Http\Request;

class BannerService
{
    private $bannerRepository;

    public function __construct(BannerRepository $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }

    public function create(Request $request)
    {
        return $this->bannerRepository->create([
            'image' => $request->file('image')->store('images/banner','public_path'),
            'priority' => $request->get('priority')
        ]);
    }

    public function getAll(){
        return $this->bannerRepository->getAll();
    }

    public function updateById($id,Request $request){
        if ($request->hasFile('image')){
            $attributes['image'] =  $request->file('image')->store('images/banner','public_path');
        }

        $attributes['priority'] = $request->get('priority');

        return $this->bannerRepository->findById($id)->update($attributes);
    }

    public function deleteById($id)
    {
        return $this->bannerRepository->findById($id)->delete();
    }
}
