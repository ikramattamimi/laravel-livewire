<div>
    @foreach ($posts as $post)
        <livewire:posts.item :post="$post" :key="$post->id" />
    @endforeach
</div>
