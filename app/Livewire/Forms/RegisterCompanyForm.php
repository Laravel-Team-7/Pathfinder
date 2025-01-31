<?php

namespace App\Livewire\Forms;

use Livewire\Form;

class RegisterCompanyForm extends Form
{
    public string $name = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $email = '';
    public string $company_name = '';
    public string $website = '';
    public string $phone = '';
    public string $company_email = '';
    public string $industry = '';
    public string $address = '';
    public string $city = '';
    public string $state = '';
    public string $zip = '';
    public string $country = '';
    public string $description = '';

    protected function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'website' => 'nullable|url|max:255',
            'company_email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'industry' => 'nullable|string|max:100',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'zip' => 'nullable|string|max:20',
            'country' => 'nullable|string|max:100',
            'description' => 'nullable|string|max:1000',
        ];
    }
}
