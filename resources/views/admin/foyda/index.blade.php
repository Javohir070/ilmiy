@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="flex justify-between align-center mt-10">

        <h2 class="intro-y text-lg font-medium">Ixtirolar</h2>

        <a href="javascript:;" data-target="#science-paper-create-modal" data-toggle="modal" class="button w-24 bg-theme-1 text-white">
            Qo'shish
        </a>

    </div>
    <a href="#" class="button bg-theme-9 text-white mt-10">
        Tasdiqlanmaganlar 0</a>

    <a href="#" class="button bg-theme-9 text-white mt-10">
        Xalqaro ilmiy maqola qo‘shish</a>
    <a href="#" class="button bg-theme-1 text-white mt-10">
        Rad qilinganlar 0</a>
    <div class="grid grid-cols-12 gap-6 mt-5">


        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-no-wrap">№</th>
                        <th class="whitespace-no-wrap">Title</th>
                        <th class="whitespace-no-wrap">mualliflari</th>
                        <th class="whitespace-no-wrap">guvohnoma_raqami</th>
                        <th class="whitespace-no-wrap">Fiyl</th>
                        <th class="whitespace-no-wrap text-center">Harakat</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($foyda as $maq )

                    <tr class="intro-x">
                        <td>{{$loop->index+1}}</td>
                        <td>
                            <a href="" class="font-medium ">{{ $maq->name  }}</a>
                        </td>
                        <td>
                            <a href="" class="font-medium ">{{ $maq->mualliflari }}</a>
                        </td>
                        <td>
                            <a href="" class="font-medium ">{{ $maq->guvohnoma_raqami }}</a>
                        </td>
                        <td class="w-40">
                            <div class="flex items-center text-theme-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                file
                            </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex science-update-action items-center mr-3" href="javascript:;" data-id="2978" data-name="sdfd" data-file="/files/papers/4735cda0-a7a3-4a45-bd93-0bc013b857dc.png" data-filename="Screenshot from 2023-04-17 16-23-56.png" data-type="66" data-date="None" data-doi="" data-publisher="" data-description="None" data-authors-count="None" data-toggle="modal" data-target="#science-paper-update-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-1">
                                        <polyline points="9 11 12 14 22 4"></polyline>
                                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                    </svg>
                                    Таҳрирлаш
                                </a>

                                <a class="flex delete-action items-center text-theme-6" href="" data-url="/2978?next=/science" data-toggle="modal" data-target="#delete-confirmation-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 w-4 h-4 mr-1">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>
                                    Ўчириш</a>

                            </div>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <div class="modal" id="science-paper-create-modal">
            <div class="modal__content modal__content--xl">
                <div class="p-5">

                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
                        <div class="w-full mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <form id="science-paper-create-form" method="POST" action="{{ route('ixtiro.store') }}" class="validate-form" enctype="multipart/form-data" novalidate="novalidate">
                                @csrf
                                <div class="grid grid-cols-12 gap-2">
                                    <input name="id" type="hidden">
                                    <div class="w-full col-span-12">
                                        <label class="flex flex-col sm:flex-row"> <span class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Тури
                                        </label>
                                        <select name="categoriy" id="science-sub-category" class="input border w-full mt-2" required="">

                                            <option value="1">ixtiro</option>

                                            <option value="2"> Foydali model </option>

                                            <option value="3"> Sanoat namunalari</option>

                                        </select>
                                    </div>
                                    
                                    <div class="w-full col-span-12 ilmiy-ish">
                                        <label class="flex flex-col sm:flex-row"> <span class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> name
                                        </label>
                                        <input type="text" name="name" class="input w-full border mt-2" required="">
                                    </div>
                                    <div class="w-full col-span-6">
                                        <label class="flex flex-col sm:flex-row"> <span class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Муаллифлар сони
                                        </label>
                                        <input type="number" name="mualliflar_soni" class="input w-full border mt-2" required="">
                                    </div>



                                    <div class="w-full col-span-6 ilmiy-ish">
                                        <label class="flex flex-col sm:flex-row"> guvohnoma_raqami
                                        </label>
                                        <input type="text" name="guvohnoma_raqami" class="input w-full border mt-2">
                                    </div>
                                    <div class="w-full col-span-12 ilmiy-ish">
                                        <label class="flex flex-col sm:flex-row"><span class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> mualliflari
                                        </label>
                                        <textarea type="text" name="mualliflari" class="input w-full border mt-2" required=""></textarea>
                                    </div>
                                    <div class="w-full col-span-12">

                                        <div class="my-4">
                                            <a class="old_file underlined" href="" target="_blank"></a>
                                        </div>


                                        <label class="flex flex-col sm:flex-row"> <span class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Файл
                                        </label>
                                        <input type="file" name="file" style="padding-left: 0" class="input w-full mt-2" required="">

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <div class="px-5 pb-5 text-center">
                    <button type="button" data-dismiss="modal" class="button delete-cancel w-32 border text-gray-700 mr-1">
                        Бекор қилиш
                    </button>
                    <button type="submit" form="science-paper-create-form" class="update-confirm button w-24 bg-theme-1 text-white">
                        Қўшиш
                    </button>
                </div>
            </div>
        </div>

    </div>


    
</div>
@endsection