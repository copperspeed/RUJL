<!DOCTYPE html>
<html ng-app='RUJL'>
    <head>
        <title>Laravel</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/index.brags.css">
    </head>
    <body>
        <div class="container-fluid" ng-controller="showBrags">
            <div class="row">
                <div class="col-xs-7 col-sm-6 col-md-4 col-lg-4" ng-repeat="brag in ::brags | limitTo:20 track by brag.id" ng-animate="{enter: 'animate-enter', leave: 'animate-leave'}">
                    <div class="brag">
                        <!--<div class="effect2">-->
                            <div class="ImgBig">
                                <img class="BragImageImg" src="http://{{ ::host }}/public/bragimages/thumb/{{ ::brag.brag }}" width="236">
                            </div>
                            <p>
                                {{ ::brag.brag_desc }}
                            </p>
                        <!--</div>-->
                    </div>
                </div>
            </div>

        </div>
        <script src="./js/libs/angular1.4.1/angular.js"></script>
        <script src="./js/libs/angularUI/ui-bootstrap-0.13.0.min.js"></script>
        <script src="./js/libs/angularUI/ui.router.js"></script>

        <script src="./js/libs/angular1.4.1/angular-animate.js"></script>
        <script src="./js/libs/angular1.4.1/angular-touch.js"></script>

        <script src="./js/app.js"></script>
        <script src="./js/index.brags/index.brags.service.js"></script>
        <script src="./js/index.brags/index.brags.controller.js"></script>
    </body>
</html>
