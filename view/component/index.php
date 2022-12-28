<div>
    <div class="dashboard-main">
        <div class="side-left">
            <div class="icon-dashboard">
                <div class="header-dashboard">
                    <img src="images/logo-login.png" alt="">
                    <h3>Tasnim Store</h3>
                    <div id="burger">
                        <img src="icon/icon-hamburger-menu.svg" alt="" id="burger-on">
                    </div>
                </div>
            </div>
            <div class="nav-menu">
                <dl id="list">
                    <dt>
                        <img class="icon dashboard-icon" src="icon/dashboard-icon.svg" alt="">
                        <a id="dashboard" href="#">Dashboard</a>
                    </dt>
                    <dt>
                        <img class="icon master-icon" src="icon/master-icon.svg" alt="">
                        <a id="master" href="#">Master</a>
                    </dt>
                    <div id="master-detail">
                        <ul>
                            <li><a id="master-customer" href="#">Master Customer</a></li>
                            <li><a id="master-produk" href="#">Master Produk</a></li>
                            <li><a id="master-admin" href="#">Master Admin</a></li>
                        </ul>
                    </div>
                    <dt>
                        <img class="icon customer-icon" src="icon/customer-icon.svg" alt="">
                        <a id="customer" href="#">Customer</a>
                    </dt>
                    <dt>
                        <img class="icon produk-icon" src="icon/produk-icon.svg" alt="">
                        <a id="produk" href="#">Produk</a>
                    </dt>
                    <dt>
                        <img class="icon transaksi-icon" src="icon/transaksi-icon.svg" alt="">
                        <a id="transaksi" href="#">Transaksi</a>
                    </dt>
                    <dt>
                        <img class="icon laporan-icon" src="icon/laporan-icon.svg" alt="">
                        <a id="laporan" href="#">Laporan</a>
                    </dt>
                </dl>
            </div>
            <div class="footer-dashboard">
                <div id="notes">
                    <h6>Create notes :</h6>
                    <div class="d-grid gap-2 section-notes">
                        <button style="padding:8px; text-align:left; color:black; " type="button" id="button-notes" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <img style="margin-top:-3px; " class="icon" src="icon/notes-icon.svg" alt="">
                            New notes
                        </button>
                    </div>
                    <div class="list-group" id="notif-notes">
                        <button type="button" class="list-group-item list-group-item-action list-n">
                            03-Desember-2022
                            <span class="notif-notes">
                                <img src="icon/notif-icon.svg" alt="">
                            </span>
                        </button>
                        <button type="button" class="list-group-item list-group-item-action list-n">
                            02-Desember-2022
                            <span class="notif-notes">
                                <img src="icon/icon-check-notif.svg" alt="">
                            </span>
                        </button>
                        <button type="button" class="list-group-item list-group-item-action list-n">
                            01-Desember-2022
                            <span class="notif-notes">
                                <img src="icon/icon-check-notif.svg" alt="">
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="component-main">
        </div>
        <div class="side-right">
            <div id="notifikasi">
                <span><img src="icon/icon-notifikasi-alert.svg" class="icon" alt=""></span>
                <span><img src="icon/icon-massage-alert.svg" class="icon" alt=""></span>
            </div>
            <div id="poto-profile">
                <div id="drawer-profile">
                    <span id="profile">
                        <img src="icon/icon-user-profile.svg" id="pp" alt="">
                    </span>
                    <span id="name-tag">
                        <span class="badge bg-light text-dark mt-2">Aji Pramadana</span>
                        <span id="status-online">
                            <img src="icon/icon-online.svg" class="label-online" alt="">
                            <p> Online</p>
                        </span>
                    </span>
                </div>
                <span id="settings">
                    <a href="" id="anchor-setting">
                        <img src="icon/icon-settings.svg" class="icon mt-2" alt="">
                    </a>
                </span>
            </div>
            <div id="personal-menu">
                <div id="marketing">
                    <img src="icon/icon-marketing.svg" class="icon-target" alt="">
                    <span><a href="" id="anchor-marketing">Target</a></span>
                </div>
                <div id="my-customer">
                    <img src="icon/icon-mycustomer.svg" class="icon-mycustomer" alt="">
                    <span>My Customer</span>
                </div>
                <span id="line-mycustomer"></span>
                <div id="list-mycustomer">
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Cras justo odio</li>
                    </ol>
                </div>
                <div id="logout">
                    <span>
                        <a href="">
                            Logout
                        </a>
                    </span>
                    <img src="icon/icon-logout.svg" class="icon-logout" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Notes -->
<div id="modal-notes">
    <div class="card-notes">
        <div class="header-notes">
            <h5>My notes</h5>
        </div>
        <div class="content-notes">
            <form class="mt-3" action="">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="tanggal_notes" class="col-form-label">Tanggal</label>
                    </div>
                    <div class="col-auto" id="tanggal_n">
                        <input type="date" id="tanggal_notes" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="mb-3 mt-4">
                    <label for="new_note" class="form-label">Create notes :</label>
                    <textarea class="form-control" placeholder="create new notes here" id="new_note" style=" height: 100px"></textarea>
                    </textarea>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                    <button id="cancel-modal" class="btn btn-warning me-md-2" type="button">Cancel</button>
                    <button class="btn btn-info" type="submit">Created</button>
                </div>
            </form>
        </div>
        <div class="footer-notes">

        </div>

    </div>
