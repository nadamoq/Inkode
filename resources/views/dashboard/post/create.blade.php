<x-layouts.front title=":Create Post">

    @include('dashboard.post.form', ['action' => route('dashboard.posts.store'), 'method' => 'POST'])

</x-layouts.front>