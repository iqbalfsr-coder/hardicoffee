<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/hardi.css" />
    <title>Hardi Coffee</title>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-lQ8DoEYHYGCdQeM7"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="mt-1 mb-1">
            <center><img src="<?= base_url('assets/img/logo.png') ?>" width="170px" style="margin: 20px;">
                <?php foreach ($kat1 as $k) : ?>
                    <h4><?= $k['nama_kategori']; ?></h4>
                <?php endforeach; ?>
            </center>
        </div>
        <br>
        <div class="row">
            <?php foreach ($menu1 as $m) : ?>
                <div class="col-sm-6 mb-3" style="width: 195px;">
                    <div class="card mb-3 border-0">
                        <a href="" data-toggle="modal" data-target="#detailModal" id="gbr" data-nama="<?= $m['nama_menu']; ?>" data-harga="<?= $m['harga']; ?>" data-id="<?= $m['id_menu']; ?>" data-desk="<?= $m['desk']; ?>">
                            <img class="card-img-top mb-3 shop-item-image" src="<?= base_url('assets/img/menu/') . $m['image_menu']; ?>" alt=" Card image cap" class="img-thumbnail" id="gambar_menu+<?= $m['id_menu']; ?>" style="border-radius: 15px;">
                        </a>
                        <h6 class="card-title mb-3 shop-item-title"><?= $m['nama_menu']; ?></h6>
                        <h6 class="card-subtitle mb-3 shop-item-price" id="harga-menu" name="harga-menu">Rp. <?= number_format($m['harga']); ?></h6>
                        <button type="button" class="btn btn-dark btn-sm shop-item-button" style="border-radius: 15px;">Tambah</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <center>
            <?php foreach ($kat2 as $k) : ?>
                <h4><?= $k['nama_kategori']; ?></h4>
            <?php endforeach; ?>
        </center>
        <br>
        <div class="row">
            <?php foreach ($menu2 as $m) : ?>
                <div class="col-sm-6 mb-3" style="width: 195px;">
                    <div class="card mb-3 border-0">
                        <a href="" data-toggle="modal" data-target="#detailModal" id="gbr" data-nama="<?= $m['nama_menu']; ?>" data-harga="<?= $m['harga']; ?>" data-id="<?= $m['id_menu']; ?>" data-desk="<?= $m['desk']; ?>">
                            <img class="card-img-top mb-3 shop-item-image" src="<?= base_url('assets/img/menu/') . $m['image_menu']; ?>" alt=" Card image cap" class="img-thumbnail" id="gambar_menu+<?= $m['id_menu']; ?>" style="border-radius: 15px;">
                        </a>
                        <h6 class="card-title mb-3 shop-item-title"><?= $m['nama_menu']; ?></h6>
                        <h6 class="card-subtitle mb-3 shop-item-price" id="harga-menu" name="harga-menu">Rp. <?= number_format($m['harga']); ?></h6>
                        <button type="button" class="btn btn-dark btn-sm shop-item-button" style="border-radius: 15px;">Tambah</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <center>
            <?php foreach ($kat3 as $k) : ?>
                <h4><?= $k['nama_kategori']; ?></h4>
            <?php endforeach; ?>
        </center>
        <br>
        <div class="row">
            <?php foreach ($menu3 as $m) : ?>
                <div class="col-sm-6 mb-3" style="width: 195px;">
                    <div class="card mb-3 border-0">
                        <a href="" data-toggle="modal" data-target="#detailModal" id="gbr" data-nama="<?= $m['nama_menu']; ?>" data-harga="<?= $m['harga']; ?>" data-id="<?= $m['id_menu']; ?>" data-desk="<?= $m['desk']; ?>">
                            <img class="card-img-top mb-3 shop-item-image" src="<?= base_url('assets/img/menu/') . $m['image_menu']; ?>" alt=" Card image cap" class="img-thumbnail" id="gambar_menu+<?= $m['id_menu']; ?>" style="border-radius: 15px;">
                        </a>
                        <h6 class="card-title mb-3 shop-item-title"><?= $m['nama_menu']; ?></h6>
                        <h6 class="card-subtitle mb-3 shop-item-price" id="harga-menu" name="harga-menu">Rp. <?= number_format($m['harga']); ?></h6>
                        <button type="button" class="btn btn-dark btn-sm shop-item-button" style="border-radius: 15px;">Tambah</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
            <div class="modal-dialog modal-dialog-centered" role=" document">
                <div class="modal-content rounded">
                    <div class="modal-body">
                        <div class="menu-detail">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
            <div class="modal-dialog modal-dialog-centered " role=" document">
                <div class="modal-content rounded">
                    <div class="modal-body">
                        <section class="container content-section">
                            <div class="cart-items">
                            </div>
                            <div class="cart-total">
                                <span class="cart-total-title">Total</span>
                                <span class="cart-total-price">Rp. 0</span>
                            </div>
                            <button id="pay-button" type="button" class="btn btn-dark btn-sm btn-block mt-2" style="border-radius: 15px;">Pesan Sekarang</button>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" data-toggle="modal" data-target="#itemModal" class="btn btn-dark btn-sm btn-block" style="border-radius: 15px;">Pesan</button>

        <form id="payment-form" method="post" action="<?= site_url() ?>/snap/finish">
            <input type="hidden" name="result_type" id="result-type" value="">
            <input type="hidden" name="result_data" id="result-data" value="">
            <input type="text" name="titleres" id="titleres">
            <input type="text" name="priceres" id="priceres">
            <input type="text" name="qtyres" id="qtyres">
            <input type="text" name="totalres" id="totalres">
        </form>
        <script type="text/javascript">
            if (document.readyState == 'loading') {
                document.addEventListener('DOMContentLoaded', ready)
            } else {
                ready()
            }

            function ready() {
                var removeCartItemButtons = document.getElementsByClassName('btn-danger')
                for (var i = 0; i < removeCartItemButtons.length; i++) {
                    var button = removeCartItemButtons[i]
                    button.addEventListener('click', removeCartItem)
                }

                var quantityInputs = document.getElementsByClassName('cart-quantity-input')
                for (var i = 0; i < quantityInputs.length; i++) {
                    var input = quantityInputs[i]
                    input.addEventListener('change', quantityChanged)
                }

                var addToCartButtons = document.getElementsByClassName('shop-item-button')
                for (var i = 0; i < addToCartButtons.length; i++) {
                    var button = addToCartButtons[i]
                    button.addEventListener('click', addToCartClicked)
                }
            }

            function removeCartItem(event) {
                var buttonClicked = event.target
                buttonClicked.parentElement.parentElement.remove()
                updateCartTotal()
            }

            function quantityChanged(event) {
                var input = event.target
                if (isNaN(input.value) || input.value <= 0) {
                    input.value = 1
                }
                updateCartTotal()
            }

            function addToCartClicked(event) {
                var button = event.target
                var shopItem = button.parentElement.parentElement
                var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
                var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
                addItemToCart(title, price)
                updateCartTotal()
            }

            function addItemToCart(title, price) {
                var cartRow = document.createElement('div')
                cartRow.classList.add('cart-row')
                var cartItems = document.getElementsByClassName('cart-items')[0]
                var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
                for (var i = 0; i < cartItemNames.length; i++) {
                    if (cartItemNames[i].innerText == title) {
                        alert('This item is already added to the cart')
                        return
                    }
                }
                var cartRowContents =
                    `
    <div class="cart-item cart-column">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
        <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger"> 
                <i class="fas fa-trash"></i>
            </button>
        </div>`
                $('#titleres').val(title)
                $("#priceres").val(price)
                cartRow.innerHTML = cartRowContents
                cartItems.append(cartRow)
                cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
                cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
            }

            function updateCartTotal() {
                var cartItemContainer = document.getElementsByClassName('cart-items')[0]
                var cartRows = cartItemContainer.getElementsByClassName('cart-row')
                var total = 0
                for (var i = 0; i < cartRows.length; i++) {
                    var cartRow = cartRows[i]
                    var priceElement = cartRow.getElementsByClassName('cart-price')[0]
                    var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
                    var price = parseInt(priceElement.innerText.replace('Rp. ', ''))
                    var quantity = quantityElement.value
                    total = total + (price * quantity)
                }
                total = Math.round(total * 1000)
                document.getElementsByClassName('cart-total-price')[0].innerText = 'Rp. ' + total
                $("#qtyres").val(quantity);
                $("#totalres").val(total);
            }
        </script>
        <script type="text/javascript">
            $('#pay-button').click(function(event) {
                event.preventDefault();
                $(this).attr("disabled", "disabled")
                var titleres = $('#titleres').val();
                var qtyres = $("#qtyres").val();
                var totalres = $("#totalres").val();
                var priceress = $("#priceres").val();

                var price = parseFloat(priceress.replace('Rp. ', ''));
                var pricefix = price * 1000;
                console.log(title);
                console.log(titleres);
                console.log(pricefix);
                console.log(qtyres);
                console.log(totalres);
                $.ajax({
                    type: 'POST',
                    url: '<?= site_url() ?>/snap/token',
                    cache: false,
                    data: {
                        titleres: titleres,
                        pricefix: pricefix,
                        qtyres: qtyres,
                        totalres: totalres,
                    },
                    success: function(data) {
                        //location = data;

                        console.log('token = ' + data);

                        var resultType = document.getElementById('result-type');
                        var resultData = document.getElementById('result-data');

                        function changeResult(type, data) {
                            $("#result-type").val(type);
                            $("#result-data").val(JSON.stringify(data));
                            //resultType.innerHTML = type;
                            //resultData.innerHTML = JSON.stringify(data);
                        }

                        snap.pay(data, {

                            onSuccess: function(result) {
                                changeResult('success', result);
                                console.log(result.status_message);
                                console.log(result);
                                $("#payment-form").submit();
                            },
                            onPending: function(result) {
                                changeResult('pending', result);
                                console.log(result.status_message);
                                $("#payment-form").submit();
                            },
                            onError: function(result) {
                                changeResult('error', result);
                                console.log(result.status_message);
                                $("#payment-form").submit();
                            }
                        });
                    }
                });
            });
        </script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
        </script>

        <script>
            $(document).on("click", "#gbr", function() {
                let nama = $(this).data('nama');
                let desk = $(this).data('desk');
                let harga = $(this).data('harga');

                let id = $(this).data('id');
                var img = document.getElementById("gambar_menu+" + id);

                var formatter = new Intl.NumberFormat("id-ID", {
                    style: "currency",
                    currency: "IDR",
                    minimumFractionDigits: 0,
                });

                $('.menu-detail').html(`
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4 mb-2 mt-2">
                                    <img src="` + img.src + `" id="image_men" class="img-fluid" style="border-radius: 20px;">
                                </div>
                                <div class="col-md-8 mb-2">
                                    <h6 class="shop-item-title" id="nama_menu"></h6>
                                    <h6 class="shop-item-price" id="harga">` + formatter.format(harga) + `</h6>
                                    <h6 id="desk"></h6>
                                </div>
                            </div>
                            <button type="button" class="btn btn-dark btn-block btn-sm shop-item-button" style="border-radius: 15px;">Tambah Pesanan</button>
                        </div>
                `)
                $("#nama_menu").html(nama);
                $("#desk").html(desk);
            });
        </script>

</html>