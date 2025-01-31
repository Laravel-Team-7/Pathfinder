<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Company;
use Livewire\Component;
use App\Livewire\Forms\RegisterCompanyForm;

class RegisterCompany extends Component
{
    public RegisterCompanyForm $form;

    public function save()
    {
        $this->form->validate();

        // Create user with hashed password
        $userData = $this->form->only(['name', 'email']);
        $userData['password'] = bcrypt($this->form->password);
        $user = User::create($userData);
        $user->assignRole('company');

        // Create company with user relationship
        $data = $this->form->only([
            'company_name', 'website', 'phone', 'company_email', 'industry',
            'address', 'city', 'state', 'zip', 'country', 'description'
        ]);
        $data['user_id'] = $user->id;
        $company = Company::create($data);

        $this->form->reset();
        $this->dispatch('company-registered');
    }

    public function render()
    {
        return view('livewire.register-company');
    }
}
