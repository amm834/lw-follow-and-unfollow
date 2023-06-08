<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Profiles extends Component
{
    public User $user;
    public bool $isFollowing = false;

    public function mount()
    {
        $this->isFollowing = auth()->user()->following->contains($this->user->id);
    }


    public function follow()
    {
        if ($this->isFollowing) {
            auth()->user()->following()->detach($this->user->id);
        } else {
            auth()->user()->following()->attach($this->user->id);
        }
        $this->isFollowing = !$this->isFollowing;
    }

    public function render()
    {
        return view('livewire.profiles');
    }
}
