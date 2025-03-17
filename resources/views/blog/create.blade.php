<h1>Hello Create</h1>

<form method="POST" action="/blogs">
    @csrf

    <label for="title">Title</label>
    <input id="title" type="text" name="title">

    <label for="body">Body</label>
    <textarea id="body" name="body"></textarea>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif


    <button type="submit">Create Blog</button>
    </div>
