<html lang="EN">
<header>
    <link href="{{ asset('css/Welcome.css') }}" rel="stylesheet" type="text/css">
</header>

<body>
    <nav>
        <img src="{{asset('LOGO.png')}}" alt="">
        <button>
            Entdecken
        </button>
        <button>
            Konzept
        </button>
        <button>
            Über uns
        </button>
        {{--Pop Up Window for Login --}}
        <div class="openBtn">
            <button class="Login" onclick="openForm()"><strong>Login</strong></button>
        </div>
        <div class="loginPopup">
            <div class="formPopup" id="popupForm">
                <form action="/action_page.php" class="formContainer">
                    <h2>Please Log in</h2>
                    <label for="email">
                        <strong>E-mail</strong>
                    </label>
                    <input type="text" id="email" placeholder="Your Email" name="email" required>
                    <label for="psw">
                        <strong>Password</strong>
                    </label>
                    <input type="password" id="psw" placeholder="Your Password" name="psw" required>
                    <button type="submit" class="btn-login">Log in</button>
                    <button type="button" class="btn-cancel" onclick="closeForm()">Close</button>
                </form>
            </div>
        </div>
        <script>
            function openForm() {
                document.getElementById("popupForm").style.display = "block";
            }
            function closeForm() {
                document.getElementById("popupForm").style.display = "none";
            }
        </script>

        <button>
            Registrieren
        </button>
    </nav>

    <div class="recycler_container">
        <div class="recycler_background">
            <div class="recycler_textholder">
            {{--        Daten über Wohnung müssen aus Datenbank gelesen werden--}}
{{--                <h1>--}}
{{--                    <?php--}}
{{--                        $room_title = App\Models\Room::where('room_id', 1)->value('room_title');--}}
{{--                        echo $room_title;--}}
{{--                    ?>--}}
{{--                </h1>--}}

{{--                <p>--}}
{{--                    Warmmiete:--}}
{{--                    <?php--}}
{{--                        $room_price = App\Models\Room::where('room_id', 1)->value('room_price');--}}
{{--                        echo $room_price, "€";--}}
{{--                    ?>--}}
{{--                </p>--}}

{{--                <p>--}}
{{--                    Wohnraum:--}}
{{--                    <?php--}}
{{--                        $room_size = App\Models\Room::where('room_id', 1)->value('room_size');--}}
{{--                        echo $room_size, " qm";--}}
{{--                    ?>--}}
{{--                </p>--}}

{{--                <p>--}}
{{--                    Straße:--}}
{{--                    <?php--}}
{{--                    $room_street = App\Models\Room::where('room_id', 1)->value('room_street');--}}
{{--                    $room_number = App\Models\Room::where('room_id', 1)->value('room_number');--}}
{{--                    echo $room_street, " ", $room_number;--}}
{{--                    ?>--}}
{{--                </p>--}}

            </div>
        </div>
        <img class="recycler_img" src="{{asset('img.png')}}" alt="">
    </div>
</body>
</html>
