<div>
    <h1>Comments:</h1>
    @foreach ($comments as $comment)
        <livewire:comment :comment="$comment" :key="$comment->id" />
    @endforeach
</div>
