<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreResumeRequest;
use App\Models\City;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class AdminController extends Controller
{

    public function index()
    {
        $userId = auth()->user()->id;
        $resumes = User::find($userId)->resumes;
        return view('admin.index', compact('resumes'));

    }


    public function create()
    {
        $cities = City::all();
        $countries = Country::all();
        return view('admin.create', compact('cities', 'countries'));

    }

    public function store(StoreResumeRequest $request)
    {

        $user = auth()->user();
        Resume::create([
            'name' => $request->name,
            'user_id' => $user->id,
            'surname' => $request->surname,
            'city' => $request->city,
            'speciality' => $request->speciality,
            'gender' => $request->gender,
            'birth_day' => $request->birth_day,
            'citizen' => $request->citizen,
            'spent_creation_time' => $request->spent_creation_time,
            'experience' => 1,
        ]);

        return redirect()->route('cabinet');

    }

    public function edit(Resume $resume)
    {
        $cities = City::all();
        $countries = Country::all();
        return view('admin.edit', compact('cities', 'countries', 'resume'));
    }

    public function update(StoreResumeRequest $request, Resume $resume)
    {
        $resume->update($request->all());

        return redirect('admin');
    }

    public function destroy(Resume $resume)
    {
        $resume->delete();

        return redirect('admin');
    }

    public function downloadPDF(Resume $resume)
    {
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('pdf', compact('resume'));
        return $pdf->download('resumes.pdf');
    }

}

