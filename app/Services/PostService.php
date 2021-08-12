<?php


namespace App\Services;


use App\Http\Requests\PostRequest;
use App\Repository\Eloquent\PostRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostService
{
    private $postRepository;
    const NEWS_INDEX = 1;
    const AD_INDEX = 2;
    const ACTIVE_POST = 1;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAll()
    {
        return $this->postRepository->getAll();
    }

    public function create(PostRequest $request)
    {
        $attributes = $request->all();
        $attributes['date'] = Carbon::createFromFormat('d/m/Y', $attributes['date'])->toDateTimeString();
        $attributes['is_active'] = array_key_exists('is_active', $attributes) ? 1 : 0;
        $attributes['slug'] = \Str::slug($attributes['title_en'] . '-' . time());
        return $this->postRepository->create($attributes);
    }

    public function findById($id)
    {
        return $this->postRepository->findById($id);
    }

    public function changeVisibility($id)
    {
        $post = $this->postRepository->findById($id);
        if ($this->isActive($post)) {
            $post->is_active = 0;
        } else {
            $post->is_active = 1;
        }

        return $post->save();
    }

    private function isActive($post)
    {
        return $post->is_active == 1 ? true : false;
    }

    public function changeDateFormat($post)
    {
        return date('d/m/Y', strtotime($post->date));
    }

    public function deleteById($id)
    {
        return $this->postRepository->findById($id)->delete();
    }

    public function updateById($id, Request $request)
    {
        $attributes = $request->all();
        $attributes['date'] = Carbon::createFromFormat('d/m/Y', $attributes['date'])->toDateTimeString();
        $attributes['is_active'] = array_key_exists('is_active', $attributes) ? 1 : 0;
        if ($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('images/post', 'public_path');
        }
        return $this->postRepository->findById($id)->update($attributes);
    }

    public function getAllWithPaginate($paginate_count)
    {
        return $this->postRepository
            ->model()
            ->where('is_active',self::ACTIVE_POST)
            ->orderBy('date', 'desc')
            ->paginate($paginate_count);
    }

    public function getNewsWithPaginate($paginate_count)
    {
        return $this->postRepository
            ->model()
            ->where('type',self::NEWS_INDEX)
            ->where('is_active',self::ACTIVE_POST)
            ->orderBy('date', 'desc')
            ->paginate($paginate_count);
    }

    public function getAdsWithPaginate($paginate_count)
    {
        return $this->postRepository
            ->model()
            ->where('type',self::AD_INDEX)
            ->where('is_active',self::ACTIVE_POST)
            ->orderBy('date', 'desc')
            ->paginate($paginate_count);
    }

    public function getLatestFiveNews()
    {
        return $this->postRepository->getLatestFiveNews();
    }

    public function getLatestFiveAd()
    {
        return $this->postRepository->getLatestFiveAd();
    }

    public function findBySlug($slug)
    {
        return $this->postRepository->findBySlug($slug);
    }

    public static function dateFormat($date, $locale)
    {
        $str = '';
        $month = date('n', strtotime($date));
        $date = date('88 d, Y', strtotime($date));
        Carbon::setLocale($locale);
        $carbon = Carbon::createFromDate(2000, $month, 15);
        $month = $carbon->monthName;
        if ($locale == 'uz') {
            $month = self::translateKuzToUz($month);
        }
        $month = mb_convert_case($month, MB_CASE_TITLE, "UTF-8");
        return str_replace('88', $month, $date);
    }

    private static function translateKuzToUz($str)
    {
        $cyr = ['Љ', 'Њ', 'Џ', 'џ', 'ш', 'ђ', 'ч', 'ћ', 'ж', 'љ', 'њ', 'Ш', 'Ђ', 'Ч', 'Ћ', 'Ж', 'Ц', 'ц', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я'
        ];
        $lat = ['Lj', 'Nj', 'Dž', 'dž', 'š', 'đ', 'č', 'ć', 'ž', 'lj', 'nj', 'Š', 'Đ', 'Č', 'Ć', 'Ž', 'C', 'c', 'a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'ts', 'ch', 'sh', 'sht', 'a', 'i', 'y', 'e', 'yu', 'ya', 'A', 'B', 'V', 'G', 'D', 'E', 'Io', 'Zh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'Ts', 'Ch', 'Sh', 'Sht', 'A', 'I', 'Y', 'e', 'Yu', 'Ya'
        ];
        $textcyr = str_replace($cyr, $lat, $str);
        return $textcyr;
    }
}
