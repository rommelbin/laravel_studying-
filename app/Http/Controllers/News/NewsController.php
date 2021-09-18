<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Repositories\News\NewsRepository;
class NewsController extends BaseNewsController
{
    /**
     * Display a listing of the resource.
     * @var \App\Http\Repositories\News\NewsRepository $newsRepository
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    
    protected $newsRepository;
    public function __construct()
    {
        parent::__construct();
        $this->newsRepository = app(NewsRepository::class);
    }
    public function index()
    {
        $news = $this->newsRepository->getAll();
        return view('news.news_main', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('news.new_news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {   
        $data = $request->input();
        $this->newsRepository->saveData($data);
        return redirect('default/news', 302);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = $this->newsRepository->getOneById($id);
        return view('news.one_new', ['news' => $news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
