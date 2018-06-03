<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdvertisementsPost;
use App\Http\Requests\UpdateAdvertisementsPost;
use Illuminate\Http\Request;

use App\advertisement;

class AdvertisementsController extends Controller
{
    public function index()
    {
        $advertisements = advertisement::orderBy('created_at', 'asc')->get();

        return view('advertisements.index', compact('advertisements'));
    }

    public function create(advertisement $advertisement)
    {
        return view('advertisements.create', compact('advertisement'));
    }

    public function store(StoreAdvertisementsPost $request)
    {
        $advertisement = new advertisement();
        $advertisement->title = request('title');
        $advertisement->description = request('description');
        $advertisement->save();

        return redirect()->action('AdvertisementsController@index')->with('Succes', 'advertentie geplaatst.');

    }

    public function show(advertisement $advertisement)
    {

        return view('advertisements.show', compact('advertisement'));

    }

    public function edit(advertisement $advertisement)
    {
        return view('advertisements.edit',  compact('advertisement'));
    }

    public function update(UpdateAdvertisementsPost $request, advertisement $advertisement)
    {
        $advertisement->title = $request->title;
        $advertisement->description = $request->description;
        $advertisement->save();

        return redirect()->action('AdvertisementsController@index')->with('Correct', 'advertisements Updated');
    }

    public function destroy($id)
    {
        $advertisement = advertisement::findOrFail($id);
        $advertisement->delete();

        return redirect()->action('AdvertisementsController@index');
    }
}
