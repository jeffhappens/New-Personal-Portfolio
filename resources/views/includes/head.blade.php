<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link href='http://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/app.css">

        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
        <script id="project-template" type="text/x-handlebars-template">
        <div class="project-detail">
            <div class="close"><i class="fa fa-2x fa-close"></i></div>
            <div class="project-information">
                <div class="row">
                    <div class="col-md-12">
                        <h3>@{{title}}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Project Description</h3>
                        <p>@{{ description }}</p>
                    </div>
                    <div class="col-md-6">
                        <h3>Project Details</h3>
                        <ul>
                            <li>URL: <a href="@{{ url }}">@{{ url }}</a></li>
                            
                            <li>Tech: @{{ tech }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </script>
    </head>