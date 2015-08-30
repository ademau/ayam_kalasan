<?php

class ArticleController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $article = article::where("category_id","=",Input::get('gcategory_id'))->get();

        // load the view and pass the nerds
        return View::make('pages.Admin.Article.index')
            ->with('article', $article);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return View::make('pages.Admin.Article.create')->with('category_id',Input::get('gcategory_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $article = new article;
        $article->title = Input::get('title');
        $article->short_description = Input::get('short_description');
        $article->image = Input::get('image');
        $article->description = Input::get('description');
        $article->category_id = Input::GET('category_id');
        $article->save();
        return View::make('pages.Admin.Article.alert')->with('pesan',$article->title.' Saved');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       $article = article::find($id);

        // load the view and pass the nerds
        return View::make('pages.Admin.Article.edit')
            ->with('row', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
         $article   = article::where('id', '=', Input::get('id'))->update(array('title'=> Input::get('title'),'short_description'=> Input::get('short_description'),'description'=> Input::get('description'),'image'=> Input::get('image')));
   
        return View::make('pages.Admin.Article.alert')->with('pesan',$article->title.' Updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
         $article   = article::where('id', '=', Input::get('id'))->update(array('title'=> Input::get('title'),'short_description'=> Input::get('short_description'),'description'=> Input::get('description'),'image'=> Input::get('image')));
   
        return 'Updated';
    }

    /**
     * Remove the specified resource from sto';//////rage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $article = article::find($id);
        $article->delete();
        return "Deleted";
    }

}
?>