</div>

<!-- List notes -->
<div id="list-notes">
    <div class="card mt-4">
        <div class="card-header">
            Tanggal : 22-Des-2022
        </div>
        <div class="bodynotes">
            <div class="card-body">
                <h5 class="card-title">Janji Meeting dengan Client</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur enim distinctio natus nihil quas earum ullam voluptatibus sint debitis ut eos nostrum saepe aliquam accusantium laborum, similique doloribus! Rem, perspiciatis!</p>
                <a href="#" class="btn btn-warning mt-3 cancel-notes">Cancel</a>
                <a href="#" class="btn btn-secondary mt-3">Mark as read</a>
                <span class="notif-notes">
                    <img src="icon/notif-icon.svg" alt="" style="margin-top: 20px; margin-left: 7px;">
                </span>
            </div>
        </div>
    </div>
</div>

<!-- marketing modal -->
<div id="marketing-info">
    <div class="card bodynotes border-primary mt-4">
        <div class="card-header">
            My Sales
            <button type="button" class="btn-close position-absolute top-1" id="exit-market" style="right: 10px;"></button>
        </div>
        <div class="card-body cardmarket text-primary">
            <div class="alert alert-primary mt-3" role="alert">
                <h5 class="card-title">Marketing Plan on Februari - 2022</h5>
                <h6 class="card-text">120 Sales</h6>
            </div>
        </div>
        <div class="card-body cardmarket text-warning" style="margin-top: -40px;">
            <div class="alert alert-warning" role="alert">
                <h5 class="card-title">On Track 5 Februari - 2022</h5>
                <h6 class="card-text">20 Sales</h6>
            </div>
        </div>
        <!-- stepper start -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
        <div class="container padding-bottom-3x mb-1">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                        <div class="step completed">
                            <div class="step-icon-wrap">
                                <div class="step-icon">1</div>
                            </div>
                            <h4 class="step-title">Januari</h4>
                        </div>
                        <div class="step completed">
                            <div class="step-icon-wrap">
                                <div class="step-icon">2</div>
                            </div>
                            <h4 class="step-title">Februari</h4>
                        </div>
                        <div class="step completed">
                            <div class="step-icon-wrap">
                                <div class="step-icon">3</div>
                            </div>
                            <h4 class="step-title">Maret</h4>
                        </div>
                        <div class="step">
                            <div class="step-icon-wrap">
                                <div class="step-icon">4</div>
                            </div>
                            <h4 class="step-title">April</h4>
                        </div>
                        <div class="step">
                            <div class="step-icon-wrap">
                                <div class="step-icon">5</div>
                            </div>
                            <h4 class="step-title">Mei</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- stepper end -->
        <!-- <div class="toast" role="alert" aria-live="assertive" aria-atomic="true"> -->
        <div class="card-body cardmarket text-warning" style="margin-top: -40px;">
            <div class="toast-header">
                <strong class="me-auto">Perfomance</strong>
                <small class="text-muted">just now</small>
            </div>
            <div class="toast-body">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item" style="border: 2px solid black; border-radius:25px; margin-left:5px; width:45px;height:45px; background-color:#F0E68C;">
                        <img src="icon/icon-like-thumb.svg" class="icon position-absolute top-50 start-50 translate-middle" alt="" srcset="">
                    </li>
                    <li class="list-group-item" style="border: 2px solid black; border-radius:25px; margin-left:5px; width:45px;height:45px; background-color:#F0E68C;">
                        <img src="icon/icon-like-thumb.svg" class="icon position-absolute top-50 start-50 translate-middle" alt="" srcset="">
                    </li>
                    <li class="list-group-item" style="border: 2px solid black; border-radius:25px; margin-left:5px; width:45px;height:45px; background-color:#F0E68C;">
                        <img src="icon/icon-like-thumb.svg" class="icon position-absolute top-50 start-50 translate-middle" alt="" srcset="">
                    </li>
                    <li class="list-group-item" style="border: 2px solid black; border-radius:25px; margin-left:5px; width:45px;height:45px; background-color:white;">
                        <img src="icon/icon-like-thumb.svg" class="icon position-absolute top-50 start-50 translate-middle" alt="" srcset="">
                    </li>
                    <li class="list-group-item" style="border: 2px solid black; border-radius:25px; margin-left:5px; width:45px;height:45px; background-color:white;">
                        <img src="icon/icon-like-thumb.svg" class="icon position-absolute top-50 start-50 translate-middle" alt="" srcset="">
                    </li>
                </ul>
            </div>
        </div>
        <!-- </div> -->
        <!-- <div class="card-body cardmarket text-danger" style="margin-top: -40px;">
            <div class="alert alert-danger" role="alert">
                <h5 class="card-title">On Track 29 Februari - 2022</h5>
                <h6 class="card-text">20 Sales</h6>
            </div>
        </div> -->

    </div>
