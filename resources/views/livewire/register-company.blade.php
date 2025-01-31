<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="w-full max-w-3xl ">
    <h1 class="text-3xl font-bold text-center text-gray-900 dark:text-gray-100 mb-8">Employer Registration Form</h1>
    <form wire:submit="save" class="space-y-6">
      <h2>Account Information</h2>
      <div class="grid grid-cols-2 gap-4">
        <div>
          <x-input-label for="name" :value="__('Name')" />
          <x-text-input wire:model="form.name" id="name" type="text" class="mt-1 block w-full" />
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
          <x-input-label for="email" :value="__('Email')" />
          <x-text-input wire:model="form.email" id="email" type="email" class="mt-1 block w-full" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
      </div>
      <div class="grid grid-cols-2 gap-4">
        <div>
          <x-input-label for="password" :value="__('password')" />
          <x-text-input wire:model="form.password" id="password" type="password" class="mt-1 block w-full" />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div>
          <x-input-label for="confirm_password" :value="__('Confirm Password')" />
          <x-text-input wire:model="form.confirm_password" id="confirm_password" type="password"
            class="mt-1 block w-full" />
          <x-input-error :messages="$errors->get('confirm_password')" class="mt-2" />
        </div>
      </div>
      <h2>Company Details Information</h2>
      <div>
        <x-input-label for="company_name" :value="__('Company Name')" />
        <x-text-input wire:model="form.company_name" id="company_name" type="text" class="mt-1 block w-full"
          required />
        <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
      </div>

      <div>
        <x-input-label for="website" :value="__('Website')" />
        <x-text-input wire:model="form.website" id="website" type="url" class="mt-1 block w-full" />
        <x-input-error :messages="$errors->get('website')" class="mt-2" />
      </div>

      <div>
        <x-input-label for="phone" :value="__('Phone')" />
        <x-text-input wire:model="form.phone" id="phone" type="tel" class="mt-1 block w-full" />
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
      </div>

      <div>
        <x-input-label for="company_name" :value="__('Company Email')" />
        <x-text-input wire:model="form.company_name" id="company_name" type="email" class="mt-1 block w-full" />
        <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
      </div>

      <div>
        <x-input-label for="industry" :value="__('Industry')" />
        <x-text-input wire:model="form.industry" id="industry" type="text" class="mt-1 block w-full" />
        <x-input-error :messages="$errors->get('industry')" class="mt-2" />
      </div>

      <div>
        <x-input-label for="address" :value="__('Address')" />
        <x-text-input wire:model="form.address" id="address" type="text" class="mt-1 block w-full" />
        <x-input-error :messages="$errors->get('address')" class="mt-2" />
      </div>

      <div class="grid grid-cols-2 gap-4">
        <div>
          <x-input-label for="city" :value="__('City')" />
          <x-text-input wire:model="form.city" id="city" type="text" class="mt-1 block w-full" />
          <x-input-error :messages="$errors->get('city')" class="mt-2" />
        </div>

        <div>
          <x-input-label for="state" :value="__('State')" />
          <x-text-input wire:model="form.state" id="state" type="text" class="mt-1 block w-full" />
          <x-input-error :messages="$errors->get('state')" class="mt-2" />
        </div>
      </div>

      <div class="grid grid-cols-2 gap-4">
        <div>
          <x-input-label for="zip" :value="__('ZIP Code')" />
          <x-text-input wire:model="form.zip" id="zip" type="text" class="mt-1 block w-full" />
          <x-input-error :messages="$errors->get('zip')" class="mt-2" />
        </div>

        <div>
          <x-input-label for="country" :value="__('Country')" />
          <x-text-input wire:model="form.country" id="country" type="text" class="mt-1 block w-full" />
          <x-input-error :messages="$errors->get('country')" class="mt-2" />
        </div>
      </div>

      <div>
        <x-input-label for="description" :value="__('Description')" />
        <textarea wire:model="form.description" id="description"
          class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
          rows="4"></textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
      </div>

      <div class="flex items-center gap-4">
        <x-primary-button>{{ __('Register Company') }}</x-primary-button>

        <x-action-message class="me-3" on="company-registered">
          {{ __('Company registered successfully.') }}
        </x-action-message>
      </div>
    </form>
  </div>
</div>
