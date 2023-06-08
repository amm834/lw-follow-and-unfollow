<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;

class UserProfiles extends Component
{
    public $users = [];
    public $isFollowing = false;

    public function mount()
    {
        $this->users = User::when(auth()->check(), function (Builder $builder) {
            return $builder->where('id', '!=', auth()->id());
        })->get();
    }

    public function follow()
    {

    }

    public function render()
    {
        return view('livewire.user-profiles');
    }
}
