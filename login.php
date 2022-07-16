<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canva</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="ss-site-wrapper">
        <header class="ss-site-header ss-navbar">
            <ul class="ss-navbar__nav justify-content-between w-100">
                <li class="ss-navbar__item ss-mobile">
                    <a href="#" class="ss-hamburger">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style=" fill:#000000;">
                            <path d="M 2 5 L 2 7 L 22 7 L 22 5 L 2 5 z M 2 11 L 2 13 L 22 13 L 22 11 L 2 11 z M 2 17 L 2 19 L 22 19 L 22 17 L 2 17 z"></path>
                        </svg>
                    </a>
                </li>
                <li class="ss-navbar__item ss-navbar--right">
                    <div class="ss-avt ss-dropdown">
                        <img class="ss-dropdown__toggle" data-toggle="ssUserMenu" src="assets/images/user-40x40.png" alt="User image" width="40" height="40" loading="lazy">
                        <ul id="ssUserMenu" class="ss-dropdown__menu">
                            <li class="ss-dropdown__menu-item ss-user-info">
                                <img src="assets/images/user-64x64.png" alt="User image" width="64" height="64" loading="lazy">
                                <div class="ss-user-info__text">
                                    <strong>User name</strong>
                                    <span>user@test.com</span>
                                </div>
                            </li>
                            <li class="ss-dropdown__menu-item">
                                <a href="#nowhere" class="ss-dropdown__menu-link">Account settings</a>
                            </li>
                            <li class="ss-dropdown__menu-item">
                                <a href="#nowhere" class="ss-dropdown__menu-link">Get help</a>
                            </li>
                            <li class="ss-dropdown__menu-item">
                                <a href="#nowhere" class="ss-dropdown__menu-link">Get the Canva Apps</a>
                            </li>
                            <li class="ss-dropdown__menu-item">
                                <a href="#nowhere" class="ss-dropdown__menu-link">Refer friends <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19 7.3h-.274c.598-1.298.212-3.114-.996-4.02-2.03-1.087-4.087 1.195-5.728 3.342-1.642-2.147-3.699-4.43-5.729-3.342-1.207.906-1.594 2.722-.996 4.02H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2V19a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-5.7a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2Zm-2.77-.02c.487 0 .746-.142.89-.27.16-.142.294-.368.353-.69.122-.66-.123-1.377-.551-1.764-.29-.113-.701-.085-1.448.491-.69.532-1.388 1.337-2.086 2.233h2.842ZM11.25 8.8H5a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h6.25v-3Zm1.5 0v3H19a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-6.25Zm-1.5 4.5H6.5V19a.5.5 0 0 0 .5.5h4.25v-6.2Zm1.5 6.2v-6.2h4.75V19a.5.5 0 0 1-.5.5h-4.25ZM7.774 7.28h2.84c-.697-.896-1.395-1.7-2.085-2.233-.746-.576-1.157-.604-1.448-.49-.427.386-.672 1.104-.55 1.763.059.322.193.548.352.69.145.128.404.27.89.27Z" fill="currentColor"></path>
                                    </svg></a>
                            </li>

                            <li class="ss-dropdown__menu-item">
                                <a href="#nowhere" class="ss-dropdown__menu-link">Privacy policy</a>
                            </li>
                            <li class="ss-dropdown__menu-item">
                                <a href="#nowhere" class="ss-dropdown__menu-link">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </header> <!-- /.site-header -->

        <main class="ss-site-content ss-has-sidebar">

            <aside class="ss-sidebar">
                <ul class="ss-sidebar__nav">
                    <li class="ss-sidebar__nav-item ss-user-info">
                        <img src="assets/images/user-40x40.png" alt="User image" width="40" height="40" loading="lazy">
                        <div class="ss-user-info__text">
                            <strong>user name</strong>
                            <span>user@test.com</span>
                        </div>
                    </li>
                    <li class="ss-sidebar__nav-item">
                        <button type="button" class="ss-sidebar__nav-link ss-tab-links active" data-tab="ssTabContent1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2Zm6.233 15.77A8.46 8.46 0 0 1 12 20.5a8.46 8.46 0 0 1-6.234-2.73A8.467 8.467 0 0 1 3.5 12c0-4.7 3.8-8.5 8.5-8.5a8.493 8.493 0 0 1 6.233 14.27Z" fill="currentColor"></path>
                                <path d="m13.522 12.448-.053.044c.018-.016.037-.029.053-.044Zm-3.225-.192c-.032-.037-.064-.073-.093-.112.03.038.062.075.093.112Zm1.16.721h.001a.6.6 0 0 0-.019-.006l.018.006Zm-.926-.485c-.018-.015-.037-.029-.054-.045.017.016.036.029.054.045Zm2.012.485.017-.006a.6.6 0 0 1-.019.006h.002Zm1.16-.721c.032-.037.063-.073.092-.112-.029.038-.061.075-.092.112Z" fill="currentColor"></path>
                                <path d="M14.584 13.505A3.733 3.733 0 0 0 15.75 10.8 3.755 3.755 0 0 0 12 7.05a3.754 3.754 0 0 0-3.75 3.75 3.73 3.73 0 0 0 1.166 2.705 6.537 6.537 0 0 0-3.007 2.721c.321.426.684.816 1.093 1.157a4.97 4.97 0 0 1 3.995-2.884c.166.023.841.023 1.008 0a4.974 4.974 0 0 1 3.996 2.884c.407-.342.774-.73 1.092-1.157a6.552 6.552 0 0 0-3.009-2.721Zm-1.062-1.057-.053.044a2.233 2.233 0 0 1-.909.48l-.017.005-.001.001a2.307 2.307 0 0 1-.542.072c-.188 0-.367-.03-.542-.073h-.001l-.018-.006a2.239 2.239 0 0 1-.908-.479c-.018-.015-.037-.029-.054-.045a2.707 2.707 0 0 1-.399-.49 2.172 2.172 0 0 1-.093-.171 2.182 2.182 0 0 1-.081-.177 2.349 2.349 0 0 1-.074-.238c-.013-.05-.03-.099-.04-.15a2.25 2.25 0 1 1 4.418-.001c-.01.051-.026.099-.039.149-.022.081-.044.162-.074.239-.078.19-.178.37-.299.535-.029.039-.061.075-.092.112a2.37 2.37 0 0 1-.182.193Z" fill="currentColor"></path>
                                <path d="M10.477 12.447c-.064-.059-.122-.125-.18-.191.058.067.116.131.18.191Zm3.731-1.227c-.01.051-.026.099-.039.149.012-.049.029-.097.039-.149Zm-.114.388c-.024.06-.051.119-.08.177.028-.058.057-.116.08-.177Zm-4.108.177a2.182 2.182 0 0 1-.081-.177c.024.061.053.119.081.177Z" fill="currentColor"></path>
                            </svg>
                            Your account
                        </button>
                    </li>
                    <li class="ss-sidebar__nav-item">
                        <button type="button" class="ss-sidebar__nav-link ss-tab-links" data-tab="ssTabContent2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12.75 14.33v3.03a.75.75 0 0 1-1.5 0v-3.03c-.6-.3-1.03-.94-1.03-1.69 0-1.02.8-1.85 1.78-1.85s1.78.83 1.78 1.85c0 .75-.42 1.4-1.03 1.69zM6 8h12a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2zm0 1.5a.5.5 0 0 0-.5.5v9c0 .28.22.5.5.5h12a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5H6zM7.5 8H6a6 6 0 1 1 12 0h-1.5a4.5 4.5 0 1 0-9 0z"></path>
                            </svg>
                            Login & security
                        </button>
                    </li>
                    <li class="ss-sidebar__nav-item">
                        <button type="button" class="ss-sidebar__nav-link ss-tab-links" data-tab="ssTabContent3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20.37 5.03A2 2 0 0 1 22 7v10a2 2 0 0 1-1.96 2H4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h16.1H4zm.13 2.07-4.53 5.31 4.53 4.63a.5.5 0 0 0 0-.04V7.1zm-17-.14a.5.5 0 0 0 0 .04v10a.5.5 0 0 0 0 .04l4.59-4.7L3.5 6.97zm5.57 6.53-3.92 4 13.7.01L15 13.56a4 4 0 0 1-5.93-.07zm9.88-6.99H5l5.07 5.96a2.5 2.5 0 0 0 3.81 0l5.07-5.96z"></path>
                            </svg>
                            Email preferences
                        </button>
                    </li>
                </ul>
            </aside><!-- /.ss-sidebar -->

            <div class="ss-main-content">
                <div id="ssTabContent1" class="ss-tab-content active">
                    <form class="ss-form">
                        <div class="ss-form__header">
                            <h2>Your account</h2>
                            <div class="ss-inner">
                                <div class="ss-user-main">
                                    <figure class="ss-user-main__img">
                                        <figcaption>Profile Photo</figcaption>
                                        <img src="assets/images/user-80x80.png" alt="User image" width="80" height="80" loading="lazy">
                                    </figure>
                                    <div class="ss-user-main__action">
                                        <button class="btn btn-transparent">Remove photo</button>
                                        <button class="btn btn-secondary">Change photo</button>
                                    </div>
                                </div> <!-- /.ss-user-main -->
                            </div> <!-- /.ss-inner-->
                        </div>
                        <div class="ss-form__section active">
                            <div class="ss-form__group">
                                <label for="#" class="ss-form__label">Name</label>
                                <input class="ss-form__control" type="text" placeholder="user name">
                                <p>user name</p>
                            </div>
                            <div class="ss-form__action">
                                <button class="btn btn-secondary">Cancel</button>
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </div> <!-- /.ss-form-section -->
                        <div class="ss-form__section">
                            <div class="ss-form__group">
                                <label for="#" class="ss-form__label">Email address</label>
                                <input class="ss-form__control" type="email" placeholder="test@email.com">
                                <p>test@email.com</p>
                            </div>
                            <div class="ss-form__action">
                                <button class="btn btn-secondary">Cancel</button>
                                <button class="btn btn-secondary">Edit</button>
                            </div>
                        </div> <!-- /.ss-form__section -->
                        <div class="ss-form__section">
                            <div class="ss-form__group">
                                <label for="#" class="ss-form__label">What will you be using Canva for?</label>
                                <select class="ss-form__control">
                                    <option value="Personal">Personal</option>
                                    <option value="Non-profit or charity">Non-profit or charity</option>
                                    <option value="Large company">Large company</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Student">Student</option>
                                    <option value="Small business">Small business</option>
                                </select>
                            </div>
                        </div> <!-- /.ss-form__section -->
                    </form>
                </div> <!-- /.ss-tab-content -->
                <div id="ssTabContent2" class="ss-tab-content">
                    <p>Your content goes here.</p>
                </div> <!-- /.ss-tab-content -->
                <div id="ssTabContent3" class="ss-tab-content">
                    <p>Your content goes here other.</p>
                </div> <!-- /.ss-tab-content -->
            </div>
        </main> <!-- /.ss-site-content -->

        <footer class="ss-site-footer">

        </footer><!-- /.ss-footer -->
    </div>

    <script src="assets/js/main.js"></script>
</body>

</html>