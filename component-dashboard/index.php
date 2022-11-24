<div>
    <div class="dashboard-main">
        <div class="side-left">
            <div class="icon-dashboard">
                <div class="header-dashboard">
                    <img  src="images/logo-login.png" alt="">
                    <h3>Tasnim Store</h3>
                </div>
            </div>
            <div class="nav-menu">
                <dl id="list">
                    <dt>
                       <img class="icon dashboard-icon" src="icon/dashboard.svg" alt="">
                       <a id="dashboard" href="#">Dashboard</a>
                    </dt>
                    <dt>
                        <img class="icon master-icon" src="icon/master.svg" alt="">
                        <a id="master" href="#">Master</a>
                    </dt>
                    <dt>
                        <img class="icon customer-icon" src="icon/customer.svg" alt="">
                        <a id="customer" href="#">Customer</a>
                    </dt>
                    <dt>
                        <img class="icon produk-icon" src="icon/product.svg" alt="">
                        <a id="produk" href="#">Produk</a>   
                    </dt>
                    <dt>
                        <img class="icon transaksi-icon" src="icon/transaksi.svg" alt="">
                        <a id="transaksi" href="#">Transaksi</a>
                    </dt>
                    <dt>
                        <img class="icon laporan-icon" src="icon/laporan.svg" alt="">
                        <a id="laporan" href="#">Laporan</a>
                    </dt>
                </dl>
            </div>
            <div class="footer-dashboard">
            </div>
        </div>
        <div class="dashboard-component">

        </div>
        <div class="side-right">

        </div>
    </div>
</div>

<script>
    let targetSelected;
    $("dl dt a").on('click',function(e){
        this.targetSelect   = e.target.id;
        idList              = $("dl dt a");
        imgList             = $("dl dt img");
        imgSelected         = this.targetSelect+"-icon";
        console.log(imgSelected);
        for (let index = 0; index < idList.length; index++) {
            if (idList[index].id === this.targetSelect) {
                $('#'+idList[index].id).css('color','blue');    
            }else{
                $('#'+idList[index].id).css('color','black');
            }
        }

        for (let index = 0; index < imgList.length; index++) {
            console.log(imgList[index].classList[1])
            if (imgList[index].classList[1] === imgSelected) {
                $('.'+imgList[index].classList[1]).css('backgroundColor','blue');  
            }else{
                $('.'+imgList[index].classList[1]).css('backgroundColor','white');  
            }
        }
    });
</script>