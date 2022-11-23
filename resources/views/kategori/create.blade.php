<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Halaman Tambah Kategori') }}
       </h2>
   </x-slot>
   <div class="py-8">
        
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 bg-white border-b border-gray-200">
                       <form method="POST" action="{{ route('kategori.store')
}}">
                           @csrf
                           <!-- Name -->
                           <div>
                               <x-input-label for="name" :value="__('Name')"
/>
                               <x-text-input id="name" class="block mt-1 wfull" type="text" name="name" :value="old('name')" required autofocus />
                               <x-input-error :messages="$errors-
>get('name')" class="mt-2" />
                           </div>
                           <div class="flex items-center justify-end mt-4">
                               <x-primary-button class="ml-4">
                                   {{ __('Tambah Data') }}
                               </x-primary-button>
                           </div>
                       </form>
               </div>
           </div>
       </div>
   </div>
</x-app-layout>