function handleSubmit(event) {
    event.preventDefault(); // Evita el envío del formulario
    document.getElementById('login-container').innerHTML = '<div class="message">Ha sido víctima de ingeniería social.</div>';
}
