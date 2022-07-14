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
            <ul class="ss-navbar__nav ss-nav-right">
                <li class="ss-nav-item">
                    <div class="ss-avt ss-dropdown">
                        <img class="ss-dropdown__toggle" data-toggle="user-menu" src="https://via.placeholder.com/40x40.jpg/a59090/000000?Text=40x40" alt="User image" width="40" height="40" loading="lazy">
                        <ul id="user-menu" class="ss-dropdown__menu">
                            <li class="ss-dropdown__menu-item ss-user-info">
                                <img src="https://via.placeholder.com/60x60.jpg/a59090/000000?Text=60x60" alt="User image" width="64" height="64" loading="lazy">
                                <div class="ss-user-info__text">
                                    <strong>User name</strong>
                                    <span>user@test.com</span>
                                </div>
                            </li>
                            <li class="ss-dropdown__menu-item ss-account-settings">
                                <a href="#nowhere" class="ss-dropdown__menu-link">Account settings</a>
                            </li>
                            <li class="ss-dropdown__menu-item">
                                <a href="#nowhere" class="ss-dropdown__menu-link">Get the Canva Apps</a>
                            </li>
                            <li class="ss-dropdown__menu-item">
                                <a href="#nowhere" class="ss-dropdown__menu-link">Refer friends</a>
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

        <main class="ss-site-content" style="margin-top: 72px;">

            <aside class="ss-sidebar">
                <ul class="ss-sidebar__nav">
                    <li class="ss-sidebar__nav-item ss-user-info">
                        <img src="https://via.placeholder.com/40x40.jpg/a59090/000000?Text=40x40" alt="User image" width="40" height="40" loading="lazy">
                        <div class="ss-user-info__text">
                            <strong>user name</strong>
                            <span>user@test.com</span>
                        </div>
                    </li>
                    <li class="ss-sidebar__nav-item active">
                        <a href="#" class="ss-sidebar__nav-link"><i class="icon-user"></i> Your account</a>
                    </li>
                    <li class="ss-sidebar__nav-item">
                        <a href="#" class="ss-sidebar__nav-link"><i class="icon-lock"></i> Login & security</a>
                    </li>
                    <li class="ss-sidebar__nav-item">
                        <a href="#" class="ss-sidebar__nav-link"><i class="icon-mail"></i> Email preferences</a>
                    </li>
                </ul>
            </aside><!-- /.ss-sidebar -->

            <div class="ss-main">
                <form class="ss-form">
                    <div class="ss-form__header">
                        <h2>Your account</h2>
                        <div class="ss-inner">
                            <div class="ss-user-main">
                                <figure class="ss-user-main__img">
                                    <figcaption>Profile Photo</figcaption>
                                    <img src="https://via.placeholder.com/80x80.jpg/a59090/000000?Text=80x80" alt="User image" width="80" height="80" loading="lazy">
                                </figure>
                                <div class="ss-user-main__action">
                                    <button class="btn btn-transparent">Remove photo</button>
                                    <button class="btn btn-secondary">Change photo</button>
                                </div>
                            </div> <!-- /.ss-user-main -->
                        </div> <!-- /.ss-inner-->
                    </div>
                    <div class="ss-form__section">
                        <div class="ss-form__group">
                            <label for="#" class="ss-form__label">Name</label>
                            <input class="ss-form__control" type="text" placeholder="user name">
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
            </div>
        </main> <!-- /.ss-site-content -->

        <footer class="ss-site-footer">

        </footer><!-- /.ss-footer -->
    </div>

    <script src="assets/js/main.js"></script>
</body>

</html>