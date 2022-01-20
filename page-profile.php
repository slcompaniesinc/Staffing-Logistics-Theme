<?php
/**
 * The template for displaying the profile page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Peoplecount
 */

get_header();
get_sidebar();
?>

	
	<main id="content-wrapper" class="d-flex flex-column">

			   <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
        <div class="container-fluid"><button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle me-3" type="button"><i class="fas fa-bars"></i></button>
            <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group"></div>
            </form>
            <ul class="navbar-nav flex-nowrap ms-auto">
                <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                    <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="me-auto navbar-search w-100">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..." />
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                            <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="me-3">
                                    <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                </div>
                                <div><span class="small text-gray-500">December 12, 2019</span>
                                    <p>A new monthly report is ready to download!</p>
                                </div>
                            </a><a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="me-3">
                                    <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                </div>
                                <div><span class="small text-gray-500">December 7, 2019</span>
                                    <p>$290.29 has been deposited into your account!</p>
                                </div>
                            </a><a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="me-3">
                                    <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                </div>
                                <div><span class="small text-gray-500">December 2, 2019</span>
                                    <p>Spending Alert: We&#39;ve noticed unusually high spending for your account.</p>
                                </div>
                            </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                            <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image me-3"><img class="rounded-circle" src="<?php echo get_template_directory_uri() ?> /img/avatars/dogs/Wright,Nazere_Headshot.png" />
                                    <div class="bg-success status-indicator"></div>
                                </div>
                                <div class="fw-bold">
                                    <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I&#39;ve been having.</span></div>
                                    <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                </div>
                            </a><a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image me-3"><img class="rounded-circle" src="avatars/avatar2.jpeg" />
                                    <div class="status-indicator"></div>
                                </div>
                                <div class="fw-bold">
                                    <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                    <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                </div>
                            </a><a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image me-3"><img class="rounded-circle" src="avatars/avatar3.jpeg" />
                                    <div class="bg-warning status-indicator"></div>
                                </div>
                                <div class="fw-bold">
                                    <div class="text-truncate"><span>Last month&#39;s report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                    <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                </div>
                            </a><a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image me-3"><img class="rounded-circle" src="avatars/avatar5.jpeg" />
                                    <div class="bg-success status-indicator"></div>
                                </div>
                                <div class="fw-bold">
                                    <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren&#39;t good...</span></div>
                                    <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                </div>
                            </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </div>
                    <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                </li>
                <div class="d-none d-sm-block topbar-divider"></div>
                <li class="nav-item dropdown no-arrow">
                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Nazere Wright</span><img class="border rounded-circle img-profile" src="avatars/Wright,Nazere_Headshot.png" /></a>
                        <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i> Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i> Activity log</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    

    <div class="container-fluid">
    <h3 class="text-dark mb-4">Profile</h3>
    <div class="row mb-3">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="dogs/Wright,Nazere_Headshot.png" width="160" height="160" />
                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change Photo</button></div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="text-primary fw-bold m-0">Company Admin Settings</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3"><label class="form-label" for="company-name"><strong>Company Name</strong></label><input id="company-name" class="form-control" type="text" name="company-name" /></div>
                        <div class="mb-3"><label class="form-label" for="company-name"><strong>Company Address</strong></label><input id="company-name-1" class="form-control" type="text" name="company-name" /></div>
                        <div class="mb-3"><label class="form-label" for="company-name"><strong>Company Website</strong></label><input id="company-name-2" class="form-control" type="text" name="company-name" /></div>
                        <div style="display: flex;/*justify-content: center;*/flex-direction: column;align-items: center;"><label class="form-label"><strong>Company Logo</strong></label><img class="rounded-circle mb-3 mt-4" src="dogs/staffing-logistics.png" width="160" height="160" />
                            <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change Photo</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row mb-3 d-none">
                <div class="col">
                    <div class="card textwhite bg-primary text-white shadow">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <p class="m-0">Peformance</p>
                                    <p class="m-0"><strong>65.2%</strong></p>
                                </div>
                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                            </div>
                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i> 5% since last month</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card textwhite bg-success text-white shadow">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <p class="m-0">Peformance</p>
                                    <p class="m-0"><strong>65.2%</strong></p>
                                </div>
                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                            </div>
                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i> 5% since last month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">User Settings</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="username"><strong>Username</strong></label><input id="username" class="form-control" type="text" placeholder="user.name" name="username" /></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label><input id="email" class="form-control" type="email" placeholder="user@example.com" name="email" /></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>First Name</strong></label><input id="first_name" class="form-control" type="text" placeholder="John" name="first_name" /></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>Last Name</strong></label><input id="last_name" class="form-control" type="text" placeholder="Doe" name="last_name" /></div>
                                    </div>
                                </div>
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Contact Settings</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3"><label class="form-label" for="company-name"><strong>Phone Number</strong></label><input class="form-control" type="tel" /></div>
                                <div class="mb-3"><label class="form-label" for="address"><strong>Address</strong></label><input id="address" class="form-control" type="text" placeholder="Sunset Blvd, 38" name="address" /></div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="city"><strong>City</strong></label><input id="city" class="form-control" type="text" placeholder="Los Angeles" name="city" /></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="country"><strong>Country</strong></label><input id="country" class="form-control" type="text" placeholder="USA" name="country" /></div>
                                    </div>
                                </div>
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-5">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Signature Settings</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3"><label class="form-label" for="signature"><strong>Signature</strong><br /></label><textarea id="signature" class="form-control" rows="4" name="signature"></textarea></div>
                        <div class="mb-3">
                            <div class="form-check form-switch"><input id="formCheck-1" class="form-check-input" type="checkbox" /><label class="form-check-label" for="formCheck-1"><strong>Automatically add signature to any document</strong></label></div>
                        </div>
                        <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


		<?php get_footer();?>
	</main><!-- #main -->

<?php