</div>

<!-- Modal setting -->
<div id="settings-modal">
    <div class="card mb-3 mt-4" style="width: 800px;">
        <!-- <div class="alert alert-secondary mt-1" role="alert"> -->
        <button type="button" class="btn-close position-absolute" id="exit-market" style="right: 12px; top:4px"></button>
        <!-- </div> -->
        <div class="row p-2">
            <div class="col-4" style="margin-top: 39px;">
                <div class="card p-2  border border-white" style="width: 18rem;">
                    <div class="card-body mx-auto">
                        <h5 class="card-title">Profile</h5>
                    </div>
                    <img src="icon/icon-user-profile.svg" class="icon-profile mx-auto" alt="...">

                </div>
            </div>
            <div class="col-8">
                <div class="card-body" style="margin-right: 30px;">
                    <form class="row g-3 mt-3 p-2">
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Nama</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">No KTP</label>
                            <input type="text" class="form-control" id="inputAddress2">
                        </div>
                        <div class="col-12">
                            <label for="inputCity" class="form-label">Password</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Poto profile</label>
                            <input type="file" class="form-control" id="inputGroupFile02">
                        </div>
                        <div class="col-12 d-flex flex-row-reverse bd-highlight">
                            <button type="submit" class="btn btn-primary mt-4 mb-2">Save</button>
                            <button type="submit" class="btn btn-warning mt-4 mb-2" style="margin-right: 10px;">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>







        <!-- <div class="row g-0 p-2">
            <div class="col-md-4 p-2">
                <img src="icon/icon-user-profile.svg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                    <form class="row g-3 mt-3">
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Nama</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
    </div>

</div>


<script>
    // list dokumen ketika ready
    $(document).ready(function() {
        $('#modal-notes').hide();
        $('#list-notes').hide();
        $('#marketing-info').hide();
        $('#settings-modal').hide();
        $("title").text('Dashboard')
        $(".component-main").load("./view/component-dashboard/index.php");
    });


    let targetSelected;
    let masterSelected;

    // function merubah warna pada master
    function detailList(ml, TargetList) {
        masterList = $('#master-detail ul li a');
        for (let index = 0; index < masterList.length; index++) {
            if (ml === masterList[index].id) {
                $('#' + masterList[index].id).css('color', '#483D8B')
            } else {
                $('#' + masterList[index].id).css('color', 'black')
            }
        }
    }

    // event merubah warna dan icon ketika salah satu navigasi dipilih
    $("dl dt a").on('click', function(e) {
        detailList();
        $('#' + this.masterSelected).css('color', 'black')
        this.targetSelect = e.target.id;
        idList = $("dl dt a");
        imgList = $("dl dt img");
        imgSelected = this.targetSelect + "-icon";
        for (let index = 0; index < idList.length; index++) {
            if (idList[index].id === this.targetSelect) {
                $('#' + idList[index].id).css('color', 'black');
                if (idList[index].id === 'master') {
                    $('#master-detail').toggle(500);
                    $('#notif-notes').toggle(500);
                } else {
                    $('#master-detail').hide(500);
                    $('#notif-notes').show(500);
                }
            } else {
                $('#' + idList[index].id).css('color', 'whitesmoke');
            }
        }

        for (let index = 0; index < imgList.length; index++) {
            if (imgList[index].classList[1] === imgSelected) {
                $('.' + imgList[index].classList[1]).attr('src', 'icon/' + imgSelected + '-onselect.svg');
            } else {
                $('.' + imgList[index].classList[1]).attr('src', 'icon/' + imgList[index].classList[1] + '.svg');
            }
        }
    });

    // event merubah warna ketika salah satu button pada master list dipilih
    $('#master-detail ul li').on('click', function(e) {
        this.masterSelected = e.target.id;
        detailList(this.masterSelected);
    })

    // modal notes
    $('#button-notes').click(function() {
        $('#modal-notes').fadeIn("slow");
    });
    $('#cancel-modal').click(function() {
        $('#modal-notes').fadeOut("slow");
    });

    // modal list notes
    $('.list-n').click(function() {
        $('#list-notes').fadeIn("slow");
    });
    $('.cancel-notes').click(function() {
        $('#list-notes').fadeOut("slow");
    });

    // modal marketing
    $('#anchor-marketing').click(function(e) {
        e.preventDefault();
        $('#marketing-info').fadeIn("slow");
    });
    // exit market button
    $('#exit-market').click(function(e) {
        $('#marketing-info').fadeOut("slow");
    });
    // setting button 
    $('#anchor-setting').click(function(e) {
        e.preventDefault();
        $('#settings-modal').fadeIn("slow");
    });


    // javascript mobile mode
    $('#burger-on').on('click', function() {
        $('#mobile-menu-cover').toggle();
        $('.nav-menu').toggle(500);
    });
</script>