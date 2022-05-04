<style>
/* Popup container - can be anything you want */
.body {
    text-decoration: none;
}
.popup {
    text-decoration: none;
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
	list-style: none;
    text-decoration: none;
    border-bottom:0px dotted;
    visibility: hidden;
    width: 140px;
    background-color: #808080;
    color: #808080;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: -655%;
    left: 50%;
    margin-left: -80px;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 0.3s;
    animation: fadeIn 0.3s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
</style>
<div class="me-2 d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="me-2 d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">AG45</span>
    </a> 
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-4 py-3 text-dark text-decoration-none" href="/">Главная</a>
        <a class="me-4 py-3 text-dark text-decoration-none" href="chat.php">Контакты</a>
        <a class="me-4 py-3 text-dark text-decoration-none" href="forum.php">Форум</a>
        <a class="me-4 py-3 text-dark text-decoration-none" href="projects.php">Проeкты</a>
    </nav>
    <?php 
        if ($_COOKIE['user'] == ''): ?>
            <a class="btn btn-outline-primary" href="login.php">Войти</a>
    <?php else: ?>
        <div class="popup" onclick="myFunction()">
            <a class="me-4 py-3 text-dark text-decoration-none"><?=$_COOKIE['user']?></a>      
            <ul class="popuptext" id="myPopup">
                <li class="nav-item text-decoration-none">
                    <a href="profile.php" data-toggle="tab" aria-expanded="active" class="" id="btn">
                        <i class="mr-1"></i>About Me
                    </a>
                </li>
                <li class="nav-item text-decoration-none">
                    <a href="settings.php" data-toggle="tab" aria-expanded="false" class="" id="btn">
                        <i class="mr-1"></i>Settings
                    </a>
                </li>
                <li class="text-decoration-none">
                    <a href="" data-toggle="tab" aria-expanded="false" class="" id="btn">
                    <i class="mr-1"></i>Article
                </li>
                <li class="text-decoration-none">
                    <a href="validation-form/exit.php" data-toggle="tab" aria-expanded="false" class="" id="btn">
                    <i class="mr-1"></i>Exit
                </li>
                <li hidden>
                    <a href="javascript: void(0);" data-toggle="tab" aria-expanded="false" class="" id="btn">
                    <i class="mr-1" hidden></i>Exit
                </li>

            </ul>
        </div>
        <script>
            // When the user clicks on div, open the popup
            function myFunction() {
                var popup = document.getElementById("myPopup");
                popup.classList.toggle("show");
            }
        </script>
    <?php endif; ?>
</div> 
