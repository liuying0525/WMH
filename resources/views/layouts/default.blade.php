<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="shortcut icon" href="/images/app/{{ Config::get('app.icon') }}" type="image/x-icon">
<link rel="icon" href="/images/app/{{ Config::get('app.icon') }}" type="image/x-icon">
<title>{{ Config::get('app.name') }} - {{ @$title  }}</title>
@include('partials.header')
    <script>
        /* *
         * * 格式化 金额
         * *
         * */
        function fmoney(s, n)
        {
            n = n > 0 && n <= 20 ? n : 2;
            s = parseFloat((s + "").replace(/[^\d\.-]/g, "")).toFixed(n) + "";
            var l = s.split(".")[0].split("").reverse(),
                    r = s.split(".")[1];
            t = "";
            for(i = 0; i < l.length; i ++ )
            {
                t += l[i] + ((i + 1) % 3 == 0 && (i + 1) != l.length ? "," : "");
            }
            return t.split("").reverse().join("") + "." + r;
        }
    </script>
</head>
<body>
<div id="wrap">
@include('partials.bootstrap')
<div class="container"  onmouseover="$('.lanrenzhijia').hide()">
@section('top')
@show
@include('partials.notifications')
@section('content')
@show
</div>
</div>
@include('partials.footer')

@section('bottom')
@show

</body>
</html>


