@include('templates.header', ['title' => 'Home'])


<div class="main-content login-panel">
    <div class="login-body">
        <div class="top d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="assets/images/logo-black.png" alt="Logo">
            </div>
            <a href="{{ route('add') }}"><i class="fa-duotone fa-plus"></i></a>
        </div>
        <div class="bottom">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <h3 class="panel-title">Todo List</h3>
            <ul>
                @foreach($data as $d)
                <li class="d-flex justify-content-between my-2">
                    <span>{{ $d->activity_name }}</span>
                    <div class="d-flex">
                        <a href="/to-do-list-update/{{ $d->id }}" class="btn btn-warning text-light">
                            <i class="fa-solid fa-edit"></i>
                        </a>
                        <form
                            method="POST"
                            action="{{ route('delete', ['id' => $d->id]) }}"
                            class="ml-2">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="footer">
        <p>Copyright© <script>
                document.write(new Date().getFullYear())
            </script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>
    </div>
    <!-- footer end -->
</div>

@include('templates.footer')