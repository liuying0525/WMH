<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="{{ Config::get('cms.description') }}">
<meta name="author" content="{{ Config::get('cms.author') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('/assets/styles/bootstrap.'.Config::get('theme.name', 'default').'.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">

<script src="{{ asset('/js/jquery.js?t=1476958143') }}"></script>
<script src="{{ asset('/layer/layer.js?v=2.4') }}"></script>
<script src="{{ asset('/js/common/vilidata.js') }}"></script>
<script type="text/javascript" src="http://cdn.staticfile.org/twitter-bootstrap/3.0.1/js/bootstrap.min.js"></script>
@if(isset($media))
    @if($media['js'])
        @foreach($media['js'] as $value)
            <script src="{{ asset($value) }}"></script>
        @endforeach
    @endif
    @if($media['css'])
        @foreach($media['css'] as $value)
            <link rel="stylesheet" type="text/css" href="{{ asset($value) }}">
        @endforeach
    @endif
@endif

@section('css')
@show

<!--[if lt IE 9]>
  <script type="text/javascript" src="/js/external/html5shiv.3.7.2.html5shiv.min.js.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<link rel="shortcut icon" href="{!! asset('favicon.ico') !!}">
