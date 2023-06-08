<div>
    <div class="flex justify-between mb-4">
        <p>
            {{ $user->name }}
        </p>
        @if(!$isFollowing)
            <button
                wire:click="follow"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Follow
            </button>
        @else
            <button
                wire:click="follow"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Unfollow
            </button>
        @endif
    </div>
</div>
