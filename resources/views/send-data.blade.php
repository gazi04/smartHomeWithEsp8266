@if (session('message'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('send-data-esp') }}">
    @csrf
    <input type='text' name='dataText' required/>
    <input type='submit' />
</form>
