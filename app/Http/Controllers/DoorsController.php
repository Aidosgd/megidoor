<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Door;

class DoorsController extends Controller
{
    public function index($doorCategory)
    {
        $doors = Door::where('doors_category_id', $doorCategory->id)->where('active', 1)->get();

        if($doorCategory->id == 1){
            $seo_title = 'Межкомнатные двери в Алматы. Натуральные деревянные двери в Алматы большой выбор. Купить онлайн недорогие двери межкомнатные в Алматы.';
            $seo_description = 'Межкомнатные двери в Алматы. Натуральные деревянные двери в Алматы.  Большой выбор, в наличии, описание, фото. Купить онлайн недорогие двери межкомнатные в Алматы.';
        }else{
            $seo_title = 'Металлические двери в Алматы. Качественные железные двери в Алматы в наличии. Купить онлайн металлические входные двери в Алматы.';
            $seo_description = 'Металлические двери в Алматы. Качественные железные двери в Алматы большой выбор, в наличии, описание, фото. Купить онлайн недорогие двери металлические в Алматы. Надежные входные двери в Алма';
        }

        return view('doors.index', compact('doors', 'doorCategory', 'seo_title', 'seo_description'));
    }

    public function show($doorCategory, $doorSlug)
    {
        $door = Door::where('doors_category_id', $doorCategory->id)
            ->where('slug', $doorSlug->slug)
            ->where('active', 1)
            ->first();

        $seo_title = $door->seo_title;
        $seo_keywords = $door->seo_keywords;
        $seo_description = $door->seo_description;

        return view('doors.show', compact('door', 'doorCategory', 'seo_title', 'seo_keywords', 'seo_description'));
    }

    public function manufacturer($doorCategory, $manufacturer)
    {
        $doors = Door::where('doors_category_id', $doorCategory->id)
            ->where('active', 1)
            ->where('manufacturer', $manufacturer)
            ->get();

        $CategoryName = [
            1 => 'Российские',
            2 => 'Белорусские',
            3 => 'Элитные',
        ];

        $doorCategory->name = $CategoryName[$manufacturer];

        return view('doors.index', compact('doors', 'doorCategory', 'manufacturer'));
    }
}
