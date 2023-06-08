<section>
    <div>
        @foreach($users as $user)
           <livewire:profiles :user="$user"/>
        @endforeach
    </div>
</section>
