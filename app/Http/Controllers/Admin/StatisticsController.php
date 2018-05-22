<?php

namespace App\Http\Controllers\Admin;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Analytics\Analytics;
use Spatie\Analytics\Period;

class StatisticsController extends Controller
{
    private $analytics;

    public function __construct(Analytics $analytics)
    {
        $this->middleware('auth:admin');
        $this->analytics = $analytics;
    }

    public function index()
    {
        $mostVisitedPages = $this->analytics->fetchMostVisitedPages(Period::months(1), 20);
        $topBrowsers = $this->analytics->fetchTopBrowsers(Period::months(1));
        $topReferrers = $this->analytics->fetchTopReferrers(Period::months(1));
        $totalVisitorsAndPageViews = $this->analytics->fetchVisitorsAndPageViews(Period::months(1));

        return view('admin.analytics.index', compact('mostVisitedPages', 'topBrowsers', 'topReferrers', 'totalVisitorsAndPageViews'));
    }

    public function messages()
    {
        $messages = Message::all();

        return view('admin.messages.index', compact('messages'));
    }
}
