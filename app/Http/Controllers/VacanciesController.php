<?php

namespace App\Http\Controllers;

use App\vacancy;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    public function index()
    {
        $vacancies = vacancy::orderBy('created_at', 'asc')->get();

        return view('vacancies.index', compact('vacancies'));
    }


    public function create(Vacancy $vacancy)
    {
        return view('vacancies.create', compact('vacancy'));
    }

    public function show(vacancy $vacancy)
    {

        return view('vacancies.show', compact('vacancy'));

    }

    public function delete(vacancy $vacancy)
    {

        $vacancy->delete($vacancy);

        return view('vacancies.delete', compact('vacancy'));

    }

    public function edit(vacancy $vacancy)
    {
        return view('vacancies.edit',  compact('vacancy'));
    }

    public function update(Request $request, $id)
    {

        $this->validate(request(), [

            'body' => 'required',
            'title' => 'required'



        ]);
        $post = Vacancy::find($id);
        $post->update($request->all());

        /* Session::flash('message', 'Successfully updated Blog!');
         return redirect(route('posts.all'));*/
    }


    public function store()
    {
        $this-> validate(request(), [

            'title' => 'required',

            'body' => 'required'
        ]);

        vacancy::create(request(['title', 'body']));

        return redirect('/vacancies');

    }
}
