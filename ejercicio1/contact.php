<!-- Contact -->
<section id="contact" class="four">
    <div class="container">

        <header>
            <h2>Contact</h2>
        </header>

        <p>Elementum sem parturient nulla quam placerat viverra
            mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
            donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
            orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

        <form method="post" action="#">
            <div class="row">
                <div class="col-6 col-12-mobile">
                    <input type="text" name="name" placeholder="Name" id="txtNombre" />
                </div>
                <div class="col-6 col-12-mobile">
                    <input type="text" name="email" placeholder="Email" id="txtEmail" />
                </div>
                <div class="col-12">
                    <textarea name="message" placeholder="Message" id="txtMensaje"></textarea>
                </div>
                <div class="col-12">
                    <button type="button" id="btnSubmit">Send</button>
                </div>
            </div>
        </form>

    </div>
</section>

<script>
let btnSubmit = window.document.getElementById("btnSubmit");
btnSubmit.addEventListener('click', () => {
    let nombre = window.document.getElementById("txtNombre").value;
    let email = window.document.getElementById("txtEmail").value;
    let mensaje = window.document.getElementById("txtMensaje").value;

    fetch('email.php?nombre='+nombre+'&email='+email+'&mensaje='+mensaje, {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        }
    }).then(e => {
		// alert(e);
	});
});
</script>