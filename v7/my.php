<!doctype html>
<html lang="en">

<head>

    <!-- Title -->
    <title>SMARTHOME</title>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#5D38FF"> <!-- Chrome, Firefox OS and Opera -->
    <meta name="msapplication-navbutton-color" content="#5D38FF"> <!-- Windows Phone -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#5D38FF"> <!-- iOS Safari -->

    <!-- Link -->
    <link rel="stylesheet" href="./res/main.css/vendor/bs5.css">
    <link rel="stylesheet" href="./res/main.css/index/style.css">

</head>

<body class=" body-before" onload="ready();">
    <div class="preload">
        <div class="loader">
            <div class="wrapper">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="navbarku text-center">
            <div class="display-6 text-rumah">
                <span id="ucapan" class="font-weight-bold">Halo,</span>
                <span id="nama" class="font-weight-normal">Andika!</span>
            </div>
            <div class="profil">
                <div class="bg-profil">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person hidden" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    </svg>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <img src="./lib/img/me.jpg" alt="">
                </div>
            </div>
            <div class="keluar d-flex flex-row flex-row-reverse">
                <div class="bg-profil mx-4" onclick="logout()">
                    <svg class="bi bi-box-arrow-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.646 11.354a.5.5 0 0 1 0-.708L14.293 8l-2.647-2.646a.5.5 0 0 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                        <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                        <path fill-rule="evenodd" d="M2 13.5A1.5 1.5 0 0 1 .5 12V4A1.5 1.5 0 0 1 2 2.5h7A1.5 1.5 0 0 1 10.5 4v1.5a.5.5 0 0 1-1 0V4a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-1.5a.5.5 0 0 1 1 0V12A1.5 1.5 0 0 1 9 13.5H2z" />
                    </svg>
                </div>
                <div class="bg-profil mx-4">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1H2a2 2 0 0 1 2-2z" />
                        <path d="M2 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2z" />
                        <path fill-rule="evenodd" d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </div>
            </div>
            <div class="jam" id="jam">00:00:00</div>
        </div>
        <div class="row">
            <div class="col-lg-2 kotak home-display d-flex">
                <div class="nav-samping text-center text-white">
                    <div class="my-4 mt-5" onclick="startConverting()" data-toggle="modal" data-target="#voice-modal">
                        <svg class="my-1 bi bi-mic" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z" />
                            <path fill-rule="evenodd" d="M10 8V3a2 2 0 1 0-4 0v5a2 2 0 1 0 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z" />
                        </svg>
                        <div>command</div>
                    </div>
                    <div class="my-4">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-journal-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1H2a2 2 0 0 1 2-2z" />
                            <path d="M2 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2z" />
                            <path fill-rule="evenodd" d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <div>Statistics</div>
                    </div>
                    <div class="my-4" onclick="logout()">
                        <svg class="my-1 bi bi-box-arrow-right" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.646 11.354a.5.5 0 0 1 0-.708L14.293 8l-2.647-2.646a.5.5 0 0 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                            <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                            <path fill-rule="evenodd" d="M2 13.5A1.5 1.5 0 0 1 .5 12V4A1.5 1.5 0 0 1 2 2.5h7A1.5 1.5 0 0 1 10.5 4v1.5a.5.5 0 0 1-1 0V4a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-1.5a.5.5 0 0 1 1 0V12A1.5 1.5 0 0 1 9 13.5H2z" />
                        </svg>
                        <div>logout</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 kotak control-panel">
                <div class="panel">
                    <div class="pt-3 font-weight-bold panel-label">Control Panel</div>
                    <div class="row row-cols-xxl-3 row-cols-xl-2 row-cols-md-2 row-cols-2">
                        <div class="item col">
                            <div class="isi-item shadow-sm d-flex flex-nowrap align-items-center" id="led1">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-brightness-low ml-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                                    <path d="M8.5 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707zM3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707z" />
                                </svg>
                                <div class="mx-2 text">
                                    LED 1
                                </div>
                                <label class="switch mr-3 ml-auto">
                                    <input type="checkbox" name="led1" value="1" id="led" class="tuas" disabled>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="item col">
                            <div class="isi-item shadow-sm d-flex flex-nowrap align-items-center" id="led2">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-brightness-low ml-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                                    <path d="M8.5 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707zM3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707z" />
                                </svg>
                                <div class="mx-2 text">
                                    LED 2
                                </div>
                                <label class="switch mr-3 ml-auto">
                                    <input type="checkbox" class="tuas" disabled>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="item col">
                            <div class="isi-item shadow-sm d-flex flex-nowrap align-items-center" id="led3">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-brightness-low ml-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                                    <path d="M8.5 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707zM3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707z" />
                                </svg>
                                <div class="mx-2 text">
                                    LED 3
                                </div>
                                <label class="switch mr-3 ml-auto">
                                    <input type="checkbox" class="tuas" disabled>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="item col">
                            <div class="isi-item shadow-sm d-flex flex-nowrap align-items-center" id="led4">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-brightness-low ml-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                                    <path d="M8.5 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707zM3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707z" />
                                </svg>
                                <div class="mx-2 text">
                                    LED 4
                                </div>
                                <label class="switch mr-3 ml-auto">
                                    <input type="checkbox" class="tuas" disabled>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="item col">
                            <div class="isi-item shadow-sm d-flex flex-nowrap align-items-center" id="b3">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-key ml-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>
                                <div class="mx-2 text">
                                    Pintu
                                </div>
                                <label class="switch my-auto mr-3 ml-auto">
                                    <input type="checkbox" class="tuas" disabled>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="item col">
                            <div class="isi-item shadow-sm d-flex flex-nowrap align-items-center" id="b4">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-layout-split ml-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z" />
                                    <path fill-rule="evenodd" d="M7.5 14V2h1v12h-1z" />
                                </svg>
                                <div class="mx-2 text">
                                    Jendela
                                </div>
                                <label class="switch mr-3 ml-auto">
                                    <input type="checkbox" class="tuas" disabled>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="item col">
                            <div class="isi-item shadow-sm d-flex flex-nowrap align-items-center" id="b5">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-door-closed ml-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2zm1 0v13h8V2H4z" />
                                    <path d="M7 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    <path fill-rule="evenodd" d="M1 15.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                <div class="mx-2 text">
                                    Pagar
                                </div>
                                <label class="switch mr-3 ml-auto">
                                    <input type="checkbox" class="tuas" disabled>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="item item-mobile  col p-0">
                            <div class="isi-item d-flex flex-nowrap align-items-center bg-transparent">
                                <div class="item col-6" data-toggle="modal" data-target="#voice-modal" onclick="startConverting()">
                                    <div class="isi-item shadow-sm d-flex flex-nowrap align-items-center bg-active">
                                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-mic mx-auto" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z" />
                                            <path fill-rule="evenodd" d="M10 8V3a2 2 0 1 0-4 0v5a2 2 0 1 0 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="item  col-6">
                                    <div class="isi-item shadow-sm d-flex flex-nowrap align-items-center" id="bAuto">
                                        <div class="mx-auto font-weight-bold">AUTO</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="voice-modal" tabindex="-1" aria-labelledby="voice-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="result">Masukkan perintah...</div>
                    <div class="tombol mx-auto w-50 mt-5" onclick="startConverting()">
                        <h1>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-mic-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z" />
                                <path fill-rule="evenodd" d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z" />
                            </svg>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="./res/main.js/vendor/popper.js"></script>
    <script src="./res/main.js/vendor/bs5.js"></script>
    <script src="./res/main.js/vendor/jquery.js"></script>
    <script src="./res/main.js/my/script.js"></script>
</body>

</html>