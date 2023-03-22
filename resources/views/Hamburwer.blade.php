<!doctype html>
<html lang="en">
  <head>
    <title>Hamburwesas 2.0</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <div class="row pt-3">
                <div class="col-12">
                    <h1 class="text-center">Hamburguesas 2.0</h1>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-1"></div>
                <div class="col-4">
                    <h4 class="text-center">
                        Hamburguesas buenas bonitas baratas y mejoradas
                    </h4>
                </div>
                <div class="col-2"></div>
                <div class="col-4">
                    <form class="" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="al22120173@utcj.edu.mx">
                        {{-- <input type="image" style="margin: 3px"src="https://www.paypal.com/en_US/i/btn/view_cart.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"> --}}
                        <input type="hidden" name="display" value="1">
                        <input type="hidden" name="page_style" value="Hamburguesas_2_0">
                        <button class="btn" type="submit">Ver carrito &#128722;</button>
                    </form>
                    <p class="">
                        Al momento de agregar un alimento en la opcion Servicio Domicilio se cobrará el 15%  extra sobre el precio del total por el servicio de envio
                    </p>
                </div>
            </div>
            <div class="row text-center pt-5">
                <div class="col-6 pb-5">
                    <img class="rounded mx-auto d-block" style="width: 200px; height: 200px;"
                    src="{{ asset('images/sensilla.jpg') }}" alt="Hamburger pic">
                    <h2>Hamburguesa sencilla</h2>
                    <p>Carne sirlon, queso amarillo, verduras, papas y soda ----- $60</p>
                    <form style="margin-top: 5px" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        {{-- <input  style="margin: 0px" type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"> --}}
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="al22120173@utcj.edu.mx">
                        <input type="hidden" name="item_name" value="Hamburguesa sencilla">
                        <input type="hidden" name="item_number" value="Sencilla">
                        <input type="hidden" name="amount" value="69">
                        <input type="hidden" name="page_style" value="Hamburguesas_2_0">
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="currency_code" value="MXN">
                        <button class="add-cart-btn" type="submit">Entrega Domicilio &#10133;</button>
                    </form>
                    <form style="margin-top: 5px" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        {{-- <input  style="margin: 0px" type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"> --}}
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="al22120173@utcj.edu.mx">
                        <input type="hidden" name="item_name" value="Hamburguesa sencilla">
                        <input type="hidden" name="item_number" value="Sencilla">
                        <input type="hidden" name="amount" value="60">
                        <input type="hidden" name="page_style" value="Hamburguesas_2_0">
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="currency_code" value="MXN">
                        <button class="add-cart-btn" type="submit">Recoger en Tienda &#10133;</button>
                    </form>
                </div>
                <div class="col-6 pb-5">
                    <img class="rounded mx-auto d-block" style="width: 200px; height: 200px;"
                    src="{{ asset('images/doble.jpg') }}" alt="Hamburger pic">
                    <h2>Hamburguesa doble</h2>
                    <p>Doble carne sirlon, queso amarillo, verduras, papas y soda ----- $68</p>
                    <form style="margin-top: 5px" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        {{-- <input  style="margin: 0px" type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"> --}}
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="al22120173@utcj.edu.mx">
                        <input type="hidden" name="item_name" value="Hamburguesa doble">
                        <input type="hidden" name="item_number" value="Doble">
                        <input type="hidden" name="amount" value="78.20">
                        <input type="hidden" name="page_style" value="Hamburguesas_2_0">
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="currency_code" value="MXN">
                        <button class="add-cart-btn" type="submit">Servicio Domicilio &#10133;</button>
                    </form>
                    <form style="margin-top: 5px" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        {{-- <input  style="margin: 0px" type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"> --}}
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="al22120173@utcj.edu.mx">
                        <input type="hidden" name="item_name" value="Hamburguesa doble">
                        <input type="hidden" name="item_number" value="Doble">
                        <input type="hidden" name="amount" value="68">
                        <input type="hidden" name="page_style" value="Hamburguesas_2_0">
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="currency_code" value="MXN">
                        <button class="add-cart-btn" type="submit">Recoger en tienda &#10133;</button>
                    </form>
                </div>
                <div class="col-6 pb-5">
                    <img class="rounded mx-auto d-block" style="width: 200px; height: 200px;"
                    src="{{ asset('images/beacon.jpg') }}" alt="Hamburger pic">
                    <h2>Hamburguesa bacon</h2>
                    <p>Carne sirlon, queso amarillo, tocino, verduras, papas y soda ----- $75</p>
                    <form style="margin-top: 5px" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        {{-- <input  style="margin: 0px" type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"> --}}
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="al22120173@utcj.edu.mx">
                        <input type="hidden" name="item_name" value="Hamburguesa bacon">
                        <input type="hidden" name="item_number" value="Bacon">
                        <input type="hidden" name="amount" value="86.25">
                        <input type="hidden" name="page_style" value="Hamburguesas_2_0">
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="currency_code" value="MXN">
                        <button class="add-cart-btn" type="submit">Servicio Domicilio &#10133;</button>
                    </form>
                    <form style="margin-top: 5px" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        {{-- <input  style="margin: 0px" type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"> --}}
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="al22120173@utcj.edu.mx">
                        <input type="hidden" name="item_name" value="Hamburguesa bacon">
                        <input type="hidden" name="item_number" value="Bacon">
                        <input type="hidden" name="amount" value="75">
                        <input type="hidden" name="page_style" value="Hamburguesas_2_0">
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="currency_code" value="MXN">
                        <button class="add-cart-btn" type="submit">Recoger en tienda &#10133;</button>
                    </form>
                </div>
                <div class="col-6 pb-5">
                    <img class="rounded mx-auto d-block" style="width: 200px; height: 200px;"
                    src="{{ asset('images/pina.jpg') }}" alt="Hamburger pic">
                    <h2>Hamburguesa hawaiana</h2>
                    <p>Carne sirlon, queso amarillo, piña, verduras, papas y soda ----- $70</p>
                    <form style="margin-top: 5px" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        {{-- <input  style="margin: 0px" type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"> --}}
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="al22120173@utcj.edu.mx">
                        <input type="hidden" name="item_name" value="Hamburguesa hawaiana">
                        <input type="hidden" name="item_number" value="Hawaiana">
                        <input type="hidden" name="amount" value="80.50">
                        <input type="hidden" name="page_style" value="Hamburguesas_2_0">
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="currency_code" value="MXN">
                        <button class="add-cart-btn" type="submit">Servicio Domicilio &#10133;</button>
                    </form>
                    <form style="margin-top: 5px" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        {{-- <input  style="margin: 0px" type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"> --}}
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="al22120173@utcj.edu.mx">
                        <input type="hidden" name="item_name" value="Hamburguesa hawaiana">
                        <input type="hidden" name="item_number" value="Hawaiana">
                        <input type="hidden" name="amount" value="70">
                        <input type="hidden" name="page_style" value="Hamburguesas_2_0">
                        <input type="hidden" name="no_note" value="1">
                        <input type="hidden" name="currency_code" value="MXN">
                        <button class="add-cart-btn" type="submit">Recoger en tienda &#10133;</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>