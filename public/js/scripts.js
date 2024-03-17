function togglePassword(id, element) {
    const password = document.getElementById(id);
    if (password.type === 'password') {
        password.type = 'text';
        element.innerHTML = '<i class="fa fa-eye"></i>';
    } else {
        password.type = 'password';
        element.innerHTML = '<i class="fa fa-eye-slash"></i>';
    }
}