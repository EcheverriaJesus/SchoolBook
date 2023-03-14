<div class="p-10">
    <div class="flex justify-start">
        <a href="{{route('teachers.index')}}" class="p-1 bg-indigo-600 rounded-full">
            <svg width="24" height="24" fill="none" stroke="#ffffff" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"></path>
            </svg>
        </a>
    </div>
    <div class="flex justify-center mb-5">
        <h3 class="my-3 text-3xl font-bold text-gray-800">
            Información del profesor
        </h3>
    </div>
    <div class="gap-5 md:grid md:grid-cols-6">
        <div class="md:col-span-2">
            <img src="{{asset('storage/imageTeachers/'.$teacher->photo)}}" alt="{{'Imagen vacante '.$teacher->first_name}}">
        </div>
        <div class="my-10 md:col-span-4 md:my-0">
            <h2 class="text-xl font-extrabold text-indigo-600">Información general</h2>
            <p class="my-3 text-sm font-bold text-gray-800">Nombre:
                <span class="font-normal normal-case">{{$teacher->first_name.' '.$teacher->father_surname.' '.$teacher->fathers_last_name}}</span>
            </p>
            <p class="my-3 text-sm font-bold text-gray-800">CURP:
                <span class="font-normal normal-case">{{$teacher->curp}}</span>
            </p>
            <p class="my-3 text-sm font-bold text-gray-800">RFC:
                <span class="font-normal normal-case">{{$teacher->rfc}}</span>
            </p>
            <p class="my-3 text-sm font-bold text-gray-800">Email:
                <span class="font-normal normal-case">{{$teacher->email}}</span>
            </p>
            <p class="my-3 text-sm font-bold text-gray-800">Teléfono:
                <span class="font-normal normal-case">{{$teacher->phone}}</span>
            </p>
            <a href="{{asset('storage/cedProfessional/'.$teacher->professional_license)}}"
                target="_blank"
                rel="noreferrer noopener" 
                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white transition duration-150 ease-in-out bg-blue-700 border border-transparent rounded-md hover:bg-blue-600">
                Ver Ced. Profesional
            </a>
        </div>
    </div>
    <h2 class="my-3 text-xl font-extrabold text-indigo-600">Información academica</h2>
    <div class="p-4 my-1 bg-gray-100 md:grid md:grid-cols-2">
        <p class="my-3 text-sm font-bold text-gray-800">Nivel de estudios:
            <span class="font-normal normal-case">{{$teacher->education_level}}</span>
        </p>
        <p class="my-3 text-sm font-bold text-gray-800">Especialidad:
            <span class="font-normal normal-case">{{$teacher->major}}</span>
        </p>
    </div>
    <h2 class="my-3 text-xl font-extrabold text-indigo-600">Información de contacto</h2>
    <div class="p-4 my-1 bg-gray-100 md:grid md:grid-cols-2">
        <p class="my-3 text-sm font-bold text-gray-800">Calle:
            <span class="font-normal normal-case">{{$teacher->address->street}}</span>
        </p>
        <p class="my-3 text-sm font-bold text-gray-800">No. interior:
            <span class="font-normal normal-case">{{$teacher->address->num_int}}</span>
        </p>
        <p class="my-3 text-sm font-bold text-gray-800">No. exterior:
            <span class="font-normal normal-case">{{$teacher->address->num_ext}}</span>
        </p>
        <p class="my-3 text-sm font-bold text-gray-800">Colonia/Fraccionamiento:
            <span class="font-normal normal-case">{{$teacher->address->neighborhood}}</span>
        </p>
        <p class="my-3 text-sm font-bold text-gray-800">Municipio:
            <span class="font-normal normal-case">{{$teacher->address->city}}</span>
        </p>
        <p class="my-3 text-sm font-bold text-gray-800">Estado:
            <span class="font-normal normal-case">{{$teacher->address->state}}</span>
        </p>
        <p class="my-3 text-sm font-bold text-gray-800">País:
            <span class="font-normal normal-case">{{$teacher->address->country}}</span>
        </p>
    </div>
</div>