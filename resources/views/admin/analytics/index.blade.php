{{--{{ dd($mostVisitedPages, $topBrowsers, $topReferrers, $totalVisitorsAndPageViews) }}--}}

@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-md-12">
            <a href="#" class="btn btn-danger btn-lg col-md-3" role="button">
                <span class="glyphicon glyphicon-bookmark"></span> <br/>
                {{ count($mostVisitedPages) }}<br/>
                Most Visited Pages <br />
            </a>
            <a href="#" class="btn btn-warning btn-lg col-md-3" role="button">
                <span class="glyphicon glyphicon-globe"></span> <br/>
                {{ count($topBrowsers) }}<br/>
                Top Browsers
            </a>
            <a href="#" class="btn btn-success btn-lg col-md-3" role="button">
                <span class="glyphicon glyphicon-signal"></span> <br/>
                {{ count($topReferrers) }}<br/>
                Top Referrers
            </a>
            <a href="#" class="btn btn-primary btn-lg col-md-3" role="button">
                <span class="glyphicon glyphicon-comment"></span> <br/>
                {{ count($totalVisitorsAndPageViews) }}<br/>
                totalVisitorsAndPageViews</a>
        </div>
        {{--<div class="col-xs-6 col-md-6">
            <a href="#" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Users</a>
            <a href="#" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Notes</a>
            <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-picture"></span> <br/>Photos</a>
            <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-tag"></span> <br/>Tags</a>
        </div>--}}
    </div>

    <hr>

    <div class="row">

        <div class="col-md-12">

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Nombre de vues</th>
                    <th>URL</th>
                </tr>
                </thead>
                <tbody>
                @foreach($mostVisitedPages as $visitedPage)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $visitedPage['pageTitle'] }}</td>
                        <td>{{ $visitedPage['pageViews'] }}</td>
                        <td>
                            <a href="{{ url($visitedPage['url']) }}">{{ url($visitedPage['url']) }}</a>
                        </td>
                    </tr>

                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Nombre de vues</th>
                    <th>URL</th>
                </tr>
                </tfoot>
            </table>

        </div>

    </div>

    <hr>

    <div class="row">

        <div class="col-md-12">

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Navigateur</th>
                    <th>Nombre de session</th>
                </tr>
                </thead>
                <tbody>
                @foreach($topBrowsers as $browser)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $browser['browser'] }}</td>
                        <td>{{ $browser['sessions'] }}</td>
                    </tr>

                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Navigateur</th>
                    <th>Nombre de session</th>
                </tr>
                </tfoot>
            </table>

        </div>

    </div>

    <hr>

    <div class="row">

        <div class="col-md-12">

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Navigateur</th>
                    <th>Nombre de session</th>
                </tr>
                </thead>
                <tbody>
                @foreach($topReferrers as $referrer)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $referrer['url'] }}</td>
                        <td>{{ $referrer['pageViews'] }}</td>
                    </tr>

                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Navigateur</th>
                    <th>Nombre de session</th>
                </tr>
                </tfoot>
            </table>

        </div>

    </div>

@endsection