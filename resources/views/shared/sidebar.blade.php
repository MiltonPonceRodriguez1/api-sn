<div class="sidebar">

    <div class="sidebar_inner" data-simplebar>

        <ul>
            <li class="item-sidebar active">
                <a href="{{ route('feed') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-600">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span> Inicio </span> 
                </a>
            </li>
            <li class="item-sidebar">
                <a href="{{ route('feed') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0066b3" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>
                    <span> Feed </span>
                </a>
            </li>
            <li>
                <a href="{{ route('market.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-red-500">
                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                    </svg>
                    <span> Marketplace </span>
                </a>
            </li>
            <li class="item-sidebar">
                <a uk-toggle="target: #upload-banner-modal">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#f59e0b" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <span> Banners </span>
                </a>
            </li>
            <!--<li><a href="videos.html">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-red-500">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2h6v4H7V5zm8 8v2h1v-2h-1zm-2-2H7v4h6v-4zm2 0h1V9h-1v2zm1-4V5h-1v2h1zM5 5v2H4V5h1zm0 4H4v2h1V9zm-1 4h1v2H4v-2z" clip-rule="evenodd" />
                </svg>
                <span> Vídeos </span></a>
            </li>
            <li><a href="groups.html">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                </svg><span> Grupos </span></a>
            </li>
            <li><a href="jobs.html">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-pink-500">
                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                </svg> <span> Trabajos </span> </a>
            </li>
            <li><a href="courses.html">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-indigo-500">
                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                </svg>
                <span> Cursos </span></a>
            </li>
            <li id="more-veiw" hidden><a href="events.html">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg><span> Eventos </span></a>
            </li>
            -->
            <!-- <li id="more-veiw" hidden><a href="albums.html">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-purple-500">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                </svg>  <span>  Photos </span></a>
            </li> -->
            <!-- <li id="more-veiw" hidden><a href="blogs.html">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-pink-500">
                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                    <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                </svg>
                <span> Blog</span></a>
            </li>  -->
            <!-- <li id="more-veiw" hidden><a href="forums.html">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500">
                    <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                    <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                </svg>
                <span> forum </span> </a>
            </li> -->
            <!-- <li id="more-veiw" hidden><a href="birthdays.html">
                <svg fill="currentColor" class="text-yellow-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
                <span> Cumpleaños </span> <span class="new">N</span></a>
            </li>
            <li id="more-veiw" hidden><a href="fundraiser.html">
                <svg fill="currentColor" class="text-red-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                <span>  Donaciones </span> <span class="new">N</span></a>
            </li> -->
        </ul>

        <!-- <a href="#" class="see-mover h-10 flex my-1 pl-2 rounded-xl text-gray-600" uk-toggle="target: #more-veiw; animation: uk-animation-fade">
            <span class="w-full flex items-center" id="more-veiw">
                <svg class="  bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                Ver más
            </span>
            <span class="w-full flex items-center" id="more-veiw" hidden>
                <svg  class="bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7"  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                Ver menos
            </span>
        </a> -->

        <!-- <h3 class="side-title"> Contacts </h3> -->

        <!-- <div class="contact-list my-2 ml-1">

            <a href="chats-friend.html">
                <div class="contact-avatar">
                    <img src="assets/images/avatars/avatar-1.jpg" alt="">
                    <span class="user_status status_online"></span>
                </div>
                <div class="contact-username"> Dennis Han</div>
            </a>
            <a href="chats-friend.html">
                <div class="contact-avatar">
                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                    <span class="user_status"></span>
                </div>
                <div class="contact-username"> Erica Jones</div>
            </a>
            <a href="chats-friend.html">
                <div class="contact-avatar">
                    <img src="assets/images/avatars/avatar-7.jpg" alt="">
                </div>
                <div class="contact-username">Stella Johnson</div>
            </a>
            <a href="chats-friend.html">
                <div class="contact-avatar">
                    <img src="assets/images/avatars/avatar-4.jpg" alt="">
                </div>
                <div class="contact-username"> Alex Dolgove</div>
            </a>

        </div> -->

        <!-- <ul class="side_links" data-sub-title="Pages">
            <li><a href="feed.html"> <ion-icon name="settings-outline" class="side-icon"></ion-icon>  <span> Setting  </span> </a>
                <ul>
                    <li><a href="pages-setting.html">layout 1</a></li>
                    <li><a href="pages-setting2.html">layout 2</a></li>
                </ul>
            </li>
            <li><a href="#"> <ion-icon name="albums-outline" class="side-icon"></ion-icon> <span> Info Pages  </span> </a>
                <ul>
                    <li><a href="pages-about.html"> About </a></li>
                    <li><a href="pages-contact.html"> Contact us </a></li>
                    <li><a href="pages-privacy.html"> Privacy </a></li>
                </ul>
            </li>
            <li><a href="#"> <ion-icon name="document-outline" class="side-icon"></ion-icon> <span> Create Content </span>  </a>
                <ul>
                    <li><a href="create-group.html"> Create Group </a></li>
                    <li><a href="create-page.html"> Create Page </a></li>
                </ul>
            </li>
            <li><a href="#"> <ion-icon name="code-slash-outline" class="side-icon"></ion-icon> <span> Development  </span> </a>
                <ul>
                    <li><a href="development-components.html"> Compounents </a></li>
                    <li><a href="development-plugins.html"> Plugins </a></li>
                    <li><a href="development-icons.html"> Icons </a></li>
                </ul>
            </li>
            <li><a href="#"> <ion-icon name="log-in-outline" class="side-icon"></ion-icon> <span>  Authentication  </span>  </a>
                <ul>
                    <li><a href="form-login.html">form login </a></li>
                    <li><a href="form-register.html">form register</a></li>
                </ul>
            </li>

        </ul> -->

        <!-- <div class="footer-links">
            <a href="#">Acerca de</a>
            <a href="#">Blog </a>
            <a href="#">Soporte</a>
            <a href="#">Contactanos </a>
            <a href="#">Terminos y condiciones</a>
        </div> -->

    </div>

    <!-- sidebar overly for mobile -->
    <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>

