<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Beneficiary;
use App\Models\Support;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SiteController extends Controller
{
    public $team;
    
    public $about_us;
    public $beneficiary_data;
    public $contacts;
    public $blogs;
    public $testimonials;

    public function __construct()
    {
        try {
            $this->team = $this->getDataWithPaginate('teams', 'asc', 10) ?? [];
            $this->about_us = $this->getOneRecord('abouts', 'asc') ?? [];
            $this->beneficiary_data = $this->getBeneficiary() ?? [];
            $this->contacts = $this->getOneRecord('contacts', 'desc') ?? [];
            $this->blogs = $this->getData('blogs', 'desc') ?? [];
            $this->testimonials = $this->getData('testimonials', 'desc') ?? [];
        } catch (\Exception $e) {
            Log::error('SiteController initialization error: ' . $e->getMessage());
        }
    }

    public function index()
    {
        try {
            $count_data = [
                "applications" => Application::count() ?? 0,
                "beneficaries" => Beneficiary::count() ?? 0,
                "partners" => Support::count() ?? 0,
                "members" => Team::count() ?? 0
            ];

            return view('pages.index', [
                'teams' => $this->team,
                'contacts' => $this->contacts,
                'blogs' => $this->getDataWithPaginate('blogs', 'asc', 3) ?? [],
                'faqs' => $this->getData('questions', 'asc') ?? [],
                'testimonials' => $this->testimonials,
                'heroes' => $this->getData('heroes', 'desc') ?? [],
                'partners' => $this->getData('supports', 'desc') ?? [],
                "totals" => $count_data
            ]);
        } catch (\Exception $e) {
            Log::error('Index page error: ' . $e->getMessage());
            abort(500, 'Something went wrong');
        }
    }

    public function about()
    {
        return view('pages.about', [
            'teams' => $this->team,
            'about_us' => $this->about_us,
            'contacts' => $this->contacts
        ]);
    }

    public function contact()
    {
        return view('pages.contact', ['contacts' => $this->contacts]);
    }

    public function causes()
    {
        return view('pages.causes', [
            'causes' => $this->getData('causes', 'desc') ?? [],
            'contacts' => $this->contacts
        ]);
    }

    public function donation()
    {
        return view('pages.donation', [
            'contacts' => $this->contacts,
            'why_donates' => $this->getOneRecord('donates', 'desc') ?? []
        ]);
    }

    public function all_stories()
    {
        return view('pages.success_stories', [
            'contacts' => $this->contacts,
            'stories' => $this->getDataWithPaginate('stories', 'desc', 4) ?? [],
            'testimonials' => $this->testimonials
        ]);
    }

    public function stories($id)
    {
        try {
            $single_record = DB::table('stories')
                ->where('isVisible', 1)
                ->where('id', $id)
                ->first();

            $multiple_record_except_id = DB::table('stories')
                ->where('isVisible', 1)
                ->where('id', '!=', $id)
                ->paginate(4);

            return view('pages.stories', [
                'contacts' => $this->contacts,
                'single_record' => $single_record ?? null,
                'multiple_record' => $multiple_record_except_id ?? [],
                'testimonials' => $this->testimonials
            ]);
        } catch (\Exception $e) {
            Log::error('Stories page error: ' . $e->getMessage());
            abort(404, 'Story not found');
        }
    }

    // public function gallery()
    // {
    //     return view('pages.gallery', [
    //         'contacts' => $this->contacts,
    //         'galleries' => $this->getData('galleries', 'desc' order: 'year') ?? []
    //     ]);
    // }
public function gallery()
{
    $years = DB::table('galleries')
        ->select('year')
        ->where('isVisible', 1)
        ->distinct()
        ->orderBy('year', 'desc')
        ->pluck('year')
        ->toArray();

    $defaultYear = !empty($years) ? $years[0] : date('Y');

    $galleries = DB::table('galleries')
        ->where('isVisible', 1)
        ->where('year', $defaultYear)
        ->orderBy('created_at', 'desc')
        ->get();

    $contacts = DB::table('contacts')->first(); // Or your contact query

    return view('pages.gallery', compact('years', 'defaultYear', 'galleries', 'contacts'));
}
// public function gallery()
// {b
//     return view('pages.gallery', [
//         'contacts' => $this->contacts,
//         'galleries' => $this->getGalleryData() ?? []
//     ]);
// }

    public function students()
    {
        return view('pages.beneficiary', [
            'beneficiary' => $this->beneficiary_data ?? [],
            'contacts' => $this->contacts
        ]);
    }

    public function eligibility()
    {
        return view('pages.eligiblity', [
            'criteria' => $this->getData('criterias', 'asc') ?? [],
            'requirements' => $this->getData('requirements', 'asc') ?? [],
            'contacts' => $this->contacts
        ]);
    }

    public function terms()
    {
        return view('pages.term_services', [
            'contacts' => $this->contacts,
            "terms" => $this->getData('terms', 'desc') ?? []
        ]);
    }

    public function blog()
    {
        return view('pages.blogs', [
            'blogs' => $this->blogs ?? [],
            'contacts' => $this->contacts
        ]);
    }

    public function download()
    {
        $filePath = public_path('application.pdf');

        if (file_exists($filePath)) {
            return response()->download($filePath);
        }

        abort(404, 'Application form not found');
    }

    // Private methods
    private function getDataWithPaginate($tableName, $order, $numberOfItem)
    {
        return DB::table($tableName)
            ->where('isVisible', 1)
            ->orderBy('created_at', $order)
            ->paginate($numberOfItem);
    }

    private function getData($tableName, $order)
    {
        return DB::table($tableName)
            ->where('isVisible', 1)
            ->orderBy('created_at', $order)
            ->get();
    }

    private function getOneRecord($tableName, $order)
    {
        return DB::table($tableName)
            ->where('isVisible', 1)
            ->orderBy('created_at', $order)
            ->first();
    }

    private function getBeneficiary()
    {
        return Beneficiary::where('status', 1)
            ->orderBy('created_at', 'asc')
            ->paginate(10);
    }
}