@extends('layouts.front_main')


@section('custom_css')

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        .timeline {
            list-style: none;
            padding: 20px 0 20px;
            position: relative;
        }

        .timeline:before {
            top: 0;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 3px;
            background-color: #eeeeee;
            left: 50%;
            margin-left: -1.5px;
        }

        .timeline > li {
            margin-bottom: 20px;
            position: relative;
        }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
        }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
        }

        .timeline > li > .timeline-panel {
            width: 46%;
            float: left;
            border: 1px solid #d4d4d4;
            border-radius: 2px;
            padding: 20px;
            position: relative;
            -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        }

        .timeline > li > .timeline-panel:before {
            position: absolute;
            top: 26px;
            right: -15px;
            display: inline-block;
            border-top: 15px solid transparent;
            border-left: 15px solid #ccc;
            border-right: 0 solid #ccc;
            border-bottom: 15px solid transparent;
            content: " ";
        }

        .timeline > li > .timeline-panel:after {
            position: absolute;
            top: 27px;
            right: -14px;
            display: inline-block;
            border-top: 14px solid transparent;
            border-left: 14px solid #fff;
            border-right: 0 solid #fff;
            border-bottom: 14px solid transparent;
            content: " ";
        }

        .timeline > li > .timeline-badge {
            color: #fff;
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 1.4em;
            text-align: center;
            position: absolute;
            top: 16px;
            left: 50%;
            margin-left: -25px;
            background-color: #999999;
            z-index: 100;
            border-top-right-radius: 50%;
            border-top-left-radius: 50%;
            border-bottom-right-radius: 50%;
            border-bottom-left-radius: 50%;
        }

        .timeline > li.timeline-inverted > .timeline-panel {
            float: right;
        }

        .timeline > li.timeline-inverted > .timeline-panel:before {
            border-left-width: 0;
            border-right-width: 15px;
            left: -15px;
            right: auto;
        }

        .timeline > li.timeline-inverted > .timeline-panel:after {
            border-left-width: 0;
            border-right-width: 14px;
            left: -14px;
            right: auto;
        }

        .timeline-badge.primary {
            background-color: #2e6da4 !important;
        }

        .timeline-badge.success {
            background-color: #3f903f !important;
        }

        .timeline-badge.warning {
            background-color: #f0ad4e !important;
        }

        .timeline-badge.danger {
            background-color: #d9534f !important;
        }

        .timeline-badge.info {
            background-color: #5bc0de !important;
        }

        .timeline-title {
            margin-top: 0;
            color: inherit;
        }

        .timeline-body > p,
        .timeline-body > ul {
            margin-bottom: 0;
        }

        .timeline-body > p + p {
            margin-top: 5px;
        }

        @media (max-width: 767px) {
            ul.timeline:before {
                left: 40px;
            }

            ul.timeline > li > .timeline-panel {
                width: calc(100% - 90px);
                width: -moz-calc(100% - 90px);
                width: -webkit-calc(100% - 90px);
            }

            ul.timeline > li > .timeline-badge {
                left: 15px;
                margin-left: 0;
                top: 16px;
            }

            ul.timeline > li > .timeline-panel {
                float: right;
            }

            ul.timeline > li > .timeline-panel:before {
                border-left-width: 0;
                border-right-width: 15px;
                left: -15px;
                right: auto;
            }

            ul.timeline > li > .timeline-panel:after {
                border-left-width: 0;
                border-right-width: 14px;
                left: -14px;
                right: auto;
            }
        }
    </style>

@endsection

@section('content')

    <div class="container">
        <div class="page-header">
            <h1 id="timeline">Démarche COSMOMAG </h1>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Démarche Membre </h4>
                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1
                            </small></p>
                    </div>
                    <div class="timeline-body">
                        <p>  Contenu demarche membre </p>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Démarche Partenaire </h4>
                    </div>
                    <div class="timeline-body">
                        <p> Contenu Démarche Partenaire </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Démarche Bloggeurs</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Contenu Démarche blogueurs </p>
                </div>
            </li>
        </ul>
    </div>

@endsection

@section('custom_js')

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@endsection