</div>

<!-- Banner upload modal -->
<div id="upload-banner-modal" class="create-post is-story" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded-lg p-0 lg:w-5/12 relative shadow-2xl uk-animation-slide-bottom-small">

        <div class="text-center py-3 border-b">
            <h3 class="text-lg font-semibold"> Publicar banner! </h3>
            <button class="uk-modal-close-default bg-gray-100 rounded-full p-2.5 right-2" type="button" uk-close uk-tooltip="title: Close ; pos: bottom ;offset:7"></button>
        </div>

        <form method="POST" action="{{ url('banner') }}" enctype="multipart/form-data">
            @csrf

            <div class="bsolute bottom-0 p-4 space-x-4 w-full">
                <div id="file-upload-banner" class="flex bg-gray-50 border border-purple-100 rounded-2xl p-2 shadow-sm items-center file-upload">
                    <div class="lg:block hidden ml-1"> Selecciona tu banner... </div>
                    <div class="flex flex-1 items-center lg:justify-end justify-center space-x-2">

                        <svg class="bg-blue-100 h-9 p-1.5 rounded-full text-blue-600 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>

                        <input type="file" id="banner" name="file0" style="display: none;">
                    </div>
                </div>
            </div>
            <div class="flex items-center w-full justify-end border-t p-3">
                <div class="flex space-x-2">
                    <button type="submit" class="bg-blue-600 flex h-9 items-center justify-center rounded-lg text-white px-12 font-semibold">
                        Publicar
                    </button>
                </div>

                <a href="#" type="submit" hidden class="bg-blue-600 flex h-9 items-center justify-center rounded-lg text-white px-12 font-semibold"> Share </a>
            </div>
        </form>
    </div>
</div>

<script>
    init_Event('file-upload-banner', 'banner');
</script>