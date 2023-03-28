@extends('layouts.main')

@section('content')

    <main>
    <section class="wrapper">
        <div class="page_title_glav_block">
            <div>
                <h1>Contacts</h1>
                <span class="home_title_text_white">HOME | </span>
                <span class="home_title_text_red">contacts</span>
            </div>
        </div>
    </section>
    <section class="wrapper">
        <div class="contact_page_block">
            <div class="phone_mail_time_block">
                <div class="back_info_block">
                        <span>
                            <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M64.4737 46.0895C60.1557 46.0895 55.9264 45.4153 51.9179 44.0926C49.9616 43.4184 47.74 43.9379 46.4543 45.2495L38.5074 51.2511C29.389 46.3843 23.5532 40.5521 18.7527 31.5L24.5921 23.7411C26.0621 22.2711 26.589 20.1194 25.959 18.1042C24.6253 14.07 23.9474 9.83685 23.9474 5.52632C23.9474 2.47942 21.468 0 18.4211 0H5.52632C2.47942 0 0 2.47942 0 5.52632C0 41.0752 28.9248 70 64.4737 70C67.5206 70 70 67.5206 70 64.4737V51.6158C70 48.5689 67.5206 46.0895 64.4737 46.0895Z" fill="#22BEB3"/>
                                </svg>
                        </span>
                    <a href="tel:+374 77 00 00 00">+374 77 00 00 00</a>
                </div>
                <div class="back_info_block">
                        <span>
                            <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M46.3994 35.3588L69.9982 50.2776V19.8101L46.3994 35.3588Z" fill="#22BEB3"/>
                                <path d="M0 19.8101V50.2776L23.5987 35.3588L0 19.8101Z" fill="#22BEB3"/>
                                <path d="M65.6246 10.9375H4.37461C2.19148 10.9375 0.458984 12.565 0.130859 14.6606L34.9996 37.6338L69.8684 14.6606C69.5402 12.565 67.8077 10.9375 65.6246 10.9375Z" fill="#22BEB3"/>
                                <path d="M42.3905 38.0014L36.1998 42.0789C35.8323 42.3196 35.4167 42.4377 34.9967 42.4377C34.5767 42.4377 34.1611 42.3196 33.7936 42.0789L27.603 37.9971L0.136719 55.3702C0.473594 57.4483 2.19734 59.0627 4.37172 59.0627H65.6217C67.7961 59.0627 69.5198 57.4483 69.8567 55.3702L42.3905 38.0014Z" fill="#22BEB3"/>
                                </svg>
                        </span>
                    <a href="mailti:info@webstart.am">info@webstart.am</a>
                </div>
                <div class="back_info_block">
                        <span>
                            <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M35 0C15.7013 0 0 15.7013 0 35C0 54.2987 15.7013 70 35 70C54.2987 70 70 54.2987 70 35C70 15.7013 54.2987 0 35 0ZM35 65.625C18.1131 65.625 4.37502 51.8869 4.37502 35C4.37502 18.1131 18.1131 4.37502 35 4.37502C51.8869 4.37502 65.625 18.1131 65.625 35C65.625 51.8869 51.8869 65.625 35 65.625Z" fill="#22BEB3"/>
                                <path d="M37.1875 13.125H32.8125V35.9057L46.5783 49.6716L49.6716 46.5783L37.1875 34.0942V13.125Z" fill="#22BEB3"/>
                                </svg>
                        </span>
                    <p>09:00 - 10:00</p>
                </div>
            </div>
            <div class="contact_form_map_block">
                <div class="contact_form_blok">
                    <h3>REVERSE CONNECTION</h3>
                    <form action="">
                        <div class="name_form_block">
                            <input type="text" id="name" name="name" placeholder="name *">
                            <input type="text" id="fname" name="fname" placeholder="Last name *">
                        </div>
                        <div class="phone_form_block">
                            <div class="custom-select">
                                <select>
                                    <option value="0">
                                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="4" width="18" height="4" fill="#0085FF"/>
                                            <rect y="8" width="18" height="4" fill="#FF8A00"/>
                                            <rect width="18" height="4" fill="#FF0000"/>
                                        </svg>
                                        +374
                                    </option>
                                    <option value="1">
                                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="4" width="18" height="4" fill="#0085FF"/>
                                            <rect y="8" width="18" height="4" fill="#FF8A00"/>
                                            <rect width="18" height="4" fill="#FF0000"/>
                                        </svg>
                                        +374
                                    </option>
                                    <option value="2">1</option>
                                    <option value="3">1</option>
                                    <option value="4">1</option>
                                    <option value="5">1</option>
                                    <option value="6">1</option>
                                </select>
                            </div>
                            <input class="number_inp" type="number" placeholder="phone number *">
                        </div>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                        <button>
                            <input type="submit" value="send">
                        </button>
                    </form>
                </div>
                <div class="contact_map_blok">
                    <div class="contact_page_map_block" id="map">

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
