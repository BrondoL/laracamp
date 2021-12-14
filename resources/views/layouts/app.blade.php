<!doctype html>
<html lang="en">

@include("layouts.header")

<body>

    @include("components.navbar")
    @yield("content")
    @include("layouts.script")
    @yield("myscript")

</body>

</html>
