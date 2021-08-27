<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Page;


class CodesaverController extends Controller
{
    //

    public function pageIndex(){
       
        $pages = Page::all();

        return view("codesaver.index",["pages"=>$pages]);
    }

    public function pageSave(){
        $pagename = request()->pagename;

        if($pagename !== null){
            $page = new Page();
            $page->name = $pagename;
            $page->save();
        }

        return redirect()->route("codesaver.index");

    }

    public function pageShow(Page $page){

        return view("codesaver.field",["page"=>$page]);
    }

    public function fieldEdit($id){

        //dd(request()->all());

        $field = Field::find($id);
        $field->name = request()->name;
        $field->html = request()->html;
        $field->css = request()->css;
        $field->others = request()->others;
        $field->save();


        $page = Page::find($field->page_id);

        return view("codesaver.field",["page"=>$page]);
    }

    public function fieldSave($id){

        //dd(request()->all());

        $field = new Field();
        $field->name = request()->name;
        $field->html = request()->html;
        $field->css = request()->css;
        $field->others = request()->others;
        $field->page_id = $id;
        $field->save();
        $page = Page::find($id);

        return view("codesaver.field",["page"=>$page]);
    }
}
