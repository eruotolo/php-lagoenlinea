<header id="header-principal" class="md:h-[70px] 3xl:h-[100px] py-2 ">
    <div class="container">
        <nav id="navbar" class="fixed md:h-[70px] 3xl:h-[100px] top-0 z-40 flex w-full flex-row justify-end sm:justify-between items-center bg-white">

            <button id="btnSidebarToggler" type="button" class="text-2xl text-white bg-azul py-2 px-2 ml-2 rounded-full">
                <svg id="navClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="md:w-6 3xl:w-8 md:h-6 3xl:h-8" onclick="openNav()">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!-- <svg id="navOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="hidden h-8 w-8" onclick="openNav()">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                 </svg>-->
            </button>

            <div class="logo">
                <a href="index.php"><img src="assets/img/logo_img.svg" alt="Logo" class="md:h-[60px] 3xl:h-[80px]"></a>
            </div>

            <div class="relleno py-2 px-2 mr-2 w-[48px]"></div>

        </nav>
    </div>

    <!-- Sidebar start-->
    <div id="containerSidebar" class="z-40">
        <div class="navbar-menu relative z-40">
            <nav id="sidebar" class="fixed left-0 bottom-0 flex w-[100%] -translate-x-full flex-col overflow-y-auto bg-[#6A88B4] pt-6 pb-8 md:mt-[-80px] 3xl:mt-[-100px]">
                <div class="items-center w-full justify-center">
                    <a href="index.php"><img src="assets/img/logo_img_wh.svg" alt="Logo Menu" class="w-[14%] ml-[43%] inline-block"></a>
                    <button id="btnSidebarToggler" type="button" class="text-2xl text-white bg-azul py-2 px-2 ml-2 rounded-full ml-[38%]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="md:w-6 3xl:w-8 md:h-6 3xl:h-8" onclick="closeNav()">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="container mx-auto py-16">
                    <div class="flex flex-col">
                        <ul>
                            <li class="inline-block">
                                <a  class="flex items-center font-blogger text-white font-medium md:text-[16px] 3xl:text-[20px]  md:leading-[22px] 3xl:leading-[26px] border-[1px] border-white rounded-[25px] pb-1 pt-2 px-8 md:mb-2 3xl:mb-4 hover:bg-amarillo hover:border-amarillo"
                                   href="llanquihue.php">LAGO LLANQUIHUE</a>
                            </li><br>
                            <li class="inline-block">
                                <a class="flex items-center font-blogger text-white font-medium md:text-[16px] 3xl:text-[20px]  md:leading-[22px] 3xl:leading-[26px] border-[1px] border-white rounded-[25px] pb-1 pt-2 px-8 md:mb-2 3xl:mb-4 hover:bg-amarillo hover:border-amarillo"
                                   href="proyecto.php">EL PROYECTO</a>
                            </li><br>
                            <li class="inline-block">
                                <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center font-blogger text-white font-medium md:text-[16px] 3xl:text-[20px]  md:leading-[22px] 3xl:leading-[26px] border-[1px] border-white rounded-[25px] pb-1 pt-2 px-8 md:mb-2 3xl:mb-4 hover:bg-amarillo hover:border-amarillo"
                                   href="#">TECNOLOGÍAS <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </a>
                                <!-- Dropdown menu -->
                                <div id="dropdown" class="z-10 hidden divide-y divide-gray-100 w-44 ">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="monitoreo.php" class="font-blogger md:text-[16px] 3xl:text-[20px] text-white text-white items-center border-[1px] border-azul rounded-[25px] block pb-1 pt-2 px-8 md:mb-2 3xl:mb-4 md:leading-[22px] 3xl:leading-[26px] hover:bg-azul hover:text-white">Monitoreo</a>
                                        </li>
                                        <li>
                                            <a href="teledeteccion.php" class="font-blogger md:text-[16px] 3xl:text-[20px] text-white text-white items-center border-[1px] border-azul rounded-[25px] block px-8 pb-1 pt-2 px-8 md:mb-2 3xl:mb-4 md:leading-[22px] 3xl:leading-[26px] hover:bg-azul hover:text-white">Teledetección</a>
                                        </li>
                                        <li>
                                            <a href="metagenomica.php" class="font-blogger md:text-[16px] 3xl:text-[20px] text-white text-white items-center border-[1px] border-azul rounded-[25px] block px-8 pb-1 pt-2 px-8 md:mb-2 3xl:mb-4 md:leading-[22px] 3xl:leading-[26px] hover:bg-azul hover:text-white">Metagenómica</a>
                                        </li>
                                    </ul>
                                </div>
                            </li><br>
                            <li class="inline-block">
                                <a class="flex items-center font-blogger text-white font-medium md:text-[16px] 3xl:text-[20px]  md:leading-[22px] 3xl:leading-[26px] border-[1px] border-white rounded-[25px] pb-1 pt-2 px-8 md:mb-2 3xl:mb-4 hover:bg-amarillo hover:border-amarillo"
                                   href="incidencias.php">INCIDENCIAS</a>
                            </li><br>
                            <li class="inline-block">
                                <a class="flex items-center font-blogger text-white font-medium md:text-[16px] 3xl:text-[20px]  md:leading-[22px] 3xl:leading-[26px] border-[1px] border-white rounded-[25px] pb-1 pt-2 px-8 md:mb-2 3xl:mb-4 hover:bg-amarillo hover:border-amarillo"
                                   href="lago-sin-huella.php">LAGO SIN HUELLA</a>
                            </li><br>
                            <li class="inline-block">
                                <a class="flex items-center font-blogger text-white font-medium md:text-[16px] 3xl:text-[20px]  md:leading-[22px] 3xl:leading-[26px] border-[1px] border-white rounded-[25px] pb-1 pt-2 px-8 md:mb-2 3xl:mb-4 hover:bg-amarillo hover:border-amarillo"
                                   href="lago-puyehue.php">
                                    LAGO PUYEHUE
                                </a>
                            </li><br>
                            <li class="inline-block">
                                <a class="flex items-center font-blogger text-white font-medium md:text-[16px] 3xl:text-[20px]  md:leading-[22px] 3xl:leading-[26px] border-[1px] border-white rounded-[25px] pb-1 pt-2 px-8 md:mb-2 3xl:mb-4 hover:bg-amarillo hover:border-amarillo"
                                   href="biblioteca.php">BIBLIOTECA</a>
                            </li><br>
                            <li class="inline-block">
                                <a class="flex items-center font-blogger text-white font-medium md:text-[16px] 3xl:text-[20px]  md:leading-[22px] 3xl:leading-[26px] border-[1px] border-white rounded-[25px] pb-1 pt-2 px-8 md:mb-2 3xl:mb-4 hover:bg-amarillo hover:border-amarillo"
                                   href="contacto.php">CONTACTO</a>
                            </li>
                        </ul>

                    </div>
                </div>

            </nav>
        </div>
    </div>
    <!-- Sidebar end -->
</header>