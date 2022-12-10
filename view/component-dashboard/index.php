<div class="panel-dashboard">
    <div id="admin-board">
        <h5 id='title-admin'>Hello, <span id="nama-admin"></span></h5>
        <img src="images/icon-orang.png" alt="" class="imge">
    </div>
    <div id="info-all-transaction">
        <div class="card-all-penjualan">
            <div id="drawer-icon-transaction">
                <img class="icon-transction" src="icon/icon-shop-chart.svg" alt="">
            </div>
            <h6>Penjualan</h6>
            <div class="drawer-info-transaction">
                <span>Desember-2022</span>
                <h5>20998</h5>
            </div>
        </div>
        <div class="card-all-customer">
            <div id="drawer-icon-transaction">
                <img class="icon-transction" src="icon/customer-icon-dashboard.svg" alt="">
            </div>
            <h6>Tambahan Customer</h6>
            <div class="drawer-info-transaction">
                <span>Desember-2022</span>
                <h5>20998</h5>
            </div>
        </div>
        <div class="card-all-pendapatan">
            <div id="drawer-icon-transaction">
                <img class="icon-transction" src="icon/transaksi-icon-dashboard.svg" alt="">
            </div>
            <h6>Pendapatan</h6>
            <div class="drawer-info-transaction">
                <span class="mb-2">Desember-2022</span>
                <h5>Rp. 2000.000</h5>
            </div>
        </div>
    </div>
    <span id="show-recent-transaction">
        <img src="icon/icon-show-recent.svg" alt="" style="padding-right: 5px;">Show Recent
    </span>
    <span id="hide-recent-transaction">
        <img src="icon/icon-hide-recent.svg" alt="" style="padding-right: 5px;">Hide Recent
    </span>
    <div id="recent-transaction">
        <div id="recent-transaction-header">
            <h5>Recent Transaction</h5>
        </div>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1">Fian Asmadaya</h6>
                    <small>3 days ago</small>
                </div>
                <p class="mb-1">Pembelian jaket online</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1">List group item heading</h6>
                    <small>3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1">List group item heading</h6>
                    <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
            </a>
        </div>
    </div>
    <div id="mobile-menu-cover">

    </div>
</div>
<script>
    var i = 0;
    var namaAdmin = 'Aji Pramadana';
    var speed = 50;
    // ketika dokumen ready jalankan function ini
    function typeWriter() {
        if (i < namaAdmin.length) {
            document.getElementById('nama-admin').innerHTML += namaAdmin.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }

    }
    $('.panel-dashboard').ready(function() {
        $('#title-admin').css('width', '400px');
        typeWriter();
    });
    $('#show-recent-transaction').on('click', function() {
        $(this).css('display', 'none')
        $('#hide-recent-transaction').css('display', 'block');
        $('#recent-transaction').fadeIn(500)
    })
    $('#hide-recent-transaction').on('click', function() {
        $(this).css('display', 'none');
        $('#show-recent-transaction').css('display', 'block');
        $('#recent-transaction').fadeOut(500)
    })
</script>