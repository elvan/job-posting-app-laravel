<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="text-white" type="submit">
        <i class="fa fa-sign-out"></i> Logout
    </button>
</form>
