<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="site-wrapper">
        <header class="site-header navbar">
            <ul class="navbar-nav nav-right">
                <li class="nav-item">
                    <div class="avt dropdown">
                        <img src="https://via.placeholder.com/40x40.jpg/a59090/000000?Text=40x40" alt="User image" width="40" height="40" loading="lazy">
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-item user-info">
                                <img src="https://via.placeholder.com/60x60.jpg/a59090/000000?Text=60x60" alt="User image" width="64" height="64" loading="lazy">
                                <div class="user-info-text">
                                    <strong>User name</strong>
                                    <span>user@test.com</span>
                                </div>
                            </li>
                            <li class="dropdown-menu-item account-settings">
                                <a href="#nowhere" class="dropdown-menu-link">Account settings</a>
                            </li>
                            <li class="dropdown-menu-item">
                                <a href="#nowhere" class="dropdown-menu-link">Get the Canva Apps</a>
                            </li>
                            <li class="dropdown-menu-item">
                                <a href="#nowhere" class="dropdown-menu-link">Refer friends</a>
                            </li>

                            <li class="dropdown-menu-item">
                                <a href="#nowhere" class="dropdown-menu-link">Privacy policy</a>
                            </li>
                            <li class="dropdown-menu-item">
                                <a href="#nowhere" class="dropdown-menu-link">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </header> <!-- /.site-header -->

        <main class="site-content" style="margin-top: 72px;">

            <aside class="sidebar">
                <ul class="sidebar-nav">
                    <li class="sidebar-nav-item user-info">
                        <img src="https://via.placeholder.com/40x40.jpg/a59090/000000?Text=40x40" alt="User image" width="40" height="40" loading="lazy">
                        <div class="user-info-text">
                            <strong>user name</strong>
                            <span>user@test.com</span>
                        </div>
                    </li>
                    <li class="sidebar-nav-item active">
                        <a href="#" class="sidebar-nav-link"><i class="icon"></i> Your account</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#" class="sidebar-nav-link"><i class="icon"></i> Login & security</a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="#" class="sidebar-nav-link"><i class="icon"></i> Email preferences</a>
                    </li>
                </ul>
            </aside>
            <!-- /.sidebar -->


            <div class="wrapper">
                <form class="form">
                    <div class="form-header">
                        <h2>Your account</h2>
                        <div class="inner">
                            <div class="user-main">
                                <figure class="user-main-img">
                                    <figcaption>Profile Photo</figcaption>
                                    <img src="https://via.placeholder.com/80x80.jpg/a59090/000000?Text=80x80" alt="User image" width="80" height="80" loading="lazy">
                                </figure>
                                <div class="user-main-action">
                                    <button class="btn btn-transparent">Remove photo</button>
                                    <button class="btn btn-secondary">Change photo</button>
                                </div>
                            </div> <!-- /.user-main -->
                        </div> <!-- /.item -->
                    </div>
                    <div class="form-section">
                        <div class="form-group">
                            <label for="#" class="form-label">Name</label>
                            <input class="form-control" type="text" placeholder="user name">
                        </div>
                        <div class="form-action">
                            <button class="btn btn-secondary">Cancel</button>
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div> <!-- /.form-section -->
                    <div class="form-section">
                        <div class="form-group">
                            <label for="#" class="form-label">Email address</label>
                            <input class="form-control" type="email" placeholder="test@email.com">
                        </div>
                        <div class="form-action">
                            <button class="btn btn-secondary">Cancel</button>
                            <button class="btn btn-secondary">Edit</button>
                        </div>
                    </div> <!-- /.form-section -->
                    <div class="form-section">
                        <div class="form-group">
                            <label for="#" class="form-label">What will you be using Canva for?</label>
                            <select class="form-control">
                                <option value="Personal">Personal</option>
                                <option value="Non-profit or charity">Non-profit or charity</option>
                                <option value="Large company">Large company</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Student">Student</option>
                                <option value="Small business">Small business</option>
                            </select>
                        </div>
                    </div> <!-- /.form-section -->
                </form>
            </div>
        </main> <!-- /.site-content -->

        <footer class="site-footer">

        </footer><!-- /.footer -->
    </div>
</body>

</html>