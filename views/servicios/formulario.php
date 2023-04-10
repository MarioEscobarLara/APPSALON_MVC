<div class="campo">
    <label for="nombre">Nombre: </label>
    <input 
        id="nombre"
        type="text" 
        placeholder="Nombre servicio" 
        name="nombre"
        value="<?php echo $servicio->nombre ?>"
        
    />
</div>
<div class="campo">
    <label for="precio">Precio: </label>
    <input 
        id="precio"
        type="number" 
        placeholder="Precio servicio" 
        name="precio"
        value="<?php echo $servicio->precio ?>" 
    />
</div>
