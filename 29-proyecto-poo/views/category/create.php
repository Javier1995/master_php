
<h1>Crear nueva categoria</h1>

<form action="<?=BASE_URL?>category/save" method="POST" required>
    <label for="name">Name</label>
    <input type="text" name="name" required autofocus>
    <input type="submit" value="Save">
    
</form>
