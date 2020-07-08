<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <link href="{{asset('assets/style.css')}}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <form class="form" method="post" action="{{route('upload.video')}}"
              method="POST"
              enctype="multipart/form-data"
        >
            @csrf

            <div class="form-body">

                <h4 class="form-section"><i class="ft-home"></i> ارفع فيديو   </h4>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                             <input type="file" class="form-control"
                                   placeholder=" "
                                   name="file">

                        </div>
                    </div>


                    <div class="form-actions">
                        <button type="button" class="btn btn-warning mr-1"
                                onclick="history.back();">
                            <i class="ft-x"></i> تراجع
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="la la-check-square-o"></i> حفظ
                        </button>
                    </div>


                </div>
            </div>


        </form>

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>

    $('#all').change(function (e) {
        if (e.currentTarget.checked) {
            $('.rows').find('input[type="checkbox"]').prop('checked', true);
        } else {
            $('.rows').find('input[type="checkbox"]').prop('checked', false);
        }
    });
</script>
</body>
</html>
