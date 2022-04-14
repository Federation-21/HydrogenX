    <footer id="footer" class="bg-darkwhite dark:bg-deepdark dark:text-gray-300 text-gray-800 border-t-2 border-gray-700">
        <div class="container pt-10">
            <div class="flex flex-col justify-center items-center border-b-2 border-gray-700">
                <img src="{{asset('assets/images/logo/code-ind.svg')}}" alt="codebumble" class="w-44 lg:w-48">
                <ul class="my-10 flex flex-col lg:flex-row text-center">
                    <li class="footer-menu-item"><a href="{{route('tos')}}">Terms of Service</a></li>
                    <li class="footer-menu-item"><a href="{{route('privacy')}}">Privacy Policy</a></li>
                    <li class="footer-menu-item"><a href="./sitemap.xml">Sitemap</a></li>
                    <li class="footer-menu-item"><a href="{{route('about')}}">About</a></li>
                </ul>
            </div>
            <div class="flex flex-col lg:flex-row justify-between items-center pt-4">
                <span>&copy; {{ now()->year }} Codebumble Inc. All right reserved.</span>
                <ul class="flex mt-3 lg:mt-0">
                    <li class="media-icon"><a href="https://facebook.com/codebumble" target="_blank"
                            class="text-xl p-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg></a></li>
                    <!-- <li class="media-icon"><a href="#" target="_blank" class="text-xl p-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a></li> -->
                    <li class="media-icon"><a href="https://instagram.com/codebumble" target="_blank"
                            class="text-xl p-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg></a></li>
                    <li class="media-icon"><a href="https://github.com/codebumble" target="_blank" class="text-xl p-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-github">
                                <path
                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                </path>
                            </svg></a></li>
                    <li class="media-icon"><a href="https://linkedin.com/company/codebumble" target="_blank"
                            class="text-xl p-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                </path>
                                <rect x="2" y="9" width="4" height="12"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Footer Closed -->

    <!-- back to top -->
    <div class="scroll-progress">
        <svg class="circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
