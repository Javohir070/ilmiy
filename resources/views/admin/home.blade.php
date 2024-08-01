@extends("layouts.admin")
@section("content")
<!-- END: Top Bar -->
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
        <!-- BEGIN: General Report -->
        <div class="col-span-12 mt-8">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    General Report
                </h2>
                <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i>
                    Reload Data </a>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i>
                                <div class="ml-auto">
                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                        title="33% Higher than last month"> 33% <i data-feather="chevron-up"
                                            class="w-4 h-4"></i> </div>
                                </div>
                            </div>
                            <div class="text-3xl font-bold leading-8 mt-6">4.510</div>
                            <div class="text-base text-gray-600 mt-1">Item Sales</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <i data-feather="credit-card" class="report-box__icon text-theme-11"></i>
                                <div class="ml-auto">
                                    <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer"
                                        title="2% Lower than last month"> 2% <i data-feather="chevron-down"
                                            class="w-4 h-4"></i> </div>
                                </div>
                            </div>
                            <div class="text-3xl font-bold leading-8 mt-6">3.521</div>
                            <div class="text-base text-gray-600 mt-1">New Orders</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <i data-feather="monitor" class="report-box__icon text-theme-12"></i>
                                <div class="ml-auto">
                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                        title="12% Higher than last month"> 12% <i data-feather="chevron-up"
                                            class="w-4 h-4"></i> </div>
                                </div>
                            </div>
                            <div class="text-3xl font-bold leading-8 mt-6">2.145</div>
                            <div class="text-base text-gray-600 mt-1">Total Products</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <i data-feather="user" class="report-box__icon text-theme-9"></i>
                                <div class="ml-auto">
                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer"
                                        title="22% Higher than last month"> 22% <i data-feather="chevron-up"
                                            class="w-4 h-4"></i> </div>
                                </div>
                            </div>
                            <div class="text-3xl font-bold leading-8 mt-6">152.000</div>
                            <div class="text-base text-gray-600 mt-1">Unique Visitor</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: General Report -->
        <!-- BEGIN: Sales Report -->
        <div class="col-span-12 lg:col-span-6 mt-8">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Sales Report
                </h2>
                <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700">
                    <i data-feather="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                    <input type="text" data-daterange="true" class="datepicker input w-full sm:w-56 box pl-10">
                </div>
            </div>
            <div class="intro-y box p-5 mt-12 sm:mt-5">
                <div class="flex flex-col xl:flex-row xl:items-center">
                    <div class="flex">
                        <div>
                            <div class="text-theme-20 text-lg xl:text-xl font-bold">$15,000</div>
                            <div class="text-gray-600">This Month</div>
                        </div>
                        <div class="w-px h-12 border border-r border-dashed border-gray-300 mx-4 xl:mx-6"></div>
                        <div>
                            <div class="text-gray-600 text-lg xl:text-xl font-medium">$10,000</div>
                            <div class="text-gray-600">Last Month</div>
                        </div>
                    </div>
                    <div class="dropdown relative xl:ml-auto mt-5 xl:mt-0">
                        <button
                            class="dropdown-toggle button font-normal border text-white relative flex items-center text-gray-700">
                            Filter by Category <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                        <div class="dropdown-box mt-10 absolute w-40 top-0 xl:right-0 z-20">
                            <div class="dropdown-box__content box p-2 overflow-y-auto h-32"> <a href=""
                                    class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">PC
                                    & Laptop</a> <a href=""
                                    class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Smartphone</a>
                                <a href=""
                                    class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Electronic</a>
                                <a href=""
                                    class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Photography</a>
                                <a href=""
                                    class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Sport</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="report-chart">
                    <canvas id="report-line-chart" height="160" class="mt-6"></canvas>
                </div>
            </div>
        </div>
        <!-- END: Sales Report -->
        <!-- BEGIN: Weekly Top Seller -->
        <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Weekly Top Seller
                </h2>
                <a href="" class="ml-auto text-theme-1 truncate">See all</a>
            </div>
            <div class="intro-y box p-5 mt-5">
                <canvas class="mt-3" id="report-pie-chart" height="280"></canvas>
                <div class="mt-8">
                    <div class="flex items-center">
                        <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                        <span class="truncate">17 - 30 Years old</span>
                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                        <span class="font-medium xl:ml-auto">62%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                        <span class="truncate">31 - 50 Years old</span>
                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                        <span class="font-medium xl:ml-auto">33%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                        <span class="truncate">>= 50 Years old</span>
                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                        <span class="font-medium xl:ml-auto">10%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Weekly Top Seller -->
        <!-- BEGIN: Sales Report -->
        <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Sales Report
                </h2>
                <a href="" class="ml-auto text-theme-1 truncate">See all</a>
            </div>
            <div class="intro-y box p-5 mt-5">
                <canvas class="mt-3" id="report-donut-chart" height="280"></canvas>
                <div class="mt-8">
                    <div class="flex items-center">
                        <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                        <span class="truncate">17 - 30 Years old</span>
                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                        <span class="font-medium xl:ml-auto">62%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                        <span class="truncate">31 - 50 Years old</span>
                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                        <span class="font-medium xl:ml-auto">33%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                        <span class="truncate">>= 50 Years old</span>
                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                        <span class="font-medium xl:ml-auto">10%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Sales Report -->
        <!-- BEGIN: Official Store -->
        <div class="col-span-12 xl:col-span-8 mt-6">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Official Store
                </h2>
                <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700">
                    <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                    <input type="text" class="input w-full sm:w-40 box pl-10" placeholder="Filter by city">
                </div>
            </div>
            <div class="intro-y box p-5 mt-12 sm:mt-5">
                <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                <div class="report-maps mt-5 bg-gray-200 rounded-md" data-center="-6.2425342, 106.8626478"
                    data-sources="/dist/json/location.json"></div>
            </div>
        </div>
        <!-- END: Official Store -->
        <!-- BEGIN: Weekly Best Sellers -->
        <div class="col-span-12 xl:col-span-4 mt-6">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Weekly Best Sellers
                </h2>
            </div>
            <div class="mt-5">
                <div class="intro-y">
                    <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                        <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                            <img alt="Midone Tailwind HTML Admin Template" src="/admin/dist/images/profile-14.jpg">
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="font-medium">Leonardo DiCaprio</div>
                            <div class="text-gray-600 text-xs">6 August 2022</div>
                        </div>
                        <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137
                            Sales</div>
                    </div>
                </div>
                <div class="intro-y">
                    <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                        <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                            <img alt="Midone Tailwind HTML Admin Template" src="/admin/dist/images/profile-10.jpg">
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="font-medium">Tom Cruise</div>
                            <div class="text-gray-600 text-xs">21 July 2020</div>
                        </div>
                        <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137
                            Sales</div>
                    </div>
                </div>
                <div class="intro-y">
                    <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                        <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                            <img alt="Midone Tailwind HTML Admin Template" src="/admin/dist/images/profile-12.jpg">
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="font-medium">Al Pacino</div>
                            <div class="text-gray-600 text-xs">5 January 2021</div>
                        </div>
                        <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137
                            Sales</div>
                    </div>
                </div>
                <div class="intro-y">
                    <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                        <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                            <img alt="Midone Tailwind HTML Admin Template" src="/admin/dist/images/profile-6.jpg">
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="font-medium">Russell Crowe</div>
                            <div class="text-gray-600 text-xs">22 April 2020</div>
                        </div>
                        <div class="py-1 px-2 rounded-full text-xs bg-theme-9 text-white cursor-pointer font-medium">137
                            Sales</div>
                    </div>
                </div>
                <a href=""
                    class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-theme-15 text-theme-16">View
                    More</a>
            </div>
        </div>
        <!-- END: Weekly Best Sellers -->
        <!-- BEGIN: General Report -->
        <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
            <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                <div class="mini-report-chart box p-5 zoom-in">
                    <div class="flex items-center">
                        <div class="w-2/4 flex-none">
                            <div class="text-lg font-medium truncate">Target Sales</div>
                            <div class="text-gray-600 mt-1">300 Sales</div>
                        </div>
                        <div class="flex-none ml-auto relative">
                            <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                            <div
                                class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">
                                20%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                <div class="mini-report-chart box p-5 zoom-in">
                    <div class="flex">
                        <div class="text-lg font-medium truncate mr-3">Social Media</div>
                        <div
                            class="py-1 px-2 rounded-full text-xs bg-gray-200 text-gray-600 cursor-pointer ml-auto truncate">
                            320 Followers</div>
                    </div>
                    <div class="mt-4">
                        <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                <div class="mini-report-chart box p-5 zoom-in">
                    <div class="flex items-center">
                        <div class="w-2/4 flex-none">
                            <div class="text-lg font-medium truncate">New Products</div>
                            <div class="text-gray-600 mt-1">1450 Products</div>
                        </div>
                        <div class="flex-none ml-auto relative">
                            <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                            <div
                                class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">
                                45%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xxl:col-span-3 intro-y">
                <div class="mini-report-chart box p-5 zoom-in">
                    <div class="flex">
                        <div class="text-lg font-medium truncate mr-3">Posted Ads</div>
                        <div
                            class="py-1 px-2 rounded-full text-xs bg-gray-200 text-gray-600 cursor-pointer ml-auto truncate">
                            180 Campaign</div>
                    </div>
                    <div class="mt-4">
                        <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: General Report -->
        <!-- BEGIN: Weekly Top Seller -->
        <div class="col-span-12 mt-6">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Weekly Top Seller
                </h2>
                <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                    <button class="button box flex items-center text-gray-700"> <i data-feather="file-text"
                            class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                    <button class="ml-3 button box flex items-center text-gray-700"> <i data-feather="file-text"
                            class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                </div>
            </div>
            <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                <table class="table table-report sm:mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-no-wrap">IMAGES</th>
                            <th class="whitespace-no-wrap">PRODUCT NAME</th>
                            <th class="text-center whitespace-no-wrap">STOCK</th>
                            <th class="text-center whitespace-no-wrap">STATUS</th>
                            <th class="text-center whitespace-no-wrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="intro-x">
                            <td class="w-40">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                            src="/admin/dist/images/preview-2.jpg" title="Uploaded at 6 August 2022">
                                    </div>
                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                            src="/admin/dist/images/preview-8.jpg" title="Uploaded at 1 May 2021">
                                    </div>
                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                            src="/admin/dist/images/preview-11.jpg" title="Uploaded at 10 October 2020">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-no-wrap">Apple MacBook Pro 13</a>
                                <div class="text-gray-600 text-xs whitespace-no-wrap">PC &amp; Laptop</div>
                            </td>
                            <td class="text-center">77</td>
                            <td class="w-40">
                                <div class="flex items-center justify-center text-theme-9"> <i
                                        data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href=""> <i data-feather="check-square"
                                            class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2"
                                            class="w-4 h-4 mr-1"></i> Delete </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="intro-x">
                            <td class="w-40">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                            src="/admin/dist/images/preview-7.jpg" title="Uploaded at 21 July 2020">
                                    </div>
                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                            src="/admin/dist/images/preview-13.jpg"
                                            title="Uploaded at 31 December 2021">
                                    </div>
                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                            src="/admin/dist/images/preview-2.jpg" title="Uploaded at 9 September 2020">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-no-wrap">Dell XPS 13</a>
                                <div class="text-gray-600 text-xs whitespace-no-wrap">PC &amp; Laptop</div>
                            </td>
                            <td class="text-center">100</td>
                            <td class="w-40">
                                <div class="flex items-center justify-center text-theme-9"> <i
                                        data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href=""> <i data-feather="check-square"
                                            class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2"
                                            class="w-4 h-4 mr-1"></i> Delete </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="intro-x">
                            <td class="w-40">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                            src="/admin/dist/images/preview-9.jpg" title="Uploaded at 5 January 2021">
                                    </div>
                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                            src="/admin/dist/images/preview-6.jpg" title="Uploaded at 18 November 2021">
                                    </div>
                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                            src="/admin/dist/images/preview-13.jpg" title="Uploaded at 1 June 2021">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-no-wrap">Oppo Find X2 Pro</a>
                                <div class="text-gray-600 text-xs whitespace-no-wrap">Smartphone &amp; Tablet</div>
                            </td>
                            <td class="text-center">50</td>
                            <td class="w-40">
                                <div class="flex items-center justify-center text-theme-9"> <i
                                        data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href=""> <i data-feather="check-square"
                                            class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2"
                                            class="w-4 h-4 mr-1"></i> Delete </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="intro-x">
                            <td class="w-40">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                            src="/admin/dist/images/preview-11.jpg" title="Uploaded at 22 April 2020">
                                    </div>
                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                            src="/admin/dist/images/preview-10.jpg"
                                            title="Uploaded at 12 December 2020">
                                    </div>
                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                        <img alt="Midone Tailwind HTML Admin Template" class="tooltip rounded-full"
                                            src="/admin/dist/images/preview-12.jpg" title="Uploaded at 7 May 2020">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-no-wrap">Apple MacBook Pro 13</a>
                                <div class="text-gray-600 text-xs whitespace-no-wrap">PC &amp; Laptop</div>
                            </td>
                            <td class="text-center">50</td>
                            <td class="w-40">
                                <div class="flex items-center justify-center text-theme-9"> <i
                                        data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href=""> <i data-feather="check-square"
                                            class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2"
                                            class="w-4 h-4 mr-1"></i> Delete </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="intro-y flex flex-wrap sm:flex-row sm:flex-no-wrap items-center mt-3">
                <ul class="pagination">
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                    </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li> <a class="pagination__link" href="">1</a> </li>
                    <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                    <li> <a class="pagination__link" href="">3</a> </li>
                    <li> <a class="pagination__link" href="">...</a> </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                    </li>
                    <li>
                        <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                    </li>
                </ul>
                <select class="w-20 input box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div>
        </div>
        <!-- END: Weekly Top Seller -->
    </div>
    <div class="col-span-12 xxl:col-span-3 xxl:border-l border-theme-5 -mb-10 pb-10">
        <div class="xxl:pl-6 grid grid-cols-12 gap-6">
            <!-- BEGIN: Transactions -->
            <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3 xxl:mt-8">
                <div class="intro-x flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Transactions
                    </h2>
                </div>
                <div class="mt-5">
                    <div class="intro-x">
                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="Midone Tailwind HTML Admin Template" src="/admin/dist/images/profile-14.jpg">
                            </div>
                            <div class="ml-4 mr-auto">
                                <div class="font-medium">Leonardo DiCaprio</div>
                                <div class="text-gray-600 text-xs">6 August 2022</div>
                            </div>
                            <div class="text-theme-9">+$23</div>
                        </div>
                    </div>
                    <div class="intro-x">
                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="Midone Tailwind HTML Admin Template" src="/admin/dist/images/profile-10.jpg">
                            </div>
                            <div class="ml-4 mr-auto">
                                <div class="font-medium">Tom Cruise</div>
                                <div class="text-gray-600 text-xs">21 July 2020</div>
                            </div>
                            <div class="text-theme-9">+$83</div>
                        </div>
                    </div>
                    <div class="intro-x">
                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="Midone Tailwind HTML Admin Template" src="/admin/dist/images/profile-12.jpg">
                            </div>
                            <div class="ml-4 mr-auto">
                                <div class="font-medium">Al Pacino</div>
                                <div class="text-gray-600 text-xs">5 January 2021</div>
                            </div>
                            <div class="text-theme-9">+$199</div>
                        </div>
                    </div>
                    <div class="intro-x">
                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="Midone Tailwind HTML Admin Template" src="/admin/dist/images/profile-6.jpg">
                            </div>
                            <div class="ml-4 mr-auto">
                                <div class="font-medium">Russell Crowe</div>
                                <div class="text-gray-600 text-xs">22 April 2020</div>
                            </div>
                            <div class="text-theme-9">+$43</div>
                        </div>
                    </div>
                    <div class="intro-x">
                        <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="Midone Tailwind HTML Admin Template" src="/admin/dist/images/profile-15.jpg">
                            </div>
                            <div class="ml-4 mr-auto">
                                <div class="font-medium">Al Pacino</div>
                                <div class="text-gray-600 text-xs">8 October 2022</div>
                            </div>
                            <div class="text-theme-9">+$112</div>
                        </div>
                    </div>
                    <a href=""
                        class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-theme-15 text-theme-16">View
                        More</a>
                </div>
            </div>
            <!-- END: Transactions -->
            <!-- BEGIN: Recent Activities -->
            <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3">
                <div class="intro-x flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Recent Activities
                    </h2>
                    <a href="" class="ml-auto text-theme-1 truncate">See all</a>
                </div>
                <div class="report-timeline mt-5 relative">
                    <div class="intro-x relative flex items-center mb-3">
                        <div class="report-timeline__image">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="Midone Tailwind HTML Admin Template" src="/admin/dist/images/profile-9.jpg">
                            </div>
                        </div>
                        <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                            <div class="flex items-center">
                                <div class="font-medium">Johnny Depp</div>
                                <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                            </div>
                            <div class="text-gray-600 mt-1">Has joined the team</div>
                        </div>
                    </div>
                    <div class="intro-x relative flex items-center mb-3">
                        <div class="report-timeline__image">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="Midone Tailwind HTML Admin Template" src="/admin/dist/images/profile-10.jpg">
                            </div>
                        </div>
                        <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                            <div class="flex items-center">
                                <div class="font-medium">Brad Pitt</div>
                                <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                            </div>
                            <div class="text-gray-600">
                                <div class="mt-1">Added 3 new photos</div>
                                <div class="flex mt-2">
                                    <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Apple MacBook Pro 13">
                                        <img alt="Midone Tailwind HTML Admin Template"
                                            class="rounded-md border border-white"
                                            src="/admin/dist/images/preview-8.jpg">
                                    </div>
                                    <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Dell XPS 13">
                                        <img alt="Midone Tailwind HTML Admin Template"
                                            class="rounded-md border border-white"
                                            src="/admin/dist/images/preview-14.jpg">
                                    </div>
                                    <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Oppo Find X2 Pro">
                                        <img alt="Midone Tailwind HTML Admin Template"
                                            class="rounded-md border border-white"
                                            src="/admin/dist/images/preview-5.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro-x text-gray-500 text-xs text-center my-4">12 November</div>
                    <div class="intro-x relative flex items-center mb-3">
                        <div class="report-timeline__image">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="Midone Tailwind HTML Admin Template" src="/admin/dist/images/profile-4.jpg">
                            </div>
                        </div>
                        <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                            <div class="flex items-center">
                                <div class="font-medium">Al Pacino</div>
                                <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                            </div>
                            <div class="text-gray-600 mt-1">Has changed <a class="text-theme-1" href="">Sony Master
                                    Series A9G</a> price and description</div>
                        </div>
                    </div>
                    <div class="intro-x relative flex items-center mb-3">
                        <div class="report-timeline__image">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="Midone Tailwind HTML Admin Template" src="/admin/dist/images/profile-12.jpg">
                            </div>
                        </div>
                        <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                            <div class="flex items-center">
                                <div class="font-medium">Sylvester Stallone</div>
                                <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                            </div>
                            <div class="text-gray-600 mt-1">Has changed <a class="text-theme-1" href="">Sony Master
                                    Series A9G</a> description</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Recent Activities -->
            <!-- BEGIN: Important Notes -->
            <div
                class="col-span-12 md:col-span-6 xl:col-span-12 xxl:col-span-12 xl:col-start-1 xl:row-start-1 xxl:col-start-auto xxl:row-start-auto mt-3">
                <div class="intro-x flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-auto">
                        Important Notes
                    </h2>
                    <button data-carousel="important-notes" data-target="prev"
                        class="slick-navigator button px-2 border border-gray-400 flex items-center text-gray-700 mr-2">
                        <i data-feather="chevron-left" class="w-4 h-4"></i> </button>
                    <button data-carousel="important-notes" data-target="next"
                        class="slick-navigator button px-2 border border-gray-400 flex items-center text-gray-700"> <i
                            data-feather="chevron-right" class="w-4 h-4"></i> </button>
                </div>
                <div class="mt-5 intro-x">
                    <div class="slick-carousel box zoom-in" id="important-notes">
                        <div class="p-5">
                            <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                            <div class="text-gray-500 mt-1">20 Hours ago</div>
                            <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s.</div>
                            <div class="font-medium flex mt-5">
                                <button type="button" class="button button--sm bg-gray-200 text-gray-600">View
                                    Notes</button>
                                <button type="button"
                                    class="button button--sm border border-gray-300 text-gray-600 ml-auto">Dismiss</button>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="font-medium truncate">Lorem Ipsum is simply dummy text</div>
                            <div class="text-gray-500 mt-1">20 Hours ago</div>
                            <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s.</div>
                            <div class="font-medium flex mt-5">
                                <button type="button" class="button button--sm bg-gray-200 text-gray-600">View
                                    Notes</button>
                                <button type="button"
                                    class="button button--sm border border-gray-300 text-gray-600 ml-auto">Dismiss</button>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="font-medium truncate">Lorem Ipsum is simply dummy text</div>
                            <div class="text-gray-500 mt-1">20 Hours ago</div>
                            <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s.</div>
                            <div class="font-medium flex mt-5">
                                <button type="button" class="button button--sm bg-gray-200 text-gray-600">View
                                    Notes</button>
                                <button type="button"
                                    class="button button--sm border border-gray-300 text-gray-600 ml-auto">Dismiss</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Important Notes -->
            <!-- BEGIN: Schedules -->
            <div
                class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 xl:col-start-1 xl:row-start-2 xxl:col-start-auto xxl:row-start-auto mt-3">
                <div class="intro-x flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Schedules
                    </h2>
                    <a href="" class="ml-auto text-theme-1 truncate flex items-center"> <i data-feather="plus"
                            class="w-4 h-4 mr-1"></i> Add New Schedules </a>
                </div>
                <div class="mt-5">
                    <div class="intro-x box">
                        <div class="p-5">
                            <div class="flex">
                                <i data-feather="chevron-left" class="w-5 h-5 text-gray-600"></i>
                                <div class="font-medium mx-auto">April</div>
                                <i data-feather="chevron-right" class="w-5 h-5 text-gray-600"></i>
                            </div>
                            <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                <div class="font-medium">Su</div>
                                <div class="font-medium">Mo</div>
                                <div class="font-medium">Tu</div>
                                <div class="font-medium">We</div>
                                <div class="font-medium">Th</div>
                                <div class="font-medium">Fr</div>
                                <div class="font-medium">Sa</div>
                                <div class="py-1 rounded relative text-gray-600">29</div>
                                <div class="py-1 rounded relative text-gray-600">30</div>
                                <div class="py-1 rounded relative text-gray-600">31</div>
                                <div class="py-1 rounded relative">1</div>
                                <div class="py-1 rounded relative">2</div>
                                <div class="py-1 rounded relative">3</div>
                                <div class="py-1 rounded relative">4</div>
                                <div class="py-1 rounded relative">5</div>
                                <div class="py-1 bg-theme-18 rounded relative">6</div>
                                <div class="py-1 rounded relative">7</div>
                                <div class="py-1 bg-theme-1 text-white rounded relative">8</div>
                                <div class="py-1 rounded relative">9</div>
                                <div class="py-1 rounded relative">10</div>
                                <div class="py-1 rounded relative">11</div>
                                <div class="py-1 rounded relative">12</div>
                                <div class="py-1 rounded relative">13</div>
                                <div class="py-1 rounded relative">14</div>
                                <div class="py-1 rounded relative">15</div>
                                <div class="py-1 rounded relative">16</div>
                                <div class="py-1 rounded relative">17</div>
                                <div class="py-1 rounded relative">18</div>
                                <div class="py-1 rounded relative">19</div>
                                <div class="py-1 rounded relative">20</div>
                                <div class="py-1 rounded relative">21</div>
                                <div class="py-1 rounded relative">22</div>
                                <div class="py-1 bg-theme-17 rounded relative">23</div>
                                <div class="py-1 rounded relative">24</div>
                                <div class="py-1 rounded relative">25</div>
                                <div class="py-1 rounded relative">26</div>
                                <div class="py-1 bg-theme-14 rounded relative">27</div>
                                <div class="py-1 rounded relative">28</div>
                                <div class="py-1 rounded relative">29</div>
                                <div class="py-1 rounded relative">30</div>
                                <div class="py-1 rounded relative text-gray-600">1</div>
                                <div class="py-1 rounded relative text-gray-600">2</div>
                                <div class="py-1 rounded relative text-gray-600">3</div>
                                <div class="py-1 rounded relative text-gray-600">4</div>
                                <div class="py-1 rounded relative text-gray-600">5</div>
                                <div class="py-1 rounded relative text-gray-600">6</div>
                                <div class="py-1 rounded relative text-gray-600">7</div>
                                <div class="py-1 rounded relative text-gray-600">8</div>
                                <div class="py-1 rounded relative text-gray-600">9</div>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 p-5">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                <span class="truncate">UI/UX Workshop</span>
                                <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden">
                                </div>
                                <span class="font-medium xl:ml-auto">23th</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                <span class="truncate">VueJs Frontend Development</span>
                                <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden">
                                </div>
                                <span class="font-medium xl:ml-auto">10th</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                <span class="truncate">Laravel Rest API</span>
                                <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden">
                                </div>
                                <span class="font-medium xl:ml-auto">31th</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Schedules -->
        </div>
    </div>
