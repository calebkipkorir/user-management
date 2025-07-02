<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class UsersTable extends Component
{
    use WithPagination;

    public $search = '';

    protected $queryString = ['search'];

    protected $listeners = ['userUpdated' => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
    }

    public function render()
    {
        $users = User::query()
            ->where(function($query) {
                $query->where('name', 'like', "%{$this->search}%")
                      ->orWhere('email', 'like', "%{$this->search}%");
            })
            ->paginate(5);

        return view('livewire.users-table', compact('users'))
         ->layout('layouts.app');
    }
}
