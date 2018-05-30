<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateVacanciesPost;
use Illuminate\Http\Request;

use App\vacancy;

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

    public function store()
    {
        $vacancy = new Vacancy();
        $vacancy->title = request('title');
        $vacancy->description = request('description');
        $vacancy->save();

        return redirect()->action('VacanciesController@index')->with('Succes', 'advertentie geplaatst.');

    }

    public function show(vacancy $vacancy)
    {

        return view('vacancies.show', compact('vacancy'));

    }

    public function edit(vacancy $vacancy)
    {
        return view('vacancies.edit',  compact('vacancy'));
    }

    public function update(UpdateVacanciesPost $request, vacancy $vacancy)
    {
        $vacancy->update($request->only('id','title','description'));

        return redirect()->action('VacanciesController@index')->with('Correct', 'Vacancy Updated');
    }

    public function destroy($id)
    {
        $vacancy = vacancy::findOrFail($id);
        $vacancy->delete();

        return redirect()->action('VacanciesController@index');
    }
}
