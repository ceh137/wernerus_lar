<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class UserEdit extends ModalComponent
{
    public User $user;
    public string $telnum;
    public string $name;
    public string $email;
    public string $company_INN;
    public string $company_name;
    public Collection $managers;

    public int $manager_id;

    public string $confirmationTitle = 'Вы уверены, что хотите изменить карточку клиента?';

    public string $confirmationDescription = 'В случае изменения, старые данные будут потеряны безвозвратно.';

    public function mount($id)
    {

        $this->user = User::find($id);
        $this->name = $this->user->name;
        $this->telnum = $this->user->telnum;
        $this->email = $this->user->email;
        $this->manager_id = $this->user->manager_id ?? 0;

        $this->company_INN = $this->user->company->INN  ?? "";
        $this->company_name = $this->user->company->name  ?? "";


        $this->managers = User::where('role_id', '=', '3')->get();
    }

    public function render()
    {

        return view('livewire.user-edit');
    }

    public function cancel()
    {
        $this->closeModal();
    }

    public function confirm() {
        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->telnum = $this->telnum;
        $this->user->manager_id = $this->manager_id;
        if ($this->company_name != '' && $this->company_INN != ''){
            $this->user->company->name = $this->company_name;
            $this->user->company->INN = $this->company_INN;
        }


        $this->user->save();


        $this->closeModalWithEvents([
            'pg:eventRefresh-user_table',
        ]);


    }


}
