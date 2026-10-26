<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\JobOpening;
use App\Models\Journal;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $primeCustomers = Client::where('category', 'prime_customer')
            ->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();

        $testimonials = Testimonial::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        return view('frontend.index', compact('primeCustomers', 'testimonials'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function products()
    {
        return view('frontend.products');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function mining()
    {
        return view('frontend.mining');
    }

    public function tataHitachi()
    {
        $thSlugs = [
            'mini-excavators', 'construction-excavators', 'mining-excavators',
            'backhoe-loaders', 'wheel-loaders', 'dump-trucks',
            'attachments', 'used-equipment', 'customized-machines',
        ];

        $categories = ProductCategory::whereIn('slug', $thSlugs)->where('status', 'active')->get();
        // Sort categories based on the array order to maintain the sidebar order
        $categories = $categories->sortBy(function ($category) use ($thSlugs) {
            return array_search($category->slug, $thSlugs);
        });

        $products = Product::with('category')
            ->whereHas('category', function ($q) use ($thSlugs) {
                $q->whereIn('slug', $thSlugs);
            })
            ->where('status', 'active')->orderBy('id', 'desc')->get();

        return view('frontend.tata-hitachi', compact('categories', 'products', 'thSlugs'));
    }

    public function schwingStetter()
    {
        $schwingSlugs = ['batching-plant', 'concrete-machinery', 'precast', 'sludge-pump', 'pump', 'other-products'];
        $categories = ProductCategory::whereIn('slug', $schwingSlugs)
            ->where('status', 'active')
            ->orderByRaw("CASE WHEN slug = 'other-products' THEN 1 ELSE 0 END")
            ->orderBy('name')
            ->get();
        $products = Product::with('category')
            ->whereHas('category', function ($q) use ($schwingSlugs) {
                $q->whereIn('slug', $schwingSlugs);
            })
            ->where('status', 'active')->orderBy('id', 'desc')->get();

        return view('frontend.schwing-stetter', compact('categories', 'products'));
    }

    public function ascensoTyres()
    {
        $schwingSlugs = ['batching-plant', 'concrete-machinery', 'precast', 'sludge-pump', 'pump', 'other-products'];
        $thSlugs = [
            'mini-excavators', 'construction-excavators', 'mining-excavators',
            'backhoe-loaders', 'wheel-loaders', 'dump-trucks',
            'attachments', 'used-equipment', 'customized-machines',
        ];
        $excludedSlugs = array_merge($schwingSlugs, $thSlugs);

        $products = Product::where('status', 'active')
            ->where(function ($q) use ($excludedSlugs) {
                $q->whereDoesntHave('category')
                    ->orWhereHas('category', function ($q2) use ($excludedSlugs) {
                        $q2->whereNotIn('slug', $excludedSlugs);
                    });
            })
            ->orderBy('id', 'desc')->get();

        return view('frontend.ascenso-tyres', compact('products'));
    }

    public function eicherTrucks()
    {
        $journals = Journal::where('is_active', true)->orderBy('publish_date', 'desc')->get();

        return view('frontend.eicher-trucks', compact('journals'));
    }

    public function clients($filter = null)
    {
        $keyCustomers = Client::where('category', 'key_customer')
            ->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $primeCustomers = Client::where('category', 'prime_customer')
            ->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $oemPartners = Client::where('category', 'oem')
            ->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $testimonials = Testimonial::where('is_active', true)
            ->where('card_type', 'text')
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        return view('frontend.clients', compact('filter', 'keyCustomers', 'primeCustomers', 'oemPartners', 'testimonials'));
    }

    public function careers()
    {
        $jobs = JobOpening::where('status', 'open')
            ->orderBy('id', 'desc')
            ->get();

        return view('frontend.careers', ['jobs' => $jobs]);
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function gallery(Request $request, $filter = null)
    {
        $categories = Category::where('status', 'active')
            ->orderBy('name')
            ->get();

        $query = Gallery::with('category')
            ->where('status', 'active');

        if ($request->filled('category')) {

            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });

        }

        $data = $query
            ->latest()
            ->get();

        return view('frontend.gallery', compact(
            'categories',
            'data',
            'filter'
        ));
    }
}
