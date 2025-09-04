@include('header')
@include('navbar')

<main>
    <h1>Register</h1>

    @if(session()->has('authentication-outcome'))
        <p>{{session()->get('authentication-outcome')}}</p>
    @endif 

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

    @auth
        <p>You are logged in</p>
        <form action="/logout" method="POST">
            @csrf 
            <button>Log out</button>
        </form>
    @else
        <form action="/signup" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name"><br>
            <input name="email" type="text" placeholder="email"><br>
            <input name="password" type="password" placeholder="password"><br>
            <input type="text" name="school" placeholder="school" value="{{ old('school') }}"><br>
            <button>Register</button>
        </form>

        <h2>Login<h2>
        <form action="/login" method="POST">
            @csrf 
            <input name="loginemail" type="text" placeholder="email"><br>
            <input name="loginpassword" type="password" placeholder="password"><br>
            <button>Log in</button>
        </form> 
    @endauth
</main>
@include('footer')