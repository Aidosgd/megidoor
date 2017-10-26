<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Главная' => '/cp',
            'Новости' => '',
        ];

        $pageTitle = 'Все новости';

        $page = News::get();

        return view('admin.news.index', compact('page', 'breadcrumbs', 'pageTitle'));
    }

    public function create()
    {
        $breadcrumbs = [
            'Главная' => '/cp',
            'Новости' => '/cp/news',
            'Создать новость' => '',
        ];

        $pageTitle = 'Создать новость';

        $pages = News::all()->lists('title','id');


        return view('admin.news.form', [
            'page' => null,
            'breadcrumbs' => $breadcrumbs,
            'pageTitle' => $pageTitle,
            'pages' => $pages,
        ]);
    }

    public function store(Request $request)
    {
        $input  = $request->input();

//        dd($input);

        $page = new News();

        $page->fill([
            'title' => $input['title'],
            'slug' => Str::slug($input['title'], '_'),
            'weight' => $input['weight'],
            'description' => $input['description'],

            'seo_title' => $input['seo_title'],
            'seo_keywords' => $input['seo_keywords'],
            'seo_description' => $input['seo_description'],
        ]);

        $page->save();

        return redirect('/cp/news');
    }

    public function edit($news)
    {

        $breadcrumbs = [
            'Главная' => '/cp',
            'Новости' => '/cp/news',
            'Создать меню' => '',
        ];

        $pageTitle = 'Создать меню';

        $pages = News::all()->lists('title','id');

        return view('admin.news.form', [
            'page' => $news,
            'breadcrumbs' => $breadcrumbs,
            'pageTitle' => $pageTitle,
            'pages' => $pages,
        ]);
    }

    public function update(Request $request, $page)
    {
        $input = $request->all();

        $page->fill([
            'title' => $input['title'],
            'slug' => Str::slug($input['title'], '_'),
            'weight' => $input['weight'],
            'description' => $input['description'],

            'seo_title' => $input['seo_title'],
            'seo_keywords' => $input['seo_keywords'],
            'seo_description' => $input['seo_description'],
        ]);

        $page->update();

        Session::flash('message', 'Новости отредактирован');
        Session::flash('alert-class', 'alert-success');

        return redirect('/cp/news');
    }

    public function destroy($page)
    {
        $page->delete();

        Session::flash('message', 'Новость удалено');
        Session::flash('alert-class', 'alert-danger');

        return redirect('/cp/news');
    }
}
