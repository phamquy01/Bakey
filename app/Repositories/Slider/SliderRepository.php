<?php

namespace App\Repositories\Slider;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderRepository implements SliderRepositoryInterface
{
    private $slider;
    public function __construct(Slider $slider)
    {
        $this->slider = $slider;

    }
    public function find($id){
        return $this->slider->withTrashed()->find($id);
    }

    public function getAllSlider()
    {
        return $this->slider->withTrashed()->get();
    }
    public function create(Request $request){
        $request->validate(
            [
                'image' => 'required|mimes:jpg,png,gif,webp|max:20000',
            ],
            [
                'required'=> ':attribute không được bỏ trống!',
                'mimes'=> ':attribute chỉ được dùng file jpg,png,gif,webp'
            ],
            [
                'image'=>'Hình ảnh',
            ]
        );
        if(!empty($request->file('image'))) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path("uploads"), $fileName);
            $pathSlide = '/uploads/' . $fileName;
            return $this->slider->create([
                'url' => $pathSlide
            ]);
        }else return null;
    }

    //API
    public function getSliderShow()
    {
        return $this->slider->get();
    }
}
