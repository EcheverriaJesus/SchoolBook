
    {{-- <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @if (session()->has('mensaje'))
              <x-alert-success :message="session('mensaje')" class="mt-2" />
            @endif
            <livewire:mostrar-profesores />
        </div>
    </div> --}}

    <div class="py-12">
       <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        @if (session()->has('mensaje'))
        <x-alert-success :message="session('mensaje')" class="mt-2" />
      @endif
      <livewire:mostrar-notice />
       </div>
    </div>
