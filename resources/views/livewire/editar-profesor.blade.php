<form action="" class="space-y-5 md:w-1/2" wire:submit.prevent='editarProfesor'>
    <x-validation-errors class="mb-4" />
    <!-- nombre -->
    <div>
        <x-label for="first_name" value="{{ __('Nombre (es)') }}" />
        <x-input id="first_name" class="block w-full mt-1" type="text" wire:model="first_name"
            :value="old('first_name')" />
    </div>

    <!-- apellido_paterno -->
    <div>
        <x-label for="father_surname" value="{{ __('Apellido paterno') }}" />
        <x-input id="father_surname" class="block w-full mt-1" type="text" wire:model="father_surname"
            :value="old('father_surname')" />
    </div>

    <!-- apellido_materno-->
    <div>
        <x-label for="fathers_last_name" value="{{ __('Apellido materno') }}" />
        <x-input id="fathers_last_name" class="block w-full mt-1" type="text" wire:model="fathers_last_name"
            :value="old('fathers_last_name')" />
    </div>

    <!-- telefono -->
    <div>
        <x-label for="phone" value="{{ __('Teléfono') }}" />
        <x-input id="phone" class="block w-full mt-1" type="tel" wire:model="phone" :value="old('phone')" />
    </div>

    <!-- email -->
    <div>
        <x-label for="email" value="{{ __('Email') }}" />
        <x-input id="email" class="block w-full mt-1" type="email" wire:model="email" :value="old('email')" />
    </div>

    <!-- CURP -->
    <div>
        <x-label for="curp" value="{{ __('CURP') }}" />
        <x-input id="curp" class="block w-full mt-1" type="text" wire:model="curp" :value="old('curp')" />
    </div>

    <!-- RFC -->
    <div>
        <x-label for="rfc" value="{{ __('RFC') }}" />
        <x-input id="rfc" class="block w-full mt-1" type="text" wire:model="rfc" :value="old('rfc')" />
    </div>

    <!-- Nivel de estudios -->
    <div>
        <x-label for="education_level" value="{{ __('Nivel de estudios') }}" />
        <select id="education_level" wire:model="education_level" class="block w-full mt-1 border-gray-300">
            <option value="">-- Seleccione --</option>
            <option value="licenciatura">Licenciatura</option>
            <option value="maestría">Maestría</option>
            <option value="doctorado">Doctorado</option>
        </select>
    </div>

    <!-- especialidad -->
    <div>
        <x-label for="major" value="{{ __('Especialidad') }}" />
        <x-input id="major" class="block w-full mt-1" type="text" wire:model="major" :value="old('major')" />
    </div>
    <!-- domicilio -->
    <div>
        <x-label class="text-lg font-bold" for="especialidad" value="{{ __('Domicilio') }}" />
    </div>
    <div class="p-2 border border-slate-200">
        <!-- calle-->
        <div>
            <x-label for="street" value="{{ __('Calle') }}" />
            <x-input id="street" class="block w-full mt-1" type="text" wire:model="street" :value="old('street')" />
        </div>

        <div class="flex justify-between space-x-5">
            <!-- num_int-->
            <div class="block w-1/2">
                <x-label for="num_int" value="{{ __('Número interior') }}" />
                <x-input id="num_int" class="block w-full mt-1" type="text" wire:model="num_int"
                    :value="old('num_int')" />
            </div>
            <!-- num_ext-->
            <div class="block w-1/2">
                <x-label for="num_ext" value="{{ __('Número exterior') }}" />
                <x-input id="num_ext" class="block w-full mt-1" type="text" wire:model="num_ext"
                    :value="old('num_ext')" />
            </div>
        </div>

        <!-- colonia-->
        <div>
            <x-label for="neighborhood" value="{{ __('Colonia/Fraccionamiento') }}" />
            <x-input id="neighborhood" class="block w-full mt-1" type="text" wire:model="neighborhood"
                :value="old('neighborhood')" />
        </div>

        <!-- ciudad-->
        <div>
            <x-label for="city" value="{{ __('Ciudad') }}" />
            <x-input id="city" class="block w-full mt-1" type="text" wire:model="city" :value="old('city')" />
        </div>

        <!-- estado-->
        <div>
            <x-label for="state" value="{{ __('Estado') }}" />
            <x-input id="state" class="block w-full mt-1" type="text" wire:model="state" :value="old('state')" />
        </div>

        <!-- pais-->
        <div>
            <x-label for="country" value="{{ __('País') }}" />
            <x-input id="country" class="block w-full mt-1" type="text" wire:model="country" :value="old('country')" />
        </div>

    </div> <!-- finalDomicilio-->
    <!-- Fotografia -->
    <div>
        <x-label for="photo_new" :value="__('Seleccione la fotografia del docente')" />
        <x-input wire:model="photo_new" id="photo_new" class="block w-full mt-1" type="file" accept="image/*" />
        <div class="flex space-x-3">
            <div class="block my-5 w-80 h-80">
                <x-label :value="__('Fotografia actual')" class="my-2"/>
                <img src="{{asset('storage/imageTeachers/'.$photo)}}" alt="{{'Imagen docente '}}">
            </div>
            <div class="block my-5 w-80 h-80">
                @if ($photo_new)
                <x-label :value="__('Fotografia nueva')" class="my-2"/>
                <img src="{{$photo_new->temporaryUrl()}}">
                @endif
            </div>
        </div>
    </div>
    <!-- Cedula profesional-->
    <div>
        <x-label for="professional_license_new" value="{{ __('Seleccione la cedula profesional del docente (PDF)') }}" />
        <x-input id="professional_license_new" class="block w-full mt-1" wire:model="professional_license_new" type="file" accept=".pdf" />
        <a href="{{asset('storage/cedProfessional/'.$professional_license)}}" class="inline-flex items-center px-4 py-2 my-3 text-sm font-semibold tracking-widest text-white transition duration-150 ease-in-out bg-blue-700 border border-transparent rounded-md hover:bg-blue-600"
            target="_blank"
            rel="noreferrer noopener">
            Ver Ced. Profesional Actual
        </a>
    </div>
 
    <x-button class="ml-4">
        {{ __('Guardar') }}
    </x-button>

</form>