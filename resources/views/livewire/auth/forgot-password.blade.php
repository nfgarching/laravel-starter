 <div>

     <x-auth-header title="Forgot password" description="Enter your email to receive a password reset link" />

     <!-- Session Status -->
     <x-auth-session-status class="text-center" :status="session('status')" />

     <form wire:submit="sendPasswordResetLink" class="flex flex-col gap-6">

         <!-- Email Address -->
         <div class="mb-3">
             <x-bs.field.input field="email" type="email" :label="__('Email Address')" />
         </div>

         <div class="form-check form-switch">
             <button type="submit" class="btn btn-primary float-end">
                 {{ __('Email password reset link') }}
             </button>
         </div>

     </form>

     <br>
     <hr>
     <div class="form-check form-switch">
         <a class="nav-link" href="{{ route('login') }}" role="button" wire:navigate>
             Or, return to Log in
         </a>
     </div>

 </div>
