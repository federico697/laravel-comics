<nav class="bg-danger d-flex">
    <a class="col-2" href="{{ route('home') }}">
        <img src=" {{ asset('images/dc-logo.png') }} " alt="Logo DC Comics">
    </a>
    <ul class=" d-flex justify-content-around align-items-center list-unstyled class">
        <li class="mx-4 ">
            <a href="{{ route('home') }}">home</a>
        </li>
        <li>
            <a href="{{ route('index.comics') }}">comics</a>
        </li>
    </ul>
</nav>