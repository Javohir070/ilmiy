@extends('layouts.admin')

@section('content')

<div class="content">
   





    <div class="flex w-100 justify-between align-center">
        <h2 class="intro-y text-lg font-medium mt-10">Guvohnoma</h2>


        <div class="flex w-100 justify-between align-center">
            <a href="/education_unconfirmed/" class="button bg-theme-9 text-white mt-10">
                Тасдиқланмаганлар 0</a>
            <a href="/education_dismissed/" class="button bg-theme-6 text-white mt-10">
                Рад қилинганлар 0</a>
        </div>

    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">

        <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
            <div class="w-full mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <form method="POST" action="{{ route('guvohnoma.store') }}" class="validate-form" enctype="multipart/form-data"
                    novalidate="novalidate">
                    @csrf
                    <div class="grid grid-cols-12 gap-2">
                        <div class="w-full col-span-3 academic_year_column" >
    
                                <label class="flex flex-col sm:flex-row"> <span
                                        class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Kim tomonidan berilgan
                                </label>
                                <input type="text" name="tashkilot_name" class="input w-full border mt-2"
                                    required="">
    
    
                            </div>
                        <div class="w-full col-span-3" style="display: none;">
                            <label class="flex flex-col sm:flex-row"> <span
                                    class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Тури
                            </label>
                            <select name="sub_cat_id" class="input border w-full mt-2 valid" required=""
                                aria-invalid="false">

                                <option value="1">guvifikat</option>

                                <option value="2">guvohnoma</option>

                                <option value="3">boshqalar</option>
                            </select>

                        </div>
                        <div class="w-full col-span-3">
                            <label class="flex flex-col sm:flex-row"> <span
                                    class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Nomi
                            </label>
                            <input type="text" name="name" class="input w-full border mt-2" required="">

                        </div>
                        <div class="w-full col-span-2 date_column" >

                            <label class="flex flex-col sm:flex-row"> <span
                                    class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Sana
                            </label>
                            <input type="text" name="sana" class="datepicker input w-full border mt-2"
                                required="">


                        </div>
                        
                        <div class="w-full col-span-3">

                            <label class="flex flex-col sm:flex-row"> <span
                                    class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Tasdiqlovchi hujjat nusxasini yuklash
                            </label>
                            <input type="file" name="file" style="padding-left: 0" class="input w-full mt-2"
                                required="">
                        </div>
                        <input type="hidden" name="next" value="/education">
                        <!-- <input type="hidden" name='profile_id' value="90"> -->
                        <div class="w-full col-span-1 add-paper-wrapper">
                            <button class="add-paper-btn button text-white bg-theme-1 w-full shadow-md mt-8"
                                type="submit">
                                Qo'shish
                            </button>

                        </div>

                    </div>
                </form>
            </div>
        </div>

        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-no-wrap">№</th>
                        <th class="whitespace-no-wrap">Nomi</th>
                        <th class="whitespace-no-wrap">Kim tomonidan berilgan</th>
                        <th class="whitespace-no-wrap">Sana</th>
                        <th class="whitespace-no-wrap">Fayl</th>
                        <th class="whitespace-no-wrap text-center">Ҳаракат</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($guvohnoma as $guv )
                
                <tr class="intro-x">
                        <td>{{$loop->index+1}}</td>
                        <td>
                            <a href="/files/papers/4735cda0-a7a3-4a45-bd93-0bc013b857dc.png" target="_blank" download="/files/papers/4735cda0-a7a3-4a45-bd93-0bc013b857dc.png" class="font-medium">{{ $guv->name }}</a>
                        </td>
                        <td>
                            <a href="" class="font-medium ">{{ $guv->tashkilot_name  }}</a>
                        </td>
                        <td>
                            <a href="" class="font-medium ">{{ $guv->sana }}</a>
                        </td>
                        <td class="w-40">
                            <div class="flex items-center text-theme-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                Fayl
                            </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex science-update-action items-center mr-3" href="javascript:;" data-id="2978" data-name="sdfd" data-file="/files/papers/4735cda0-a7a3-4a45-bd93-0bc013b857dc.png" data-filename="Screenshot from 2023-04-17 16-23-56.png" data-type="66" data-date="None" data-doi="" data-publisher="" data-description="None" data-authors-count="None" data-toggle="modal" data-target="#science-paper-update-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-1">
                                        <polyline points="9 11 12 14 22 4"></polyline>
                                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                    </svg>
                                     Tahrirlash
                                </a>

                                <form action="{{ route('guvohnoma.destroy',['guvohnoma'=>$guv->id]) }}" method="post" onsubmit="return confirm(' Rostan Ochirishni hohlaysizmi?');">
                                    <button type="submit" class="flex delete-action items-center text-theme-6" >
                                    @csrf
                                    @method("DELETE")
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 w-4 h-4 mr-1">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                        O'chirish
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
            
                @endforeach


                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
</div>
@endsection