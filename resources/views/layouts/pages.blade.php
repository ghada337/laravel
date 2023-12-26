<!DOCTYPE html>
<html>

<head>

    @include('includes.head')



</head>

<body class="sub_page">

    @include('includes.header')

    @yield('content')

    @include('includes.info')
    @include('includes.footer')


</body>

</html>
