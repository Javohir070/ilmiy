<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="/admin/dist/images/logo.png">
        <span class="hidden xl:block text-white text-lg ml-3"> Science <span class="font-medium">ID</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <div>
        <div class="img-user" style="border-radius: 20px; margin-top:10px;"><img style="border-radius: 20px; margin:10px 10px;" src="/admin/dist/images/profile-12.jpg" alt=""></div>
        <div style="color: white;font-size: 18px;padding: 10px 0px 0px 10px;">F.I.Sh: Qayumov Javohir</div>
        <div style="color: white;font-size: 18px;padding: 10px 0px 0px 10px;">Ish joyi: TATU</div>
        <div style="color: white;font-size: 18px;padding: 10px 0px 10px 10px;">ScienceID: 999-999-999</div>
    </div>
    <ul>
        <li>
            <a href="index.html" class="side-menu side-menu--active">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title"> Dashboard </div>
            </a>
        </li>
        @can('ilmiy unvoni')
        <li>
            <a href="{{ route('ilmiyunvon.index') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                <div class="side-menu__title"> Ilmiy unvoni </div>
            </a>
        </li>
        @endcan
        <!-- <li>
            <a href="side-menu-file-manager.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                <div class="side-menu__title"> File Manager </div>
            </a>
        </li>
        <li>
            <a href="side-menu-point-of-sale.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                <div class="side-menu__title"> Point of Sale </div>
            </a>
        </li> -->
        <!-- <li>
            <a href="side-menu-chat.html" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                <div class="side-menu__title"> Chat </div>
            </a>
        </li> -->
        @can('ilmiy unvoni')
            <li>
                <a href="{{ route('ilmiydaraja.index') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                    <div class="side-menu__title"> Ilmiy darajasi </div>
                </a>
            </li>
        @endcan

        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                <div class="side-menu__title"> Ilmiy maqolalar <i data-feather="chevron-down"
                        class="side-menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('xalqromaqola.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Xalqaro maqola </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('xalqaro-tezis.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Xalqaro tezis </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('respublika-maqola.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Respublika maqola </div>
                    </a>
                    <a href="{{ route('respublika-tezis.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Respublika tezis </div>
                    </a>
                </li>
            </ul>
        </li>


        
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                <div class="side-menu__title">Ishtirok etgan loyihalar<i data-feather="chevron-down" class="side-menu__sub-icon"></i>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('xalqaroloyihalar.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Xalqaro loyihalar</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('davlat-ilmiy.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">Davlat ilmiy dasturlar doirasidagi loyihalar </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('xojalik.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">Xo'jalik Shartnomalar </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('tijoratlashtirish.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">Tijoratlashtirish loyihalari </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="trello"></i> </div>
                <div class="side-menu__title"> Intelektual faoliyat <i data-feather="chevron-down" class="side-menu__sub-icon"></i>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('ixtiro.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Ixtiro</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('foydalimodel.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Foydali model </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-profile-overview-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Sanoat namunalari</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-profile-overview-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Selektsiya yutuqlari(O'simlik davri)</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-profile-overview-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">Selektsiya yutuqlari(Hayvon zotlari)</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-profile-overview-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">Tovar belgisi</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-profile-overview-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title"> Tovar kelib chiqqan joy nomi</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-profile-overview-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">Geografik ko'rsatgichlar</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-profile-overview-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">Hammaga ma'lum Tovar belgisi</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-profile-overview-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">Ma'lumot belgisi</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-profile-overview-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">EHM uchun yaratilgan dastur</div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-profile-overview-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">Integral sxemalar</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                <div class="side-menu__title"> Ilmiy yutuqlar <i data-feather="chevron-down" class="side-menu__sub-icon"></i>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('sertifikat.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">Sertifikat</div>
                    </a>
                    
                </li>
                <li>
                    <a href="{{ route('guvohnoma.index') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="side-menu__title">Guvohnoma</div>
                    </a>
                 
                </li>
              
            </ul>
        </li>
        <!-- //cans -->

        <li>
            <a href="{{ route('roles.index') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Roles </div>
            </a>
        </li>

        <li>
            <a href="{{ route('users.index') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Users </div>
            </a>
        </li>

        <li>
            <a href="{{ route('permissions.index') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Permissions </div>
            </a>
        </li>
     
    </ul>
</nav>