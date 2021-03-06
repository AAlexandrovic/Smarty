<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .highcharts-figure,
            .highcharts-data-table table {
                min-width: 360px;
                max-width: 800px;
                margin: 1em auto;
            }

            .highcharts-data-table table {
                font-family: Verdana, sans-serif;
                border-collapse: collapse;
                border: 1px solid #ebebeb;
                margin: 10px auto;
                text-align: center;
                width: 100%;
                max-width: 500px;
            }

            .highcharts-data-table caption {
                padding: 1em 0;
                font-size: 1.2em;
                color: #555;
            }

            .highcharts-data-table th {
                font-weight: 600;
                padding: 0.5em;
            }

            .highcharts-data-table td,
            .highcharts-data-table th,
            .highcharts-data-table caption {
                padding: 0.5em;
            }

            .highcharts-data-table thead tr,
            .highcharts-data-table tr:nth-child(even) {
                background: #f8f8f8;
            }

            .highcharts-data-table tr:hover {
                background: #f1f7ff;
            }
            .mess {
                text-align: center;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">

        <div class="dropdown">

            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                ?????????????? ????????????
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <form class="form-inline" method="POST"   action="{{ route('api')}}">
                    @csrf
                    <div class="form-group">
                        <label for="inputPassword6">???????????? ??????????????</label>
                        <input type="text" id="inputPassword6" class="form-control " aria-describedby="passwordHelpInline" name="open" value="{{session('session_open')}}" placeholder="10/02/2000">
                        <small id="passwordHelpInline" class="text-muted">
                            ?????????????? ?? ?????????????? <br> ????/????/????????
                        </small>
                        <label for="inputPassword6">?????????????????? ??????????????</label>
                        <input type="text" id="inputPassword5" class="form-control " aria-describedby="passwordHelpInline" name="close" value="{{session('session_close')}}" placeholder="10/02/2005">
                        <small id="passwordHelpInline" class="text-muted">
                            ?????????????? ?? ?????????????? <br> ????/????/????????
                        </small>
                    </div>
                    <button type="submit" class="btn btn-primary">??????????????</button>
                </form>
            </ul>
        </div>


    </nav>
    <div class="mess" style="background: red;"></div>
    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
           ???????????? ?????????? ?????????? ?? $.
        </p>
    </figure>
    @foreach($date as $dates)
    <input type='hidden' id='postId' name='Data' value= {{$dates[0]}}>
    @endforeach
    @foreach($values as $value)
        <input type='hidden' name='prices' value={{$value}}>
    @endforeach

                <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                <script>

                    $(document).ready(function(){

                        $(".form-inline").submit(function() {
                            var el_l    = $("#inputPassword6").val();
                            var el_l2    = $("#inputPassword5").val();

                            let st = /[^a-zA]+/;

                            if(el_l.length < 1 || el_l2.length < 1){

                                var $item = $('<div class="div" id="div">'+'?????????????????? ?????? ????????'+'</div>');

                                $item.appendTo($('.mess')).delay(3000).slideUp(200, function(){
                                    $item.remove();
                                });
                                return false
                            }else if(!st.test(el_l)){
                                //$('.mess').append('<div class="div">'+'???????????????????????? ??????????'+'</div>');

                                var $item2 = $('<div class="div" id="div">'+'???????????????????????????????? ????????????' + '<br>' + '?????????????? ???????????? ?? ??????????????: ????????/??????????/?????? '+'</div>');

                                $item2.appendTo($('.mess')).delay(3000).slideUp(200, function(){

                                    $item2.remove();

                                });
                                return false
                            }else if(!st.test(el_l2)){
                                //$('.mess').append('<div class="div">'+'???????????????????????? ??????????'+'</div>');

                                var $item3 = $('<div class="div" id="div">'+'???????????????????????????????? ????????????' + '<br>' + '?????????????? ???????????? ?? ??????????????: ????????/??????????/?????? '+'</div>');

                                $item3.appendTo($('.mess')).delay(3000).slideUp(200, function(){

                                    $item3.remove();

                                });
                                return false
                            }

                        });

                        var  arr = [];
                        $('input[name="prices"]').each(function () {
                            arr.push($(this).val().replace(/,/, '.'));
                        });

                        var array = [];
                        for (var i = 0; i < arr.length; i++) {
                           arr[i] = array.push(parseFloat(arr[i]));
                        }

                        var dates = [];
                        $('input[name="Data"]').each(function () {
                            dates.push($(this).val());
                        });
                        console.log(dates);
                        Highcharts.chart('container', {
                            chart: {
                                type: 'line'
                            },
                            title: {
                                text: '???????? ?????????????? '
                            },
                            subtitle: {
                                text: '???????? ????????????'
                            },
                            xAxis: {
                                categories: (jQuery.each(dates, function(index, item) {

                                    })
                                )
                            },
                            yAxis: {
                                title: {
                                    text: '($), ??????'
                                }
                            },
                            plotOptions: {
                                line: {
                                    dataLabels: {
                                        enabled: true
                                    },
                                    enableMouseTracking: false
                                }
                            },
                            series: [{
                                name: '?????????????????? ?????????????? ?? ????????????',
                                data: (jQuery.each(array, function(index, item) {

                                    })
                                )
                            }]
                        });

                    });

                </script>

    </body>
</html>
