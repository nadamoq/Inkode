<x-layouts.front title=":Edit Post">

    @include('dashboard.post.form', ['action' => route('dashboard.posts.update', $post), 'method' => 'PUT'])

</x-layouts.front>