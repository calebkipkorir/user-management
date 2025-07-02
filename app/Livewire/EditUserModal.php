<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class EditUserModal extends Component
{
    public $showModal = false;
    public $userId;
    public $name;
    public $email;

    protected $listeners = ['editUser' => 'openModal'];

    public function openModal(...$params)
    {
        $data = $params[0] ?? null;
        $id = is_array($data) ? $data['id'] : $data;

        $user = User::findOrFail($id);
        $this->userId = $user->id;
        $this->name   = $user->name;
        $this->email  = $user->email;

        $this->resetValidation();
        $this->showModal = true;
    }

    public function save()
    {
        $this->validate([
            'name'  => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,' . $this->userId,
        ]);

        User::where('id', $this->userId)->update([
            'name'  => $this->name,
            'email' => $this->email,
        ]);

        $this->showModal = false;

        $this->dispatch('userUpdated');
    }

    public function render()
    {
        return view('livewire.edit-user-modal');
    }
}