</div>

<div class="flex justify-between align-center mt-10">

    <h2 class="intro-y text-lg font-medium">Илмий ишлар</h2>

    <a href="javascript:;" data-target="#science-paper-create-modal" data-toggle="modal"
        class="button w-24 bg-theme-1 text-white">
        Қўшиш
    </a>

</div>

<div id="science-paper-create-modal" class="modal">
    <div class="modal__content modal__content--xl">
        <div class="p-5">

            <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
                <div class="w-full mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <form id="science-paper-create-form" method="POST" action="/paper_create" class="validate-form"
                        enctype="multipart/form-data" novalidate="novalidate">
                        <input type="hidden" name="csrfmiddlewaretoken"
                            value="q37FvGc87Ff7DvNUSbCIdrw99nJuFpFmdRb9WFNoi1CbQw6OOMLBxvjxwEtHyQ1X">
                        <div class="grid grid-cols-12 gap-2">
                            <input name="id" type="hidden">
                            <div class="w-full col-span-6">
                                <label class="flex flex-col sm:flex-row"> <span
                                        class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Тури
                                </label>
                                <select name="sub_cat_id" id="science-sub-category" class="input border w-full mt-2"
                                    required="">

                                    <option value="54">Бошқа</option>

                                    <option value="53">Тезис (Халқаро)</option>

                                    <option value="52">Тезис (Республика)</option>

                                    <option value="29">Гувоҳнома</option>

                                    <option value="27">Мақола (Маҳаллий журнал)</option>

                                    <option value="26">Мақола (Халқаро журнал)</option>

                                    <option value="25">Мақола (Конференция)</option>

                                    <option value="23">Монография</option>

                                </select>
                            </div>
                            <div class="w-full col-span-6 ilmiy-ish">
                                <label class="flex flex-col sm:flex-row"> <span
                                        class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Халқаро илмий базалар
                                </label>
                                <select name="inter_bases" class="input border w-full mt-2" required="">

                                    <option value="14">Google scholar</option>

                                    <option value="12">Scopus</option>

                                    <option value="11">Web of science</option>

                                    <option value="13">Xalqaro bazalarda mavjud emas</option>

                                </select>
                            </div>
                            <div class="w-full col-span-6 guvohnoma" style="display: none;">
                                <label class="flex flex-col sm:flex-row"> <span
                                        class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Гувоҳнома тури
                                </label>
                                <select name="intellectual_property" class="input border w-full mt-2" required="">

                                    <option value="9">Practice</option>

                                </select>
                            </div>

                            <div class="w-full col-span-12 ilmiy-ish">
                                <label class="flex flex-col sm:flex-row"> <span
                                        class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Илмий иш номи
                                </label>
                                <input type="text" name="name" class="input w-full border mt-2" required="">
                            </div>
                            <div class="w-full col-span-12 guvohnoma" style="display: none;">
                                <label class="flex flex-col sm:flex-row"> <span
                                        class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Гувоҳнома номи
                                </label>
                                <input type="text" name="guvohnoma_name" class="input w-full border mt-2" required="">
                            </div>
                            <div class="w-full col-span-3 ilmiy-ish">
                                <label class="flex flex-col sm:flex-row"> <span
                                        class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Тил
                                </label>
                                <select name="language" class="input border w-full mt-2" required="">

                                    <option value="7">uz</option>

                                    <option value="6">ru</option>

                                    <option value="5">eng</option>

                                </select>
                            </div>
                            <div class="w-full col-span-12 ilmiy-ish">
                                <label class="flex flex-col sm:flex-row"> <span
                                        class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Калит сўзлар
                                </label>
                                <input type="text" name="keywords" class="input w-full border mt-2" required="">
                            </div>
                            <div class="w-full col-span-6">
                                <label class="flex flex-col sm:flex-row"> <span
                                        class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Ўқув йили
                                </label>
                                <select name="academic_year" class="input border w-full mt-2" required="">

                                    <option value="13">2013-2014</option>

                                    <option value="11">2014-2015</option>

                                    <option value="10">2015-2016</option>

                                    <option value="9">2016-2017</option>

                                    <option value="8">2017-2018</option>

                                    <option value="7">2018-2019</option>

                                    <option value="6">2019-2020</option>

                                    <option value="4">2020-2021</option>

                                    <option value="3">2021-2022</option>

                                    <option value="2">2022-2023</option>

                                    <option value="1">2023-2024</option>

                                    <option value="5">2024-2025</option>

                                </select>
                            </div>
                            <div class="w-full col-span-6">
                                <label class="flex flex-col sm:flex-row"> <span
                                        class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Муаллифлар сони
                                </label>
                                <input type="number" name="authors_count" class="input w-full border mt-2" required="">
                            </div>

                            <div class="w-full col-span-12">
                                <label class="flex flex-col sm:flex-row"> <span
                                        class="mt-1 mr-1 sm:mt-0 text-xs text-red-600"></span>Муаллифлар
                                </label>
                                <select multiple="multiple" id="select-users" name="users"
                                    class="w-full mt-2 tomselected" autocomplete="off" tabindex="-1" hidden="hidden">
                                    <option value="">---Муаллифлар танланг---</option>

                                    <option value="288"> Odil Abdalimov</option>

                                    <option value="143"> Mubarak Abdujapparova</option>

                                    <option value="58"> Махина Абдул-Азалова</option>

                                    <option value="161"> Simela Abdullaeva</option>

                                    <option value="244"> Mirjamol Abdullayev</option>

                                    <option value="265"> Rustamboy Abdullayev</option>

                                    <option value="246"> Rustam Abdurahmanov</option>

                                    <option value="281"> Qahhor Abdurahmonov</option>

                                    <option value="209"> Shahnoza Abidova</option>

                                    <option value="223"> Marguba Akbarova</option>

                                    <option value="195"> Shamsuddin Akbarxadjayev</option>

                                    <option value="142"> Baxtiyor Akmuradov</option>

                                    <option value="227"> Yolqin Aliqulov</option>

                                    <option value="162"> Zamira Allamuratova</option>

                                    <option value="140"> Orif Allanov</option>

                                    <option value="324"> Ulug'bek Amirsaidov</option>

                                    <option value="323"> Shaxzoda Anarova</option>

                                    <option value="262"> Muhriddin Arabboyev</option>

                                    <option value="259"> Umida Aripova</option>

                                    <option value="47"> Зулфия Арипова</option>

                                    <option value="206"> Muazzam Artikova</option>

                                    <option value="204"> Odilbek Asqaraliyev</option>

                                    <option value="274"> Nodira Axmedova</option>

                                    <option value="272"> Fayzulla Axunov</option>

                                    <option value="203"> Bunyod Azimov</option>

                                    <option value="160"> Xasan Babadjanov</option>

                                    <option value="213"> Mo`min Babajanov</option>

                                    <option value="316"> Hayot Baxronov</option>

                                    <option value="332"> Baxtiyor Maxkamov</option>

                                    <option value="263"> Shoxrux Begmatov</option>

                                    <option value="344"> Obidjon Bekmirzayev</option>

                                    <option value="146"> Saida Beknazarova</option>

                                    <option value="189"> Ulug`bek Berdanov</option>

                                    <option value="151"> Alisher Berdiyev</option>

                                    <option value="166"> Fayzullajon Botirov</option>

                                    <option value="242"> Ilxom Boyquziyev</option>

                                    <option value="232"> Zoya Chay</option>

                                    <option value="343"> Adilbek Dauletov</option>

                                    <option value="271"> Dilmurod Davronbekov</option>

                                    <option value="214"> Malika Doshanova</option>

                                    <option value="290"> Dilara Dospanova</option>

                                    <option value="335"> Durdona Irgasheva</option>

                                    <option value="217"> Nodir Egamberdiyev</option>

                                    <option value="178"> Jamshid Elov</option>

                                    <option value="159"> Orif Erdonov</option>

                                    <option value="251"> Abdimurod Eshmuradov</option>

                                    <option value="266"> Ismail Faziljanov</option>

                                    <option value="158"> Barno Ganieva</option>

                                    <option value="240"> Abduxalil Ganiyev</option>

                                    <option value="275"> Abror Ganiyev</option>

                                    <option value="320"> Salim Ganiyev</option>

                                    <option value="256"> Igor Gavrilov</option>

                                    <option value="194"> Aleksander Grigorev</option>

                                    <option value="258"> Vladislav Gubenko</option>

                                    <option value="286"> Ilxomjon Gulamov</option>

                                    <option value="179"> Nigora G‘ulomova</option>

                                    <option value="139"> Sherzod Gulomov</option>

                                    <option value="218"> Alisher Hamroyev</option>

                                    <option value="144"> Doston Hasanov</option>

                                    <option value="300"> Nayira Ibragimova</option>

                                    <option value="254"> Refat Ibraimov</option>

                                    <option value="181"> Bahrom Ibrohimov</option>

                                    <option value="167"> Karimberdi Igamberdiev</option>

                                    <option value="279"> Erkin Imamov</option>

                                    <option value="156"> Nargizaxon Iminova</option>

                                    <option value="328"> Toxirjon Iminov</option>

                                    <option value="249"> Rixsi Isayev</option>

                                    <option value="196"> Sayyora Iskandarova</option>

                                    <option value="302"> Otabek Ismailov</option>

                                    <option value="154"> Gulnora Ismoilova</option>

                                    <option value="235"> Odila Ismoilova</option>

                                    <option value="243"> Shuxrat Jabbarov</option>

                                    <option value="333"> Jamshid Sultonov</option>

                                    <option value="236"> Nodira Jo`rayeva</option>

                                    <option value="292"> Jamoljon Jumanov</option>

                                    <option value="136"> Kamil Kerimov</option>

                                    <option value="330"> Ildar Koshbaxtiyev</option>

                                    <option value="239"> Taxir Kuchkarov</option>

                                    <option value="109"> Temurbek Quchqarov</option>

                                    <option value="222"> Nodira Latipova</option>

                                    <option value="301"> Seung Lee</option>

                                    <option value="150"> Haydar Madaminov</option>

                                    <option value="145"> Oybek Mallayev</option>

                                    <option value="135"> Xusniddin Mamadaliyev</option>

                                    <option value="234"> Abdug`ani Mamatov</option>

                                    <option value="192"> Maxina Mansurova</option>

                                    <option value="221"> Larisa Marisheva</option>

                                    <option value="327"> Nadira Maxkamova</option>

                                    <option value="190"> Sarvar Maxmudjanov</option>

                                    <option value="297"> Diyora Mirxodja</option>

                                    <option value="247"> Malika Mirzayeva</option>

                                    <option value="228"> Anvar Mirzayev</option>

                                    <option value="134"> Bahodir Moʻminov</option>

                                    <option value="342"> Munira Muxitdinova</option>

                                    <option value="253"> Alevtina Muradova</option>

                                    <option value="261"> Muhammadjon Musayev</option>

                                    <option value="326"> Abduvali Muxammadiyev</option>

                                    <option value="289"> Dildora Muxammediyeva</option>

                                    <option value="225"> Otabek Narmanov</option>

                                    <option value="164"> Oybek Narzulloyev</option>

                                    <option value="299"> Gulchexra Nazarova</option>

                                    <option value="197"> Alisher Nazarov</option>

                                    <option value="315"> Elmira Nazirova</option>

                                    <option value="208"> Abdug`ani Ne`matov</option>

                                    <option value="268"> Axram Nishanov</option>

                                    <option value="165"> Xabibullo Nosirov</option>

                                    <option value="310"> Faxriddin Nuraliyev</option>

                                    <option value="276"> Ozoda Ochilova</option>

                                    <option value="205"> Mannon Ochilov</option>

                                    <option value="298"> Zuxra Otakuziyeva</option>

                                    <option value="215"> Bahrixon Otaxonova</option>

                                    <option value="319"> Muzaffar Oxunboyev</option>

                                    <option value="308"> Yuriy Pisetskiy</option>

                                    <option value="255"> Sherzod Pulatov</option>

                                    <option value="260"> Anastasiya Puziy</option>

                                    <option value="137"> O‘tkir Qalandarov</option>

                                    <option value="201"> A`loxon Qaxxarov</option>

                                    <option value="186"> Timur Qo`chqorov</option>

                                    <option value="331"> Sulton Qudratov</option>

                                    <option value="345"> Nozim Qurbonov</option>

                                    <option value="187"> Mehriddin Rahimov</option>

                                    <option value="283"> Marat Rahmatullayev</option>

                                    <option value="219"> Asqar Rahmonov</option>

                                    <option value="200"> Farxat Rajabov</option>

                                    <option value="282"> Shaxnoza Raximova</option>

                                    <option value="163"> Baxtiyorjon Raximov</option>

                                    <option value="336"> Nodir Raximov</option>

                                    <option value="177"> Furqat Raxmatov</option>

                                    <option value="230"> Rabbim Raxmatov</option>

                                    <option value="273"> Moxira Raxmatullayeva</option>

                                    <option value="168"> Shavkat Redjepov</option>

                                    <option value="318"> Ruziboyev Ortiq</option>

                                    <option value="226"> Karimjon Sabirov</option>

                                    <option value="250"> Svetlana Sadchikova</option>

                                    <option value="238"> Sanobar Saddadinova</option>

                                    <option value="211"> Rustamjon Sadikov</option>

                                    <option value="210"> Shohruh Safarov</option>

                                    <option value="284"> Dilbar Sagdullayeva</option>

                                    <option value="241"> Xusnutdin Samarov</option>

                                    <option value="287"> Abror Sanaqulov</option>

                                    <option value="270"> Mamatkarim Sapayev</option>

                                    <option value="23"> Сарвар Маҳмуджанов</option>

                                    <option value="149"> Xurshid Sattarov</option>

                                    <option value="296"> Qulmat Shakarov</option>

                                    <option value="152"> Aziza Sharipova</option>

                                    <option value="207"> Daler Sharipov</option>

                                    <option value="176"> Alisher Shaxobiddinov</option>

                                    <option value="295"> Kxyuk Shin</option>

                                    <option value="202"> Kamoliddin Shukurov</option>

                                    <option value="264"> Xalik Soatov</option>

                                    <option value="122"> Komil Tashev</option>

                                    <option value="220"> Nadira Tashpulatova</option>

                                    <option value="229"> Nadira Tashtemirova</option>

                                    <option value="5"> Темур Очилов</option>

                                    <option value="6"> temur Ochilov</option>

                                    <option value="267"> Shunqor Toshmatov</option>

                                    <option value="285"> Gulmira Tulenova</option>

                                    <option value="11"> Бобурхон Тураев</option>

                                    <option value="180"> Abrorjon Turg‘unov</option>

                                    <option value="147"> Dildora Umarova</option>

                                    <option value="325"> Nargiza Usmanova</option>

                                    <option value="155"> Jonibek Usmonov</option>

                                    <option value="341"> Alisher Xakimov</option>

                                    <option value="212"> Marhamat Xaydarova</option>

                                    <option value="277"> Kamoliddin Xaydarov</option>

                                    <option value="216"> Charos Xidirova</option>

                                    <option value="198"> Nodir Xodjaev</option>

                                    <option value="293"> Jamol Xo`jayev</option>

                                    <option value="224"> Nasiba Xojiyeva</option>

                                    <option value="148"> Xamid Xolmedov</option>

                                    <option value="305"> Mirzaakbar Xudayberdiyev</option>

                                    <option value="237"> Ravshan Xudazarov</option>

                                    <option value="141"> Zarif Xudoyqulov</option>

                                    <option value="245"> Xalimjon Xujamatov</option>

                                    <option value="193"> Ra`no Xurramova</option>

                                    <option value="231"> To`lqin Yadgarov</option>

                                    <option value="303"> Maqsadxon Yakubov</option>

                                    <option value="12"> Doniyor Yaxshibayev</option>

                                    <option value="199"> Jo`ra Yunusov</option>

                                    <option value="269"> Nataliya Yusupova</option>

                                    <option value="278"> Axmed Yusupov</option>

                                    <option value="191"> Ibroximbek Yusupov</option>

                                    <option value="329"> Feruza Zakirova</option>

                                    <option value="280"> Madina Zakirova</option>

                                    <option value="132"> Zamira Abdullayeva</option>

                                    <option value="157"> Dilnoza Zaripova</option>

                                    <option value="317"> Hakimjon Zaynitdinov</option>

                                    <option value="291"> Dinora Zaynutdinova</option>

                                </select>
                                <div class="ts-control w-full mt-2 multi plugin-remove_button">
                                    <div class="items ts-input not-full"><input type="select-multiple"
                                            autocomplete="off" size="1" tabindex="0" role="combobox" haspopup="listbox"
                                            aria-expanded="false" aria-controls="select-users-ts-dropdown"
                                            id="select-users-tomselected" placeholder="---Муаллифлар танланг---"></div>
                                    <div class="ts-dropdown multi w-full mt-2 plugin-remove_button"
                                        style="display: none;">
                                        <div role="listbox" id="select-users-ts-dropdown" tabindex="-1"
                                            class="ts-dropdown-content"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="w-full col-span-12">
                                <label class="flex flex-col sm:flex-row"> Бошқа муаллифлар
                                </label>
                                <input type="text" name="authors" class="input w-full border mt-2">
                            </div>

                            <div class="w-full col-span-6">
                                <label class="flex flex-col sm:flex-row"> Хорижий муаллифлар мавжудми?
                                </label>
                                <input type="checkbox" name="is_foreign_author" class="input w-full border mt-2">
                            </div>
                            <div class="w-full col-span-6">
                                <label class="flex flex-col sm:flex-row"> Хорижий муаллифлар
                                </label>
                                <input type="text" class="input w-full border mt-2">
                            </div>

                            <div class="w-full col-span-6 ilmiy-ish">
                                <label class="flex flex-col sm:flex-row"> DOI
                                </label>
                                <input type="text" name="doi" class="input w-full border mt-2">
                            </div>
                            <div class="w-full col-span-6 guvohnoma" style="display: none;">
                                <label class="flex flex-col sm:flex-row"> Гувоҳнома рақами
                                </label>
                                <input type="text" name="guvohnoma_doi" class="input w-full border mt-2">
                            </div>
                            <div class="w-full col-span-6">
                                <label class="flex flex-col sm:flex-row"> <span
                                        class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Сана
                                </label>
                                <input type="text" id="datepicker" name="published_date"
                                    class="datepicker input w-full border mt-2" required="">

                            </div>
                            <div class="w-full col-span-12 ilmiy-ish">
                                <label class="flex flex-col sm:flex-row"><span
                                        class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Нашриёт номи
                                </label>
                                <input type="text" name="publisher" class="input w-full border mt-2" required="">
                            </div>

                            <div class="w-full col-span-12">
                                <label class="flex flex-col sm:flex-row"> Нашр параметрлари
                                </label>
                                <textarea name="description" class="input w-full border mt-2" rows="4"></textarea>

                            </div>
                            <div class="w-full col-span-12">

                                <div class="my-4">
                                    <a class="old_file underlined" href="" target="_blank"></a>
                                </div>


                                <label class="flex flex-col sm:flex-row"> <span
                                        class="mt-1 mr-1 sm:mt-0 text-xs text-red-600">*</span> Файл
                                </label>
                                <input type="file" name="filename" style="padding-left: 0" class="input w-full mt-2"
                                    required="">

                            </div>

                            <input type="hidden" name="next" value="/science">

                        </div>
                    </form>
                </div>
            </div>


        </div>
        <div class="px-5 pb-5 text-center">
            <button type="button" data-dismiss="modal" class="button delete-cancel w-32 border text-gray-700 mr-1">
                Бекор қилиш
            </button>
            <button type="submit" form="science-paper-create-form"
                class="update-confirm button w-24 bg-theme-1 text-white">
                Қўшиш
            </button>
        </div>
    </div>
</div>
@endsection