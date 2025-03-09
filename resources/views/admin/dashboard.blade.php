<div class="container mt-5">
    <h2>Admin Dashboard</h2>
    <p>Welcome, {{ auth()->user()->name }}!</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
    
</div>