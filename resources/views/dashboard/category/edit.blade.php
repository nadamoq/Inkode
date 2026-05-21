<x-layouts.front title=":Edit Category">
    
    @include('dashboard.category.form',['categories' => $categories, 'method' => 'PUT', 'action' => route('dashboard.categories.update', $category)])

</x-layouts.front>
    