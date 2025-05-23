<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Subject;
use Carbon\Carbon;

class UniversityController extends Controller
{
    public function index(Request $request)
    {
        $query = University::query();

        if ($request->filled('tipe')) {
            $query->where('tipe', $request->input('tipe'));
        }

        if ($request->has('subjects')) {
            $selectedSubjects = $request->input('subjects');
            $query->whereHas('subjects', function ($q) use ($selectedSubjects) {
                $q->whereIn('name', $selectedSubjects);
            });
        }

        $universities = $query->orderBy('application_deadline')->paginate(8);

        // Featured universities berdasarkan row (1–5)
        $featuredUniversitiesRow1 = University::where('row', 1)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow2 = University::where('row', 2)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow3 = University::where('row', 3)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow4 = University::where('row', 4)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow5 = University::where('row', 5)->orderBy('ranking')->take(3)->get();

        return view('pages.detail.module_detail', compact(
            'universities',
            'featuredUniversitiesRow1',
            'featuredUniversitiesRow2',
            'featuredUniversitiesRow3',
            'featuredUniversitiesRow4',
            'featuredUniversitiesRow5'
        ));
    }

    public function bachelor()
    {
        $universities = University::where('tipe', 'bachelor')
            ->orderBy('application_deadline')
            ->paginate(8);

        $featuredUniversitiesRow1 = University::where('row', 1)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow2 = University::where('row', 2)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow3 = University::where('row', 3)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow4 = University::where('row', 4)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow5 = University::where('row', 5)->orderBy('ranking')->take(3)->get();

        return view('pages.detail.filterby.bachelor', compact(
            'universities',
            'featuredUniversitiesRow1',
            'featuredUniversitiesRow2',
            'featuredUniversitiesRow3',
            'featuredUniversitiesRow4',
            'featuredUniversitiesRow5'
        ));
    }

    public function master()
    {
        $universities = University::where('tipe', 'master')
            ->orderBy('application_deadline')
            ->paginate(8);

        $featuredUniversitiesRow1 = University::where('row', 1)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow2 = University::where('row', 2)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow3 = University::where('row', 3)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow4 = University::where('row', 4)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow5 = University::where('row', 5)->orderBy('ranking')->take(3)->get();

        return view('pages.detail.filterby.master', compact(
            'universities',
            'featuredUniversitiesRow1',
            'featuredUniversitiesRow2',
            'featuredUniversitiesRow3',
            'featuredUniversitiesRow4',
            'featuredUniversitiesRow5'
        ));
    }

    public function postgraduate()
    {
        $universities = University::whereIn('tipe', ['postgraduate', 'diploma'])
            ->orderBy('application_deadline')
            ->paginate(8);

        $featuredUniversitiesRow1 = University::where('row', 1)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow2 = University::where('row', 2)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow3 = University::where('row', 3)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow4 = University::where('row', 4)->orderBy('ranking')->take(3)->get();
        $featuredUniversitiesRow5 = University::where('row', 5)->orderBy('ranking')->take(3)->get();

        return view('pages.detail.filterby.postgraduete', compact(
            'universities',
            'featuredUniversitiesRow1',
            'featuredUniversitiesRow2',
            'featuredUniversitiesRow3',
            'featuredUniversitiesRow4',
            'featuredUniversitiesRow5'
        ));
    }
}
