<!DOCTYPE html>
<html lang="fr" class="@tailwind">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css">
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<style>
        body{
            background-color: #EDF3F4;
        }
    </style>
<body class=" font-inter ">
<div class="flex container flex-col md:flex-row ">
        <div class="flex-1   flex-col md:flex-row container mx-auto">
            <aside class="fixed w-64 left-0 md:relative w-64 md:w-1/4 lg:w-1/5 rounded bg-white  md:w-1/4 lg:w-1/5 shadow-md md:relative " aria-label="Sidebar" >
            <div class="flex items-center p-4">
                <img src="{{asset('img/setting.png')}}" alt="" class="w-5 h-5 ">
                <span class="text-lg font-bold ml-2">Dashboard</span>
            </div>
            <div class="overflow-y-auto py-4 px-3 ">
                <ul class="space-y-2">
                    <li>
                        <style>
                            .custom:hover{
                                background-color: #5932EA;
                                color:white;
                            }
                        </style>
                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  custom" >
                            <img src="{{ asset('img/key-square.png')}}" alt="">
                            <span class="ml-3" > Dashboard</span>
                        </a>
                    </li>
                    <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg custom">
                            <img src="{{ asset('img/3d-square.png')}}" alt="">
                            <span class="ml-3" > Product</span>
                            <div class=" mt-1" style="margin-left:10vh"><i class="ri-arrow-right-s-line"></i></div>
                        </a>
                    <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg custom">
                            <img src="{{ asset('img/user-square.png')}}" alt="">
                            <span class="ml-3" > Customers</span>
                            <div class=" mt-1" style="margin-left:7vh"><i class="ri-arrow-right-s-line"></i></div>
                        </a>
                    </li>
                    <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg custom">
                            <img src="{{ asset('img/wallet-money.png')}}" alt="">
                            <span class="ml-3" > Income</span>
                            <div class=" mt-1" style="margin-left:11vh"><i class="ri-arrow-right-s-line"></i></div>
                        </a>
                    </li>
                    <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg custom">
                            <img src="{{ asset('img/discount-shape.png')}}" alt="">
                            <span class="ml-3" > Promote</span>
                            <div class=" mt-1" style="margin-left:10vh"><i class="ri-arrow-right-s-line"></i></div>
                        </a>
                    </li>
                    <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900  custom">
                            <img src="{{ asset('img/message-question.png')}}" alt="" class="">
                            <span class="ml-3" > Help</span>
                            <div class=" mt-1" style="margin-left:14vh"><i class="ri-arrow-right-s-line"></i></div>
                        </a>
                    </li>
                </ul>

                <div class="mt-5">
                <img src="{{asset('img/Access.png')}}" alt="" class="w-full">
            </div>
            <div class="flex items-center mt-6">
                <img src="{{asset('img/profile.png')}}" alt="" class="w-10 h-10 rounded-full">
                <div class="ml-3">
                    <h3 class="font-bold">Evano</h3>
                    <p class="text-sm text-gray-500">Project manager</p>
                </div>
            </div>
            </aside>


        <div class="flex  justify-content-center align-item-center  mt-4 mx-5">
            <h3 class="font-bold ">Hello Evano</h3>
            <button class="btn text-secondary btn-lg" type="submit" placeholder="search">
                <style>
                    h3{
                        margin-right: 90vh;
                        margin-top: 5vh;
                    }
                    .btn{
                        outline: none;
                        background-color: #fff;
                        border-radius: 1rem;
                    }
                </style>

                    <i class="ri-search-line"></i>
                    search
            </button>
        </div>


        <div class="grid grid-cols-3 gap-2 mt-4 mx-5 flex ">
            <style>
                .grid{
                    position:relative;
                    left:25vh;
                    width: 158vh;
                }
            </style>
            <div class="p-4 bg-white text-center rounded-lg  shadow-md justify-content-center d-flex align-item-center">
                <img src="{{asset('img/group-10.png')}}" alt=""  style="width:50px; height: 50px; margin-top: 20px;">
                <div>
                    <h2 class="text-lg" style="color:#C1C0C0; font-size: 12px;">Total Clients</h2>
                    <p class="mt-1 text-3xl fw-bold"  style="font-size:24px">5,423</p>
                    <i class="ri-arrow-up-line" style="color:#00AC4F; font-size:12px">16% <span style="color:black;">this month</span> </i>
                </div>
            </div>
            <div class="p-4 bg-white text-center rounded-lg  shadow-md justify-content-center d-flex align-item-center">
                <img src="{{asset('img/group-11.png')}}" alt=""  style="width:50px; height: 50px; margin-top: 20px;">
                <div>
                    <h2 class="text-lg " style="color:#C1C0C0; font-size: 12px;">Members</h2>
                    <p class="mt-1 text-3xl fw-bold" style="font-size:24px">1,893</p>
                    <i class="ri-arrow-down-line" style="color:#D0004B; font-size:12px">1% <span style="color:black;">this month</span> </i>

                </div>
            </div>
            <div class="p-4 bg-white text-center rounded-lg  shadow-md justify-content-center d-flex align-item-center">
                <img src="{{asset('img/group-12.png')}}" alt=""  style="width:50px; height: 50px; margin-top: 20px;">
                <div>
                    <h2 class="text-lg " style="color:#C1C0C0; font-size: 12px">Active Now</h2>
                    <p class="mt-1 text-3xl fw-bold" style="font-size:24px">189</p>
                    <div class="position-relative">
                        <img src="{{asset('img/Ellipse-2.png')}}" alt="Image 1" class="position-absolute" style="width: 20px; height: 20px;">
                        <img src="{{asset('img/Ellipse-1.png')}}" alt="Image 1" class="position-absolute " style="width: 20px; height: 20px; margin-left:2vh; margin-bottom:10vh;">
                        <img src="{{asset('img/Ellipse-3.png')}}" alt="Image 1" class="position-absolute " style="width: 20px; height: 20px; margin-left:4vh;">
                        <img src="{{asset('img/Ellipse-4.png')}}" alt="Image 1" class="position-absolute " style="width: 20px; height: 20px; margin-left:6vh;">
                        <img src="{{asset('img/Ellipse-5.png')}}" alt="Image 1" class="position-absolute " style="width: 20px; height: 20px; margin-left:8vh;">
                    </div>
                </div>
            </div>
        </div>


        <div class="mt-6 bg-white shadow overflow-hidden sm:rounded-lg " style="margin-left:32vh; width:158vh;">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="font-bold mx-5">All Customers</h3>
                    <p style="color:#00AC4F; font-size:12px" class="mx-5">Active Members</p>
                </div>
                <button class="btn text-secondary btn-lg" type="submit" placeholder="search">
                <style>
                    h3{
                        margin-right: 90vh;
                        margin-top: 3vh;
                    }
                    .btn{
                        outline: none;
                        background-color: #fff;
                        border-radius: 1rem;
                    }
                </style>

                    <i class="ri-search-line text-2xl"></i>
                    search
                </button>
                <p class="mt-1 " style="margin-right:10vh">Short by : Newest </p>
            </div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th scope="col" class="px-0 py-3 bg-gray-50 text-center" style="color:#B5B7C0">Nom du Client</th>
                        <th scope="col" class="px-0 py-3 bg-gray-50 text-center" style="color:#B5B7C0">Entreprise</th>
                        <th scope="col" class="px-0 py-3 bg-gray-50 text-center" style="color:#B5B7C0">Numéro de Téléphone</th>
                        <th scope="col" class="px-0 py-3 bg-gray-50 text-center" style="color:#B5B7C0">Email</th>
                        <th scope="col" class="px-0 py-3 bg-gray-50 text-center" style="color:#B5B7C0">Pays</th>
                        <th scope="col" class="px-0 py-3 bg-gray-50 text-center" style="color:#B5B7C0">Statut</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 text-center">Jane Cooper</td>
                        <td class="px-6 py-4 text-center">Microsoft</td>
                        <td class="px-6 py-4 text-center">(225) 555-0118</td>
                        <td class="px-6 py-4 text-center">jane@microsoft.com</td>
                        <td class="px-6 py-4 text-center">États-Unis</td>
                        <td class="px-6 py-4 text-center"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800" style="background-color:#16C09861; color:#00B087">Actif</span></td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-center">Floyd Miles</td>
                        <td class="px-6 py-4 text-center">Yahoo</td>
                        <td class="px-6 py-4 text-center">(205) 555-0100</td>
                        <td class="px-6 py-4 text-center">floyd@yahoo.com</td>
                        <td class="px-6 py-4 text-center">Kiribati</td>
                        <td class="px-6 py-4 text-center" ><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full  text-danger-800" style="background-color:#FFC5C5; color:#DF0404">Inactive</span></td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-center">Ronald Richards</td>
                        <td class="px-6 py-4 text-center">Adobe</td>
                        <td class="px-6 py-4 text-center">(302) 555-0107</td>
                        <td class="px-6 py-4 text-center">ronald@adobe.com</td>
                        <td class="px-6 py-4 text-center">Palestine</td>
                        <td class="px-6 py-4 text-center"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800" style="background-color:#FFC5C5; color:#DF0404">Inactive</span></td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-center">Marvin McKinney</td>
                        <td class="px-6 py-4 text-center">Tesla</td>
                        <td class="px-6 py-4 text-center">(252) 555-0126</td>
                        <td class="px-6 py-4 text-center">marvin@tesla.com</td>
                        <td class="px-6 py-4 text-center">Iran</td>
                        <td class="px-6 py-4 text-center"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800" style="background-color:#16C09861; color:#00B087">Actif</span></td>
                    </tr>
                </tbody>

            </table>
                <!-- pagination -->
                <div class="d-flex mb-3" style="margin-left: 6vh;">
                    <p style="color:#B5B7C0;">Showing data 1 to 8 of  256K entries</p>
                   <nav aria-label="Page navigation example" style="margin-left:50vh;">
                        <ul class="pagination " style="margin-left:35vh;">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            <style>
                                .page-link:hover{
                                    background-color: #5932EA;
                                    color:white;
                                }
                            </style>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>



    </div>

</div>




<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
