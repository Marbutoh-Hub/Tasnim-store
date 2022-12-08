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
                <div id="notes" class="mt-2">
                    <h6>Create notes :</h6>
                    <div class="d-grid gap-2 section-notes">
                        <button style="padding:8px; text-align:left; color:black; " type="button" id="button-notes" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <img style="margin-top:-3px; " class="icon" src="icon/notes-icon.svg" alt="">
                            New notes
                        </button>
                    </div>
                    <div class="list-group" id="notif-notes">
                        <button type="button" class="list-group-item list-group-item-action">
                            A second item
                            <span class="notif-notes">
                                <img src="icon/notif-icon.svg" alt="">
                            </span>
                        </button>
                        <button type="button" class="list-group-item list-group-item-action">
                            A second item 2
                            <span class="notif-notes">
                                <img src="icon/icon-check-notif.svg" alt="">
                            </span>
                        </button>
                        <button type="button" class="list-group-item list-group-item-action">
                            A third button item
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


<script>
    $(document).ready(function() {
        $('#modal-notes').hide();
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
                $('#' + idList[index].id).css('color', '#BA55D3');
                if (idList[index].id === 'master') {
                    $('#master-detail').toggle(500);
                    $('#notif-notes').toggle(500);
                } else {
                    $('#master-detail').hide(500);
                    $('#notif-notes').show(500);
                }
            } else {
                $('#' + idList[index].id).css('color', 'black');
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

    // javascript mobile mode
    $('#burger-on').on('click', function() {
        $('.nav-menu').toggle(500);
    });
</script>