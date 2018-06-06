<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVacanciesPost;
use App\Http\Requests\UpdateVacanciesPost;
use Illuminate\Http\Requests;

use App\vacancy;

class VacanciesController extends Controller
{
    public function index()
    {
        $vacancies = vacancy::orderBy('created_at', 'asc')->get();

        /*$vacancy = DB::table('vacancies')
            ->join('occupations', 'vacancies.occupationId', '=', 'occupations.id')
            ->select('vacancies.*', 'occupations.title')
            ->get();*/

        return view('vacancies.index', compact('vacancies'));
    }

    public function create(Vacancy $vacancy)
    {
        return view('vacancies.create', compact('vacancy'));
    }

    public function store(StoreVacanciesPost $request)
    {
        $vacancy = new Vacancy();
        $vacancy->title = request('title');
        $vacancy->occupation = request('occupation');
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
        $vacancy->title = $request->title;
        $vacancy->occupation = $request->occupation;
        $vacancy->description = $request->description;
        $vacancy->save();

        return redirect()->action('VacanciesController@index')->with('Correct', 'Vacancy Updated');
    }

    public function destroy($id)
    {
        $vacancy = vacancy::findOrFail($id);
        $vacancy->delete();

        return redirect()->action('VacanciesController@index');
    }
}
