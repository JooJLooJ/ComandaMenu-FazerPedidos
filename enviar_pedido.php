<?php
session_start();

session_destroy();


echo "
<script>
    alert('Obrigado pelo pedido!');
    window.location.href = 'index.php';
</script>";